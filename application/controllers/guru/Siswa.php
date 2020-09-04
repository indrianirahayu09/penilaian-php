<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model', 'siswa');
	}

	public function index()
	{
		$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
		$data = array(
			'title'	=> 'Data Siswa | Apps Sekolah',
			'data'	=> $this->siswa->rombel($data_guru->id_rombel),
			'rombel'	=> $data_guru->rombel,
			'content'	=> 'guru/siswa/v_content'
		);
		$this->load->view('guru/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/guru/Siswa.php */