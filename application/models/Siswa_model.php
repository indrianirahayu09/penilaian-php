<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel', 'left');
		$this->db->order_by('id_siswa', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function cek_nisn($nisn)
	{

		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('nisn', $nisn);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($nisn,$enpass)
	{
		$nisn = $this->db->escape_str($nisn);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where(array(
			'nisn' => $nisn,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}	



	public function rombel($id_rombel)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_rombel', $id_rombel);
		$query = $this->db->get();
		return $query->result();
	}

	public function jml_siswa($id_rombel)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_rombel', $id_rombel);
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function list_wali()
	{
		$this->db->select('*');
		$this->db->from('wali');
		$this->db->join('siswa', 'wali.id_siswa = siswa.id_siswa', 'left');
		$this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas', 'left');
		$this->db->join('rombel', 'siswa.id_rombel = rombel.id_rombel', 'left');
		$this->db->join('wali', 'siswa.id_siswa = wali.id_siswa', 'left');
		$this->db->where('siswa.id_siswa', $id_siswa);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('siswa', $data);
	}

	public function edit_wali($data2)
	{
		$this->db->where('id_siswa', $data2['id_siswa']);
		$this->db->update('wali', $data2);
	}

	public function delete($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->delete('siswa');
	}

	public function delete_w($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->delete('wali');
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */