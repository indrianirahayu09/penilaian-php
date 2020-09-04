<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_a {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('admin_model','admin');
	}

	public function login($username,$password)
	{
		$check = $this->CI->admin->login($username,$password);
		if ($check)
		{
			$data = [
				'id_admin'			=> $check->id_admin,
				'nama'				=> $check->nama,
				'username'			=> $check->username,
				'email'			=> $check->email,
				'password'			=> $check->password,
				'jk'				=> $check->jk,
				'telepon'			=> $check->telepon,
				'foto'				=> $check->foto,
				'alamat'			=> $check->alamat,
				'login'	=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('admin/dashboard'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('admin/login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('admin/login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id_staff',
			'nama',
			'username',
			'password',
			'jk',
			'telepon',
			'foto',
			'alamat',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('admin/login'),'refresh');
	}

}