<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong><?= session()->getFlashdata('pesan'); ?>.
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
            </div>

        <?php endif; ?>
        <div class="form-head d-flex mb-3 mb-md-5 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h3 class="text-primary font-w600">Daftar Pasien</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row">


                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                        <div class="card">


                            <div class="card-body">
                                <?php
                                $no = 1;
                                foreach ($daftar_pasien as $dp) : ?>
                                    <a href="<?= base_url(); ?>/daftar_pasien/detail_pasien/<?= $dp['no_rekam_medis']; ?>">

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
                                                        <p class="mb-0">Jenis Kelamin</p>
                                                        <h5 class="my-0 text-primary"><?= $dp['jenis_kelamin']; ?></h5>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <p class="mb-1">Jenis Pasien</p>
                                                                <h5 class="mt-0 mb-1 <?= ($dp['jenis_pasien'] == 'Umum') ? 'text-success' : 'text-danger'; ?>"><?= $dp['jenis_pasien']; ?></h5>
                                                                <small><?= $dp['telepon']; ?></small>
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