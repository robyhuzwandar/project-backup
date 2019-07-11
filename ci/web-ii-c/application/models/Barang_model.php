<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	// select seluruh data dari table
	public function get_all() 
	{
		return $this->db->get('barang')->result();
	}

	public function get_id()
	{
		# code...
	}

	// untuk tambah data ke database
	public function create($data)
	{
		return $this->db->insert('barang', $data);
	}

	public function update()
	{
		# code...
	}

	public function delete()
	{
		# code...
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */
