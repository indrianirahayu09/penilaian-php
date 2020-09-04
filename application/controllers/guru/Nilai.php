<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model', 'jadwal');
		$this->load->model('mapel_model', 'mapel');
		$this->load->model('kelas_model', 'rombel');
		$this->load->model('siswa_model', 'siswa');
		$this->load->model('rapot_model', 'rapot');
		$this->auth_g->cek();
	}

	public function input($id_jadwal)
	{
		$detail = $this->jadwal->detail($id_jadwal);
		$wali_kelas = $this->rombel->detail($detail->id_rombel);
		$data = array(
			'title'	=> 'Input Nilai | Apps Sekolah',
			'detail'	=> $detail,
			'kkm'	=> $this->mapel->detail_kkm2($detail->id_mapel),
			'wali_kelas'	=> $wali_kelas->nama_guru,
			'siswa'	=> $this->siswa->rombel($detail->id_rombel),
			'content'	=> 'guru/nilai/v_input'
		);
		$this->load->view('guru/layout/v_wrapper', $data, FALSE);
	}

	public function input_nilai()
	{

		$uh1 = $this->input->post('uh1');
		$uh2 = $this->input->post('uh2');
		$uts = $this->input->post('uts');
		$uas = $this->input->post('uas');
		$hasil = $this->input->post('hasil');
		$id_siswa = $this->input->post('id_siswa');
		$id_mapel = $this->input->post('id_mapel');
		$id_guru = $this->input->post('id_guru');
		$id_rombel = $this->input->post('id_rombel');


		$data = array(
			'id_rombel'	=> $id_rombel,
			'id_mapel'	=> $id_mapel,
			'id_guru'	=> $id_guru,
			'id_siswa'	=> $id_siswa,
			'uh1'	=> $uh1,
			'uh2'	=> $uh2,
			'uts'	=> $uts,
			'uas'	=> $uas,
			'rata_rata'	=> $hasil,
		);

		$insert = $this->rapot->add_nilai($data);

		if ($insert === true) {
			echo "true";
		} else {
			echo "false";
		}
	}
}

/* End of file Nilai.php */
/* Location: ./application/controllers/guru/Nilai.php */