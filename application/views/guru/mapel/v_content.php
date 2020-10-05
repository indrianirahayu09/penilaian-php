<?php  
$data_guru = $this->public_model->get_guru($this->session->userdata('id_guru'));
$data_jadwal = $this->public_model->get_jadwal($this->session->userdata('id_guru'));
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

     <!-- /.col-md-6 -->
     <div class="row">
       <?php foreach ($data as $key => $value): ?>
         <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5><?= $value->nama_mapel ?></h5>
              <strong><?= $value->rombel ?></strong>
            </div>
            <div class="card-footer">
              <center><a href="<?= base_url() ?>guru/nilai/input/<?= $value->id_jadwal ?>" class="small-box-footer">Input Nilai <i class="fas fa-file-text"></i></a></center>
            </div>
            <div class="card-footer">
              <center><a href="<?= base_url() ?>guru/rapot/input/<?= $value->id_jadwal ?>" class="small-box-footer">Input Nilai Rapot <i class="fas fa-file-text"></i></a></center>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>


    <!-- /.col-md-6 -->
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>