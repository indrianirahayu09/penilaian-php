<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jurusan_model', 'jurusan');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Jurusan | Apps Sekolah',
			'data'	=> $this->jurusan->list(),
			'content'	=> 'admin/jurusan/v_content_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function detail($id_jurusan)
	{
		$data = array(
			'title'	=> 'Data Jurusan | Apps Sekolah',
			'detail'	=> $this->jurusan->detail($id_jurusan),
			'content'	=> 'admin/jurusan/v_detail_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama jurusan','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$kode_jurusan = $i->post('kode');
		$nama = $i->post('nama');

		if ($valid->run()) 
		{
			$data = array(
				'kode_jurusan'	=> $kode_jurusan,
				'nama_jurusan'	=> $nama
			);
			$this->jurusan->add($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data Jurusan berhasil ditambahkan!');
			redirect(base_url('admin/jurusan'),'refresh');
		
		} 

		$data = array(
			'title'	=> 'Tambah Data Jurusan | Apps Sekolah',
			'content'	=> 'admin/jurusan/v_add_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function edit($id_jurusan)
	{
		$detail = $this->jurusan->detail($id_jurusan);

		$valid = $this->form_validation;

		$valid->set_rules('nama','<i class="fa fa-info-circle"></i> Nama jurusan','required',
			array('required'  => '%s harus di isi!'
		));

		$i = $this->input;
		$kode_jurusan = $i->post('kode');
		$nama = $i->post('nama');

		if ($valid->run()) 
		{
			$data = array(
				'id_jurusan'		=> $id_jurusan,
				'kode_jurusan'		=> $kode_jurusan,
				'nama_jurusan'	=> $nama
			);
			$this->jurusan->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data Jurusan berhasil diubah!');
			redirect(base_url('admin/jurusan'),'refresh');
		
		} 

		$data = array(
			'title'	=> 'Tambah Data Jurusan | Apps Sekolah',
			'detail'	=> $detail,
			'content'	=> 'admin/jurusan/v_edit_v2'
		);
		$this->load->view('admin/layout/v_wrapper_v2', $data, FALSE);
	}

	public function delete($id_jurusan)
	{
		$detail = $this->jurusan->detail($id_jurusan);

		if (!empty($detail->foto_jurusan)) 
		{
			unlink('./public/media/upload-jurusan/'.$detail->foto_jurusan);
		}
		$data = array(
			'id_jurusan'	=> $id_jurusan
		);
		$this->jurusan->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data jurusan berhasil dihapus!');
		redirect(base_url('admin/jurusan'),'refresh');

	}

}

/* End of file jurusan.php */
/* Location: ./application/controllers/admin/jurusan.php */