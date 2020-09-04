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