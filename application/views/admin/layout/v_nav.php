<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="<?= base_url() ?>admin/dashboard" class="navbar-brand">
      <img src="<?= base_url() ?>public/media/upload-profil-sekolah/<?= $data_profil_sekolah->logo ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/dashboard" class="nav-link">Dashboard</a>
        </li>
        
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?= base_url() ?>admin/jadwal" class="dropdown-item">Data Jadwal</a></li>
            <li><a href="<?= base_url() ?>admin/guru" class="dropdown-item">Data Guru</a></li>
            <li><a href="<?= base_url() ?>admin/guru" class="dropdown-item">Data Jurusan</a></li>
            <li><a href="<?= base_url() ?>admin/kelas" class="dropdown-item">Data Kelas</a></li>
            <li><a href="<?= base_url() ?>admin/siswa" class="dropdown-item">Siswa</a></li>
            <li><a href=" <?= base_url() ?>admin/siswa/wali" class="dropdown-item">Orang Tua/Wali Siswa</a></li>
            <li><a href="<?= base_url() ?>admin/mapel" class="dropdown-item">Mata Pelajaran</a></li> 
            <li><a href="<?= base_url() ?>admin/mapel" class="dropdown-item">Deskripsi Mata Pelajaran</a></li> 
            <li><a href="<?= base_url() ?>admin/mapel/kkm" class="dropdown-item">KKM</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/pengumuman" class="nav-link">Pengumuman</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pengaturan</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?= base_url() ?>admin/pengaturan/profil_sekolah" class="dropdown-item">Profil Sekolah</a></li>
            <li><a href="<?= base_url() ?>admin/pengaturan/tahun_akademik" class="dropdown-item">Tahun Akademik</a></li>
            <li><a href="<?= base_url() ?>admin/pengaturan/profil" class="dropdown-item">Profil</a></li>
            <li><a href="<?= base_url() ?>admin/pengaturan/ubah_password" class="dropdown-item">Ubah Password</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <?php if (empty($data_admin->foto)): ?>
            <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="user-image img-circle elevation-2" alt="User Image">
            <?php else: ?>
              <img src="<?= base_url() ?>public/media/upload-admin/<?= $data_admin->foto ?>" class="user-image img-circle elevation-2" alt="User Image">
            <?php endif ?>
            <span class="d-none d-md-inline"><?= $data_admin->nama ?></span> <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
             <?php if (empty($data_admin->foto)): ?>
              <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="img-circle elevation-2" alt="User Image">
              <?php else: ?>
                <img src="<?= base_url() ?>public/media/upload-staff/<?= $data_admin->foto ?>" class="img-circle elevation-2" alt="User Image">
              <?php endif ?>
              <p>
               <?= $data_admin->nama ?>
               <small>Administrator</small>
             </p>
           </li>
           <!-- Menu Body -->

           <!-- Menu Footer-->
           <li class="user-footer">
            <a href="<?= base_url() ?>admin/pengaturan/profil" class="btn btn-default btn-flat">Profil</a>
            <a href="<?= base_url() ?>admin/login/logout" class="btn btn-default btn-flat float-right">Keluar</a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</nav>