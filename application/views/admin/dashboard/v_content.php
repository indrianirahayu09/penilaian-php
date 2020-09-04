<?php  
$data_admin = $this->public_model->get_admin($this->session->userdata('id_admin'));
$totguru  = $this->public_model->totguru();
$totsiswa = $this->public_model->totsiswa();
$totkelas = $this->public_model->totkelas();
$totmapel = $this->public_model->totmapel();
$biodata  = $this->public_model->get_profil_sekolah();
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
         <!--  <h1 class="m-0 text-dark"> Dashboard</h1> -->
       </div><!-- /.col -->
       <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
           <!--  <li class="breadcrumb-item"><a href="#">Dasbor</a></li> --><!-- 
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Top Navigation</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <img src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="" class="img-thumbnail">
              <hr>

              <h5 class="text-center"><?= $data_admin->nama ?></h5>
              <hr>
              <p class="text-center">Administrator</p>
            </div>
          </div>
          
          <div class="card card-outline">
            <div class="card-body">
              <h5>Kepala Sekolah</h5>
              <p class="card-text">
                <?= $biodata->kepala ?>
              </p>
              <hr>
              <h5>Alamat</h5>
              <p class="card-text">
                <?= $biodata->alamat ?>
              </p>
              <hr>
              <h5>No. Telepon</h5>
              <p class="card-text">
                <?= $biodata->telepon ?>
              </p>
              <hr>
              <h5>Email</h5>
              <p class="card-text">
               <?= $biodata->email ?>
             </p>
           </div>
         </div><!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
       <div class="col-lg-9">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $totguru ?></h3>

                    <p>GURU</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?= $totsiswa ?></h3>

                    <p>SISWA</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?= $totkelas ?></h3>

                    <p>KELAS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3><?= $totmapel ?></h3>

                    <p>MATA PELAJARAN</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <!-- ./col -->
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4>Selamat Datang <?= $data_admin->nama ?></h4>
            <p>Anda login sebagai Administrator</p>
          </div>
        </div>

      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>