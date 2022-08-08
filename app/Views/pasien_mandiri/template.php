<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/logo.gif">
    <link href="<?= base_url(); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">
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
    <!--**********************************
            Sidebar end
        ***********************************-->
    <?= $this->renderSection('content'); ?>
    <!--**********************************
            Footer start
        ***********************************-->

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