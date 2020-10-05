<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
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
							Grafik Nilai
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
										Grafik Nilai
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
										Grafik Nilai (<?= $siswa->nama_siswa ?>) <?= $nilai ?>
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
              </table>

              
                 
                </div>
                <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    
                    <h3 class="kt-portlet__head-title">
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div id="chart"></div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
Morris.Bar({

  element : 'chart',
  data:[<?php echo $nilai; ?>],
  xkey: 'mapel',
  ymax: 100,
  ymin:0,
  ykeys: ['Pengetahuan', 'Keterampilan'],
  labels: ['Pengetahuan', 'Keterampilan'],
  barColors: ['#2abe81', '#24a5ff']

});

</script>