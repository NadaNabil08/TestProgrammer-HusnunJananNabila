<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	

	public function index()
	{	
		
		$this->load->model('Produk_model');
		$data['produkutama'] = $this->Produk_model->getModel();
		$data['content'] = 'produk/index';
		$this->load->view('templates/template', $data);

	}
	public function tambah()
	{	
		$data['content']='produk/tambah';
		$this->load->view('templates/template', $data);
	}
	public function tambah1()
	{	
		$data['content']='produk/tambah1';
		$this->load->view('templates/template', $data);
	}
	public function add()
	{
		if( $this->input->post() ) {
			$produk['Nama'] = $this->input->post('Nama');
			$produk['Gambar'] = $this->input->post('gambar');

			$this->load->model('Produk_model');

			if( $this->Produk_model->tambahProduk($produk) > 0 ) {
				echo "<script>
					alert('Produk berhasil di tambah');
					</script>
				";
			}
		redirect('produk');
		$this->load->view('templates/template', $data);
		}
	}
	public function add1()
	{
		if( $this->input->post() ) {
			$produk['nama'] = $this->input->post('nama');
			$produk['kategori'] = $this->input->post('kategori');
			$produk['harga'] = $this->input->post('harga');
			$produk['gambar'] = $this->input->post('gambar');

			$this->load->model('Produk_model');

			if( $this->Produk_model->tambahProduk1($produk) > 0 ) {
				echo "<script>
					alert('Produk berhasil di tambah');
					</script>
				";
			}
		redirect('produk');
		$this->load->view('templates/template', $data);
		}
	}
}
	

?>