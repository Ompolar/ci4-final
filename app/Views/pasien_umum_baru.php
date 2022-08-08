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
                        <h4 class="card-title">Input Data Pasien</h4>

                    </div>

                    <?php $validation = \Config\Services::validation(); ?>

                    <div class="card-body">
                        <div class="basic-form">

                            <form action="<?= base_url(); ?>/tambah_pasien/save_pasien" method="POST">
                                <?= csrf_field(); ?>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="hidden" class="form-control" id="jenis_pasien" name="jenis_pasien" value="Umum">


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="hidden" class="form-control" id="nomor_asuransi" name="nomor_asuransi" value="Tidak Ada">


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= $validation->hasError('nik') ? 'is-invalid' : 'null' ?>" placeholder="NIK" id="nik" name="nik" value="<?= old('nik'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nik'); ?></small></div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('nama') ? 'is-invalid' : 'null' ?>" placeholder="Nama" id="nama" name="nama" value="<?= old('nama'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nama'); ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">

                                                <select name="jenis_kelamin" id="jenis_kelamin" class="<?= $validation->hasError('jenis_kelamin') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Tidak Tau">Tidak Tau</option>

                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('jenis_kelamin'); ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('tempat_lahir') ? 'is-invalid' : 'null' ?>" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('tempat_lahir');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control  <?= $validation->hasError('tanggal_lahir') ? 'is-invalid' : 'null' ?>" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('tanggal_lahir');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('telepon') ? 'is-invalid' : 'null' ?>" placeholder="0812-3456-7890" id="telepon" name="telepon" value="<?= old('telepon'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('telepon');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">

                                                <select name="status_perkawinan" id="status_perkawinan" class="<?= $validation->hasError('status_perkawinan') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>


                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('status_perkawinan'); ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="umur" class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('umur') ? 'is-invalid' : 'null' ?>" placeholder="Umur" id="umur" name="umur" value="<?= old('umur'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('umur'); ?></small></div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="id_agama" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select name="id_agama" id="id_agama" class="<?= $validation->hasError('id_agama') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option value=""></option>
                                                        <?php
                                                        foreach ($listAgama as $lag) {
                                                        ?>
                                                            <option value="<?= $lag['id_agama'] ?>" <?= old('id_agama') == $lag['id_agama'] ? 'selected' : null ?>><?= $lag['Nama_Agama']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_agama');; ?></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_darah" class="col-sm-3 col-form-label">Golongan Darah</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select name="id_darah" id="id_darah" class="<?= $validation->hasError('id_darah') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($listDarah as $ldarah) {
                                                    ?>
                                                        <option value="<?= $ldarah['id_darah'] ?>" <?= old('id_darah') == $ldarah['id_darah'] ? 'selected' : null ?>><?= $ldarah['Nama_Darah']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_darah');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select name="id_pekerjaan" id="id_pekerjaan" class="<?= $validation->hasError('id_pekerjaan') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($listPekerjaan as $lpekerjaan) {
                                                    ?>
                                                        <option value="<?= $lpekerjaan['id_pekerjaan'] ?>" <?= old('id_pekerjaan') == $lpekerjaan['id_pekerjaan'] ? 'selected' : null ?>><?= $lpekerjaan['Nama_Pekerjaan']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_pekerjaan');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_asuransi" class="col-sm-3 col-form-label">Asuransi</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <select name="id_asuransi" id="id_asuransi" class="<?= $validation->hasError('id_asuransi') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <?php
                                                    foreach ($listAsuransi as $lAsuransi) {
                                                    ?>
                                                        <option value="<?= $lAsuransi['id_asuransi'] ?>" <?= old('id_asuransi') == $lAsuransi['id_asuransi'] ? 'selected' : null ?>><?= $lAsuransi['nama_asuransi']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_asuransi');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_propinsi" class="col-sm-3 col-form-label">Provinsi</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select name="id_propinsi" id="id_propinsi" class="<?= $validation->hasError('id_propinsi') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option value=""></option>
                                                        <?php
                                                        foreach ($listPropinsi as $lp) {
                                                        ?>
                                                            <option value="<?= $lp['id_propinsi'] ?>" <?= old('id_propinsi') == $lp['id_propinsi'] ? 'selected' : null ?>><?= $lp['nama_propinsi']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_propinsi');; ?></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_kabupaten" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select name="id_kabupaten" id="id_kabupaten" class="<?= $validation->hasError('id_kabupaten') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option value=""></option>

                                                    </select>
                                                    <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_kabupaten');; ?></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select name="id_kecamatan" id="id_kecamatan" class="<?= $validation->hasError('id_kecamatan') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option value=""></option>

                                                    </select>
                                                    <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_kecamatan'); ?></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="id_desa" class="col-sm-3 col-form-label">Desa / Kelurahan</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">
                                                    <select name="id_desa" id="id_desa" class="<?= $validation->hasError('id_desa') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                        <option value=""></option>

                                                    </select>
                                                    <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_desa');; ?></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="alamat_ktp" class="col-sm-3 col-form-label">Alamat KTP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('alamat_ktp') ? 'is-invalid' : 'null' ?>" placeholder="Alamat KTP" id="alamat_ktp" name="alamat_ktp" value="<?= old('alamat_ktp'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('alamat_ktp');; ?></small></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('nama_wali') ? 'is-invalid' : 'null' ?>" placeholder="Nama Wali" id="nama_wali" name="nama_wali" value="<?= old('nama_wali'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nama_wali');; ?></small></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_wali" class="col-sm-3 col-form-label">Nomor Wali</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control  <?= $validation->hasError('nomor_wali') ? 'is-invalid' : 'null' ?>" placeholder="0812-3456-7890" id="nomor_wali" name="nomor_wali" value="<?= old('nomor_wali'); ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nomor_wali');; ?></small></div>
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
                                                    foreach ($listPoli as $lpoli) {
                                                    ?>
                                                        <option value="<?= $lpoli['id_poli']; ?>"><?= $lpoli['nama_poli']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_poli');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="biaya_pendaftaran" class="col-sm-3 col-form-label">biaya pendaftaran</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" class="form-control  <?= $validation->hasError('biaya_pendaftaran') ? 'is-invalid' : 'null' ?>" placeholder="biaya pendaftaran" id="biaya_pendaftaran" name="biaya_pendaftaran" value="50000">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('biaya_pendaftaran');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_pembayaran" class="col-sm-3 col-form-label">Apakah Sudah Membayar ?</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">

                                                <select name="status_pembayaran" id="status_pembayaran" class="<?= $validation->hasError('status_pembayaran') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">
                                                    <option value=""></option>
                                                    <option value="Belum Lunas">Belum Lunas</option>
                                                    <option value="Lunas">Lunas</option>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('status_pembayaran');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>



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