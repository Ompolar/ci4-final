<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Form step -->
    <link href="<?= base_url(); ?>/vendor/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/logo.gif">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url(); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?= base_url(); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
</head>


<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?= base_url(); ?>/dashboard" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url(); ?>/images/logo.gif" alt="">
                <img class="logo-compact" src="<?= base_url(); ?>/images/logo_text.png" alt="">
                <img class="brand-title" src="<?= base_url(); ?>/images/logo_text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">

                            </div>
                        </div>

                        <ul class="navbar-nav header-right">



                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <div class="header-info">
                                        <span><?= session()->get('nama_petugas'); ?></span>
                                        <small>PETUGAS</small>
                                    </div>
                                    <img src="<?= base_url(); ?>/images/profile/pic1.jpg" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="<?= base_url(); ?>/login/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
                            <li><a href="<?= base_url(); ?>/daftar_pasien">Daftar Pasien</a></li>
                            <li><a href="<?= base_url(); ?>/daftar_struk">Daftar Struk</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Tambah Pasien</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url(); ?>/tambah_pasien">Tambah Pasien Umum</a></li>

                        </ul>
                    </li>


                </ul>



            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <?= $this->renderSection('content'); ?>
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed kelompok 1 </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url(); ?>/vendor/global/global.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/js/custom.min.js"></script>
    <script src="<?= base_url(); ?>/js/deznav-init.js"></script>
    <!-- Apex Chart -->
    <script src="<?= base_url(); ?>/vendor/apexchart/apexchart.js"></script>


    <script src="<?= base_url(); ?>/vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="<?= base_url(); ?>/js/plugins-init/jquery.validate-init.js"></script>



    <!-- Form step init -->
    <script src="<?= base_url(); ?>/js/plugins-init/jquery-steps-init.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url(); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/js/plugins-init/datatables.init.js"></script>


</body>

</html>