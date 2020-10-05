<?php  
$data_wali = $this->public_model->get_wali($this->session->userdata('id_wali'));
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

              <h5 class="text-center"><?= $data_wali->nama_wali ?></h5>
              <hr>
              <p class="text-center">Orang Tua/Wali</p>
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
            <h4>Selamat Datang <?= $data_wali->nama_wali ?></h4>
            <?php if (isset($data_wali->rombel)): ?>
              <p>Anda adalah Orang Tua/Wali dari siswa <b><?= $data_wali->nama_siswa ?></b> kelas <b><?= $data_wali->rombel ?></b></p>
            <?php endif ?>
            <p></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4>Pengumuman</h4>
            <p><?= $pengumuman->isi ?></p>
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