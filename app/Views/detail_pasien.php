<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-5 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h3 class="text-primary font-w600">Detail Pasien</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="d-flex doctor-info-details mb-5">
                                    <div class="media align-self-start">
                                        <img alt="image" class="rounded" width="130" src="<?= base_url(); ?>/images/avatar/2.jpg">

                                    </div>
                                    <?php
                                    $no = 1;
                                    foreach ($detail_pasien as $dp) :
                                    ?>
                                    <?php endforeach ?>
                                    <div class="media-body">
                                        <h2 class="mb-2"><?= $dp['nama']; ?></h2>
                                        <p class="mb-md-2 mb-4">No Rekam Medis: <?= $dp['no_rekam_medis']; ?></p>

                                    </div>

                                </div>

                                <div class="iconbox mb-3">
                                    <i class="las la-address-card"></i>
                                    <small>NIK</small>
                                    <p><?= $dp['nik']; ?></p>
                                </div>

                                <div class="iconbox mb-3">
                                    <i class="las la-map-marker-alt"></i>
                                    <small>Alamat</small>
                                    <p><?= $dp['alamat_ktp']; ?>, <?= $dp['nama_desa']; ?>, <?= $dp['nama_kecamatan']; ?>, <?= $dp['nama_kabupaten']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las la-phone"></i>
                                    <small>Phone</small>
                                    <p><?= $dp['telepon']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las fa fa-genderless"></i>
                                    <small>Jenis Kelamin</small>
                                    <p><?= $dp['jenis_kelamin']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <?php
                                    foreach ($listDarah as $ld) : ?>
                                    <?php endforeach ?>
                                    <i class="las fa-heart "></i>
                                    <small>Golongan Darah</small>
                                    <p><?= $ld['Nama_Darah']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <?php
                                    foreach ($listPekerjaan as $lkerja) : ?>
                                    <?php endforeach ?>
                                    <i class="las fa-suitcase "></i>
                                    <small>Pekerjaan</small>
                                    <p><?= $lkerja['Nama_Pekerjaan']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las fa-files-o"></i>
                                    <small>Tanggal Lahir</small>
                                    <p><?= $dp['tempat_lahir']; ?>, <?= $dp['tanggal_lahir']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las fa-dot-circle-o "></i>
                                    <small>Umur</small>
                                    <p><?= $dp['umur']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las fa-users"></i>
                                    <small>Nama Wali</small>
                                    <p><?= $dp['nama_wali']; ?></p>
                                </div>
                                <div class="iconbox mb-3">
                                    <i class="las fa-mobile  "></i>
                                    <small>Nomor Wali</small>
                                    <p><?= $dp['nomor_wali']; ?></p>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Riwayat Pendaftaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="widget-timeline-icon">
                                    <ul class="timeline">
                                        <?php foreach ($detail_struk as $detail) : ?>
                                            <li>
                                                <div class="icon bg-primary flaticon-381-heart"></div>

                                                <h4 class="mb-2 mt-1 timeline-panel text-muted"><?= $detail['nama_poli'] ?></h4>
                                                <p class="fs-15 mb-0 "><?= $detail['tanggal_pendaftaran']; ?></p>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>





    </div>

</div>
</div>

<?= $this->endSection(); ?>