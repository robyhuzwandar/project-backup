<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Admin Homepage';
		$data['content'] = 'content_admin/homepage';
		$this->load->view('v_admin', $data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */