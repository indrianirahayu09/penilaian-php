<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Nilai</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li> 
            <li class="breadcrumb-item active">Nilai</li>
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
            <h3 class="card-title">Nilai</h3>
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
            


            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Mata Pelajaran</th>
                  <th>KKM</th>
                  <th>UH1</th>
                  <th>UH2</th>
                  <th>UTS</th>
                  <th>UAS</th>
                  <th>RATA-RATA</th>
                  <th>AKSI</th>
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
                  $kkm = $this->db->where('id_mapel', $value->id_mapel)->get('kkm')->row();
                  ?>
                  <?php  
                  $data_nilai = $this->db->where(array('id_siswa' => $siswa->id_siswa, 'id_mapel' => $value->id_mapel))->get('nilai')->row();
                  ?>
                  <tr>
                    <td><?= $value->nama_mapel ?></td>
                    <td><?= $kkm->kkm ?></td>
                    <td>
                      <?php if (empty($data_nilai->uh1)): ?>
                        -
                        <?php else: ?>
                          <?= $data_nilai->uh1  ?>
                        <?php endif ?>
                      </td>
                      <td>
                        <?php if (empty($data_nilai->uh2)): ?>
                          -
                          <?php else: ?>
                            <?= $data_nilai->uh2  ?>
                          <?php endif ?>
                        </td>
                        <td>
                          <?php if (empty($data_nilai->uts)): ?>
                            -
                            <?php else: ?>
                              <?= $data_nilai->uts  ?>
                            <?php endif ?>
                          </td>
                          <td>
                            <?php if (empty($data_nilai->uas)): ?>
                              -
                              <?php else: ?>
                                <?= $data_nilai->uas  ?>
                              <?php endif ?>
                            </td>
                            <td>
                              <?php if (empty($data_nilai->rata_rata)): ?>
                                -
                                <?php else: ?>
                                  <?= $data_nilai->rata_rata  ?>
                                <?php endif ?>
                              </td>
                              <td>
                               <?php if (empty($data_nilai->rata_rata)): ?>
                                -
                                <?php else: ?>
                                  <?php  
                                  if ($data_nilai->rata_rata < $kkm->kkm) 
                                  {
                                    echo "<span class='badge badge-danger'>Dibawah KKM</span>";
                                  }
                                  else
                                  {

                                    echo "<span class='badge badge-success'>Lulus</span>";
                                  }
                                  ?>
                                <?php endif ?>
                              </td>
                            </tr>
                          <?php endforeach ?>
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
