<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->join('kelompok_mapel', 'mapel.id_kelompok_mapel = kelompok_mapel.id_kelompok_mapel', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function list_kelompok()
	{
		$this->db->select('*');
		$this->db->from('kelompok_mapel');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_mapel)
	{
		$this->db->select('*');
		$this->db->from('mapel');
		$this->db->join('kelompok_mapel', 'mapel.id_kelompok_mapel = kelompok_mapel.id_kelompok_mapel', 'left');
		$this->db->where('id_mapel', $id_mapel);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('mapel', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_mapel', $data['id_mapel']);
		$this->db->update('mapel', $data);
	}

	public function delete  ($data)
	{
		$this->db->where('id_mapel', $data['id_mapel']);
		$this->db->delete  ('mapel', $data);
	}

	public function list_kkm()
	{
		$this->db->select('*');
		$this->db->from('kkm');
		$this->db->join('mapel', 'kkm.id_mapel = mapel.id_mapel', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_kkm($id_kkm)
	{
		$this->db->select('*');
		$this->db->from('kkm');
		$this->db->join('mapel', 'kkm.id_mapel = mapel.id_mapel', 'left');
		$this->db->where('id_kkm', $id_kkm);
		$query = $this->db->get();
		return $query->row();
	}

	public function detail_kkm2($id_mapel)
	{
		$this->db->select('*');
		$this->db->from('kkm');
		$this->db->where('kkm.id_mapel', $id_mapel);
		$query = $this->db->get();
		return $query->row();
	}

	public function add_kkm($data)
	{
		$this->db->insert('kkm', $data);
	}

	public function edit_kkm($data)
	{
		$this->db->where('id_kkm', $data['id_kkm']);
		$this->db->update('kkm', $data);
	}

	public function delete_kkm($data)
	{
		$this->db->where('id_kkm', $data['id_kkm']);
		$this->db->delete('kkm', $data);
	}

}