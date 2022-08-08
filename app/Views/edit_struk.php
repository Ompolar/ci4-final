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
                    <div class="card-header">
                        <h4 class="card-title">Edit Struk Pasien</h4>
                    </div>

                    <?php $validation = \Config\Services::validation(); ?>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php foreach ($struk as $pasien) : ?>
                            <?php endforeach; ?>

                            <form action="<?= base_url(); ?>/daftar_struk/updateStruk/<?= $pasien['id_struk']; ?>" method="POST">
                                <?= csrf_field(); ?>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="hidden" class="form-control" id="no_rekam_medis" name="no_rekam_medis" value="<?= $pasien['no_rekam_medis']; ?>">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="hidden" class="form-control" id="id_struk" name="id_struk" value="<?= $pasien['id_struk']; ?>">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="id_petugas" class="col-sm-3 col-form-label">Petugas</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select name="id_petugas" id="id_petugas" class="<?= $validation->hasError('id_petugas') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option selected value="<?= session()->get('id_petugas'); ?>" class=""><?= session()->get('nama_petugas');  ?></option>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_petugas');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_poli" class="col-sm-3 col-form-label">Poli Tujuan</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select name="id_poli" id="id_poli" class="<?= $validation->hasError('id_poli') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($listPoli as $lpoli => $pilih) {
                                                        $selected = ($pilih['id_poli'] == $pasien['id_poli']) ? 'selected' : ''; // bikin kondisi kaya gini
                                                    ?>
                                                        <option value="<?= $pilih['id_poli']; ?>" <?= $selected; ?> class=""><?= $pilih['nama_poli']; ?></option>
                                                    <?php } ?>

                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_poli'); ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="biaya_pendaftaran" class="col-sm-3 col-form-label">biaya pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('biaya_pendaftaran') ? 'is-invalid' : 'null' ?>" placeholder="biaya pendaftaran" id="biaya_pendaftaran" name="biaya_pendaftaran" value="<?= old('biaya_pendaftaran', $pasien['biaya_pendaftaran']); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('biaya_pendaftaran');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_pembayaran" class="col-sm-3 col-form-label">Apakah Sudah Membayar ?</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">

                                                <select name="status_pembayaran" id="status_pembayaran" class="<?= $validation->hasError('status_pembayaran') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <?php
                                                    if ($pasien['status_pembayaran'] == 'Belum Lunas') {
                                                        echo "<option value='Belum Lunas' selected>Belum Lunas</option>";
                                                        echo "<option value='Lunas' >Lunas</option>";
                                                    } else if ($pasien['status_pembayaran'] == 'Lunas') {
                                                        echo "<option value='Lunas' selected>Lunas</option>";
                                                        echo "<option value='Belum Lunas' >Belum Lunas</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('status_pembayaran');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                                <button type="submit" name="submit" class="btn btn-primary">Ubah Data Struk</button>



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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('#id_agama').select2({
        placeholder: "--Pilih Agama--",
        theme: "bootstrap-5"
    });

    $('#id_darah').select2({
        placeholder: "--Pilih Golongan Darah--",
        theme: "bootstrap-5"
    });

    $('#id_pekerjaan').select2({
        placeholder: "--Pilih Pekerjaan--",
        theme: "bootstrap-5"
    });

    $('#id_asuransi').select2({
        placeholder: "--Pilih Asuransi--",
        theme: "bootstrap-5"
    });

    $('#id_propinsi').select2({
        placeholder: "--Pilih Propinsi--",
        theme: "bootstrap-5"
    });

    $('#id_kabupaten').select2({
        placeholder: "--Pilih Kabupaten / Kota--",
        theme: "bootstrap-5",
        ajax: {
            url: "<?= site_url('tambah_pasien/ajaxKabupaten'); ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    id_propinsi: $("#id_propinsi").val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data
                };
            },
            cache: true
        },
    });

    $('#id_kecamatan').select2({
        placeholder: "--Pilih Kecamatan--",
        theme: "bootstrap-5",
        ajax: {
            url: "<?= site_url('tambah_pasien/ajaxKecamatan'); ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    id_kabupaten: $("#id_kabupaten").val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data
                };
            },
            cache: true
        },
    });

    $('#id_desa').select2({
        placeholder: "--Pilih Desa / Kecamatan--",
        theme: "bootstrap-5",
        ajax: {
            url: "<?= site_url('tambah_pasien/ajaxDesa'); ?>",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    id_kecamatan: $("#id_kecamatan").val(),
                    searchTerm: data.term
                };
            },
            processResults: function(data) {
                return {
                    results: data.data
                };
            },
            cache: true
        },
    });
</script>

<?= $this->endSection(); ?>