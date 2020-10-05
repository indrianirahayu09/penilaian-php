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
							Ubah Data Kelas
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
										Data Kelas
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Ubah Data Kelas
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
												<a href="<?= base_url() ?>admin/kelas" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
										Ubah Data Kelas
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<?php  
							echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
							?>
							<form action="<?= base_url() ?>admin/kelas/edit/<?= $detail->id_rombel ?>" method="post">
								<div class="row">
									<div class="form-group col-md-12">
										<label for="">Nama Kelas</label>
										<input type="text" name="rombel" value="<?= $detail->rombel ?>" class="form-control" placeholder="Contoh : 10 IPA A" required="">
									</div>
									<div class="form-group col-md-12">
										<label for="">Jurusan</label>
										<select name="id_jurusan" id="" class="form-control" required="">
											<option value="">- Pilih Jurusan -</option>
											<?php foreach ($jurusan as $key => $value): ?>
												<option value="<?= $value->id_jurusan ?>" <?php if ($detail->id_jurusan==$value->id_jurusan) {echo "selected";} ?>><?= $value->kode_jurusan ?> | <?= $value->nama_jurusan ?></option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-md-12">
										<label for="">Wali Kelas</label>
										<select name="id_guru" id="" class="form-control" required="">
											<option value="">- Pilih Wali Kelas -</option>
											<?php foreach ($guru as $key => $value): ?>
												<option value="<?= $value->id_guru ?>" <?php if ($detail->id_guru==$value->id_guru) {echo "selected";} ?>><?= $value->nama_guru ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-accent"><i class="fa fa-edit"></i> Ubah</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>