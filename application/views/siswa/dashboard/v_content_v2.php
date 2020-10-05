<?php  
$data_siswa = $this->public_model->get_siswa($this->session->userdata('id_siswa'));
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
												<b style="font-size: 14px;"><?= $data_siswa->nama_siswa ?></b>
											</span>
											<br>
											<span class="m-badge m-badge--danger m-badge--wide">
												Siswa
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
							<h4>Selamat Datang <?= $data_siswa->nama_siswa ?></h4>
							<?php if (isset($data_siswa->rombel)): ?>
								<p>Anda adalah rombongan belajar <b class="m-badge m-badge--info m-badge--wide"><?= $data_siswa->rombel ?></b></p>
							<?php endif ?>
							<p></p>
						</div>
					</div>
					<div class="box">
						<div class="box-body">
							<h4>Pengumuman</h4>
							<p><?= $pengumuman->isi ?></p>
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
