<?php  
class Login extends CI_Controller 
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model("Login_model");
   }

   public function index(){
      $this->auth();
   }

   public function auth(){
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules("nip", "NIP", "required");
      $this->form_validation->set_rules("password", "Password", "required");

      if($_POST){
         $username = htmlspecialchars($this->input->post("nip", TRUE), ENT_QUOTES);
         $password = htmlspecialchars($this->input->post("password", TRUE), ENT_QUOTES);

         $cek_dosen = $this->Login_model->auth_dosen($username, $password);
         
         if ( !$this->form_validation->run() ){
            $this->load->view("login_view");
            return;
         }  else {
            $data = $cek_dosen->result_array();
            if($cek_dosen->num_rows() > 0){ // jika login sebagai dosen
               $this->session->set_userdata('login', TRUE);

               if($data[0]['level'] === '1'){
                  $this->session->set_userdata('akses', 1);
                  $this->session->set_userdata('sess_id', $data[0]['nip']);
                  $this->session->set_userdata('sess_nama', $data[0]['nama']);

                  redirect('Pages');
               } else { 
                  $this->session->set_userdata('akses', 2);
                  $this->session->set_userdata('sess_id', $data[0]['nip']);
                  $this->session->set_userdata('sess_nama', $data[0]['nama']);

                  redirect('Pages');
               }
            } else {
               $cek_mhs = $this->Login_model->auth_mahasiswa($username, $password);

               if($cek_mhs->num_rows() > 0){
                  $this->session->set_userdata('login', TRUE);

                  $data = $cek_mhs->row_array();
                  $this->session->set_userdata('akses', 3);
                  $this->session->set_userdata('sess_id', $data['nim']);
                  $this->session->set_userdata('sess_nama', $data['nama']);
                  // echo "<pre>";
                  // print_r($data);
                  // die();
                  redirect('Pages');
               }else{  // jika username dan password tidak ditemukan atau salah
                  $url=base_url();
                  echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                  redirect($url);
               } 
            }
         }
      }
      $this->load->view('login_view');
   }

   public function logout(){
      $this->load->helper('cookie');
      $this->session->sess_destroy();
      delete_cookie("visited");
      redirect(base_url());
   }
}
?>