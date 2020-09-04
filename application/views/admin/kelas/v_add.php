<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Kelas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Kelas</li>
            <li class="breadcrumb-item active">Tambah Data Kelas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/kelas" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> TAMBAH DATA KELAS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/kelas/add" method="post">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="">Nama Kelas</label>
                    <input type="text" name="rombel" class="form-control" placeholder="Contoh : 10 IPA A" required="">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Jurusan</label>
                    <select name="id_jurusan" id="" class="form-control" required="">
                      <option value="">- Pilih Jurusan -</option>
                      <?php foreach ($jurusan as $key => $value): ?>
                        <option value="<?= $value->id_jurusan ?>"><?= $value->kode_jurusan ?> | <?= $value->nama_jurusan ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Wali Kelas</label>
                    <select name="id_guru" id="" class="form-control" required="">
                      <option value="">- Pilih Wali Kelas -</option>
                      <?php foreach ($guru as $key => $value): ?>
                        <option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
                      <?php endforeach ?>
                    </select>
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
