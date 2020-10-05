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
							Data Orang Tua/Wali
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
										Data Orang Tua/Wali
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
									Data Orang Tua/Wali
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
						<!--end: Search Form -->
						<!--begin: Datatable -->
						<!-- <div class="m_datatable" id="local_data"> -->
							<table id="local_data1">
								<thead>
									<tr>
										<th>NO.</th>
										<th>NAMA SISWA</th>
										<th>ROMBEL</th>
										<th>NAMA WALI</th>
										<th>TELEPOM WALI</th>
										<th>ALAMAT WALI</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach($data as $siswa){?>
										<tr>
											<td width="5%"><?= $no ++?></td>
											<td width="18%"><?= $siswa->nama_siswa ?></td>
											<td><?= $siswa->rombel ?></td>
											<td width="12%"><?= $siswa->nama_wali ?></td>
											<td width="15%"><?= $siswa->telepon_wali ?></td>
											<td><?= $siswa->alamat_wali ?></td>
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