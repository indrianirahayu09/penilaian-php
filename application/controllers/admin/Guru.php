<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model', 'guru');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Guru | Apps Sekolah',
			'data'	=> $this->guru->list(),
			'content'	=> 'admin/guru/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function detail($id_guru)
	{
		$data = array(
			'title'	=> 'Data Guru | Apps Sekolah',
			'detail'	=> $this->guru->detail($id_guru),
			'content'	=> 'admin/guru/v_detail_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama guru','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$jenis_ptk = $i->post('jenis_ptk');
		$nip = $i->post('nip');
		$nama = $i->post('nama');
		$jk = $i->post('jk');
		$telepon = $i->post('telepon');
		$alamat = $i->post('alamat');

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-guru/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				
				$data = array(
					'jenis_ptk'	=> $jenis_ptk,
					'nip'		=> $nip,
					'password'	=> sha1($nip),
					'nama_guru'	=> $nama,
					'jk_guru'	=> $jk,
					'telepon_guru'	=> $telepon,
					'alamat_guru'	=> $alamat
				);
				$this->guru->add($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data guru berhasil ditambahkan!');
				redirect(base_url('admin/guru'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-guru/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-guru-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				$data = array(
					'jenis_ptk'	=> $jenis_ptk,
					'nip'		=> $nip,
					'password'	=> sha1($nip),
					'nama_guru'	=> $nama,
					'jk_guru'	=> $jk,
					'telepon_guru'	=> $telepon,
					'foto_guru'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat_guru'	=> $alamat
				);
				$this->guru->add($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data guru berhasil ditambahkan!');
				redirect(base_url('admin/guru'),'refresh');
			}
		} 

		$data = array(
			'title'	=> 'Tambah Data Guru | Apps Sekolah',
			'content'	=> 'admin/guru/v_add_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit($id_guru)
	{
		$detail = $this->guru->detail($id_guru);

		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama guru','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$jenis_ptk = $i->post('jenis_ptk');
		$nip = $i->post('nip');
		$nama = $i->post('nama');
		$jk = $i->post('jk');
		$telepon = $i->post('telepon');
		$alamat = $i->post('alamat');

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-guru/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				
				$data = array(
					'id_guru'	=> $id_guru,
					'jenis_ptk'	=> $jenis_ptk,
					'nip'		=> $nip,
					'password'	=> sha1($nip),
					'nama_guru'	=> $nama,
					'jk_guru'	=> $jk,
					'telepon_guru'	=> $telepon,
					'alamat_guru'	=> $alamat
				);
				$this->guru->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data guru berhasil diubah!');
				redirect(base_url('admin/guru'),'refresh');
			}
			else
			{
				if (empty($detail->foto_guru)) 
				{
					unlink('./public/media/upload-guru/'.$detail->foto_guru);
				}
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-guru/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-guru-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				$data = array(
					'id_guru'	=> $id_guru,
					'jenis_ptk'	=> $jenis_ptk,
					'nip'		=> $nip,
					'password'	=> sha1($nip),
					'nama_guru'	=> $nama,
					'jk_guru'	=> $jk,
					'telepon_guru'	=> $telepon,
					'foto_guru'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat_guru'	=> $alamat
				);
				$this->guru->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data guru berhasil diubah!');
				redirect(base_url('admin/guru'),'refresh');
			}
		} 

		$data = array(
			'title'	=> 'Tambah Data Guru | Apps Sekolah',
			'detail'	=> $detail,
			'content'	=> 'admin/guru/v_edit_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function delete($id_guru)
	{
		$detail = $this->guru->detail($id_guru);

		if (!empty($detail->foto_guru)) 
		{
			unlink('./public/media/upload-guru/'.$detail->foto_guru);
		}
		$data = array(
			'id_guru'	=> $id_guru
		);
		$this->guru->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data guru berhasil dihapus!');
		redirect(base_url('admin/guru'),'refresh');

	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */