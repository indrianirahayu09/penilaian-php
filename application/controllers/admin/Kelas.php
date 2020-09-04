<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_model','kelas');
		$this->load->model('guru_model', 'guru');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Kelas | Apps Sekolah',
			'data'	=> $this->kelas->list(),
			'content'	=> 'admin/kelas/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{

		$valid  = $this->form_validation;

		$valid->set_rules(
			'id_jurusan',
			'<i class="feather icon-info"></i> Jurusan',
			'required',
			array(
				'requiured' => 'harus di isi!'
			)
		);

		$valid->set_rules(
			'rombel',
			'<i class="fa fa-info-circle"></i> Nama kelas',
			'required|is_unique[rombel.rombel]',
			array(
				'required' => '%s harus di isi!',
				'is_unique' => '%s sudah terdaftar pada sistem!'
			)
		);

		$valid->set_rules(
			'id_guru',
			'<i class="fa fa-info-circle"></i> Guru',
			'required|is_unique[rombel.id_guru]',
			array(
				'required' => '%s harus di isi!',
				'is_unique' => '%s sudah terdaftar menjadi wali kelas!'
			)
		);




		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_jurusan' => $i->post('id_jurusan'),
				'id_guru' => $i->post('id_guru'),
				'rombel' => $i->post('rombel')
			);
			$this->kelas->add($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data kelas berhasil ditambahkan!');
			redirect(base_url('admin/kelas'), 'refresh');
		}

		$data = array(
			'title'	=> 'Data Kelas | Apps Sekolah',
			'jurusan'	=> $this->kelas->jurusan(),
			'guru'		=> $this->guru->list(),
			'content'	=> 'admin/kelas/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_rombel)
	{
		$detail = $this->kelas->detail($id_rombel);


		$valid  = $this->form_validation;

		$valid->set_rules(
			'id_jurusan',
			'<i class="feather icon-info"></i> Jurusan',
			'required',
			array(
				'requiured' => 'harus di isi!'
			)
		);

		if ($valid->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_rombel' => $id_rombel,
				'id_jurusan' => $i->post('id_jurusan'),
				'id_guru' => $i->post('id_guru'),
				'rombel' => $i->post('rombel')
			);
			$this->kelas->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data kelas berhasil diubah!');
			redirect(base_url('admin/kelas'), 'refresh');
		}

		$data = array(
			'title'	=> 'Data Kelas | Apps Sekolah',
			'jurusan'	=> $this->kelas->jurusan(),
			'guru'		=> $this->guru->list(),
			'detail'	=> $detail,
			'content'	=> 'admin/kelas/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_rombel)
	{
		$data = array(
			'id_rombel'	=> $id_rombel
		);
		$this->kelas->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Data kelas berhasil dihapus!');
		redirect(base_url('admin/kelas'), 'refresh');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/admin/Kelas.php */