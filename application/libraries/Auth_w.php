<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_w {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('wali_model','wali');
	}

	public function login($telepon,$password)
	{
		$check = $this->CI->wali->login($telepon,$password);
		if ($check)
		{
			$data = [
				'id_wali'			=> $check->id_wali,
				'id_siswa'			=> $check->id_siswa,
				'nama_wali'			=> $check->nama_wali,
				'telepon_wali'		=> $check->telepon_wali,
				'foto_wali'			=> $check->foto_wali,
				'alamat_wali'		=> $check->alamat_wali,
				'password'			=> $check->password,
				'login'				=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('wali/dashboard'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('wali/login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama_wali') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('wali/login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id_wali',
			'id_siswa',
			'nama_wali',
			'telepon_wali',
			'foto_wali',
			'alamat_wali',
			'password',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('wali/login'),'refresh');
	}

}