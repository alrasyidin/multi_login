<?php  
defined('BASEPATH') OR exit("No direct script access allowed");

class Properties extends CI_Controller
{
	public function index()
	{
		$data["username"] = "Hamstergeek";
		$data["genders"]   = ["boy", "girl", "unisex"];
		$data["names"]    = $this->Property->all();
		$data["selected_filter"] = $this->session->selected_filter;
		$this->load->view("properties/index", $data);
	}

   public function show($id)
   {
   	$data["id"] = $id;
   	$data["name"] = $this->Property->get();
   	$version = $this->Property->get_version();
   	$data["version"] = $version->conn_id->server_info;
      $this->load->view("properties/show", $data);
   }

   public function edit($id){
   	$this->load->helper('form');
   	$this->load->library('form_validation');

   	$this->form_validation->set_rules("name", "Name", "required");
   	$this->form_validation->set_rules("meaning", "Meaning", "required");
   	$this->form_validation->set_rules("gender", "Gender", "required");

   	if($_POST){
   		$photo = FALSE;
   		if($_FILES){
   			$photo = $this->do_upload();
   		}

   		$name = $this->input->post("name");
   		$meaning = $this->input->post("meaning");
   		$gender = $this->input->post("gender");
   		if($this->form_validation->run()){
	   		$this->Property->update($id, ["name" => $name, "meaning" => $meaning, "gender" => $gender, "photo" => $photo["file_name"]]);
	   		redirect("properties/index");
   		}else{
		   	$data["names"]["name"] = $this->input->post('name');
		   	$data["names"]["meaning"] = $this->input->post('meaning');
		   	$data["names"]["gender"] = $this->input->post('gender');
		   	$this->load->view("properties/edit", $data);
   			return;
   		}
   	}
   	$data["names"] = $this->Property->get($id);
   	$this->load->view("properties/edit", $data);
   }

   public function set_filter(){
   	$this->session->set_userdata(["selected_filter" => $this->input->get("filter")]);
   	redirect("properties/index");
   }

   public function do_upload(){
   	$config['upload_path'] = './upload/';
   	$config['allowed_types'] = 'gif|jpg|png|jpeg';
   	$config['remove_space'] = TRUE;
   	$config['encrypt_name'] = TRUE;


   	$this->load->library('upload', $config);
   	$this->upload->do_upload('photo_image');
   	$data = $this->upload->data();
   	return $data;
   }
}
?>