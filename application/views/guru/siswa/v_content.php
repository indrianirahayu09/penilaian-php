<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Data Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Siswa</li>
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
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> DATA SISWA <?= $rombel ?></h3>
            </div>
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
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>L/P</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data as $siswa){?>
                    <tr>
                      <td width="5%"><?= $no ++?></td>
                      <td><?= $siswa->nisn ?></td>
                      <td><?= $siswa->nis ?></td>
                      <td><?= $siswa->nama_siswa ?></td>
                      <td><?= $siswa->jk_siswa ?></td>

                      <td width="10%">
                        <a href="<?= base_url() ?>admin/siswa/edit/<?= $siswa->id_siswa ?>" class="btn btn-info"><i class="fa fa-share-square-o"></i> Detail</a>
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
