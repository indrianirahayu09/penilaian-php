<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok_Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelompok_mapel_model', 'mapel');
		$this->auth_a->cek();
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Kelompok Mata Pelajaran | Apps Sekolah',
			'data'	=> $this->mapel->list(),
			'content'	=> 'admin/kelompok_mapel/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function add()
	{	
		$valid = $this->form_validation;

		$valid->set_rules('kode','<i class="fa fa-info-circle"></i> Kelompok mapel','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'kelompok' => $i->post('kode'),
				'nama_kelompok' => $i->post('nama')
			);
			$this->mapel->add($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil ditambahkan!');
			redirect(base_url('admin/kelompok_mapel'), 'refresh');
		}

		$data = array(
			'title'	=> 'Tambah Kelompok Mata Pelajaran | Apps Sekolah',
			'content'	=> 'admin/kelompok_mapel/v_add_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit($id_kelompok_mapel)
	{	

		$detail = $this->mapel->detail($id_kelompok_mapel);

		$valid = $this->form_validation;

		$valid->set_rules('kode','<i class="fa fa-info-circle"></i> Kelompok mapel','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_kelompok_mapel' => $id_kelompok_mapel,
				'kelompok' => $i->post('kode'),
				'nama_kelompok' => $i->post('nama')
			);
			$this->mapel->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil diubah!');
			redirect(base_url('admin/kelompok_mapel'), 'refresh');
		}

		$data = array(
			'title'	=> 'Ubah Kelompok Mata Pelajaran | Apps Sekolah',
			'detail'	=> $detail,
			'content'	=> 'admin/kelompok_mapel/v_edit_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function delete($id_kelompok_mapel)
	{
		$data = array(
			'id_kelompok_mapel'	=> $id_kelompok_mapel
		);
		$this->mapel->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil dihapus!');
		redirect(base_url('admin/kelompok_mapel'), 'refresh');
	}
}

/* End of file Kelompok_Mapel.php */
/* Location: ./application/controllers/admin/kelompok_Mapel.php */