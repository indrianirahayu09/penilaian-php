<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Mata Pelajaran Diampu | Apps Sekolah',
			'data'	=> $this->jadwal->get_mapel_guru($this->session->userdata('id_guru')),
			'content'	=> 'guru/mapel/v_content_v2'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

}

/* End of file Mapel.php */
/* Location: ./application/controllers/guru/Mapel.php */