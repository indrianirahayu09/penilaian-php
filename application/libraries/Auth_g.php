<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_g {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('guru_model','guru');
	}

	public function login($nip,$password)
	{
		$check = $this->CI->guru->login($nip,$password);
		if ($check)
		{
			$data = [
				'id_guru'			=> $check->id_guru,
				'jenis_ptk'				=> $check->jenis_ptk,
				'nip'			=> $check->nip,
				'password'			=> $check->password,
				'nama_guru'			=> $check->nama_guru,
				'jk_guru'				=> $check->jk_guru,
				'telepon_guru'			=> $check->telepon_guru,
				'foto_guru'				=> $check->foto_guru,
				'alamat_guru'			=> $check->alamat_guru,
				'login'	=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('guru/dashboard'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('guru/login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama_guru') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('guru/login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id_guru',
			'id_jenis_ptk',
			'nip',
			'password',
			'nama_guru',
			'jk_guru',
			'telepon_guru',
			'foto_guru',
			'alamat_guru',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('guru/login'),'refresh');
	}

}