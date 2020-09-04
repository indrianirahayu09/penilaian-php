<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model', 'siswa');
	}

	public function index()
	{
		$this->form_validation->set_rules('nisn', 'NISN', 'required',
			array( 'required'  => '%s harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$nisn    = $this->input->post('nisn');
			$password    = $this->input->post('password');

			$cek = $this->siswa->cek_nisn($nisn);
			if ($cek==1) 
			{
				$this->auth_s->login($nisn,$password);
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> NISN tidak ada!');
				redirect(base_url('siswa/login'),'refresh');
			}
		}
		$data = array(
			'title'	=> 'Login Siswa | Apps Sekolah'
		);
		$this->load->view('siswa/login/v_content', $data, FALSE);
	}

	public function logout()
	{
		$this->auth_s->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */