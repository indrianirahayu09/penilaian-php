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
							Input Nilai
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
										Nilai
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Input Nilai
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
												<a href="<?= base_url() ?>guru/mapel" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
										Input Nilai
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
							<table class="table table-striped">
								<tr>
									<th width="15%">Kelas</th>
									<th width="5%">:</th>
									<th><?= $detail->rombel ?></th>
								</tr>
								<tr>
									<th>Wali Kelas</th>
									<th>:</th>
									<th><?= $wali_kelas ?></th>
								</tr>
								<tr>
									<th>Mata Pelajaran</th>
									<th>:</th>
									<th><?= $detail->nama_mapel ?></th>
								</tr>
								<tr>
									<th>KKM</th>
									<th>:</th>
									<th><?= $kkm->kkm ?></th>
								</tr>
							</table>
							<hr>
							<input type="hidden" name="kkm" value="<?= $kkm->kkm ?>">
							<input type="hidden" name="id_mapel" value="<?= $detail->id_mapel ?>">
							<input type="hidden" name="id_rombel" value="<?= $detail->id_rombel ?>">
							<input type="hidden" name="id_guru" value="<?= $detail->id_guru ?>">
							<br>
							<table id="local_data1">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Siswa</th>
										<th>UH1</th>
										<th>UH2</th>
										<th>UTS</th>
										<th>UAS</th>
										<th>RATA-RATA</th>
										<th>AKSI</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($siswa as $key => $value): ?>
										<tr>
											<td><?= $key+1 ?></td>
											<td><?= $value->nama_siswa ?></td>
											<?php  
											$cek = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('nilai')->num_rows();
											$data_n = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('nilai')->row();
											?>
											<?php if ($cek > 0): ?>

												<td><?= $data_n->uh1 ?></td>
												<td><?= $data_n->uh2 ?></td>
												<td><?= $data_n->uts ?></td>
												<td><?= $data_n->uas ?></td>
												<td><?= $data_n->rata_rata ?></td>
												<td><i class="fa fa-check"></i></td>
												<?php else: ?>
													<td>
														<input type="number" name="uh1" maxlength='2' class="form-control u_harian1_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
														<div class="uh1_<?= $value->id_siswa; ?>"></div>
													</td>
													<td>
														<input type="number" name="uh2" maxlength='2' class="form-control u_harian2_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
														<div class="uh2_<?= $value->id_siswa; ?>"></div>
													</td>
													<td>
														<input type="number" name="uts" maxlength='2' class="form-control ut_s_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
														<div class="uts_<?= $value->id_siswa; ?>"></div>
													</td>
													<td >
														<input type="number" name="uas" maxlength='2' class="form-control ua_s_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
														<div class="uas_<?= $value->id_siswa; ?>"></div>
													</td>
													<td >
														<input type="text" name="hasil" maxlength='2' class="form-control hasil_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
														<div class="hasi_l_<?= $value->id_siswa; ?>"></div>
													</td>
													<td id="act_<?= $value->id_siswa; ?>">
														<button type="submit" name="submit" data-id="<?= $value->id_siswa; ?>" class="btn btn-default btn-aks" id="submit-<?= $value->id_siswa; ?>" data-toggle="tooltip" data-placement="top" title="Simpan">
															<span class="fa fa-save"></span>
														</button>
													</td>
												<?php endif ?>

											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>