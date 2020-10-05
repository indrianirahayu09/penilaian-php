<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->load->model('mapel_model', 'mapel');
		$this->load->model('kelas_model', 'rombel');
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('rapot_model', 'rapot');
		$this->load->model('wali_model', 'wali');
		$this->auth_w->cek();
	}

	public function index()
	{
		$id_siswa = $this->session->userdata('id_siswa');
		$id_wali = $this->session->userdata('id_wali');
		$data = array(
			'title'	=> 'Profil | Apps Sekolah',
			'siswa'	=> $this->siswa->detail($id_siswa),
			'detail'	=> $this->wali->detail($id_wali),
			'kelompok'	=> $this->mapel->list_kelompok(),
			'profil_sekolah'	=> $this->public_model->get_profil_sekolah(),
			'semester'	=> $this->public_model->get_semester(),
			'content'	=> 'wali/profil/v_content_v2'
		);
		$this->load->view('wali/layout/v_wrapper_v2', $data, FALSE);
	}

}

/* End of file Rapot.php */
/* Location: ./application/controllers/wali/Rapot.php */