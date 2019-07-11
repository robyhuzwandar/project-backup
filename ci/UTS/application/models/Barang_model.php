<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	// select seluruh data dari table
	public function get_all() 
	{
		return $this->db->get('barang')->result();
	}


	public function create($data)
	{
		return $this->db->insert('barang', $data);
	}
	
}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */
