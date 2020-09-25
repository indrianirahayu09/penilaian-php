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
							Profil
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
										Profil
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
										Pengaturan | Profil
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
							<form action="<?= base_url() ?>admin/pengaturan/profil" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="">Username</label>
										<input type="text" name="username" value="<?= $detail->username ?>" class="form-control" placeholder="Username" readonly="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Nama Lengkap</label>
										<input type="text" name="nama" value="<?= $detail->nama ?>" class="form-control" placeholder="Nama Lengkap" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Email</label>
										<input type="text" name="email" value="<?= $detail->email ?>" class="form-control" placeholder="Email" required="">
									</div>
									<div class="form-group col-md-6">
										<label for="">Jenis Kelamin</label>
										<select name="jk" id="" class="form-control" required="">
											<option value="">- Pilih Jenis Kelamin -</option>
											<option value="Laki-Laki" <?php if ($detail->jk=="Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
											<option value="Perempuan" <?php if ($detail->jk=="Perempuan") {echo "selected";} ?>>Perempuan</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Telepon</label>
										<input type="text" name="telepon" value="<?= $detail->telepon ?>" class="form-control" placeholder="Telepon" required="">
									</div>
									<div class="form-group col-md-6">
										<div class="row">
											<div class="col-md-3">
												<?php if (empty($detail->foto)): ?>
													<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
													<?php else: ?>
														<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-staff/<?= $detail->foto ?>" alt="">
													<?php endif ?>
												</div>
												<div class="col-md-9">
													<label for="">Foto</label>
													<input type="file" name="foto" class="form-control">
												</div>
											</div>

										</div>
										<div class="form-group col-md-12">
											<label for="">Alamat</label>
											<textarea name="alamat" class="form-control" placeholder="Alamat" required=""><?= $detail->alamat ?></textarea>
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