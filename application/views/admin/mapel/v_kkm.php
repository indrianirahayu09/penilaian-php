<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Data KKM</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Data KKM</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/mapel/add_kkm" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> DATA KKM</h3>
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

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>MATA PELAJARAN</th>
                    <th>KKM</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data as $kkm){?>
                    <tr>
                      <td width="5%"><?= $no ++?></td>
                      <td><?= $kkm->nama_mapel ?></td>
                      <td><?= $kkm->kkm ?></td>

                      <td width="20%">
                        <a href="<?= base_url() ?>admin/mapel/edit_kkm/<?= $kkm->id_kkm ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= base_url() ?>admin/mapel/delete_kkm/<?= $kkm->id_kkm ?>" class="btn btn-danger" onclick='return confirm("Apakah anda yakin ?")'><i class="fa fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- form insert jurusan -->

<!-- form insert jurusan -->
