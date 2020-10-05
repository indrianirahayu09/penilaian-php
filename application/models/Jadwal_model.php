<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('rombel', 'jadwal.id_rombel = rombel.id_rombel', 'left');
		$this->db->join('mapel', 'jadwal.id_mapel = mapel.id_mapel', 'left');
		$this->db->join('guru', 'jadwal.id_guru = guru.id_guru', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_mapel_guru($id_guru)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('rombel', 'jadwal.id_rombel = rombel.id_rombel', 'left');
		$this->db->join('mapel', 'jadwal.id_mapel = mapel.id_mapel', 'left');
		$this->db->join('guru', 'jadwal.id_guru = guru.id_guru', 'left');
		$this->db->where('jadwal.id_guru', $id_guru);
		$query = $this->db->get();
		return $query->result();
	}

	public function jml_mapel_guru($id_guru)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function mapel()
	{
		$this->db->select('*');
		$this->db->from('mapel');
		$query = $this->db->get();
		return $query->result();
	}

	public function rombel()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$query = $this->db->get();
		return $query->result();
	}

	public function guru()
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('jenis_ptk', 'Guru Mapel');
		$query = $this->db->get();
		return $query->result();
	}

	public function add($data)
	{
		$this->db->insert('jadwal', $data);
	}

	public function detail($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('rombel', 'jadwal.id_rombel = rombel.id_rombel', 'left');
		$this->db->join('mapel', 'jadwal.id_mapel = mapel.id_mapel', 'left');
		$this->db->join('guru', 'jadwal.id_guru = guru.id_guru', 'left');
		$this->db->where('jadwal.id_jadwal', $id_jadwal);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->update('jadwal', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->delete('jadwal');
	}

}

/* End of file Jadwal_model.php */
/* Location: ./application/models/Jadwal_model.php */