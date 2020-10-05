<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Tambah Data Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Siswa</li>
            <li class="breadcrumb-item active">Tambah Data Siswa</li>
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
              <h3 class="card-title"> TAMBAH DATA SISWA</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form enctype="multipart/form-data" action="<?= base_url() ?>admin/siswa/add" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">NISN</label>
                    <input type="text" name="nisn" class="form-control" placeholder="NISN" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIS</label>
                    <input type="text" name="nis" class="form-control" placeholder="NIS" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk_siswa" id="" class="form-control" required="">
                     <option value="">- Pilih Jenis Kelamin -</option>
                     <option value="L">Laki-Laki</option>
                     <option value="P">Perempuan</option>
                   </select>
                 </div>
                 <div class="form-group col-md-6">
                  <label for="">Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Alamat</label>
                  <textarea name="alamat" id="" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Kelas</label>
                  <select name="id_kelas" id="" class="form-control" required="">
                    <option value="">- Pilih Kelas -</option>
                    <?php foreach ($kelas as $key => $value): ?>
                      <option value="<?= $value->id_kelas ?>"><?= $value->kelas ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Rombel</label>
                  <select name="id_rombel" id="" class="form-control" required="">
                    <option value="">- Pilih Rombel -</option>
                    <?php foreach ($rombel as $key => $value): ?>
                      <option value="<?= $value->id_rombel ?>"><?= $value->rombel ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Nama Orang Tua/Wali</label>
                  <input type="text" name="nama_wali" class="form-control" placeholder="Nama Orang TUa/Wali" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Telepon Orang Tua/Wali</label>
                  <input type="text" name="telepon_wali" class="form-control" placeholder="Telepon Orang Tua/Wali" required="">
                </div>
                <div class="form-group col-md-12">
                  <label for="">Alamat Orang Tua/Wali</label>
                  <textarea name="alamat_wali" id="" class="form-control" placeholder="Alamat Lengkap Orang Tua/Wali"></textarea>
                </div>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
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
