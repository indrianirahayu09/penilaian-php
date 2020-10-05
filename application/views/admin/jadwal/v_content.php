<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Data Jadwal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Master</li>
            <li class="breadcrumb-item active">Data Jadwal</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <a href="<?= base_url() ?>admin/jadwal/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
      <br><br>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> DATA JADWAL</h3>
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
                    <th>HARI</th>
                    <th>KELAS</th>
                    <th>MAPEL</th>
                    <th>GURU</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($data as $jadwal){?>
                    <tr>
                      <td><?= $no ++?></td>
                      <td><?= $jadwal->hari ?></td>
                      <td width="10%"><?= $jadwal->rombel ?></td>
                      <td><?= $jadwal->nama_mapel ?></td>
                      <td width="13%"><?= $jadwal->nama_guru ?></td>
                      <td width="13%"><?= $jadwal->jam_mulai ?></td>
                      <td width="13%"><?= $jadwal->jam_selesai ?></td>
                      <td width="20%">
                        <a href="<?= base_url() ?>admin/jadwal/edit/<?= $jadwal->id_jadwal ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= base_url() ?>admin/jadwal/delete/<?= $jadwal->id_jadwal ?>" class="btn btn-danger" onclick='return confirm("Apakah anda yakin ?")'><i class="fa fa-trash"></i> Hapus</a>
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
