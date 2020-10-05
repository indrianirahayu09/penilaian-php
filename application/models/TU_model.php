<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TU_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_admin', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	

	public function detail($id_admin)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('admin', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('admin', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->delete('admin');
	}

	public function cek_nip($nip)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('nip', $nip);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($nip,$enpass)
	{
		$nip = $this->db->escape_str($nip);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where(array(
			'nip' => $nip,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file TU_model.php */
/* Location: ./application/models/TU_model.php */