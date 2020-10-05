<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required',
			array( 'required'  => '%s harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$username    = $this->input->post('username');
			$password    = $this->input->post('password');

			$cek = $this->admin->cek_username($username);
			if ($cek==1) 
			{
				$this->auth_a->login($username,$password);
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Username tidak ada!');
				redirect(base_url('admin/login'),'refresh');
			}
		}
		$data = array(
			'title'	=> 'Login Admin | Apps Sekolah'
		);
		$this->load->view('admin/login/v_content_v2', $data, FALSE);
	}

	public function logout()
	{
		$this->auth_a->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */