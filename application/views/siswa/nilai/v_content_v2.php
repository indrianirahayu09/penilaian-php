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
							Nilai
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
										Nilai
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
              <div class="row">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Mata Pelajaran</th>
                      <th>KKM</th>
                      <th>UH1</th>
                      <th>UH2</th>
                      <th>UTS</th>
                      <th>UAS</th>
                      <th>RATA-RATA</th>
                      <th>AKSI</th>
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
                      $kkm = $this->db->where('id_mapel', $value->id_mapel)->get('kkm')->row();
                      ?>
                      <?php  
                      $data_nilai = $this->db->where(array('id_siswa' => $siswa->id_siswa, 'id_mapel' => $value->id_mapel))->get('nilai')->row();
                      ?>
                      <tr>
                        <td><?= $value->nama_mapel ?></td>
                        <td><?= $kkm->kkm ?></td>
                        <td>
                          <?php if (empty($data_nilai->uh1)): ?>
                            -
                            <?php else: ?>
                              <?= $data_nilai->uh1  ?>
                            <?php endif ?>
                          </td>
                          <td>
                            <?php if (empty($data_nilai->uh2)): ?>
                              -
                              <?php else: ?>
                                <?= $data_nilai->uh2  ?>
                              <?php endif ?>
                            </td>
                            <td>
                              <?php if (empty($data_nilai->uts)): ?>
                                -
                                <?php else: ?>
                                  <?= $data_nilai->uts  ?>
                                <?php endif ?>
                              </td>
                              <td>
                                <?php if (empty($data_nilai->uas)): ?>
                                  -
                                  <?php else: ?>
                                    <?= $data_nilai->uas  ?>
                                  <?php endif ?>
                                </td>
                                <td>
                                  <?php if (empty($data_nilai->rata_rata)): ?>
                                    -
                                    <?php else: ?>
                                      <?= $data_nilai->rata_rata  ?>
                                    <?php endif ?>
                                  </td>
                                  <td>
                                   <?php if (empty($data_nilai->rata_rata)): ?>
                                    -
                                    <?php else: ?>
                                      <?php  
                                      if ($data_nilai->rata_rata < $kkm->kkm) 
                                      {
                                        echo "<span class='badge badge-danger'>Dibawah KKM</span>";
                                      }
                                      else
                                      {

                                        echo "<span class='badge badge-success'>Lulus</span>";
                                      }
                                      ?>
                                    <?php endif ?>
                                  </td>
                                </tr>
                              <?php endforeach ?>
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
        </div>