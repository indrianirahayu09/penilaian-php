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
							Tambah Data Siswa
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
										Data Siswa
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Tambah Data Siswa
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
												<a href="<?= base_url() ?>admin/siswa" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
										Tambah Data Kelas
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<?php  
							echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
							?>
							<form enctype="multipart/form-data" action="<?= base_url() ?>admin/siswa/add" method="post">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">NISN</label>
										<input type="text" name="nisn" class="form-control" placeholder="NISN" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">NIS</label>
										<input type="text" name="nis" class="form-control" placeholder="NIS" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Nama Siswa</label>
										<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Jenis Kelamin</label>
										<select name="jk_siswa" id="" class="form-control" required="">
											<option value="">- Pilih Jenis Kelamin -</option>
											<option value="L">Laki-Laki</option>
											<option value="P">Perempuan</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Foto</label>
										<input type="file" name="foto" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label for="">Alamat</label>
										<textarea name="alamat" id="" class="form-control" placeholder="Alamat Lengkap"></textarea>
									</div>
									<div class="form-group col-md-6">
										<label for="">Kelas</label>
										<select name="id_kelas" id="" class="form-control" required="">
											<option value="">- Pilih Kelas -</option>
											<?php foreach ($kelas as $key => $value): ?>
												<option value="<?= $value->id_kelas ?>"><?= $value->kelas ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Rombel</label>
										<select name="id_rombel" id="" class="form-control" required="">
											<option value="">- Pilih Rombel -</option>
											<?php foreach ($rombel as $key => $value): ?>
												<option value="<?= $value->id_rombel ?>"><?= $value->rombel ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Nama Orang Tua/Wali</label>
										<input type="text" name="nama_wali" class="form-control" placeholder="Nama Orang TUa/Wali" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Telepon Orang Tua/Wali</label>
										<input type="text" name="telepon_wali" class="form-control" placeholder="Telepon Orang Tua/Wali" required="">
									</div>
									<div class="form-group col-md-12">
										<label for="">Alamat Orang Tua/Wali</label>
										<textarea name="alamat_wali" id="" class="form-control" placeholder="Alamat Lengkap Orang Tua/Wali"></textarea>
									</div>
								</div>
								<hr>
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