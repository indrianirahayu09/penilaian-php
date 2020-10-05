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
							Detail Data Guru
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
										Data Guru
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Detail Data Guru
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
										Detail Data Guru
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<div class="row">
								<div class="col-md-8">
									<table class="table table-striped">
										<tr>
											<th width="20%">Jenis PTK</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--accent m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->jenis_ptk ?></b>
											</span></td>
										</tr>
										<tr>
											<th width="20%">NIP</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--default m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->nip ?></b>
											</span></td>
										</tr>
										<tr>
											<th width="20%">Nama Lengkap</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--success m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->nama_guru ?></b>
											</span></td>
										</tr>
										<tr>
											<th width="20%">Jenis Kelamin</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--danger m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->jk_guru ?></b>
											</span></td>
										</tr>
										<tr>
											<th width="20%">Telepon</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--warning m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->telepon_guru ?></b>
											</span></td>
										</tr>
										<tr>
											<th width="20%">Alamat</th>
											<td width="5%">:</td>
											<td><span class="m-badge m-badge--info m-badge--wide">
												<b style="color: black; font-size: 12px;"><?= $detail->alamat_guru ?></b>
											</span></td>
										</tr>


									</table>
								</div>
								<div class="col-md-4">
									<center>
										<?php if (empty($detail->foto_guru)): ?>
											<img class="img-thumbnail" width="250" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
											<?php else: ?>
												<img class="img-thumbnail" width="250" src="<?= base_url() ?>public/media/upload-guru/<?= $detail->foto_guru ?>" alt="">
											<?php endif ?>
										</center>
										<br>
										<center>
											<a href="<?= base_url() ?>admin/guru/edit/<?= $detail->id_guru ?>" class="btn btn-danger"><i class="fa fa-edit"></i> Ubah</a>
										</center>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>