<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth_g->cek();
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('jadwal_model', 'jadwal');
	}

	public function index()
	{
		$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
		$data = array(
			'title'	=> 'Dashboard | Apps Sekolah',
			'totsiswa'	=> $this->siswa->jml_siswa($data_guru->id_rombel),
			'totmapel'	=> $this->jadwal->jml_mapel_guru($this->session->userdata('id_guru')),
			'content'	=> 'guru/dashboard/v_content'
		);
		$this->load->view('guru/layout/v_wrapper', $data, FALSE);
	}

}