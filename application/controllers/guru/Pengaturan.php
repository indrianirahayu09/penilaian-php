<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->load->model('mapel_model', 'mapel');
		$this->load->model('kelas_model', 'rombel');
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('rapot_model', 'rapot');
		$this->load->model('guru_model', 'guru');
		$this->auth_g->cek();
	}

	public function profil()
	{
		$id_guru = $this->session->userdata('id_guru');
		$data = array(
			'title'	=> 'Profil | Apps Sekolah',
			'detail'	=> $this->guru->detail($id_guru),
			'content'	=> 'guru/profil/v_content_v2'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

	public function ubah_password()
	{
		$id_guru = $this->session->userdata('id_guru');
		$data = array(
			'title'	=> 'Ubah Password | Apps Sekolah',
			'detail'	=> $this->guru->detail($id_guru),
			'content'	=> 'guru/profil/v_ubah_password'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit_password($id_guru)
	{
		$detail = $this->guru->detail($id_guru);
		$i = $this->input;
		$password_baru = $i->post('password_baru');
		$konfirm_password = $i->post('konfirm_password');
		if($password_baru == $konfirm_password){
			$data = array(
				'id_guru'       	=> $id_guru,
				'password'       	=> sha1($password_baru),
			);
			$this->guru->edit($data);
			echo "<script>alert('Password berhasil diubah!')</script>";
			redirect(base_url('guru/pengaturan/ubah_password'),'refresh');
		}else{
			echo "<script>alert('Password tidak cocok!')</script>";
			redirect(base_url('guru/pengaturan/ubah_password'),'refresh');
		}
		
		
	}

	

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/guru/Pengaturan.php */