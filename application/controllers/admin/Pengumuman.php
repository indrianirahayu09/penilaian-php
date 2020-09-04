<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model', 'pengumuman');
	}

	public function index()
	{
		
		$data = array(
			'title'	=> 'Pengumuman | Apps Sekolah',
			'data'	=> $this->pengumuman->list(),
			'content'	=> 'admin/pengumuman/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit()
	{
		$valid = $this->form_validation;

		$valid->set_rules('pengumuman','<i class="fa fa-info-circle"></i> Pengumuman','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_pengumuman' => '1',
				'isi' => $i->post('pengumuman')
			);
			$this->pengumuman->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Pengumuman berhasil disimpan!');
			redirect(base_url('admin/pengumuman'), 'refresh');
		}

	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/admin/Pengumuman.php */