<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function index()
	{
		echo "hai rom";
	}

	public function data($nama='', $alamat = '', $prodi='')
	{	
		echo "Hai $nama, alamat saya $alamat prodi $prodi";
		
	}

	public function tampil()
	{
		$data['nama'] = 'Romi Choirudin';
		$data['alamat'] = 'Mataram NTB';
		$data['prodi'] = 'S1 Teknik Informatika';
		$data['matakuliah'] = 'Pemrograman Web II';

		$this->load->view('v_biodata', $data);
	}
}
