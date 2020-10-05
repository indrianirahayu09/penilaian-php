<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Ubah Data Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Siswa</li>
            <li class="breadcrumb-item active">Ubah Data Siswa</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/siswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> UBAH DATA SISWA</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form enctype="multipart/form-data" action="<?= base_url() ?>admin/siswa/edit/<?= $detail->id_siswa ?>" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">NISN</label>
                    <input type="text" name="nisn" value="<?= $detail->nisn ?>" class="form-control" placeholder="NISN" readonly="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIS</label>
                    <input type="text" name="nis" value="<?= $detail->nis ?>" class="form-control" placeholder="NIS" readonly="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="<?= $detail->nama_siswa ?>" class="form-control" placeholder="Nama Siswa" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk_siswa" id="" class="form-control" required="">
                     <option value="">- Pilih Jenis Kelamin -</option>
                     <option value="L" <?php if ($detail->jk_siswa=="L") {echo "selected";} ?>>Laki-Laki</option>
                     <option value="P" <?php if ($detail->jk_siswa=="P") {echo "selected";} ?>>Perempuan</option>
                   </select>
                 </div>
                 <div class="form-group col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <?php if (empty($detail->foto)): ?>
                        <img class="img-thumbnail" width="90" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
                        <?php else: ?>
                          <img class="img-thumbnail" width="90" src="<?= base_url() ?>public/media/upload-siswa/<?= $detail->foto ?>" alt="">
                        <?php endif ?>
                      </div>
                      <div class="col-md-9">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" class="form-control" placeholder="Alamat Lengkap"><?= $detail->alamat ?></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Kelas</label>
                    <select name="id_kelas" id="" class="form-control" required="">
                      <option value="">- Pilih Kelas -</option>
                      <?php foreach ($kelas as $key => $value): ?>
                        <option value="<?= $value->id_kelas ?>" <?php if ($detail->id_kelas==$value->id_kelas) {echo "selected";} ?>><?= $value->kelas ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Rombel</label>
                    <select name="id_rombel" id="" class="form-control" required="">
                      <option value="">- Pilih Rombel -</option>
                      <?php foreach ($rombel as $key => $value): ?>
                        <option value="<?= $value->id_rombel ?>" <?php if ($detail->id_rombel==$value->id_rombel) {echo "selected";} ?>><?= $value->rombel ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Orang Tua/Wali</label>
                    <input type="text" name="nama_wali" value="<?= $detail->nama_wali ?>" class="form-control" placeholder="Nama Orang TUa/Wali" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Telepon Orang Tua/Wali</label>
                    <input type="text" name="telepon_wali" value="<?= $detail->telepon_wali ?>" class="form-control" placeholder="Telepon Orang Tua/Wali" required="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Alamat Orang Tua/Wali</label>
                    <textarea name="alamat_wali" id="" class="form-control" placeholder="Alamat Lengkap Orang Tua/Wali"><?= $detail->alamat_wali ?></textarea>
                  </div>
                </div>
                <hr>
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
