<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Nilai Rapot</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">E-Rapot</li>
            <li class="breadcrumb-item active">Nilai Rapot</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container">
     <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Nilai Rapot (<?= $siswa->nama_siswa ?>)</h3>
          </div>
          <div class="card-body">
            <a href="<?= base_url() ?>guru/rapot/nilai_rapot" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
            <hr>
            <table>
              <tbody class="table table-bordered">
               <tr>
                <td width="20%">Nama Sekolah</td><td width="1%">:</td><td width="39%" class="tbl">MTs Negeri 5 Kulon Progo</td>
                <td width="20%">Kelas</td><td width="1%">:</td><td width="19%" class="tbl">VII A</td>
              </tr>
              <tr>
                <td>Alamat</td><td>:</td><td class="tbl">Sumoroto, Sidoharjo, Samigaluh</td>
                <td>Semester</td><td>:</td><td class="tbl">1</td>
              </tr>
              <tr>
                <td>Nama Siswa</td><td>:</td><td class="tbl">Adi</td>
                <td>Tahun Pelajaran</td><td>:</td><td class="tbl">2020/2021</td>
              </tr>
              <tr>
                <td>NIS / NISN</td><td>:</td><td class="tbl">101 / 2018101</td>
                <td colspan="3"></td>
              </tr>
            </tbody>
          </table><br>
          <b>CAPAIAN KOMPETENSI</b><br><br>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="2" rowspan="2" width="30%">Mata Pelajaran</th>
                <th colspan="3">Pengetahuan</th>
                <th colspan="3">Keterampilan</th>
              </tr>
              <tr>
                <th width="5%">Angka</th>
                <th width="5%">Predikat</th>
                <th width="25%">Deskripsi</th>
                <th width="5%">Angka</th>
                <th width="5%">Predikat</th>
                <th width="25%">Deskripsi</th>
              </tr>

            </thead>
            <tbody>
              <?php foreach ($kelompok as $key => $value): ?>
                <tr><td colspan="8"><b>KELOMPOK <?= $value->nama_kelompok ?></b></td></tr>
                <?php  
                $data_mapel = $this->db->where('id_kelompok_mapel', $value->id_kelompok_mapel)->get('mapel')->result();
                ?>
                <?php foreach ($data_mapel as $key => $value): ?>
                  <?php  
                  $data_rap = $this->db->where(array('id_siswa' => $siswa->id_siswa, 'id_mapel' => $value->id_mapel))->get('rapot')->row();

                  ?>
                  <tr>
                    <td class="ctr"><?= $key+1 ?></td>
                    <td><?= $value->nama_mapel ?></td>
                    <td class="ctr">
                      <?php if (empty($data_rap->p_angka)): ?>
                        -
                        <?php else: ?>
                          <?= $data_rap->p_angka ?>
                        <?php endif ?>
                      </td>
                      <td class="ctr">
                        <?php if (empty($data_rap->p_predikat)): ?>
                          -
                          <?php else: ?>
                            <?= $data_rap->p_predikat ?>
                          <?php endif ?>
                        </td>
                        <td class="font_kecil">
                         <?php if (empty($data_rap->p_predikat)): ?>
                          -
                          <?php else: ?>
                            <?php  
                            $desk_pth = $this->db->where(array('id_mapel' => $value->id_mapel,'predikat' => $data_rap->p_predikat))->get('deskripsi_pth ')->row();

                            ?>
                            <?= $desk_pth->deskripsi ?>
                          <?php endif ?>
                        </td>
                        <td class="ctr">
                          <?php if (empty($data_rap->k_angka)): ?>
                            -
                            <?php else: ?>
                              <?= $data_rap->k_angka ?>
                            <?php endif ?>
                          </td>
                          <td class="ctr">
                            <?php if (empty($data_rap->k_predikat)): ?>
                              -
                              <?php else: ?>
                                <?= $data_rap->k_predikat ?>
                              <?php endif ?>
                            </td>
                            <td class="font_kecil">
                             <?php if (empty($data_rap->k_predikat)): ?>
                              -
                              <?php else: ?>
                               <?php  
                               $desk_ktr = $this->db->where(array('id_mapel' => $value->id_mapel,'predikat' => $data_rap->k_predikat))->get('deskripsi_ktr')->row();

                               ?>
                               <?= $desk_ktr->deskripsi ?>
                             <?php endif ?>
                           </td>
                         </tr>
                       <?php endforeach ?>
                     <?php endforeach ?>
                   </tbody>


                 </tr>
               </table>  <br><br>

               <table width="100%">
                <tr>
                  <td  width="80%">
                    <table class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th width="5%">No</th>
                          <th width="45%">Ekstra Kurikuler</th>
                          <th width="50%">Kegiatan yang telah dilakukan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td width="60%">
                  </td>
                </tr>
              </table>
              <br>
              <table width="100%">
                <tr>
                  <td  width="40%">
                    <table class="table table-bordered" width="100%">
                      <tr>
                        <td colspan="2">Ketidakhadiran</td>
                      </tr>
                      <tr><td width="60%">Sakit</td><td width="40%" class="ctr">0 &nbsp; hari</td></tr>
                      <tr><td>Izin</td><td class="ctr">0 &nbsp; hari</td></tr>
                      <tr><td>Tanpa Keterangan</td><td class="ctr">0 &nbsp; hari</td></tr>
                    </table>
                  </td>
                  <td width="60%">
                  </td>
                </tr>
              </table>
              <table width="100%">
                <tr>
                  <td width="10%"></td>
                  <td width="20%">
                    Mengetahui : <br>
                    Orang Tua/Wali, <br>
                    <br><br><br><br>
                    <u>..........................</u>
                  </td>
                  <td width="8%"></td>
                  <td width="25%">
                  </td>
                  <td width="8%"></td>
                  <td width="29%">
                    Yogyakarta, 31 Juli 2020  <br>
                    Wali Kelas, <br>
                    <br><br><br><br>
                    <u><b>Aris Abdul Ajis</b></u><br>
                  NIP. 5150411283           </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>