<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function index($nama = '')
	{
		echo "hy $nama";
	}

	public function tampil()
	{
		$data['nama'] = "Roby Huzwandar Al Kuthiy";
		$this->load->view('v_biodata', $data);
	}
}
