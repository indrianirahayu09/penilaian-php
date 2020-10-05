<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Profil Sekolah</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Profil Sekolah</li>
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
              <h3 class="card-title"> PENGATURAN | PROFIL SEKOLAH</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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

              <form action="<?= base_url() ?>admin/pengaturan/profil_sekolah" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control" value="<?= $data->nama ?>" placeholder="Nama Sekolah" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Kepala Sekolah</label>
                    <input type="text" name="kepala_sekolah" class="form-control" value="<?= $data->kepala ?>" placeholder="Kepala Sekolah" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Telepon</label>
                    <input type="number" name="telepon" class="form-control" value="<?= $data->telepon ?>" placeholder="Telepon" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $data->email ?>" placeholder="Email" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Website</label>
                    <input type="text" name="website" class="form-control" value="<?= $data->website ?>" placeholder="Website" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <div class="row">
                      <div class="col-md-3">
                        <?php if (empty($data->logo)): ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
                          <?php else: ?>
                            <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-profil-sekolah/<?= $data->logo ?>" alt="">
                          <?php endif ?>
                        </div>
                        <div class="col-md-9">
                          <label for="">Logo</label>
                          <input type="file" name="logo" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="">Alamat</label>
                      <textarea name="alamat" id="" class="form-control" placeholder="Alamat" required=""><?= $data->alamat ?></textarea>
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
