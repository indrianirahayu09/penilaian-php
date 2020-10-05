<?php  
$data_admin = $this->public_model->get_admin($this->session->userdata('id_admin'));
$totguru  = $this->public_model->totguru();
$totsiswa = $this->public_model->totsiswa();
$totkelas = $this->public_model->totkelas();
$totmapel = $this->public_model->totmapel();
$biodata  = $this->public_model->get_profil_sekolah();
?>


<style type="text/css">

.dbox {
	position: relative;
	background: rgb(255, 86, 65);
	background: -moz-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
	background: -webkit-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
	background: linear-gradient(to bottom, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff5641', endColorstr='#fd3261', GradientType=0);
	border-radius: 4px;
	text-align: center;
	margin: 60px 0 50px;
}
.dbox__icon {
	position: absolute;
	transform: translateY(-50%) translateX(-50%);
	left: 50%;
}
.dbox__icon:before {
	width: 75px;
	height: 75px;
	position: absolute;
	background: #fda299;
	background: rgba(253, 162, 153, 0.34);
	content: '';
	border-radius: 50%;
	left: -17px;
	top: -17px;
	z-index: -2;
}
.dbox__icon:after {
	width: 60px;
	height: 60px;
	position: absolute;
	background: #f79489;
	background: rgba(247, 148, 137, 0.91);
	content: '';
	border-radius: 50%;
	left: -10px;
	top: -10px;
	z-index: -1;
}
.dbox__icon > i {
	background: #ff5444;
	border-radius: 50%;
	line-height: 40px;
	color: #FFF;
	width: 40px;
	height: 40px;
	font-size:22px;
}
.dbox__body {
	padding: 50px 20px;
}
.dbox__count {
	display: block;
	font-size: 30px;
	color: #FFF;
	font-weight: 300;
}
.dbox__title {
	font-size: 13px;
	color: #FFF;
	color: rgba(255, 255, 255, 0.81);
}
.dbox__action {
	transform: translateY(-50%) translateX(-50%);
	position: absolute;
	left: 50%;
}
.dbox__action__btn {
	border: none;
	background: #FFF;
	border-radius: 19px;
	padding: 7px 16px;
	text-transform: uppercase;
	font-weight: 500;
	font-size: 11px;
	letter-spacing: .5px;
	color: #003e85;
	box-shadow: 0 3px 5px #d4d4d4;
}


.dbox--color-2 {
	background: rgb(252, 190, 27);
	background: -moz-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
	background: -webkit-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
	background: linear-gradient(to bottom, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fcbe1b', endColorstr='#f85648', GradientType=0);
}
.dbox--color-2 .dbox__icon:after {
	background: #fee036;
	background: rgba(254, 224, 54, 0.81);
}
.dbox--color-2 .dbox__icon:before {
	background: #fee036;
	background: rgba(254, 224, 54, 0.64);
}
.dbox--color-2 .dbox__icon > i {
	background: #fb9f28;
}

.dbox--color-3 {
	background: rgb(183,71,247);
	background: -moz-linear-gradient(top, rgba(183,71,247,1) 0%, rgba(108,83,220,1) 100%);
	background: -webkit-linear-gradient(top, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
	background: linear-gradient(to bottom, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b747f7', endColorstr='#6c53dc',GradientType=0 );
}
.dbox--color-3 .dbox__icon:after {
	background: #b446f5;
	background: rgba(180, 70, 245, 0.76);
}
.dbox--color-3 .dbox__icon:before {
	background: #e284ff;
	background: rgba(226, 132, 255, 0.66);
}
.dbox--color-3 .dbox__icon > i {
	background: #8150e4;
}

.dbox--color-4 {
	background: rgb(183,71,247);
	background: -moz-linear-gradient(top, rgba(41, 106, 189, 0.54) 0%,rgb(0, 39, 244) 100%);
	background: -webkit-linear-gradient(top, rgba(41, 106, 189, 0.54) 0%,rgb(0, 39, 244) 100%);
	background: linear-gradient(to bottom, rgba(41, 106, 189, 0.54) 0%,rgb(0, 39, 244) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b747f7', endColorstr='#6c53dc',GradientType=0 );
}
.dbox--color-4 .dbox__icon:after {
	background: #4a6fe7;
	background: rgba(74, 111, 231,0.76);
}
.dbox--color-4 .dbox__icon:before {
	background: #84a8dc;
	background: rgba(132, 168, 220,0.76);
}
.dbox--color-4 .dbox__icon > i {
	background: #beebe7;
}
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
}
</style>

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
	<!-- END: Left Aside -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
			<!--Begin::Main Portlet-->
			<div class="row">
				<div class="col-xl-3" style="padding-left: 35px;">
					<!--begin:: Widgets/Blog-->
					<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
						<div class="m-portlet__head m-portlet__head--fit">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-action">
									<button type="button" class="btn btn-sm m-btn--pill  btn-brand">
										Profil
									</button>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="m-widget19">
								<div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
									<img src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="" class="img-thumbnail" style="width: 280px;height: 220px;">
									<div class="m-widget19__shadow"></div>
								</div>
								<div class="m-widget19__content" style="text-align: center;">
									<div class="m-widget19__header">
										<div class="m-widget19__user-img">
											<img src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="" class="img-thumbnail">
										</div>
										<div class="m-widget19__info">
											<span class="m-widget19__username">
												<b style="font-size: 14px;"><?= $data_admin->nama ?></b>
											</span>
											<br>
											<span class="m-badge m-badge--danger m-badge--wide">
												Administrator
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end:: Widgets/Blog-->
				</div>
				<div class="col-xl-9">
					<div class="box">
						<div class="box-body">
							<div class="row">
								<!-- ./col -->
								<div class="col-xl-3">
									<div class="dbox dbox--color-1">
										<div class="dbox__icon">
											<!-- <i class="glyphicon glyphicon-cloud"></i> -->
											<img src="<?= base_url() ?>public/media/icon/teacher.png" alt="" class="" style=" width: 40px;height: auto;">
										</div>
										<div class="dbox__body">
											<span class="dbox__count"><?= $totguru ?></span>
											<span class="dbox__title">GURU</span>
										</div>

										<div class="dbox__action">
											<a href="<?= base_url() ?>admin/guru" class="btn m-btn--pill btn-secondary m-btn m-btn--custom dbox__action__btn">Lihat Detail</a>
										</div>				
									</div>
								</div>
								<!-- ./col -->
								<div class="col-xl-3">
									<div class="dbox dbox--color-2">
										<div class="dbox__icon">
											<!-- <i class="glyphicon glyphicon-download"></i> -->
											<img src="<?= base_url() ?>public/media/icon/siswa.png" alt="" class="" style=" width: 40px;height: auto;">
										</div>
										<div class="dbox__body">
											<span class="dbox__count"><?= $totsiswa ?></span>
											<span class="dbox__title">SISWA</span>
										</div>

										<div class="dbox__action">
											<a href="<?= base_url() ?>admin/siswa" class="btn m-btn--pill btn-secondary m-btn m-btn--custom dbox__action__btn">Lihat Detail</a>
										</div>				
									</div>
								</div>
								<!-- ./col -->
								<div class="col-xl-3">
									<div class="dbox dbox--color-3">
										<div class="dbox__icon">
											<!-- <i class="glyphicon glyphicon-heart"></i> -->
											<img src="<?= base_url() ?>public/media/icon/kelas.png" alt="" class="" style=" width: 40px;height: auto;">
										</div>
										<div class="dbox__body">
											<span class="dbox__count"><?= $totkelas ?></span>
											<span class="dbox__title">KELAS</span>
										</div>

										<div class="dbox__action">
											<a href="<?= base_url() ?>admin/kelas" class="btn m-btn--pill btn-secondary m-btn m-btn--custom dbox__action__btn">Lihat Detail</a>
										</div>				
									</div>
								</div>
								<!-- ./col -->
								<div class="col-xl-3">
									<div class="dbox dbox--color-4">
										<div class="dbox__icon">
											<!-- <i class="glyphicon glyphicon-heart"></i> -->
											<img src="<?= base_url() ?>public/media/icon/matkul.png" alt="" class="" style=" width: 40px;height: auto;">
										</div>
										<div class="dbox__body">
											<span class="dbox__count"><?= $totmapel ?></span>
											<span class="dbox__title">MATA PELAJARAN</span>
										</div>

										<div class="dbox__action">
											<a href="<?= base_url() ?>admin/mapel" class="btn m-btn--pill btn-secondary m-btn m-btn--custom dbox__action__btn">Lihat Detail</a>
										</div>				
									</div>
								</div>
								<!-- ./col -->
							</div>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<h4>Selamat Datang <?= $data_admin->nama ?></h4>
							<p class="m-badge m-badge--danger m-badge--wide">Anda login sebagai Administrator</p>
						</div>
					</div>
				</div>
			</div>
			<!--Begin::Main Portlet-->
			<div class="row">
				<div class="col-xl-3" style="padding-left: 35px;">
					<!--begin:: Widgets/Audit Log-->
					<div class="m-portlet m-portlet--full-height">
						<div class="m-portlet__body">
							<div class="tab-content">
								<div class="tab-pane active" id="m_widget4_tab1_content">
									<div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
										<div class="m-list-timeline m-list-timeline--skin-light">
											<div class="m-list-timeline__items">
												<div class="m-list-timeline__item">
													<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
													<span class="m-list-timeline__text">
														<h7>Kepala Sekolah</h7>
														<br>
														<span class="m-badge m-badge--success m-badge--wide">
															<b style="color: black; font-size: 12px;"><?= $biodata->kepala ?></b>
														</span>
													</span>
												</div>
												<div class="m-list-timeline__item">
													<span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
													<span class="m-list-timeline__text">
														<h7>Alamat</h7>
														<br>
														<span class="m-badge m-badge--info m-badge--wide">
															<b style="color: black; font-size: 12px;"><?= $biodata->alamat ?></b>
														</span>
													</span>
												</div>
												<div class="m-list-timeline__item">
													<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
													<span class="m-list-timeline__text">
														<h7>No. Telepon</h7>
														<br>
														<span class="m-badge m-badge--warning m-badge--wide">
															<b style="color: black; font-size: 11px;"><?= $biodata->telepon ?></b>
														</span>
													</span>
												</div>
												<div class="m-list-timeline__item">
													<span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
													<span class="m-list-timeline__text">
														<h7>Email</h7>
														<br>
														<span class="m-badge m-badge--accent m-badge--wide">
															<b style="color: black; font-size: 10px;"><?= $biodata->email ?></b>
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end:: Widgets/Audit Log-->
				</div>
			</div>
			<!--End::Main Portlet-->     
		</div>
	</div>
</div>
<!-- end:: Body -->
