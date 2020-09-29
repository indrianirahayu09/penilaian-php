<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_Mapel_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('kelompok_mapel');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_kelompok_mapel)
	{
		$this->db->select('*');
		$this->db->from('kelompok_mapel');
		$this->db->where('id_kelompok_mapel', $id_kelompok_mapel);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('kelompok_mapel', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_kelompok_mapel', $data['id_kelompok_mapel']);
		$this->db->update('kelompok_mapel', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kelompok_mapel', $data['id_kelompok_mapel']);
		$this->db->delete  ('kelompok_mapel', $data);
	}

}