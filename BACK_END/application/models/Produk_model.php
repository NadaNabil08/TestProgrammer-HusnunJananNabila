<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function getModel()
	{
		return $this->db->get('produkutama')->result_array();
	}
	public function tambahProduk($produk){
		$this->db->insert('produkutama', $produk);
		return $this->db->affected_rows();
	}
	public function tambahProduk1($produk){
		$this->db->insert('produksemua', $produk);
		return $this->db->affected_rows();
	}
	
	
}

?>