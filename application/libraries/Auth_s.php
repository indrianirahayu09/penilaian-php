<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_s {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('siswa_model','siswa');
	}

	public function login($nisn,$password)
	{
		$check = $this->CI->siswa->login($nisn,$password);
		if ($check)
		{
			$data = [
				'id_siswa'			=> $check->id_siswa,
				'id_kelas'			=> $check->id_kelas,
				'id_rombel'			=> $check->id_rombel,
				'nis'			=> $check->nis,
				'nisn'			=> $check->nisn,
				'password'			=> $check->password,
				'nama_siswa'				=> $check->nama_siswa,
				'jk_siswa'			=> $check->jk_siswa,
				'foto'				=> $check->foto,
				'alamat'			=> $check->alamat,
				'login'	=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('siswa/dashboard'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('siswa/login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama_siswa') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('siswa/login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id_siswa',
			'id_kelas',
			'id_rombel',
			'nis',
			'nisn',
			'password',
			'nama_siswa',
			'jk_siswa',
			'foto',
			'alamat',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('siswa/login'),'refresh');
	}

}