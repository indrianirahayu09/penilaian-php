<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$this->db->join('jurusan', 'rombel.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('guru', 'rombel.id_guru = guru.id_guru', 'left');
		$query = $this->db->get();
		return $query->result(); 
	}

	public function list_kelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$query = $this->db->get();
		return $query->result(); 
	}

	public function jurusan()
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_rombel)
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$this->db->join('jurusan', 'rombel.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('guru', 'rombel.id_guru = guru.id_guru', 'left');
		$this->db->where('id_rombel', $id_rombel);
		$query = $this->db->get();
		return $query->row(); 
	}

	public function add($data)
	{
		$this->db->insert('rombel', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_rombel', $data['id_rombel']);
		$this->db->update('rombel', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_rombel', $data['id_rombel']);
		$this->db->delete('rombel');
	}

}