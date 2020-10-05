<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Input Nilai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Nilai</li>
            <li class="breadcrumb-item active">Input Nilai</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
     <a href="<?= base_url() ?>guru/mapel" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
     <br><br>
     <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"> Input Nilai</h3>
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
            <table class="table table-striped">
              <tr>
                <th width="15%">Kelas</th>
                <th width="5%">:</th>
                <th><?= $detail->rombel ?></th>
              </tr>
              <tr>
                <th>Wali Kelas</th>
                <th>:</th>
                <th><?= $wali_kelas ?></th>
              </tr>
              <tr>
                <th>Mata Pelajaran</th>
                <th>:</th>
                <th><?= $detail->nama_mapel ?></th>
              </tr>
              <tr>
                <th>KKM</th>
                <th>:</th>
                <th><?= $kkm->kkm ?></th>
              </tr>
            </table>
            <hr>
            <input type="hidden" name="kkm" value="<?= $kkm->kkm ?>">
            <input type="hidden" name="id_mapel" value="<?= $detail->id_mapel ?>">
            <input type="hidden" name="id_rombel" value="<?= $detail->id_rombel ?>">
            <input type="hidden" name="id_guru" value="<?= $detail->id_guru ?>">

            <table class="table table-bordered" id="example1">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Siswa</th>
                  <th>UH1</th>
                  <th>UH2</th>
                  <th>UTS</th>
                  <th>UAS</th>
                  <th>RATA-RATA</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($siswa as $key => $value): ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $value->nama_siswa ?></td>
                    <?php  
                    $cek = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('nilai')->num_rows();
                    $data_n = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('nilai')->row();
                    ?>
                    <?php if ($cek > 0): ?>

                      <td><?= $data_n->uh1 ?></td>
                      <td><?= $data_n->uh2 ?></td>
                      <td><?= $data_n->uts ?></td>
                      <td><?= $data_n->uas ?></td>
                      <td><?= $data_n->rata_rata ?></td>
                      <td><i class="fa fa-check"></i></td>
                      <?php else: ?>
                       <td>
                        <input type="number" name="uh1" maxlength='2' class="form-control u_harian1_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
                        <div class="uh1_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td>
                        <input type="number" name="uh2" maxlength='2' class="form-control u_harian2_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
                        <div class="uh2_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td>
                        <input type="number" name="uts" maxlength='2' class="form-control ut_s_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
                        <div class="uts_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td >
                        <input type="number" name="uas" maxlength='2' class="form-control ua_s_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
                        <div class="uas_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td >
                        <input type="text" name="hasil" maxlength='2' class="form-control hasil_<?= $value->id_siswa; ?>" style='width:60px !important;' data-id_s='<?= $value->id_siswa ?>'>
                        <div class="hasi_l_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td id="act_<?= $value->id_siswa; ?>">
                       <button type="submit" name="submit" data-id="<?= $value->id_siswa; ?>" class="btn btn-default btn-aks" id="submit-<?= $value->id_siswa; ?>" data-toggle="tooltip" data-placement="top" title="Simpan">
                        <span class="fa fa-save"></span>
                      </button>
                    </td>
                  <?php endif ?>

                </tr>
              <?php endforeach ?>
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
