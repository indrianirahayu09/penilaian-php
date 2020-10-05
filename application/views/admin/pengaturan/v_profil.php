<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Profil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Profil</li>
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
              <h3 class="card-title"> PENGATURAN | PROFIL</h3>
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

              <form action="<?= base_url() ?>admin/pengaturan/profil" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Username</label>
                    <input type="text" name="username" value="<?= $detail->username ?>" class="form-control" placeholder="Username" readonly="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $detail->nama ?>" class="form-control" placeholder="Nama Lengkap" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="text" name="email" value="<?= $detail->email ?>" class="form-control" placeholder="Email" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control" required="">
                      <option value="">- Pilih Jenis Kelamin -</option>
                      <option value="Laki-Laki" <?php if ($detail->jk=="Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php if ($detail->jk=="Perempuan") {echo "selected";} ?>>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Telepon</label>
                    <input type="text" name="telepon" value="<?= $detail->telepon ?>" class="form-control" placeholder="Telepon" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <div class="row">
                      <div class="col-md-3">
                        <?php if (empty($detail->foto)): ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
                          <?php else: ?>
                            <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-staff/<?= $detail->foto ?>" alt="">
                          <?php endif ?>
                        </div>
                        <div class="col-md-9">
                         <label for="">Foto</label>
                         <input type="file" name="foto" class="form-control">
                       </div>
                     </div>

                   </div>
                   <div class="form-group col-md-12">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat" required=""><?= $detail->alamat ?></textarea>
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
