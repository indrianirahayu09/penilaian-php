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
							Data Mata Pelajaran
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
										Data Mata Pelajaran
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
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Data Mata Pelajaran
								</h3>
							</div>
						</div>
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
					</div>
					<div class="m-portlet__body">
						<!--begin: Search Form -->
						<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
							<div class="row align-items-center">
								<div class="col-xl-8 order-2 order-xl-1">
									<div class="form-group m-form__group row align-items-center">
										<div class="col-md-4">
											<div class="m-input-icon m-input-icon--left">
												<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
												<span class="m-input-icon__icon m-input-icon__icon--left">
													<span>
														<i class="la la-search"></i>
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 order-1 order-xl-2 m--align-right">
									<a href="<?= base_url() ?>admin/mapel/add" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
										<span>
											<i class="fa fa-plus"></i>
											<span>
												Tambah
											</span>
										</span>
									</a>
									<div class="m-separator m-separator--dashed d-xl-none"></div>
								</div>
							</div>
						</div>
						<!--end: Search Form -->
						<!--begin: Datatable -->
						<!-- <div class="m_datatable" id="local_data"> -->
							<table id="local_data1">
								<thead>
									<tr>
										<th>NO.</th>
										<th>KELOMPOK MATA PELAJARAN</th>
										<th>MATA PELAJARAN</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($data as $mapel){?>
										<tr>
											<td width="5%"><?= $no ++?></td>
											<td><?= $mapel->nama_kelompok ?></td>
											<td><?= $mapel->nama_mapel ?></td>
											<td width="20%">
												<a href="<?= base_url() ?>admin/mapel/edit/<?= $mapel->id_mapel ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill" title="Ubah">
													<i class="fa fa-edit"></i>
												</a>
												<a href="<?= base_url() ?>admin/mapel/delete/<?= $mapel->id_mapel ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick='return confirm("Apakah anda yakin ?")' title="hapus">
													<i class="fa fa-trash-o"></i>
												</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<!-- </div> -->
							<!--end: Datatable -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>