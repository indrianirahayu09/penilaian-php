<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
  <div class="m-container m-container--fluid m-container--full-height">
    <div class="m-stack m-stack--ver m-stack--desktop">
      <!-- BEGIN: Brand -->
      <div class="m-stack__item m-brand  m-brand--skin-dark" style="background-color: #ffffff; text-align: center;">
        <div class="m-stack m-stack--ver m-stack--general">
          <div class="m-stack__item m-stack__item--middle m-brand__logo">
            <a href="<?= base_url() ?>admin/dashboard" class="m-brand__logo-wrapper">
              <img src="<?= base_url() ?>public/media/upload-profil-sekolah/<?= $data_profil_sekolah->logo ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8;width: 38%;height: auto;">
            </a>
          </div>
          <div class="m-stack__item m-stack__item--middle m-brand__tools">

            <!-- BEGIN: Responsive Header Menu Toggler -->
            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
              <span></span>
            </a>
            <!-- END -->
            <!-- BEGIN: Topbar Toggler -->
            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
              <i class="flaticon-more"></i>
            </a>
            <!-- BEGIN: Topbar Toggler -->
          </div>
        </div>
      </div>
      <!-- END: Brand -->
      <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
        <!-- BEGIN: Horizontal Menu -->
        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
          <i class="la la-close"></i>
        </button>
        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
          <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
            <li class="m-menu__item "  aria-haspopup="true">
              <a  href="<?= base_url() ?>guru/dashboard" class="m-menu__link ">
                <i class="m-menu__link-icon fa fa-dashboard"></i>
                <span class="m-menu__link-text">
                  Dashboard
                </span>
              </a>
            </li>
            <li class="m-menu__item "  aria-haspopup="true">
              <a  href="<?= base_url() ?>guru/mapel" class="m-menu__link ">
                <i class="m-menu__link-icon fa fa fa-bookmark"></i>
                <span class="m-menu__link-text">
                  Mapel Diampu
                </span>
              </a>
            </li>
            <li class="m-menu__item "  aria-haspopup="true">
              <a  href="<?= base_url() ?>guru/siswa" class="m-menu__link ">
                <i class="m-menu__link-icon fa fa-users"></i>
                <span class="m-menu__link-text">
                  Siswa
                </span>
              </a>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
              <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon fa fa-file-text-o"></i>
                <span class="m-menu__link-text">
                  Laporan
                </span>
                <i class="m-menu__hor-arrow la la-angle-down"></i>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
              </a>
              <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                <ul class="m-menu__subnav">
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/rapot/nilai_rapot" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-list-alt"></i>
                      <span class="m-menu__link-text">
                       Pengetahuan
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/rapot/nilai_rapot" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-list-alt"></i>
                      <span class="m-menu__link-text">
                       Keterampilan
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/rapot/nilai_rapot" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-list-alt"></i>
                      <span class="m-menu__link-text">
                       E-Rapot
                      </span>
                    </a>
                  </li>

                  <!-- <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/rapot/nilai_rapot" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-list-alt"></i>
                      <span class="m-menu__link-text">
                       Nilai Rapot
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/rapot/input_data_rapot" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-wpforms"></i>
                      <span class="m-menu__link-text">
                        Input Data Rapot
                      </span>
                    </a>
                  </li> -->
                </ul>
              </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
              <a  href="#" class="m-menu__link m-menu__toggle">
                <i class="m-menu__link-icon fa fa-gears"></i>
                <span class="m-menu__link-text">
                  Pengaturan
                </span>
                <i class="m-menu__hor-arrow la la-angle-down"></i>
                <i class="m-menu__ver-arrow la la-angle-right"></i>
              </a>
              <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                <ul class="m-menu__subnav">
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/pengaturan/profil" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa-user-circle-o"></i>
                      <span class="m-menu__link-text">
                      Profil
                      </span>
                    </a>
                  </li>
                  <li class="m-menu__item "  aria-haspopup="true">
                    <a  href="<?= base_url() ?>guru/pengaturan/ubah_password" class="m-menu__link ">
                      <i class="m-menu__link-icon fa fa fa-lock"></i>
                      <span class="m-menu__link-text">
                        Ubah Password
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- END: Horizontal Menu -->               
        <!-- BEGIN: Topbar -->
        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
          <div class="m-stack__item m-topbar__nav-wrapper">
            <ul class="m-topbar__nav m-nav m-nav--inline">
              <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click" aria-expanded="true">
                <a href="#" class="m-nav__link m-dropdown__toggle">
                  <span class="m-topbar__userpic">
                    <?php if (empty($data_guru->foto_guru)): ?>
                      <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="--img-rounded m--marginless m--img-centered" alt="User Image">
                      <?php else: ?>
                        <img src="<?= base_url() ?>public/media/upload-guru/<?= $data_guru->foto_guru ?>" class="u--img-rounded m--marginless m--img-centered" alt="User Image">
                      <?php endif ?>
                    </span>
                    <span class="m-topbar__username m--hide">
                      <?= $data_guru->nama_guru ?>
                    </span>
                  </a>
                  <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: 183.933px; right: auto; margin-left: auto; margin-right: auto; color: grey;"></span>
                    <div class="m-dropdown__inner">
                      <div class="m-dropdown__header m--align-center" style="background-color: grey; background-size: cover;">
                        <div class="m-card-user m-card-user--skin-dark">
                          <div class="m-card-user__pic">
                            <?php if (empty($data_guru->foto)): ?>
                              <img src="<?= base_url() ?>public/media/icon/no-img.jpg" class="m--img-rounded m--marginless" alt="User Image">
                              <?php else: ?>
                                <img src="<?= base_url() ?>public/media/upload-staff/<?= $data_admin->foto ?>" class="m--img-rounded m--marginless" alt="User Image">
                              <?php endif ?>
                            </div>
                            <div class="m-card-user__details">
                              <span class="m-card-user__name m--font-weight-500" style="color: white;">
                                <?= $data_guru->nama_guru ?>
                              </span>
                              <br>
                              <span class="m-badge m-badge--danger m-badge--wide">
                                Guru
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="m-dropdown__body">
                          <div class="m-dropdown__content">
                            <ul class="m-nav m-nav--skin-light">
                              <li class="m-nav__item">
                                <a href="<?= base_url() ?>guru/pengaturan/profil" class="m-nav__link">
                                  <i class="m-nav__link-icon fa fa-user-circle-o"></i>
                                  <span class="m-nav__link-title">
                                    <span class="m-nav__link-wrap">
                                      <span class="m-nav__link-text">
                                        Profil
                                      </span>
                                    </span>
                                  </span>
                                </a>
                              </li>
                              <li class="m-nav__separator m-nav__separator--fit"></li>
                              <li class="m-nav__item">
                                <a href="<?= base_url() ?>guru/login/logout" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"><i class="m-nav__link-icon fa fa-share-square-o"></i>
                                  Keluar
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END: Topbar -->
          </div>
        </div>
      </div>
    </header>