<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengaturan_model', 'pengaturan');
		$this->load->model('admin_model','admin');
	}

	public function profil_sekolah()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama_sekolah','<i class="fa fa-info-circle"></i> Nama sekolah','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-profil-sekolah/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('logo'))
			{
				$i = $this->input;
				$data = array(
					'id_profil_sekolah'    => '1',
					'nama' 	 		=> $i->post('nama_sekolah'),
					'kepala' 	 		=> $i->post('kepala_sekolah'),
					'telepon'       	=> $i->post('telepon'),
					'email'       	=> $i->post('email'),
					'website'       	=> $i->post('website'),
					'alamat'       	=> $i->post('alamat')
				);
				$this->pengaturan->update_profil_sekolah($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil sekolah berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil_sekolah'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-profil-sekolah/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-profil-sekolah-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				$i = $this->input;
				$data = array(
					'id_profil_sekolah'    => '1',
					'nama' 	 		=> $i->post('nama_sekolah'),
					'kepala' 	 		=> $i->post('kepala_sekolah'),
					'telepon'       	=> $i->post('telepon'),
					'email'       	=> $i->post('email'),
					'website'       	=> $i->post('website'),
					'logo'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat')
				);
				$this->pengaturan->update_profil_sekolah($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil sekolah berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil_sekolah'),'refresh');
			}
		} 
		$data = array(
			'title'			=> 'Pengaturan Profil Sekolah | SMAS',
			'data'			=> $this->pengaturan->profil_sekolah(),
			'content'		=> 'admin/pengaturan/v_profil_sekolah'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function tahun_akademik()
	{
		$valid = $this->form_validation;

		$valid->set_rules('semester','<i class="fa fa-info-circle"></i> Semester','required',
			array('required'  => '%s harus di isi!'
		));

		if ($this->form_validation->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_semester'       => '1',
				'semester'       => $i->post('semester'),
				'tahun_pelajaran'      			  => $i->post('tahun_ajaran')
			);
			$this->pengaturan->update_tahun_akademik($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Tahun akademik berhasil diperbaharui!');
			redirect(base_url('admin/pengaturan/tahun_akademik'), 'refresh');
		} 

		$data = array(
			'title'			=> 'Pengaturan Tahun Akademik | SMAS',
			'data'			=> $this->pengaturan->tahun_akademik(),
			'content'		=> 'admin/pengaturan/v_tahun_akademik'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function profil()
	{

		$detail = $this->admin->detail($this->session->userdata('id_admin'));

		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-admin/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$i = $this->input;
				$data = array(
					'id_admin'    => $detail->id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'email' 	 		=> $i->post('email'),
					'jk' 	 		=> $i->post('jk'),
					'telepon'       	=> $i->post('telepon'),
					'alamat'       	=> $i->post('alamat')
				);
				$this->pengaturan->update_profil($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-admin/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-admin-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_admin'    => $detail->id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'email' 	 		=> $i->post('email'),
					'jk' 	 		=> $i->post('jk'),
					'telepon'       	=> $i->post('telepon'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat')
				);
				$this->pengaturan->update_profil($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil'),'refresh');
			}
		} 
		$data = array(
			'title'			=> 'Pengaturan Profil | SMAS',
			'detail'		=> $detail,
			'content'		=> 'admin/pengaturan/v_profil'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function ubah_password()
	{
		$detail = $this->admin->detail($this->session->userdata('id_admin'));

		$valid = $this->form_validation;

		$valid->set_rules('username','<i class="fa fa-info-circle"></i> Username','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$username   = $i->post('username');
			$passlama   = $i->post('pass');
			$passbaru   = $i->post('password');
			$repassword   = $i->post('repassword');

			$ambil = $this->admin->login($username,$passlama);

			if ($ambil) 
			{
				if ($passbaru!=$repassword) 
				{
					$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Konfirmasi password tidak benar, silahkan konfirmasi password dengan benar!');
					redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
				}
				else
				{
					$data = array(
						'id_admin'   => $detail->id_admin,
						'password'  => sha1($passbaru)
					);
					$this->admin->ubahpassword($data);
					$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Password Anda berhasil diubah!');
					redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password lama Anda salah!');
				redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
			}
		}

		$data = array(
			'title'			=> 'Pengaturan Ubah Password | SMAS',
			'detail'		=> $detail,
			'content'		=> 'admin/pengaturan/v_ubah_password'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/staff/Pengaturan.php */