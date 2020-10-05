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
							Profil Guru
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
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-8 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-4">
											<div class="col-xl-4 order-1 order-xl-2 m--align-right">
												<a href="<?= base_url() ?>admin/guru" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
										Profil Guru
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
								<div class="row">
									<div class="form-group col-md-6">
										<div class="row">
											<div class="col-md-3">
												<?php if (empty($detail->foto_guru)): ?>
													<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
													<?php else: ?>
														<img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-guru/<?= $detail->foto_guru ?>" alt="">
													<?php endif ?>
												</div>
											</div>

										</div>
									<div class="form-group col-md-6">
										<label for="">NIP</label>
										<input type="number" name="nip" value="<?= $detail->nip ?>" class="form-control" placeholder="NIP" disabled>
									</div>
									<div class="form-group col-md-6">
										<label for="">Nama Guru</label>
										<input type="text" name="nama" value="<?= $detail->nama_guru ?>" class="form-control" placeholder="Nama Guru" disabled>
									</div>
									<div class="form-group col-md-6">
										<label for="">Jenis Kelamin</label>
										<select name="jk" id="" class="form-control" disabled>
											<option value="">- Pilih Jenis Kelamin -</option>
											<option value="Laki-Laki" <?php if ($detail->jk_guru=="Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
											<option value="Perempuan" <?php if ($detail->jk_guru=="Perempuan") {echo "selected";} ?>>Perempuan</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="">Telepon</label>
										<input type="number" name="telepon" value="<?= $detail->telepon_guru ?>" class="form-control" placeholder="Telepon" disabled>
									</div>
									<div class="form-group col-md-6">
										<label for="">Jenis PTK</label>
										<select name="jenis_ptk" id="" class="form-control" disabled>
											<option value="">- Pilih Jenis PTK -</option>

											<option value="Guru Mapel" <?php if ($detail->jenis_ptk=="Guru Mapel") {echo "selected";} ?>>Guru Mapel</option>
											<option value="Guru BK" <?php if ($detail->jenis_ptk=="Guru BK") {echo "selected";} ?>>Guru BK</option>
											<option value="Guru" <?php if ($detail->jenis_ptk=="Guru") {echo "selected";} ?>>Guru</option>
											<option value="Tata Usaha" <?php if ($detail->jenis_ptk=="Tata Usaha") {echo "selected";} ?>>Tata Usaha</option>
											<option value="Tim IT" <?php if ($detail->jenis_ptk=="Tim IT") {echo "selected";} ?>>Tim IT</option>
											<option value="Lainnya" <?php if ($detail->jenis_ptk=="Lainnya") {echo "selected";} ?>>Lainnya</option>

										</select>
									</div>
									
										<div class="form-group col-md-12">
											<label for="">Alamat</label>
											<textarea name="alamat" id="" class="form-control" placeholder="Alamat" disabled><?= $detail->alamat_guru ?></textarea>
										</div>
									</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>