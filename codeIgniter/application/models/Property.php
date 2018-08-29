<?php  

class Property extends CI_Model
{
   public function __construct()
   {
		parent::__construct();
   	$this->db = $this->load->database('default', TRUE);
   }

   public function get($id){
   	$result = $this->db->get_where("names", ["id" => $id]);
   	return $result->row_array();
   }

   public function update($id, $new_data){
   	$where["id"] = $id;
   	$this->db->update("names", $new_data, $where);
   }

   public function all(){
   	$result =  $this->db->get("names");
   	return $result->result_array();
   }

   public function get_version(){
   	return $this->db->query("SELECT VERSION()");
   }
}
?>