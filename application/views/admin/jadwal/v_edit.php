<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ubah Data Jadwal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Jadwal</li>
            <li class="breadcrumb-item active">Ubah Data Jadwal</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>staff/jadwal" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> UBAH DATA JADWAL</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/jadwal/edit/<?= $detail->id_jadwal ?>" method="post">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Hari</label>
                    <select name="hari" id="" class="form-control" required="">
                      <option value="">- Pilih Hari -</option>
                      <option value="Senin" <?php if ($detail->hari=="Senin") {echo "selected";} ?>>Senin</option>
                      <option value="Selasa" <?php if ($detail->hari=="Selasa") {echo "selected";} ?>>Selasa</option>
                      <option value="Rabu" <?php if ($detail->hari=="Rabu") {echo "selected";} ?>>Rabu</option>
                      <option value="Kamis" <?php if ($detail->hari=="Kamis") {echo "selected";} ?>>Kamis</option>
                      <option value="Jum'at" <?php if ($detail->hari=="Jum'at") {echo "selected";} ?>>Jum'at</option>
                      <option value="Sabtu" <?php if ($detail->hari=="Sabtu") {echo "selected";} ?>>Sabtu</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mapel">Mata Pelajaran</label>
                    <select class="form-control" name="mapel">
                      <option value="">- Pilih Mata Pelajaran -</option>
                      <?php foreach ($mapel as $key => $value): ?>
                       <option value="<?= $value->id_mapel ?>" <?php if ($detail->id_mapel==$value->id_mapel) {echo "selected";} ?>><?= $value->nama_mapel ?></option>
                     <?php endforeach ?>
                   </select>
                 </div>
                 <div class="form-group col-md-6">
                  <label for="">Kelas</label>
                  <select class="form-control" name="kelas">
                    <option value="">- Pilih Kelas -</option>
                    <?php foreach ($rombel as $key => $value): ?>
                      <option value="<?= $value->id_rombel ?>" <?php if ($detail->id_rombel==$value->id_rombel) {echo "selected";} ?>><?= $value->rombel ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Guru</label>
                  <select class="form-control" name="guru">
                    <option value="">- Pilih Guru -</option>
                    <?php foreach ($guru as $key => $value): ?>
                      <option value="<?= $value->id_guru ?>" <?php if ($detail->id_guru==$value->id_guru) {echo "selected";} ?>><?= $value->nama_guru ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Jam Mulai</label>
                  <input type="time" name="jam_mulai" value="<?= $detail->jam_mulai ?>" class="form-control" placeholder='JJ:mm:dd' required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Jam Selesai </label>
                  <input type="time" name="jam_selesai" value="<?= $detail->jam_selesai ?>" class="form-control" placeholder='JJ:mm:dd' required="">
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
