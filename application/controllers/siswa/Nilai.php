<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->load->model('mapel_model', 'mapel');
		$this->load->model('kelas_model', 'rombel');
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('rapot_model', 'rapot');
		$this->auth_s->cek();
	}

	public function list()
	{
		$id_siswa = $this->session->userdata('id_siswa');
		$data = array(
			'title'	=> 'Nilai | Apps Sekolah',
			'siswa'	=> $this->siswa->detail($id_siswa),
			'kelompok'	=> $this->mapel->list_kelompok(),
			'content'	=> 'siswa/nilai/v_content'
		);
		$this->load->view('siswa/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/siswa/Nilai.php */