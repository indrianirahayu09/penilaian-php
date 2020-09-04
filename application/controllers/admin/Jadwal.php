<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->auth_a->cek();
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Jadwal | Apps Sekolah',
			'data'	=> $this->jadwal->list(),
			'content'	=> 'admin/jadwal/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules(
			'hari',
			'<i class="feather icon-info"></i> Hari',
			'required',
			array(
				'requiured' => 'harus di isi!'
			)
		);

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_rombel' => $i->post('kelas'),
				'id_mapel' => $i->post('mapel'),
				'id_guru' => $i->post('guru'),
				'hari' => $i->post('hari'),
				'jam_mulai' => $i->post('jam_mulai'),
				'jam_selesai' => $i->post('jam_selesai'),
			);
			$this->jadwal->add($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data jadwal berhasil ditambahkan!');
			redirect(base_url('admin/jadwal'), 'refresh');
		}

		$data = array(
			'title'	=> 'Tambah Data Jadwal | Apps Sekolah',
			'guru'	=> $this->jadwal->guru(),
			'mapel'	=> $this->jadwal->mapel(),
			'rombel'	=> $this->jadwal->rombel(),
			'content'	=> 'admin/jadwal/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_jadwal)
	{
		$detail = $this->jadwal->detail($id_jadwal);

		$valid = $this->form_validation;

		$valid->set_rules(
			'hari',
			'<i class="feather icon-info"></i> Hari',
			'required',
			array(
				'requiured' => 'harus di isi!'
			)
		);

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_jadwal' => $id_jadwal,
				'id_rombel' => $i->post('kelas'),
				'id_mapel' => $i->post('mapel'),
				'id_guru' => $i->post('guru'),
				'hari' => $i->post('hari'),
				'jam_mulai' => $i->post('jam_mulai'),
				'jam_selesai' => $i->post('jam_selesai'),
			);
			$this->jadwal->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data jadwal berhasil diubah!');
			redirect(base_url('admin/jadwal'), 'refresh');
		}

		$data = array(
			'title'	=> 'Ubah Data Jadwal | Apps Sekolah',
			'guru'	=> $this->jadwal->guru(),
			'mapel'	=> $this->jadwal->mapel(),
			'rombel'	=> $this->jadwal->rombel(),
			'detail' => $detail,
			'content'	=> 'admin/jadwal/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_jadwal)
	{
		$data = array(
			'id_jadwal'	=> $id_jadwal
		);
		$this->jadwal->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data jadwal berhasil dihapus!');
		redirect(base_url('admin/jadwal'), 'refresh');
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/admin/Jadwal.php */