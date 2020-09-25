<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapot extends CI_Controller {

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
			'title'	=> 'Input Nilai Rapot | Apps Sekolah',
			'detail'	=> $detail,
			'kkm'	=> $this->mapel->detail_kkm2($detail->id_mapel),
			'wali_kelas'	=> $wali_kelas->nama_guru,
			'siswa'	=> $this->siswa->rombel($detail->id_rombel),
			'content'	=> 'guru/rapot/v_input_v2'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

	public function cek()
	{
		$kkm = $this->input->post('kkm');
		$id_mapel = $this->input->post('id_mapel');
		$core = $this->input->post('core');

		

		if ($core=="otr") 
		{
			$pred = "C";
			$jml = $this->rapot->jml_grade($id_mapel,$pred);
			if ($jml==1) 
			{
				$data = $this->rapot->get_grade($id_mapel,$pred);
				echo json_encode($data);
			}
			else
			{
				echo "";
			}
			
		}
		elseif ($core=="pth") 
		{
			$angka = $this->input->post('angka');

			if ($kkm == 70) {
				$pred_A = array(91, 92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(81, 82, 83, 84, 85, 86, 87, 88, 89, 90);
				$pred_C = array(70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80);
			} elseif($kkm == 75) {
				$pred_A = array(92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(84, 85, 86, 87, 88, 89, 90, 91);
				$pred_C = array(75, 76, 77, 78, 79, 80, 81, 82, 83);
			} elseif($kkm == 76) {
				$pred_A = array(92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(84, 85, 86, 87, 88, 89, 90, 91);
				$pred_C = array(76, 77, 78, 79, 80, 81, 82, 83);
			} elseif($kkm == 77) {
				$pred_A = array(93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(85, 86, 87, 88, 89, 90, 91, 92);
				$pred_C = array(77, 78, 79, 80, 81, 82, 83, 84);
			} elseif($kkm == 78) {
				$pred_A = array(93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(85, 86, 87, 88, 89, 90, 91, 92);
				$pred_C = array(78, 79, 80, 81, 82, 83, 84);
			} elseif($kkm == 80) {
				$pred_A = array(94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(87, 88, 89, 90, 91, 92, 93);
				$pred_C = array(80, 81, 82, 83, 84, 85, 86);
			}

			if (in_array($angka, $pred_A)) {
				$pred = "A";
			} elseif (in_array($angka, $pred_B)) {
				$pred = "B";
			} elseif (in_array($angka, $pred_C)) {
				$pred = "C";
			} else {
				die(0);
			}
			$jml = $this->rapot->jml_grade($id_mapel,$pred);
			if ($jml==1) 
			{
				$data = $this->rapot->get_grade($id_mapel,$pred);
				echo json_encode($data);
			}
			else
			{
				echo "";
			}
		}
	}

	public function cek_ktr()
	{
		$kkm = $this->input->post('kkm');
		$id_mapel = $this->input->post('id_mapel');
		$core = $this->input->post('core');

		

		if ($core=="otr") 
		{
			$pred = "C";
			$jml = $this->rapot->jml_grade_ktr($id_mapel,$pred);
			if ($jml==1) 
			{
				$data = $this->rapot->get_grade_ktr($id_mapel,$pred);
				echo json_encode($data);
			}
			else
			{
				echo "";
			}
			
		}
		elseif ($core=="ktr") 
		{
			$angka = $this->input->post('angka');

			if ($kkm == 70) {
				$pred_A = array(91, 92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(81, 82, 83, 84, 85, 86, 87, 88, 89, 90);
				$pred_C = array(70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80);
			} elseif($kkm == 75) {
				$pred_A = array(92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(84, 85, 86, 87, 88, 89, 90, 91);
				$pred_C = array(75, 76, 77, 78, 79, 80, 81, 82, 83);
			} elseif($kkm == 76) {
				$pred_A = array(92, 93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(84, 85, 86, 87, 88, 89, 90, 91);
				$pred_C = array(76, 77, 78, 79, 80, 81, 82, 83);
			} elseif($kkm == 77) {
				$pred_A = array(93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(85, 86, 87, 88, 89, 90, 91, 92);
				$pred_C = array(77, 78, 79, 80, 81, 82, 83, 84);
			} elseif($kkm == 78) {
				$pred_A = array(93, 94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(85, 86, 87, 88, 89, 90, 91, 92);
				$pred_C = array(78, 79, 80, 81, 82, 83, 84);
			} elseif($kkm == 80) {
				$pred_A = array(94, 95, 96, 97, 98, 99, 100);
				$pred_B = array(87, 88, 89, 90, 91, 92, 93);
				$pred_C = array(80, 81, 82, 83, 84, 85, 86);
			}

			if (in_array($angka, $pred_A)) {
				$pred = "A";
			} elseif (in_array($angka, $pred_B)) {
				$pred = "B";
			} elseif (in_array($angka, $pred_C)) {
				$pred = "C";
			} else {
				die(0);
			}
			$jml = $this->rapot->jml_grade_ktr($id_mapel,$pred);
			if ($jml==1) 
			{
				$data = $this->rapot->get_grade_ktr($id_mapel,$pred);
				echo json_encode($data);
			}
			else
			{
				echo "";
			}
		}
	}

	public function input_rapot()
	{
		$p_angka = $this->input->post('p_angka');
		$p_predikat = $this->input->post('p_predikat');
		$k_angka = $this->input->post('k_angka');
		$k_predikat = $this->input->post('k_predikat');
		$id_siswa = $this->input->post('id_siswa');
		$id_mapel = $this->input->post('id_mapel');
		$id_guru = $this->input->post('id_guru');
		$id_rombel = $this->input->post('id_rombel');

		$data = array(
			'id_siswa'	=> $id_siswa,
			'id_rombel'	=> $id_rombel,
			'id_guru'	=> $id_guru,
			'id_mapel'	=> $id_mapel,
			'p_angka'	=> $p_angka,
			'p_predikat'	=> $p_predikat,
			'k_angka'	=> $k_angka,
			'k_predikat'	=> $k_predikat
		);

		$insert = $this->rapot->add($data);

		if ($insert === true) {
			echo "true";
		} else {
			echo "false";
		}
	}

	public function nilai_rapot()
	{
		$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
		$data = array(
			'title'	=> 'Nilai Rapot | Apps Sekolah',
			'data'	=> $this->siswa->rombel($data_guru->id_rombel),
			'content'	=> 'guru/rapot/v_nilai_v2'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

	public function lihat_nilat_rapot($id_siswa)
	{
		$data = array(
			'title'	=> 'Nilai Rapot | Apps Sekolah',
			'siswa'	=> $this->siswa->detail($id_siswa),
			'kelompok'	=> $this->mapel->list_kelompok(),
			'content'	=> 'guru/rapot/v_lihat_nilai_v2'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}

	public function input_data_rapot()
	{
		$data = array(
			'title'	=> 'Nilai Rapot | Apps Sekolah',
			'content'	=> 'guru/rapot/v_input_data_rapot'
		);
		$this->load->view('guru/layout/v_wrapper_v2', $data, FALSE);
	}
}

/* End of file Rapot.php */
/* Location: ./application/controllers/guru/Rapot.php */