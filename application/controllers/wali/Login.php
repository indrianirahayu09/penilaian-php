<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('wali_model', 'wali');
	}

	public function index()
	{
		$this->form_validation->set_rules('telepon', 'Telepon', 'required',
			array( 'required'  => '%s harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$telepon    = $this->input->post('telepon');
			$password    = $this->input->post('password');

			$cek = $this->wali->cek_nohp($telepon);
			if ($cek==1) 
			{
				$this->auth_w->login($telepon,$password);
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Nomor telepon tidak ada!');
				redirect(base_url('wali/login'),'refresh');
			}
		}
		$data = array(
			'title'	=> 'Login Wali | Apps Sekolah'
		);
		$this->load->view('wali/login/v_content_v2', $data, FALSE);
	}

	public function logout()
	{
		$this->auth_w->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */