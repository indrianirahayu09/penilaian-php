<?php  
$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
$data_jadwal = $this->public_model->get_jadwal($this->session->userdata('id_guru'));
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

              <h5 class="text-center"><?= $data_guru->nama_guru ?></h5>
              <hr>
              <p class="text-center">Guru</p>
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
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $totmapel ?></h3>

                    <p>MAPEL DIAMPU</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="<?= base_url() ?>guru/mapel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?= $totsiswa ?></h3>

                    <p>SISWA</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="<?= base_url() ?>guru/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              
              
              <!-- ./col -->

              <!-- ./col -->
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4>Selamat Datang <?= $data_guru->nama_guru ?></h4>
            <?php if (isset($data_guru->rombel)): ?>
              <p>Anda adalah wali kelas <b><?= $data_guru->rombel ?></b></p>
            <?php endif ?>
            <p></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
           <h4 class="text-center">Jadwal Mengajar</h4>
           <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO.</th>
                <th>HARI</th>
                <th>KELAS</th>
                <th>MAPEL</th>
                <th>JAM MULAI</th>
                <th>JAM SELESAI</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($data_jadwal as $jadwal){?>
                <tr>
                  <td><?= $no ++?></td>
                  <td><?= $jadwal->hari ?></td>
                  <td width="12%"><?= $jadwal->rombel ?></td>
                  <td><?= $jadwal->nama_mapel ?></td>
                  <td width="18%"><?= $jadwal->jam_mulai ?></td>
                  <td width="18%"><?= $jadwal->jam_selesai ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
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