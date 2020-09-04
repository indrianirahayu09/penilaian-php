<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mapel_model', 'mapel');
		$this->auth_a->cek();
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Mata Pelajaran | Apps Sekolah',
			'data'	=> $this->mapel->list(),
			'content'	=> 'admin/mapel/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{	
		$valid = $this->form_validation;

		$valid->set_rules('id_kelompok_mapel','<i class="fa fa-info-circle"></i> Kelompok mapel','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_kelompok_mapel' => $i->post('id_kelompok_mapel'),
				'nama_mapel' => $i->post('nama_mapel')
			);
			$this->mapel->add($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil ditambahkan!');
			redirect(base_url('admin/mapel'), 'refresh');
		}

		$data = array(
			'title'	=> 'Tambah Mata Pelajaran | Apps Sekolah',
			'kelompok'	=> $this->mapel->list_kelompok(),
			'content'	=> 'admin/mapel/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_mapel)
	{	

		$detail = $this->mapel->detail($id_mapel);

		$valid = $this->form_validation;

		$valid->set_rules('id_kelompok_mapel','<i class="fa fa-info-circle"></i> Kelompok mapel','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_mapel' => $id_mapel,
				'id_kelompok_mapel' => $i->post('id_kelompok_mapel'),
				'nama_mapel' => $i->post('nama_mapel')
			);
			$this->mapel->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil diubah!');
			redirect(base_url('admin/mapel'), 'refresh');
		}

		$data = array(
			'title'	=> 'Ubah Mata Pelajaran | Apps Sekolah',
			'kelompok'	=> $this->mapel->list_kelompok(),
			'detail'	=> $detail,
			'content'	=> 'admin/mapel/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_mapel)
	{
		$data = array(
			'id_mapel'	=> $id_mapel
		);
		$this->mapel->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data mata pelajaran berhasil dihapus!');
		redirect(base_url('admin/mapel'), 'refresh');
	}

	public function kkm()
	{
		$data = array(
			'title'	=> 'KKM Mata Pelajaran | Apps Sekolah',
			'data'	=> $this->mapel->list_kkm(),
			'content'	=> 'admin/mapel/v_kkm'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add_kkm()
	{

		$valid = $this->form_validation;

		$valid->set_rules('id_mapel','<i class="fa fa-info-circle"></i> Mata pelajaran','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_mapel' => $i->post('id_mapel'),
				'kkm' => $i->post('kkm')
			);
			$this->mapel->add_kkm($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data KKM berhasil ditambahkan!');
			redirect(base_url('admin/mapel/kkm'), 'refresh');
		}

		$data = array(
			'title'	=> 'Tambah KKM Mata Pelajaran | Apps Sekolah',
			'mapel'	=> $this->mapel->list(),
			'content'	=> 'admin/mapel/v_add_kkm'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit_kkm($id_kkm)
	{

		$detail = $this->mapel->detail_kkm($id_kkm);

		$valid = $this->form_validation;

		$valid->set_rules('id_mapel','<i class="fa fa-info-circle"></i> Mata pelajaran','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_kkm' => $id_kkm,
				'id_mapel' => $i->post('id_mapel'),
				'kkm' => $i->post('kkm')
			);
			$this->mapel->edit_kkm($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data KKM berhasil diubah!');
			redirect(base_url('admin/mapel/kkm'), 'refresh');
		}

		$data = array(
			'title'	=> 'Ubah KKM Mata Pelajaran | Apps Sekolah',
			'mapel'	=> $this->mapel->list(),
			'detail'	=> $detail,
			'content'	=> 'admin/mapel/v_edit_kkm'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete_kkm($id_kkm)
	{
		$data = array(
			'id_kkm'	=> $id_kkm
		);
		$this->mapel->delete_kkm($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data KKM berhasil dihapus!');
		redirect(base_url('admin/mapel/kkm'), 'refresh');
	}
}

/* End of file Mapel.php */
/* Location: ./application/controllers/admin/Mapel.php */