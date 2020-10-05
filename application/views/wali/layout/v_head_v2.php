<?php  
$data_wali = $this->public_model->get_wali($this->session->userdata('id_wali'));
$data_profil_sekolah = $this->public_model->get_profil_sekolah();
?>
<!DOCTYPE html>

<html lang="en" >
<!-- begin::Head -->
<head>
  <meta charset="utf-8" />
  <title>
    <?= $title ?>
  </title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--begin::Web font -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  <!--end::Web font -->
  <!--begin::Base Styles -->  
  <!--begin::Page Vendors -->
  <link href="<?= base_url() ?>public/metronic1/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Page Vendors -->
  <link href="<?= base_url() ?>public/metronic1/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
  <link href="<?= base_url() ?>public/metronic1/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Base Styles -->
  <!-- <link rel="shortcut icon" href="<?= base_url() ?>public/metronic1/assets/demo/default/media/img/logo/favicon.ico" /> -->
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
  <!-- begin:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">