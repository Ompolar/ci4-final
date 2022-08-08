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
            Content body start
        ***********************************-->

    <div class="col-lg-12">
        <div class="card mt-3">
            <?php foreach ($pasien as $pasien) : ?>
            <?php endforeach; ?>
            <div class="card-header"> Invoice : <?= $pasien['id_struk']; ?> <strong><?= $pasien['tanggal_pendaftaran']; ?></strong> <span class="float-right">
                    <strong>Status:</strong> <strong class="<?= ($pasien['status_pembayaran'] == 'Lunas') ? 'text-success' : 'text-danger'; ?>"><?= $pasien['status_pembayaran']; ?></strong></span> </div>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>From:</h6>
                        <div> <strong>RSUD JOMBANG</strong> </div>
                        <div>Jl. KH. Wahid Hasyim No.52</div>
                        <div>Kepanjen,Kec. Jombang, Kabupaten Jombang, Jawa Timur 61416</div>
                        <div>Telepon: (0321) 863502</div>
                    </div>

                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <h6>To:</h6>
                        <div> <strong><?= $pasien['nama']; ?></strong> </div>
                        <div><?= $pasien['alamat_ktp']; ?></div>
                        <div>Telepon: <?= $pasien['telepon']; ?> </div>
                    </div>

                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">


                    </div>

                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">

                        <div> Poli Tujuan : <?= $pasien['nama_poli']; ?> </div>
                        <div> Petugas : <?= $pasien['nama_petugas']; ?></div>

                    </div>


                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Biaya Pendaftaran</td>
                                <td></td>
                                <td></td>
                                <td><?= $pasien['biaya_pendaftaran']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-5"> </div>
                    <div class="col-lg-6 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class=""><strong>Subtotal</strong></td>
                                    <td class=""><?= $pasien['biaya_pendaftaran']; ?></td>
                                </tr>

                                <tr>
                                    <td class=""><strong>Total</strong></td>
                                    <td class=""><strong><?= $pasien['biaya_pendaftaran']; ?></strong><br>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--**********************************
            Content body end
        ***********************************-->
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

    <script src="<?= base_url(); ?>/vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->
</body>

</html>