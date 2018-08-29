<?php  
defined('BASEPATH') OR exit('no direct script access allowed');

class Pages extends CI_Controller	 
{
   public function __construct()
   {
	   parent::__construct();
	   $this->load->model("Action_model");
	   if(!$this->session->login){
	   		redirect(base_url());
	   }

	   $this->load->helper('form');
	   $this->load->library('form_validation');
   }

    public function index(){
   		$this->load->view("page/v_dashboard");
    }

    public function data_mahasiswa(){
	   	// if ($this->session->akses === 1 || $this->session->akses === 2 ) {
	   		$hasil = $this->Action_model->show_all()->result_array();

		   	$this->load->view("page/v_mahasiswa", ['hasil' => $hasil]);
	   	// } else {
	   	// 	$this->load->view("page/v_dashboard");
	   	// }
   }

	public function add_data(){
		if( $this->session->akses === 1 || $this->session->akses === 2 ){

			$this->form_validation->set_rules("nama", "Nama", "required");
		   	$this->form_validation->set_rules("prodi", "Prodi", "required");
		   	$this->form_validation->set_rules("kelas", "Kelas", "required");

			// $hasil = $action_model->add_data_mahasiswa();
			if($_POST){
				$name = $this->input->post('nama');
				$prodi = $this->input->post('prodi');
				$kelas = $this->input->post('kelas');

				if( !$this->form_validation->run() ){
				   	$this->load->view("page/v_add_data");
		   			return;
				}else{
					$this->Action_model->add_data_mahasiswa(['nama' => $name, 'pass' => md5('12345678'), 'prodi' => $prodi,'kelas' => $kelas]);
					redirect('pages/data_mahasiswa');
				}
			}

			$this->load->view("page/v_add_data");
		}
	}

	public function delete($nim){
		if( $this->session->akses === 1 ){
			$this->Action_model->delete($nim);
			redirect('Pages/data_mahasiswa');
		}
	}

	public function update($nim){
		if( $this->session->akses === 1 ){
			$this->form_validation->set_rules("nama", "Nama", "required");
		   	$this->form_validation->set_rules("kelas", "Kelas", "required");
		   	$this->form_validation->set_rules("prodi", "Prodi", "required");

		   	if($_POST){
		   		$nama = $this->input->post("nama");
		   		$kelas = $this->input->post("kelas");
		   		$prodi = $this->input->post("prodi");

		   		if($this->form_validation->run()){
		   			$this->Action_model->update($nim, ["nama" => $nama, "kelas" => $kelas, "prodi" => $prodi]);
		   			redirect("Pages/data_mahasiswa");
		   		} else {
		   			$data["data"]["nim"] = $this->input->post('npm');
		   			$data["data"]["nama"] = $this->input->post('nama');
				   	$data["data"]["kelas"] = $this->input->post('kelas');
				   	$data["data"]["prodi"] = $this->input->post('prodi');
		   			$this->load->view("page/v_update", $data);
		   			return;
		   		}
		   	}
			$data["data"] = $this->Action_model->get($nim);
			$this->load->view("page/v_update", $data);
		}
	}
}
?>