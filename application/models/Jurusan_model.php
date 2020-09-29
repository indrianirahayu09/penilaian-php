<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->order_by('id_jurusan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	

	public function detail($id_jurusan)
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->where('id_jurusan', $id_jurusan);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('jurusan', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_jurusan', $data['id_jurusan']);
		$this->db->update('jurusan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_jurusan', $data['id_jurusan']);
		$this->db->delete('jurusan');
	}

	public function cek_nip($nip)
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->where('nip', $nip);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($nip,$enpass)
	{
		$nip = $this->db->escape_str($nip);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->where(array(
			'nip' => $nip,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}	

}

/* End of file jurusan_model.php */
/* Location: ./application/models/jurusan_model.php */