<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Input Nilai Rapot</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Rapot</li>
            <li class="breadcrumb-item active">Input Nilai Rapot</li>
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
            <h3 class="card-title"> Input Nilai Rapot</h3>
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
                  <th rowspan="2" class="ctr" style="vertical-align: middle;">No.</th>
                  <th rowspan="2" class="ctr" style="vertical-align: middle;">Nama Siswa</th>
                  <th colspan="3" class="ctr">Pengetahuan</th>
                  <th colspan="3" class="ctr">Keterampilan</th>
                  <th rowspan="2" class="ctr" style="vertical-align: middle;">Aksi</th>
                </tr>
                <tr>
                  <th class="ctr">Angka</th>
                  <th class="ctr">Predikat</th>
                  <th class="ctr">Deskripsi</th>
                  <th class="ctr">Angka</th>
                  <th class="ctr">Predikat</th>
                  <th class="ctr">Deskripsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($siswa as $key => $value): ?>
                  <tr class="row_<?= $value->id_siswa; ?>">
                    <td class="ctr"><?= $key+1 ?></td>
                    <td style="width: 200px;">
                      <?= $value->nama_siswa ?>
                    </td>
                    
                    <?php  
                    $cek = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('rapot')->num_rows();
                    $data_ap = $this->db->where(array('id_mapel' => $detail->id_mapel,'id_siswa' => $value->id_siswa))->get('rapot')->row();
                    ?>
                    <?php if ($cek > 0): ?>
                     <td class="ctr">
                      <?= $data_ap->p_angka; ?>
                    </td>
                    <td class="ctr">
                      <?= $data_ap->p_predikat; ?>
                    </td>
                    <td style="font-size: 11px;">
                      <?php


                      $data = $this->db->where(array('id_mapel' => $detail->id_mapel,'predikat' => $data_ap->p_predikat))->get('deskripsi_pth')->row();

                      echo $data->deskripsi;
                      ?>
                    </td>
                    <td class="ctr">
                      <?= $data_ap->k_angka; ?>
                    </td>
                    <td class="ctr">
                      <?= $data_ap->k_predikat; ?>
                    </td>
                    <td style="font-size: 11px;">
                      <?php


                      $data = $this->db->where(array('id_mapel' => $detail->id_mapel,'predikat' => $data_ap->k_predikat))->get('deskripsi_ktr')->row();

                      echo $data->deskripsi;
                      ?>
                    </td>
                    <td class="ctr" style="font-weight: bold;font-size: 16px;">
                      <span class="fa fa-check"></span>
                    </td>
                    <?php else: ?>     
                      <td class="ctr">
                        <input type="number" name="p_angka" maxlength='2' class="form-control p_angka_<?= $value->id_siswa; ?>" style='width:60px !important;' data-ids='<?= $value->id_siswa ?>'>
                        <div class="pa_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td class="ctr">
                        <input type="text" name="p_predikat" class="form-control p_predikat_<?= $value->id_siswa; ?>" style='width:50px !important;background:#fff;border:none;' disabled>
                        <div class="pp_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td style="min-width: 150px;">
                        <textarea style="font-size:11px !important;background: #fff;border:none !important;" cols="30" rows="5" name="pth_des_" class="form-control pth_des_<?= $value->id_siswa; ?>" disabled></textarea>
                      </td>
                      <td class="ctr">
                        <input type="number" name="k_angka" maxlength='2' class="form-control k_angka_<?= $value->id_siswa; ?>" style='width:50px !important;' data-ids='<?= $value->id_siswa ?>'>

                        <div class="ka_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td class="ctr">
                        <input type="text" name="k_predikat" class="form-control k_predikat_<?= $value->id_siswa; ?>" style='width:50px !important;background:#fff;border:none;' disabled>
                        <div class="kp_<?= $value->id_siswa; ?>"></div>
                      </td>
                      <td style="min-width: 150px;">
                        <textarea style="font-size:11px !important;background: #fff;border:none !important;" cols="30" rows="5" name="ktr_des_" class="form-control ktr_des_<?= $value->id_siswa; ?>" disabled></textarea>
                      </td>
                      <td class="ctr" id="act_<?= $value->id_siswa; ?>">
                        <button type="submit" name="submit" data-id="<?= $value->id_siswa; ?>" class="btn btn-default btn-act" id="submit-<?= $value->id_siswa; ?>" data-toggle="tooltip" data-placement="top" title="Simpan">
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
