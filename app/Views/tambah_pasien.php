<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-6">
                <a href="<?= base_url(); ?>/tambah_pasien/pasien_umum_baru">
                    <div class="card text-white bg-success">
                        <div class="card-header">
                            <h5 class="card-title text-white">Pasien Baru</h5>
                        </div>

                    </div>
                </a>

            </div>
            <div class="col-xl-6">
                <a href="<?= base_url(); ?>/pasien_lama">
                    <div class="card text-white bg-danger">
                        <div class="card-header">
                            <h5 class="card-title text-white">Pasien Lama</h5>
                        </div>

                    </div>
                </a>
            </div>


        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection(); ?>