<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('kelas_model', 'kelas');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Siswa | Apps Sekolah',
			'data'	=> $this->siswa->list(),
			'content'	=> 'admin/siswa/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama_siswa','<i class="fa fa-info-circle"></i> Nama siswa','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-siswa/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$i = $this->input;
				$data = array(
					'id_kelas'       	=> $i->post('id_kelas'),
					'id_rombel'       	=> $i->post('id_rombel'),
					'nis' 	 		=> $i->post('nis'),
					'nisn'    => $i->post('nisn'),
					'password' 	 		=> sha1($i->post('nisn')),
					'nama_siswa' 	 		=> $i->post('nama_siswa'),
					'jk_siswa'       	=> $i->post('jk_siswa'),
					'alamat'       	=> $i->post('alamat'),
				);
				$this->db->insert('siswa',$data);
				$id_siswa =  $this->db->insert_id();
				$data2 = array(
					'id_siswa'       	=> $id_siswa,
					'nama_wali'       	=> $i->post('nama_wali'),
					'telepon_wali' 	 		=> $i->post('telepon_wali'),
					'alamat_wali' 	 		=> $i->post('alamat_wali'),
					'password' 	 		=> sha1($i->post('telepon_wali'))
				);
				$this->db->insert('wali',$data2);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data siswa berhasil ditambahkan!');
				redirect(base_url('admin/siswa'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-siswa/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-siswa-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_kelas'       	=> $i->post('id_kelas'),
					'id_rombel'       	=> $i->post('id_rombel'),
					'nis' 	 		=> $i->post('nis'),
					'nisn'    => $i->post('nisn'),
					'password' 	 		=> sha1($i->post('nisn')),
					'nama_siswa' 	 		=> $i->post('nama_siswa'),
					'jk_siswa'       	=> $i->post('jk_siswa'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat'),
				);
				$this->db->insert('siswa',$data);
				$id_siswa =  $this->db->insert_id();
				$data2 = array(
					'id_siswa'       	=> $id_siswa,
					'nama_wali'       	=> $i->post('nama_wali'),
					'telepon_wali' 	 		=> $i->post('telepon_wali'),
					'alamat_wali' 	 		=> $i->post('alamat_wali'),
					'password' 	 		=> sha1($i->post('telepon_wali'))
				);
				$this->db->insert('wali',$data2);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data siswa berhasil ditambahkan!');
				redirect(base_url('admin/siswa'),'refresh');
			}
		} 
		$data = array(
			'title'	=> 'Data Siswa | Apps Sekolah',
			'kelas'	=> $this->kelas->list_kelas(),
			'rombel'	=> $this->kelas->list(),
			'content'	=> 'admin/siswa/v_add_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit($id_siswa)
	{
		$detail = $this->siswa->detail($id_siswa);

		$valid = $this->form_validation;

		$valid->set_rules('nama_siswa','<i class="fa fa-info-circle"></i> Nama siswa','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-siswa/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$i = $this->input;
				$data = array(
					'id_siswa'       	=> $id_siswa,
					'id_kelas'       	=> $i->post('id_kelas'),
					'id_rombel'       	=> $i->post('id_rombel'),
					'nis' 	 		=> $i->post('nis'),
					'nisn'    => $i->post('nisn'),
					'nama_siswa' 	 		=> $i->post('nama_siswa'),
					'jk_siswa'       	=> $i->post('jk_siswa'),
					'alamat'       	=> $i->post('alamat'),
				);
				$this->siswa->edit($data);
				$data2 = array(
					'id_siswa'       	=> $id_siswa,
					'nama_wali'       	=> $i->post('nama_wali'),
					'telepon_wali' 	 		=> $i->post('telepon_wali'),
					'alamat_wali' 	 		=> $i->post('alamat_wali')
				);
				$this->siswa->edit_wali($data2);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data siswa berhasil ubah!');
				redirect(base_url('admin/siswa'),'refresh');
			}
			else
			{
				if (!empty($detail->foto)) 
				{
					unlink('./public/media/upload-siswa/'.$detail->foto);
				}
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-siswa/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-siswa-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_siswa'       	=> $id_siswa,
					'id_kelas'       	=> $i->post('id_kelas'),
					'id_rombel'       	=> $i->post('id_rombel'),
					'nis' 	 		=> $i->post('nis'),
					'nisn'    => $i->post('nisn'),
					'nama_siswa' 	 		=> $i->post('nama_siswa'),
					'jk_siswa'       	=> $i->post('jk_siswa'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat'),
				);
				$this->siswa->edit($data);
				$data2 = array(
					'id_siswa'       	=> $id_siswa,
					'nama_wali'       	=> $i->post('nama_wali'),
					'telepon_wali' 	 		=> $i->post('telepon_wali'),
					'alamat_wali' 	 		=> $i->post('alamat_wali')
				);
				$this->siswa->edit_wali($data2);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data siswa berhasil ubah!');
				redirect(base_url('admin/siswa'),'refresh');
			}
		} 
		$data = array(
			'title'	=> 'Data Siswa | Apps Sekolah',
			'kelas'	=> $this->kelas->list_kelas(),
			'rombel'	=> $this->kelas->list(),
			'detail'	=> $detail,
			'content'	=> 'admin/siswa/v_edit_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function delete($id_siswa)
	{
		$detail = $this->siswa->detail($id_siswa);
		if (!empty($detail->foto)) 
		{
			unlink('./public/media/upload-siswa/'.$detail->foto);
		}
		if (!empty($detail->foto)) 
		{
			unlink('./public/media/upload-wali/'.$detail->foto_wali);
		}
		$data = array(
			'id_siswa'	=> $id_siswa
		);
		$this->siswa->delete($data);
		$this->siswa->delete_w($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data siswa berhasil dihapus!');
		redirect(base_url('admin/siswa'),'refresh');
	}

	public function wali()
	{
		$data = array(
			'title'	=> 'Data Wali | Apps Sekolah',
			'data'	=> $this->siswa->list_wali(),
			'content'	=> 'admin/siswa/v_wali_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/admin/Siswa.php */