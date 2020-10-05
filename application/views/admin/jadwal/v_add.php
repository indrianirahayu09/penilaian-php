<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Jadwal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Jadwal</li>
            <li class="breadcrumb-item active">Tambah Data Jadwal</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/jadwal" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> TAMBAH DATA JADWAL</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/jadwal/add" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Hari</label>
                    <select name="hari" id="" class="form-control" required="">
                      <option value="">- Pilih Hari -</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jum'at">Jum'at</option>
                      <option value="Sabtu">Sabtu</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" name="mapel">
                      <option value="">- Pilih Mata Pelajaran -</option>
                      <?php foreach ($mapel as $key => $value): ?>
                        <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Kelas</label>
                    <select class="form-control" name="kelas">
                      <option value="">- Pilih Kelas -</option>
                      <?php foreach ($rombel as $key => $value): ?>
                        <option value="<?= $value->id_rombel ?>"><?= $value->rombel ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Guru</label>
                    <select class="form-control" name="guru">
                      <option value="">- Pilih Guru -</option>
                      <?php foreach ($guru as $key => $value): ?>
                        <option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jam Mulai</label>
                    <input type="time" name="jam_mulai" class="form-control" placeholder='JJ:mm:dd' required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jam Selesai </label>
                    <input type="time" name="jam_selesai" class="form-control" placeholder='JJ:mm:dd' required="">
                  </div>
                </div>
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
