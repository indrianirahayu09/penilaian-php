<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapot extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->load->model('mapel_model', 'mapel');
		$this->load->model('kelas_model', 'rombel');
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('rapot_model', 'rapot');
		$this->auth_w->cek();
	}

	public function index()
	{
		$id_siswa = $this->session->userdata('id_siswa');
		$data = array(
			'title'	=> 'Nilai Rapot | Apps Sekolah',
			'siswa'	=> $this->siswa->detail($id_siswa),
			'kelompok'	=> $this->mapel->list_kelompok(),
			'profil_sekolah'	=> $this->public_model->get_profil_sekolah(),
			'semester'	=> $this->public_model->get_semester(),
			'content'	=> 'wali/rapot/v_content_v2'
		);
		$this->load->view('wali/layout/v_wrapper_v2', $data, FALSE);
	}

}

/* End of file Rapot.php */
/* Location: ./application/controllers/wali/Rapot.php */