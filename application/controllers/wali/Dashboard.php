<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth_w->cek();
		$this->load->model('pengumuman_model', 'pengumuman');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Dashboard | Apps Sekolah',
			'pengumuman'	=> $this->pengumuman->list(),
			'content'	=> 'wali/dashboard/v_content'
		);
		$this->load->view('wali/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/wali/Dashboard.php */