<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_nohp($telepon)
	{

		$this->db->select('*');
		$this->db->from('wali');
		$this->db->where('telepon_wali', $telepon);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function detail($id_wali)
	{
		$this->db->select('*');
		$this->db->from('wali');
		$this->db->join('siswa', 'siswa.id_siswa = wali.id_siswa', 'left');
		$this->db->join('rombel', 'rombel.id_rombel = siswa.id_rombel', 'left');
		$this->db->where('wali.id_wali', $id_wali);
		$query = $this->db->get();
		return $query->row();
	}

	public function login($telepon,$enpass)
	{
		$telepon = $this->db->escape_str($telepon);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('wali');
		$this->db->where(array(
			'telepon_wali' => $telepon,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file Wali_model.php */
/* Location: ./application/models/Wali_model.php */