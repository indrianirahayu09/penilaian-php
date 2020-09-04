<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->order_by('id_guru', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	

	public function detail($id_guru)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('guru', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->update('guru', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->delete('guru');
	}

	public function cek_nip($nip)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('nip', $nip);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($nip,$enpass)
	{
		$nip = $this->db->escape_str($nip);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where(array(
			'nip' => $nip,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */