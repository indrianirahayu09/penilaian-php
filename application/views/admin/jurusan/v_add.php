<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data Guru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Jadwal</li>
            <li class="breadcrumb-item active">Tambah Data Guru</li>
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
              <h3 class="card-title"> TAMBAH DATA GURU</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/guru/add" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Jenis PTK</label>
                    <select name="jenis_ptk" id="" class="form-control" required="">
                      <option value="">- Pilih Jenis PTK -</option>
                      <option value="Guru Mapel">Guru Mapel</option>
                      <option value="Guru BK">Guru BK</option>

                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">NIP</label>
                    <input type="number" name="nip" class="form-control" placeholder="NIP" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Nama Guru</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Guru" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <select name="jk" id="" class="form-control" required="">
                      <option value="">- Pilih Jenis Kelamin -</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Telepon</label>
                    <input type="number" name="telepon" class="form-control" placeholder="Telepon" required="">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Foto</label>
                    <input type="file" name="foto" class="form-control">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" class="form-control" placeholder="Alamat" required=""></textarea>
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
