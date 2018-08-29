<?php 

class Login_model extends CI_Model
{
   public function __construct()
   {
   	parent::__construct();
   	$this->db = $this->load->database("default", TRUE);
   }

   public function auth_dosen($nip, $password){
   	return $this->db->query("SELECT * FROM dosen WHERE nip='$nip' AND pass=MD5('$password') LIMIT 1");
   }

   public function auth_mahasiswa($username, $password){
   	return $this->db->query("SELECT nim, nama, prodi, kelas FROM mahasiswa WHERE nim='$username' AND pass='$password' LIMIT 1");
   }
}

?>