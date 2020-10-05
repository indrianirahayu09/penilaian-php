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
							Tahun Akademik
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
										Tahun Akademik
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
										Pengaturan | Tahun Akademik
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
							<form action="<?= base_url() ?>admin/pengaturan/tahun_akademik" method="post">
								<div class="form-group">
									<label for="">Semester</label>
									<select name="semester" id="" class="form-control" required="">
										<option value="">- Pilih Semester -</option>
										<option value="Genap" <?php if ($data->semester=="Genap") {echo "selected";} ?>>Genap</option>
										<option value="Ganjil" <?php if ($data->semester=="Ganjil") {echo "selected";} ?>>Ganjil</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tahun Pelajaran</label>
									<input type="text" name="tahun_ajaran" value="<?= $data->tahun_pelajaran ?>" class="form-control" placeholder="Tahun Pelajaran" required="">
								</div>
								<hr>
								<button type="submit" class="btn btn-accent"><i class="fa fa-save"></i> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>