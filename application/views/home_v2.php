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
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- BEGIN: Header -->
		<header class="m-grid__item m-header"  data-minimize-offset="200" data-minimize-mobile-offset="200" >
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">
				<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
					<!-- BEGIN: Horizontal Menu -->
					<a href="#">
						<img src="<?= base_url() ?>public/template/dist/img/AdminLTELogo.png" width="60" alt="AdminLTE Logo" class="m-widget17__icon"
						style="opacity: .8">
					</a>
					<b><span class="" style="font-size: large;">SMA Taman Madya Jetis Yogyakarta</span></b>
					
					<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
						<i class="la la-close"></i>
					</button>
					<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
						
					</div>
					<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
					<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
						
				</div>
				<!-- END: Topbar -->
			</div>
		</div>
	</div>
</header>
<!-- END: Header -->		
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<!-- END: Subheader -->
	<div class="m-content" style="background-image: url('<?= base_url() ?>public/media/icon/background.jpg');">
		<!--Begin::Main Portlet-->
		<div class="row">
			<div class="col-xl-12">
				<!--begin:: Widgets/Activity-->
				<div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light ">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title" style="width: 100%; text-align: center;">
								<h3" class="m-portlet__head-text m--font-light">SISTEM INFORMASI PERKEMBANGAN NILAI DAN KEGIATAN BELAJAR SISWA
								</h3>
							</div>
						</div>
					</div>
					<div class="m-portlet__body" style="background-color: #ffebcd;">
						<div class="m-widget17">
							<div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
								<div class="m-widget17__chart" style="height:130px;">
								</div>
							</div>
							<div class="m-widget17__stats">
								<div class="m-widget17__items m-widget17__items-col1">
									<div class="m-widget17__item" style="background-color: rgb(227, 31, 81);color: white;border-radius:20px;box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-webkit-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-moz-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);">
										<span class="m-widget17__icon">
											<center>
											<a href="<?= base_url() ?>admin/login">
												<img width="80" src="<?= base_url() ?>public/media/icon/staff.png" alt="">
											</a>
											<br>
											<a href="<?= base_url() ?>admin/login">
											<span class="m-badge m-badge--brand m-badge--wide" style="background-color: #4da0dc;">Login Sebagai Admin</span>
											</a>
											<center>
										</span>
									</div>
									<div class="m-widget17__item" style="background-color: rgb(227, 31, 81);color: white;border-radius:20px;box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-webkit-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-moz-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);">
										<span class="m-widget17__icon">
											<center>
											<a href="<?= base_url() ?>guru/login">
												<img width="80" src="<?= base_url() ?>public/media/icon/teacher.png" alt="">
											</a>
											<br>
											<a href="<?= base_url() ?>guru/login">
											<span class="m-badge m-badge--brand m-badge--wide" style="background-color: #94d400;color: black;">Login Sebagai Guru</span>
											</a>
											<center>
										</span>
									</div>
								</div>
								<div class="m-widget17__items m-widget17__items-col2">
									<div class="m-widget17__item" style="background-color: rgb(227, 31, 81);color: white;border-radius:20px;box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-webkit-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-moz-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);">
										<span class="m-widget17__icon">
											<center>
											<a href="<?= base_url() ?>wali/login">
												<img width="80" src="<?= base_url() ?>public/media/icon/orangtua.png" alt="">
											</a>
											<br>
											<a href="<?= base_url() ?>wali/login">
											<span class="m-badge m-badge--brand m-badge--wide" style="background-color: #324a5e;">Login Sebagai Wali</span>
											</a>
											<center>
										</span>
									</div>
									<div class="m-widget17__item" style="background-color: rgb(227, 31, 81);color: white;border-radius:20px;box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-webkit-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);-moz-box-shadow: -1px 2px 5px 1px rgba(0,0,0,0.42);">
										<span class="m-widget17__icon">
											<center>
											<a href="<?= base_url() ?>siswa/login">
												<img width="80" src="<?= base_url() ?>public/media/icon/siswa.png" alt="">
											</a>
											<br>
											<a href="<?= base_url() ?>siswa/login">
											<span class="m-badge m-badge--brand m-badge--wide" style="background-color: #25d9f8; color: black;">Login Sebagai Siswa</span>
											</a>
											<center>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- end:: Body -->
<!-- begin::Footer -->
<footer class="m-grid__item	m-footer" style="margin-left: 0px; background-color: #1e1e2d;">
	<div class="m-container m-container--fluid m-container--full-height m-page__container">
		<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
			<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last" style="width: 100%;text-align: center;">
				<span class="m-footer__copyright">
					Copyright &copy; 2020
					<a href="#" class="m-link">
						SMA Taman Madya Jetis Yogyakarta. All rights reserved.
					</a>
				</span>
			</div>
		</div>
	</div>
</footer>
<!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<!-- end::Quick Sidebar -->		    
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->		    

	<!-- begin::Quick Nav -->	
	<!--begin::Base Scripts -->
	<script src="<?= base_url() ?>public/metronic1/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>public/metronic1/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Base Scripts -->   
	<!--begin::Page Vendors -->
	<script src="<?= base_url() ?>public/metronic1/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->  
	<!--begin::Page Snippets -->
	<script src="<?= base_url() ?>public/metronic1/assets/app/js/dashboard.js" type="text/javascript"></script>
	<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
