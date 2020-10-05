<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Detail Data Guru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Data Guru</li>
            <li class="breadcrumb-item active">Detail Data Guru</li>
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
              <h3 class="card-title"> DETAIL DATA GURU</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <table class="table table-striped">
                    <tr>
                      <th width="20%">Jenis PTK</th>
                      <td width="5%">:</td>
                      <td><?= $detail->jenis_ptk ?></td>
                    </tr>
                    <tr>
                      <th width="20%">NIP</th>
                      <td width="5%">:</td>
                      <td><?= $detail->nip ?></td>
                    </tr>
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <td width="5%">:</td>
                      <td><?= $detail->nama_guru ?></td>
                    </tr>
                    <tr>
                      <th width="20%">Jenis Kelamin</th>
                      <td width="5%">:</td>
                      <td><?= $detail->jk_guru ?></td>
                    </tr>
                    <tr>
                      <th width="20%">Telepon</th>
                      <td width="5%">:</td>
                      <td><?= $detail->telepon_guru ?></td>
                    </tr>
                    <!-- <tr>
                      <th width="20%">Email</th>
                      <td width="5%">:</td>
                      <td><?= $detail->email ?></td>
                    </tr> -->
                    <tr>
                      <th width="20%">Alamat</th>
                      <td width="5%">:</td>
                      <td><?= $detail->alamat_guru ?></td>
                    </tr>


                  </table>
                </div>
                <div class="col-md-4">
                  <center>
                    <?php if (empty($detail->foto_guru)): ?>
                      <img class="img-thumbnail" width="250" src="<?= base_url() ?>public/media/icon/no-img.jpg" alt="">
                      <?php else: ?>
                        <img class="img-thumbnail" width="250" src="<?= base_url() ?>public/media/upload-guru/<?= $detail->foto_guru ?>" alt="">
                      <?php endif ?>
                    </center>
                    <br>
                    <center>
                      <a href="<?= base_url() ?>admin/guru/edit/<?= $detail->id_guru ?>" class="btn btn-success"><i class="fa fa-edit"></i> Ubah</a>
                    </center>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- form insert jurusan -->

  <!-- form insert jurusan -->
