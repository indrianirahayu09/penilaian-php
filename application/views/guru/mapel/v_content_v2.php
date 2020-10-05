<?php  
$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
$data_jadwal = $this->public_model->get_jadwal($this->session->userdata('id_guru'));
$totguru  = $this->public_model->totguru();
$totsiswa = $this->public_model->totsiswa();
$totkelas = $this->public_model->totkelas();
$totmapel = $this->public_model->totmapel();
$biodata  = $this->public_model->get_profil_sekolah();
?>

<style type="text/css">
.box{
	position: relative;
	display: flex;
	flex-direction:column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: 1px solid rgba(0, 0, 0, 0.125);
	border-radius: 0.25rem;
	box-sizing: inherit; 
}
.box-body{
	flex: 1 1 auto;
	padding: 1.25rem;
	box-sizing: inherit;
	text-align: center;
}
.box-footer{
	padding: .75rem 1.25rem;
	background-color: rgba(0,0,0,.03);
	border-top: 0 solid rgba(0,0,0,.125);
	box-sizing: border-box;
}
</style>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
	<!-- END: Left Aside -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
			<!-- BEGIN: Subheader -->
			<!-- END: Subheader -->
			<div class="m-content">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="row">
							<?php foreach ($data as $key => $value): ?>
								<div class="col-xl-12">
									<div class="box">
										<div class="box-body">
											<h5><?= $value->nama_mapel ?></h5>
											<strong><?= $value->rombel ?></strong>
										</div>
										<div class="box-footer">
											<center><a href="<?= base_url() ?>guru/nilai/input/<?= $value->id_jadwal ?>" class="small-box-footer">Input Nilai <i class="fa fa-file-text"></i></a></center>
										</div>
										<div class="box-footer">
											<center><a href="<?= base_url() ?>guru/rapot/input/<?= $value->id_jadwal ?>" class="small-box-footer">Input Nilai Rapot <i class="fa fa-file-text"></i></a></center>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>