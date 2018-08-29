<?php  
defined("BASEPATH") OR exit("no direct access to this source");

class Action_model extends CI_Model
{
   public function __construct()
   {
   	parent::__construct();
   	$this->db = $this->load->database("default", TRUE);
   }

   public function get_array_column($data){
   	return '`'.implode('`,`', array_keys($data)) . '`';
   }

   public function get_array_field($data){
   	return "'".implode("','", array_values($data)) . "'";
   }

   public function add_data_mahasiswa($data){
   	$column = $this->get_array_column($data);
   	$field = $this->get_array_field($data);
   	$this->db->query("INSERT INTO mahasiswa ($column) VALUES ($field)");
   }

   public function show_all(){
   	return $this->db->query("SELECT * FROM mahasiswa");
   }

   public function delete($nim){
      return $this->db->query("DELETE FROM mahasiswa WHERE nim = '$nim'");
   }

   public function update($nim, $new_data){
      return $this->db->update("mahasiswa", $new_data, ["nim" => $nim]);
   }

   public function get($nim){
      return $this->db->get_where("mahasiswa", ["nim" => $nim])->row_array();
   }
}
?>