<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
	<!-- END: Left Aside -->
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
			<!-- BEGIN: Subheader -->
			<div class="m-subheader ">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title m-subheader__title--separator">
							Tambah Data Jadwal
						</h3>
						<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
							<li class="m-nav__item m-nav__item--home">
								<a href="#" class="m-nav__link m-nav__link--icon">
									<i class="m-nav__link-icon la la-home"></i>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Dashboard
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Data Master
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Data Jadwal
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Tambah Data Jadwal
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END: Subheader -->
			<div class="m-content">
				<div class="m-portlet m-portlet--mobile">
					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-8 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-4">
											<div class="col-xl-4 order-1 order-xl-2 m--align-right">
												<a href="<?= base_url() ?>admin/jadwal" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
													<span>
														<i class="fa fa-arrow-left"></i>
														<span>
															Kembali
														</span>
													</span>
												</a>
												<div class="m-separator m-separator--dashed d-xl-none"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Tambah Data Jadwal
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<?php  
							echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
							?>
							<form action="<?= base_url() ?>admin/jadwal/add" method="post">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Hari</label>
										<select name="hari" id="" class="form-control" required="">
											<option value="">- Pilih Hari -</option>
											<option value="Senin">Senin</option>
											<option value="Selasa">Selasa</option>
											<option value="Rabu">Rabu</option>
											<option value="Kamis">Kamis</option>
											<option value="Jum'at">Jum'at</option>
											<option value="Sabtu">Sabtu</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="mapel">Mata Pelajaran</label>
										<select class="form-control" name="mapel">
											<option value="">- Pilih Mata Pelajaran -</option>
											<?php foreach ($mapel as $key => $value): ?>
												<option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Kelas</label>
										<select class="form-control" name="kelas">
											<option value="">- Pilih Kelas -</option>
											<?php foreach ($rombel as $key => $value): ?>
												<option value="<?= $value->id_rombel ?>"><?= $value->rombel ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Guru</label>
										<select class="form-control" name="guru">
											<option value="">- Pilih Guru -</option>
											<?php foreach ($guru as $key => $value): ?>
												<option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Jam Mulai</label>
										<input type="time" name="jam_mulai" class="form-control" placeholder='JJ:mm:dd' required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Jam Selesai </label>
										<input type="time" name="jam_selesai" class="form-control" placeholder='JJ:mm:dd' required="">
									</div>
								</div>
								<button type="submit" class="btn btn-accent"><i class="fa fa-save"></i> Simpan</button>
								<button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>