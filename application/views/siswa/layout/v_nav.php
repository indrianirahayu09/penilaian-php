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
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url() ?>siswa/dashboard" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>siswa/nilai/list" class="nav-link">Nilai</a>
        </li>
      </ul>
    </div>
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <?php if (empty($data_siswa->foto)): ?>
            <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="user-image img-circle elevation-2" alt="User Image">
            <?php else: ?>
              <img src="<?= base_url() ?>public/media/upload-siswa/<?= $data_siswa->foto ?>" class="user-image img-circle elevation-2" alt="User Image">
            <?php endif ?>
            <span class="d-none d-md-inline"><?= $data_siswa->nama_siswa ?></span> <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
             <?php if (empty($data_siswa->foto)): ?>
              <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="img-circle elevation-2" alt="User Image">
              <?php else: ?>
                <img src="<?= base_url() ?>public/media/upload-siswa/<?= $data_siswa->foto ?>" class="img-circle elevation-2" alt="User Image">
              <?php endif ?>
              <p>
                <?= $data_siswa->nama_siswa ?>
                <small>Siswa</small>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="<?= base_url() ?>guru/pengaturan/profil" class="btn btn-default btn-flat">Profil</a>
              <a href="<?= base_url() ?>siswa/login/logout" class="btn btn-default btn-flat float-right">Keluar</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>