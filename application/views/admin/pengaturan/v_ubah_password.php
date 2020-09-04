<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Ubah Password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Ubah Password</li>
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
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> PENGATURAN | UBAH PASSWORD</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
               <?php  
              if ($this->session->flashdata('danger')) 
              {
                echo "<p class='alert alert-danger alert-slide-up'>";
                echo $this->session->flashdata('danger');
                echo "</p>";
              }
              ?>
              <?php  
              if ($this->session->flashdata('sukses')) 
              {
                echo "<p class='alert alert-success alert-slide-up'>";
                echo $this->session->flashdata('sukses');
                echo "</p>";
              }
              ?>

              <form action="<?= base_url() ?>admin/pengaturan/ubah_password" method="post">
                <div class="row">
                  <input type="hidden" name="username" value="<?= $detail->username ?>">
                  <div class="form-group col-md-12">
                    <label for="">Password Lama</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password Lama" required="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Password Baru</label>
                    <input type="password" name="password" class="form-control" placeholder="Password Baru" required="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Konfirmasi Password</label>
                    <input type="password" name="repassword" class="form-control" placeholder="Konfirmasi Password" required="">
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- form insert jurusan -->

<!-- form insert jurusan -->
