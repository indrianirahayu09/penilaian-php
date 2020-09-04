<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapot_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_nilai($data)
	{
		$this->db->insert('nilai', $data);
		return true;
	}

	public function get_grade($id_mapel,$predikat)
	{
		$this->db->select('*');
		$this->db->from('deskripsi_pth');
		$this->db->where('id_mapel', $id_mapel);
		$this->db->where('predikat', $predikat);
		$query = $this->db->get();
		return $query->row();
	}

	public function jml_grade($id_mapel,$predikat)
	{
		$this->db->select('*');
		$this->db->from('deskripsi_pth');
		$this->db->where('id_mapel', $id_mapel);
		$this->db->where('predikat', $predikat);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_grade_ktr($id_mapel,$predikat)
	{
		$this->db->select('*');
		$this->db->from('deskripsi_ktr');
		$this->db->where('id_mapel', $id_mapel);
		$this->db->where('predikat', $predikat);
		$query = $this->db->get();
		return $query->row();
	}

	public function jml_grade_ktr($id_mapel,$predikat)
	{
		$this->db->select('*');
		$this->db->from('deskripsi_ktr');
		$this->db->where('id_mapel', $id_mapel);
		$this->db->where('predikat', $predikat);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function add($data)
	{
		$this->db->insert('rapot', $data);
		return true;
	}

}

/* End of file Rapot_model.php */
/* Location: ./application/models/Rapot_model.php */