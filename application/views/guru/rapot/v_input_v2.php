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
							Input Nilai Rapot
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
										Rapot
									</span>
								</a>
							</li>
							<li class="m-nav__separator">
								-
							</li>
							<li class="m-nav__item">
								<a href="" class="m-nav__link">
									<span class="m-nav__link-text">
										Input Nilai Rapot
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
										Input Nilai Rapot
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

							<table class="table table-bordered" id="local_data2">
								<thead>
									<tr>
										<th rowspan="2" class="ctr" style="vertical-align: middle;">No.</th>
										<th rowspan="2" class="ctr" style="vertical-align: middle;">Nama Siswa</th>
										<th colspan="3" class="ctr">Pengetahuan</th>
										<th colspan="3" class="ctr">Keterampilan</th>
										<th rowspan="2" class="ctr" style="vertical-align: middle;">Aksi</th>
									</tr>
									<tr>
										<th class="ctr">Angka</th>
										<th class="ctr">Predikat</th>
										<th class="ctr">Deskripsi</th>
										<th class="ctr">Angka</th>
										<th class="ctr">Predikat</th>
										<th class="ctr">Deskripsi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($siswa as $key => $value): ?>
										<tr class="row_<?= $value->id_siswa; ?>">
											<td class="ctr"><?= $key+1 ?></td>
											<td style="width: 200px;">
												<?= $value->nama_siswa ?>
											</td>

											<?php  
											$cek = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('rapot')->num_rows();
											$data_ap = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('rapot')->row();
											?>
											<?php if ($cek > 0): ?>
												<td class="ctr">
													<?= $data_ap->p_angka; ?>
												</td>
												<td class="ctr">
													<?= $data_ap->p_predikat; ?>
												</td>
												<td style="font-size: 11px;">
													<?php


													$data = $this->db->where(array('id_mapel' => $detail->id_mapel,'predikat' => $data_ap->p_predikat))->get('deskripsi_pth')->row();

													echo $data->deskripsi;
													?>
												</td>
												<td class="ctr">
													<?= $data_ap->k_angka; ?>
												</td>
												<td class="ctr">
													<?= $data_ap->k_predikat; ?>
												</td>
												<td style="font-size: 11px;">
													<?php


													$data = $this->db->where(array('id_mapel' => $detail->id_mapel,'predikat' => $data_ap->k_predikat))->get('deskripsi_ktr')->row();

													echo $data->deskripsi;
													?>
												</td>
												<td class="ctr" style="font-weight: bold;font-size: 16px;">
													<span class="fa fa-check"></span>
												</td>
												<?php else: ?>     
													<td class="ctr">
														<input type="number" name="p_angka" maxlength='2' class="form-control p_angka_<?= $value->id_siswa; ?>" style='width:60px !important;' data-ids='<?= $value->id_siswa ?>'>
														<div class="pa_<?= $value->id_siswa; ?>"></div>
													</td>
													<td class="ctr">
														<input type="text" name="p_predikat" class="form-control p_predikat_<?= $value->id_siswa; ?>" style='width:50px !important;background:#fff;border:none;' disabled>
														<div class="pp_<?= $value->id_siswa; ?>"></div>
													</td>
													<td style="min-width: 150px;">
														<textarea style="font-size:11px !important;background: #fff;border:none !important;" cols="30" rows="5" name="pth_des_" class="form-control pth_des_<?= $value->id_siswa; ?>" disabled></textarea>
													</td>
													<td class="ctr">
														<input type="number" name="k_angka" maxlength='2' class="form-control k_angka_<?= $value->id_siswa; ?>" style='width:50px !important;' data-ids='<?= $value->id_siswa ?>'>

														<div class="ka_<?= $value->id_siswa; ?>"></div>
													</td>
													<td class="ctr">
														<input type="text" name="k_predikat" class="form-control k_predikat_<?= $value->id_siswa; ?>" style='width:50px !important;background:#fff;border:none;' disabled>
														<div class="kp_<?= $value->id_siswa; ?>"></div>
													</td>
													<td style="min-width: 150px;">
														<textarea style="font-size:11px !important;background: #fff;border:none !important;" cols="30" rows="5" name="ktr_des_" class="form-control ktr_des_<?= $value->id_siswa; ?>" disabled></textarea>
													</td>
													<td class="ctr" id="act_<?= $value->id_siswa; ?>">
														<button type="submit" name="submit" data-id="<?= $value->id_siswa; ?>" class="btn btn-default btn-act" id="submit-<?= $value->id_siswa; ?>" data-toggle="tooltip" data-placement="top" title="Simpan">
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