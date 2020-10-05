<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list($id=1)
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id_pengumuman', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->update('pengumuman', $data);
	}

}

/* End of file Pengumuman_model.php */
/* Location: ./application/models/Pengumuman_model.php */