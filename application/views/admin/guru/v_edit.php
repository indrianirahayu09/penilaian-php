<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ubah Data Guru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Guru</li>
            <li class="breadcrumb-item active">Ubah Data Guru</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/guru" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> UBAH DATA GURU</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/guru/edit/<?= $detail->id_guru ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Jenis PTK</label>
                    <select name="jenis_ptk" id="" class="form-control" required="">
                      <option value="">- Pilih Jenis PTK -</option>

                      <option value="Guru Mapel" <?php if ($detail->jenis_ptk=="Guru Mapel") {echo "selected";} ?>>Guru Mapel</option>
                      <option value="Guru BK" <?php if ($detail->jenis_ptk=="Guru BK") {echo "selected";} ?>>Guru BK</option>
                      <option value="Guru" <?php if ($detail->jenis_ptk=="Guru") {echo "selected";} ?>>Guru</option>
                      <option value="Tata Usaha" <?php if ($detail->jenis_ptk=="Tata Usaha") {echo "selected";} ?>>Tata Usaha</option>
                      <option value="Tim IT" <?php if ($detail->jenis_ptk=="Tim IT") {echo "selected";} ?>>Tim IT</option>
                      <option value="Lainnya" <?php if ($detail->jenis_ptk=="Lainnya") {echo "selected";} ?>>Lainnya</option>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIP</label>
                    <input type="number" name="nip" value="<?= $detail->nip ?>" class="form-control" placeholder="NIP" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Guru</label>
                    <input type="text" name="nama" value="<?= $detail->nama_guru ?>" class="form-control" placeholder="Nama Guru" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control" required="">
                      <option value="">- Pilih Jenis Kelamin -</option>
                      <option value="Laki-Laki" <?php if ($detail->jk_guru=="Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php if ($detail->jk_guru=="Perempuan") {echo "selected";} ?>>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Telepon</label>
                    <input type="number" name="telepon" value="<?= $detail->telepon_guru ?>" class="form-control" placeholder="Telepon" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <div class="row">
                      <div class="col-md-3">
                        <?php if (empty($detail->foto_guru)): ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
                          <?php else: ?>
                            <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-guru/<?= $detail->foto_guru ?>" alt="">
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
                    <textarea name="alamat" id="" class="form-control" placeholder="Alamat" required=""><?= $detail->alamat_guru ?></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah</button>

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
