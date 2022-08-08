<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class="card-header">
                        <h4 class="card-title">Inputkan No RM</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="<?= base_url(); ?>/pasien_lama/insert_pasien" method="POST">

                                <div class="form-group row">
                                    <label for="no_rekam_medis" class="col-sm-3 col-form-label">No. Rekam Medis</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="No.RM" id="no_rekam_medis" name="no_rekam_medis">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="cek" id="cek">Cek</button>
                                    </div>
                                </div>




                            </form>
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