<?= $this->extend('pasien_mandiri/template'); ?>
<?= $this->section('content'); ?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <form action="<?= base_url(); ?>/landing_page/get_struk" method="POST">
            <div class="alert alert-success alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong><?= session()->getFlashdata('pesan'); ?>.
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
            </div>
            </form>

        <?php endif; ?>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?= $this->endSection(); ?>