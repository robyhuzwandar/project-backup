<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//memperkenalkan ke controller
		$this->load->model('Barang_model');
		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = 'Barang';
		$data['content'] = 'content_admin/v_barang';
		$data['isi_tabel'] = $this->Barang_model->get_all();
		$this->load->view('v_admin', $data);
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Barang';
		$data['content'] = 'content_admin/v_barang_add';		
		$this->load->view('v_admin', $data);
	}

	public function store()
	{
		$data = array(
			'nama_barang' => $this->input->post('nama_barang'),
			'deskripsi' => $this->input->post('deskripsi'),
			'kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'status' => $this->input->post('status'),
			'image' => 'image.jpg',
			);
		$this->Barang_model->create($data);

		redirect('barang','refresh');
	}

	public function tes()
	{
		$data = $this->Barang_model->get_all();
		print_r($data) ;
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */