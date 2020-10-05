<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Data Orang Tua/Wali</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Orang Tua/Wali</li>
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
              <h3 class="card-title"> DATA ORANG TUA/WALI</h3>
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
                    <th>NAMA SISWA</th>
                    <th>ROMBEL</th>=
                    <th>NAMA WALI</th>
                    <th>TELEPOM WALI</th>
                    <th>ALAMAT WALI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data as $siswa){?>
                    <tr>
                      <td width="5%"><?= $no ++?></td>
                      <td width="18%"><?= $siswa->nama_siswa ?></td>
                      <td><?= $siswa->rombel ?></td>
                      <td width="12%"><?= $siswa->nama_wali ?></td>
                      <td width="15%"><?= $siswa->telepon_wali ?></td>
                      <td><?= $siswa->alamat_wali ?></td>
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
