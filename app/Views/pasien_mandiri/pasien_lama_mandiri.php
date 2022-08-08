<?= $this->extend('pasien_mandiri/template'); ?>
<?= $this->section('content'); ?>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background-color: white;">
    <div class="container d-flex align-items-center justify-content-between">
        <div id="logo_home">
        <a class="navbar-brand" href="<?= base_url(); ?>/landing_page">
             <img src="<?= base_url(); ?>/page/img/logoo.png" alt="" class="img-fluid" width="380" height="280" viewBox="0 0 380 280">
			</a>
		</div>
      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
    <div class="ccol-lg-12">

        <!-- row -->

        <div class="card mt-3" style="width: 75%;">
            <div class="card-header">
                <h4 class="card-title">Inputkan No RM</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">


                    <form action="<?= base_url(); ?>/landing_page/insert_pasien" method="POST">
                    <?= helper('form');?>    
                            <?= csrf_field(); ?>
                                <?php if (session()->getFlashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (session()->getFlashdata('error')) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo session()->getFlashdata('error')?>
                                    </div>
                                <?php }?>

                                <?php if (session()->getFlashdata('pesan')) { ?>
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        <strong><?= session()->getFlashdata('pesan'); ?>.
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                    </div>
                                <?php }?>

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
<?= $this->endSection(); ?>