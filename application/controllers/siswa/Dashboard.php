<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth_s->cek();
		$this->load->model('pengumuman_model', 'pengumuman');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Dashboard | Apps Sekolah',
			'pengumuman'	=> $this->pengumuman->list(),
			'content'	=> 'siswa/dashboard/v_content_v2'
		);
		$this->load->view('siswa/layout/v_wrapper_v2', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/siswa/Dashboard.php */