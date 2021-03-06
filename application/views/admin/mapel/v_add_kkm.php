<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data KKM</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Tambah Data KKM</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/mapel/kkm" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
      <br><br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> TAMBAH DATA KKM</h3>
            </div>

            <div class="card-body">
              <?php  
              echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
              ?>
              <form action="<?= base_url() ?>admin/mapel/add_kkm" method="post">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="">Mata Pelajaran</label>
                    <select name="id_mapel" id="" class="form-control" required="">
                      <option value="">- Pilih Mata Pelajaran -</option>
                      <?php foreach ($mapel as $key => $value): ?>
                        <option value="<?= $value->id_mapel ?>"><?= $value->nama_mapel ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="">KKM</label>
                    <input type="number" name="kkm" class="form-control" placeholder="KKM" required="">
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
