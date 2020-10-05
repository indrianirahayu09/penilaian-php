<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Tahun Akademik</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Tahun Akademik</li>
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
              <h3 class="card-title"> PENGATURAN | TAHUN AKADEMIK</h3>
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
              <form action="<?= base_url() ?>admin/pengaturan/tahun_akademik" method="post">
                <div class="form-group">
                  <label for="">Semester</label>
                  <select name="semester" id="" class="form-control" required="">
                    <option value="">- Pilih Semester -</option>
                    <option value="Genap" <?php if ($data->semester=="Genap") {echo "selected";} ?>>Genap</option>
                    <option value="Ganjil" <?php if ($data->semester=="Ganjil") {echo "selected";} ?>>Ganjil</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tahun Pelajaran</label>
                  <input type="text" name="tahun_ajaran" value="<?= $data->tahun_pelajaran ?>" class="form-control" placeholder="Tahun Pelajaran" required="">
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
