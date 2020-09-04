<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function profil_sekolah($id=1)
	{
		$this->db->select('*');
		$this->db->from('profil_sekolah');
		$this->db->where('id_profil_sekolah', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_profil_sekolah($data)
	{
		$this->db->where('id_profil_sekolah', $data['id_profil_sekolah']);
		$this->db->update('profil_sekolah', $data);
	}

	public function tahun_akademik($id=1)
	{
		$this->db->select('*');
		$this->db->from('semester');
		$this->db->where('id_semester', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_tahun_akademik($data)
	{
		$this->db->where('id_semester', $data['id_semester']);
		$this->db->update('semester', $data);
	}

	public function update_profil($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('admin', $data);
	}

}

/* End of file Pengatuan_model.php */
/* Location: ./application/models/staff/Pengatuan_model.php */