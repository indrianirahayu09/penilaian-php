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
							Nilai Rapot
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
										Pelanggaran
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
												<a href="<?= base_url() ?>guru/rapot/nilai_rapot" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
										Pelanggaran (<?= $siswa->nama_siswa ?>)
									</h3>
								</div>
							</div>
						</div>
						<br>
						<div>
							<div class="row">
                <table>
                  <tbody class="table table-bordered">
                   <tr>
                    <td width="20%">Nama Sekolah</td><td width="1%">:</td><td width="39%" class="tbl"><?= $profil_sekolah->nama ?></td>
                    <td width="20%">Kelas</td><td width="1%">:</td><td width="19%" class="tbl"><?= $siswa->rombel ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td><td>:</td><td class="tbl"><?= $profil_sekolah->alamat ?></td>
                    <td>Semester</td><td>:</td><td class="tbl"><?= $semester->semester ?></td>
                  </tr>
                  <tr>
                    <td>Nama Siswa</td><td>:</td><td class="tbl"><?= $siswa->nama_siswa ?></td>
                    <td>Tahun Pelajaran</td><td>:</td><td class="tbl"><?= $semester->tahun_pelajaran ?></td>
                  </tr>
                  <tr>
                    <td>NIS / NISN</td><td>:</td><td class="tbl"><?= $siswa->nis ?> / <?= $siswa->nisn ?></td>
                    <td colspan="3"></td>
                  </tr>
                </tbody>
              </table><br>
              <b>CAPAIAN KOMPETENSI</b><br><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2" rowspan="2" width="30%">Mata Pelajaran</th>
                    <th colspan="3">Pengetahuan</th>
                    <th colspan="3">Keterampilan</th>
                  </tr>
                  <tr>
                    <th width="5%">Angka</th>
                    <th width="5%">Predikat</th>
                    <th width="25%">Deskripsi</th>
                    <th width="5%">Angka</th>
                    <th width="5%">Predikat</th>
                    <th width="25%">Deskripsi</th>
                  </tr>

                </thead>
                <tbody>
                  <?php foreach ($kelompok as $key => $value): ?>
                    <tr><td colspan="8"><b>KELOMPOK <?= $value->nama_kelompok ?></b></td></tr>
                    <?php  
                    $data_mapel = $this->db->where('id_kelompok_mapel', $value->id_kelompok_mapel)->get('mapel')->result();
                    ?>
                    <?php foreach ($data_mapel as $key => $value): ?>
                      <?php  
                      $data_rap = $this->db->where(array('id_siswa' => $siswa->id_siswa, 'id_mapel' => $value->id_mapel))->get('rapot')->row();

                      ?>
                      <tr>
                        <td class="ctr"><?= $key+1 ?></td>
                        <td><?= $value->nama_mapel ?></td>
                        <td class="ctr">
                          <?php if (empty($data_rap->p_angka)): ?>
                            -
                            <?php else: ?>
                              <?= $data_rap->p_angka ?>
                            <?php endif ?>
                          </td>
                          <td class="ctr">
                            <?php if (empty($data_rap->p_predikat)): ?>
                              -
                              <?php else: ?>
                                <?= $data_rap->p_predikat ?>
                              <?php endif ?>
                            </td>
                            <td class="font_kecil">
                             <?php if (empty($data_rap->p_predikat)): ?>
                              -
                              <?php else: ?>
                                <?php  
                                $desk_pth = $this->db->where(array('id_mapel' => $value->id_mapel,'predikat' => $data_rap->p_predikat))->get('deskripsi_pth ')->row();

                                ?>
                                <?= $desk_pth->deskripsi ?>
                              <?php endif ?>
                            </td>
                            <td class="ctr">
                              <?php if (empty($data_rap->k_angka)): ?>
                                -
                                <?php else: ?>
                                  <?= $data_rap->k_angka ?>
                                <?php endif ?>
                              </td>
                              <td class="ctr">
                                <?php if (empty($data_rap->k_predikat)): ?>
                                  -
                                  <?php else: ?>
                                    <?= $data_rap->k_predikat ?>
                                  <?php endif ?>
                                </td>
                                <td class="font_kecil">
                                 <?php if (empty($data_rap->k_predikat)): ?>
                                  -
                                  <?php else: ?>
                                   <?php  
                                   $desk_ktr = $this->db->where(array('id_mapel' => $value->id_mapel,'predikat' => $data_rap->k_predikat))->get('deskripsi_ktr')->row();

                                   ?>
                                   <?= $desk_ktr->deskripsi ?>
                                 <?php endif ?>
                               </td>
                             </tr>
                           <?php endforeach ?>
                         <?php endforeach ?>
                       </tbody>


                     </tr>
                   </table>  <br><br>

                   <table width="100%">
                    <tr>
                      <td  width="80%">
                        <table class="table table-bordered" width="100%">
                          <thead>
                            <tr>
                              <th width="5%">No</th>
                              <th width="45%">Ekstra Kurikuler</th>
                              <th width="50%">Kegiatan yang telah dilakukan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td width="60%">
                      </td>
                    </tr>
                  </table>
                  <br>
                  <table width="100%">
                    <tr>
                      <td  width="40%">
                        <table class="table table-bordered" width="100%">
                          <tr>
                            <td colspan="2">Ketidakhadiran</td>
                          </tr>
                          <tr><td width="60%">Sakit</td><td width="40%" class="ctr">0 &nbsp; hari</td></tr>
                          <tr><td>Izin</td><td class="ctr">0 &nbsp; hari</td></tr>
                          <tr><td>Tanpa Keterangan</td><td class="ctr">0 &nbsp; hari</td></tr>
                        </table>
                      </td>
                      <td width="60%">
                      </td>
                    </tr>
                  </table>
                  <table width="100%">
                    <tr>
                      <td width="10%"></td>
                      <td width="20%">
                        Mengetahui : <br>
                        Orang Tua/Wali, <br>
                        <br><br><br><br>
                        <u>..........................</u>
                      </td>
                      <td width="8%"></td>
                      <td width="25%">
                      </td>
                      <td width="8%"></td>
                      <td width="29%">
                        Yogyakarta, 31 Juli 2020  <br>
                        Wali Kelas, <br>
                        <br><br><br><br>
                        <u><b>Aris Abdul Ajis</b></u><br>
                      NIP. 5150411283           </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>