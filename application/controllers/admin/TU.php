<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TU extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tu_model', 'tu');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data TU | Apps Sekolah',
			'data'	=> $this->tu->list(),
			'content'	=> 'admin/tu/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function detail($id_admin)
	{
		$data = array(
			'title'	=> 'Data TU | Apps Sekolah',
			'detail'	=> $this->tu->detail($id_admin),
			'content'	=> 'admin/tu/v_detail_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama TU','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$username = $i->post('username');
		$email = $i->post('email');
		$nama = $i->post('nama');
		$jk = $i->post('jk');
		$telepon = $i->post('telepon');
		$alamat = $i->post('alamat');

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-tu/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				
				$data = array(
					'username'	=> $username,
					'email'		=> $email,
					'password'	=> sha1($username),
					'nama'	=> $nama,
					'jk'	=> $jk,
					'telepon'	=> $telepon,
					'alamat'	=> $alamat
				);
				$this->tu->add($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data TU berhasil ditambahkan FOto e Ora!  '.$this->upload->display_errors());
				redirect(base_url('admin/tu'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-tu/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-tu-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				$data = array(
					'username'	=> $username,
					'email'		=> $email,
					'password'	=> sha1($username),
					'nama'	=> $nama,
					'jk'	=> $jk,
					'telepon'	=> $telepon,
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'	=> $alamat
				);
				$this->tu->add($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data tu berhasil ditambahkan!');
				redirect(base_url('admin/tu'),'refresh');
			}
		} 

		$data = array(
			'title'	=> 'Tambah Data TU | Apps Sekolah',
			'content'	=> 'admin/tu/v_add_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit($id_admin)
	{
		$detail = $this->tu->detail($id_admin);

		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama tu','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$username = $i->post('username');
		$email = $i->post('email');
		$nama = $i->post('nama');
		$jk = $i->post('jk');
		$telepon = $i->post('telepon');
		$alamat = $i->post('alamat');

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-tu/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				
				$data = array(
					'id_admin'	=> $id_admin,
					'username'	=> $username,
					'email'		=> $email,
					'password'	=> sha1($username),
					'nama'	=> $nama,
					'jk'	=> $jk,
					'telepon'	=> $telepon,
					'alamat'	=> $alamat
				);
				$this->tu->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data TU berhasil diubah!');
				redirect(base_url('admin/tu'),'refresh');
			}
			else
			{
				if (empty($detail->foto_tu)) 
				{
					unlink('./public/media/upload-tu/'.$detail->foto_tu);
				}
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-tu/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-tu-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();
				$data = array(
					'id_admin'	=> $id_admin,
					'username'	=> $username,
					'email'		=> $email,
					'password'	=> sha1($username),
					'nama'	=> $nama,
					'jk'	=> $jk,
					'telepon'	=> $telepon,
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'	=> $alamat
				);
				$this->tu->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data TU berhasil diubah!');
				redirect(base_url('admin/tu'),'refresh');
			}
		} 

		$data = array(
			'title'	=> 'Tambah Data TU | Apps Sekolah',
			'detail'	=> $detail,
			'content'	=> 'admin/tu/v_edit_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function delete($id_admin)
	{
		$detail = $this->tu->detail($id_admin);

		if (!empty($detail->foto_tu)) 
		{
			unlink('./public/media/upload-tu/'.$detail->foto_tu);
		}
		$data = array(
			'id_admin'	=> $id_admin
		);
		$this->tu->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data tu berhasil dihapus!');
		redirect(base_url('admin/tu'),'refresh');

	}

}

/* End of file tu.php */
/* Location: ./application/controllers/admin/tu.php */