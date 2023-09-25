<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	
	public function getLogin()
	{
	return $this->db->get('produklogin')->result_array();
	}
	public function insertlogin($tlogin){
		$this->db->insert('produklogin', $produklogin);
		return $this->db->affected_rows();
	}
	
}	

 ?>