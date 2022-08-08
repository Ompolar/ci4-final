<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-5 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h3 class="text-primary font-w600">Welcome to RSUD Jombang!</h3>
                <p class="mb-0">Hospital Admin Dashboard </p>
            </div>



        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-info">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-calendar-1"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Jumlah Seluruh Pasien</p>
                                    <h3 class="text-white"><?= $sumPasien; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-danger">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-diamond"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Pasien Belum Membayar</p>
                                    <h3 class="text-white"><?= $sumPasienBlmLunas; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-success">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-heart"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Pasien Sudah Membayar</p>
                                    <h3 class="text-white"><?= $sumPasienLunas; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="mr-3">
                                    <i class="flaticon-381-user-7"></i>
                                </span>
                                <div class="media-body text-white text-right">
                                    <p class="mb-1">Jumlah Poli</p>
                                    <h3 class="text-white"><?= $sumAllPoli; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row">

                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Daftar Struk Pasien </h4>
                                <div class="dropdown ml-auto">


                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <?php
                                    $no = 1;
                                    foreach ($daftar_pasien as $dp) : ?>
                                        <a href="daftar_pasien/detail_pasien/<?= $dp['no_rekam_medis']; ?>">

                                            <div class="table-responsive ">

                                                <table class="table patient-activity">
                                                    <tr>
                                                        <td>
                                                            <p class="mb-0 text-primary">No</p>
                                                            <h5 class="my-0 "><?= $no++; ?></h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Nomor Rekam Medis</p>
                                                            <h5 class="my-0 text-primary"><?= $dp['no_rekam_medis']; ?></h5>
                                                        </td>
                                                        <td>
                                                            <div class="media align-items-center">

                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-1"><?= $dp['nama']; ?></h5>
                                                                    <p class="mb-0"><?= $dp['umur']; ?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Poli Tujuan</p>
                                                            <h5 class="my-0 text-primary"><?= $dp['nama_poli']; ?></h5>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <p class="mb-1">Status</p>
                                                                    <h5 class="mt-0 mb-1 <?= ($dp['status_pembayaran'] == 'Lunas') ? 'text-success' : 'text-danger'; ?>"><?= $dp['status_pembayaran']; ?></h5>
                                                                    <small><?= $dp['tanggal_pendaftaran']; ?></small>
                                                                </div>
                                                                <div class="dropdown ml-auto">
                                                                    <div class="btn-link" data-toggle="dropdown">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                                            </g>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="<?= base_url() ?>/daftar_pasien/edit_pasien/<?= $dp['no_rekam_medis']; ?>">Edit</a>
                                                                        <a class="dropdown-item" href="<?= base_url() ?>/daftar_pasien/print_invoive/<?= $dp['no_rekam_medis']; ?>">Print</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </table>

                                            </div>

                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 text-center">
                                <a href="<?= base_url(); ?>/daftar_struk" class="btn-link">See More >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection(); ?>