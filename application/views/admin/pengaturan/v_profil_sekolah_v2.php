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
							Profil Sekolah
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
										Pengaturan
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Profil Sekolah
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
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Pengaturan | Profil Sekolah
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<?php  
							echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
							?>
							<?php  
							if ($this->session->flashdata('sukses')) 
							{
								echo "<p class='alert alert-success alert-slide-up'>";
								echo $this->session->flashdata('sukses');
								echo "</p>";
							}
							?>
							<form action="<?= base_url() ?>admin/pengaturan/profil_sekolah" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Nama Sekolah</label>
										<input type="text" name="nama_sekolah" class="form-control" value="<?= $data->nama ?>" placeholder="Nama Sekolah" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Kepala Sekolah</label>
										<input type="text" name="kepala_sekolah" class="form-control" value="<?= $data->kepala ?>" placeholder="Kepala Sekolah" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Telepon</label>
										<input type="number" name="telepon" class="form-control" value="<?= $data->telepon ?>" placeholder="Telepon" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Email</label>
										<input type="email" name="email" class="form-control" value="<?= $data->email ?>" placeholder="Email" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Website</label>
										<input type="text" name="website" class="form-control" value="<?= $data->website ?>" placeholder="Website" required="">
									</div>
									<div class="form-group col-md-6">
										<div class="row">
											<div class="col-md-3">
												<?php if (empty($data->logo)): ?>
													<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
													<?php else: ?>
														<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-profil-sekolah/<?= $data->logo ?>" alt="">
													<?php endif ?>
												</div>
												<div class="col-md-9">
													<label for="">Logo</label>
													<input type="file" name="logo" class="form-control">
												</div>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label for="">Alamat</label>
											<textarea name="alamat" id="" class="form-control" placeholder="Alamat" required=""><?= $data->alamat ?></textarea>
										</div>
									</div>
									<hr>
									<button type="submit" class="btn btn-accent"><i class="fa fa-save"></i> Simpan</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>