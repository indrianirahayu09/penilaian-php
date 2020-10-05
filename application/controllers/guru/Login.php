<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model', 'guru');
	}

	public function index()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required',
			array( 'required'  => '%s harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$nip    = $this->input->post('nip');
			$password    = $this->input->post('password');

			$cek = $this->guru->cek_nip($nip);
			if ($cek==1) 
			{
				$this->auth_g->login($nip,$password);
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Nip tidak ada!');
				redirect(base_url('guru/login'),'refresh');
			}
		}
		$data = array(
			'title'	=> 'Login Guru | Apps Sekolah'
		);
		$this->load->view('guru/login/v_content_v2', $data, FALSE);
	}

	public function logout()
	{
		$this->auth_g->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */