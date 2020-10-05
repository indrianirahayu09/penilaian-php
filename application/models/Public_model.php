<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function get_admin($id_admin)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_guru($id_guru)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->join('rombel', 'guru.id_guru = rombel.id_guru', 'left');
		$this->db->where('guru.id_guru', $id_guru);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_siswa($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel', 'left');
		$this->db->where('siswa.id_siswa', $id_siswa);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_wali($id_wali)
	{
		$this->db->select('*');
		$this->db->from('wali');
		$this->db->join('siswa', 'wali.id_siswa = siswa.id_siswa', 'left');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel', 'left');
		$this->db->where('wali.id_wali', $id_wali);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_jadwal($id_guru)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('rombel', 'jadwal.id_rombel = rombel.id_rombel', 'left');
		$this->db->join('mapel', 'jadwal.id_mapel = mapel.id_mapel', 'left');
		$this->db->where('jadwal.id_guru', $id_guru);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_profil_sekolah($id=1)
	{
		$this->db->select('*');
		$this->db->from('profil_sekolah');
		$this->db->where('id_profil_sekolah', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_semester($id=1)
	{
		$this->db->select('*');
		$this->db->from('semester');
		$this->db->where('id_semester', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function totguru()
	{
		$this->db->select('*');
		$this->db->from('guru');
		$query = $this->db->get();
		return $query->num_rows();
	}	

	public function totsiswa()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function totkelas()
	{
		$this->db->select('*');
		$this->db->from('rombel');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function totmapel()
	{
		$this->db->select('*');
		$this->db->from('mapel');
		$query = $this->db->get();
		return $query->num_rows();
	}


}

/* End of file Public_model.php */
/* Location: ./application/models/Public_model.php */