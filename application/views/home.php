<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?= $title ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>public/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="../../index3.html" class="navbar-brand">
          <img src="<?= base_url() ?>public/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">SMA Taman Madya Jetis Yogyakarta</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->


          <!-- SEARCH FORM -->

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Messages Dropdown Menu -->

          <!-- Notifications Dropdown Menu -->


        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <h3 class="text-center" style="margin-bottom: 50px; margin-top: 70px;">SISTEM INFORMASI PERKEMBANGAN NILAI DAN KEGIATAN BELAJAR SISWA</h3>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <center>
                    <a href="<?= base_url() ?>admin/login">
                      <img width="100" src="<?= base_url() ?>public/media/icon/staff.png" alt="">
                      <h5>Login Sebagai Admin</h5>
                    </a>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                 <center>
                  <a href="<?= base_url() ?>guru/login">
                    <img width="100" src="<?= base_url() ?>public/media/icon/teacher.png" alt="">
                    <h5>Login Sebagai Guru</h5>
                  </a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
               <center>
                <a href="<?= base_url() ?>wali/login">
                 <img width="100" src="<?= base_url() ?>public/media/icon/orangtua.png" alt="">
                 <h5>Login Sebagai Wali</h5>
               </a>
             </center>
           </div>
         </div>
       </div>
       <div class="col-md-3">
        <div class="card">
          <div class="card-body">
           <center>
            <a href="<?= base_url() ?>siswa/login">
             <img width="100" src="<?= base_url() ?>public/media/icon/siswa.png" alt="">
             <h5>Login Sebagai Siswa</h5>
           </a>
         </center>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <center><strong>Copyright &copy; 2020 <a href="https://adminlte.io">SMA Taman Madya Jetis Yogyakarta</a>.</strong> All rights reserved.</center>
  <!-- Default to the left -->

</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url() ?>public/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>public/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>public/template/dist/js/adminlte.min.js"></script>
</body>
</html>
