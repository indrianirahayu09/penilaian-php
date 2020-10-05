<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth_a->cek();
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Dashboard | Apps Sekolah',
			'content'	=> 'admin/dashboard/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

}