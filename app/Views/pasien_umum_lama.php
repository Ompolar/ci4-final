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
                        <h4 class="card-title">Tambah Pasien Lama</h4>
                    </div>

                    <?php $validation = \Config\Services::validation(); ?>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="<?= base_url(); ?>/pasien_lama/save_pasien_lama" method="POST">

                                <?= csrf_field(); ?>

                                <?php if (session()->getFlashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo session()->getFlashdata('success') ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (session()->getFlashdata('error')) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo session()->getFlashdata('error') ?>
                                    </div>
                                <?php } ?>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="hidden" class="form-control" id="jenis_pasien" name="jenis_pasien" value="<?= $jenis_pasien; ?>">


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="no_rekam_medis" class="col-sm-3 col-form-label">No Rekam Medis</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="text" class="form-control" id="no_rekam_medis" name="no_rekam_medis" value="<?= $no_rekam_medis; ?>" readonly>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control <?= $validation->hasError('nik') ? 'is-invalid' : 'null' ?>" placeholder="NIK" id="nik" name="nik" value="<?= $nik; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nik'); ?></small></div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control  <?= $validation->hasError('nama') ? 'is-invalid' : 'null' ?>" placeholder="Nama" id="nama" name="nama" value="<?= $nama ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nama'); ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="text" readonly class="form-control  <?= $validation->hasError('jenis_kelamin') ? 'is-invalid' : 'null' ?>" id="jenis_kelamin" name="jenis_kelamin" value="<?= $jenis_kelamin; ?>">
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('jenis_kelamin'); ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control  <?= $validation->hasError('tempat_lahir') ? 'is-invalid' : 'null' ?>" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" value="<?= $tempat_lahir; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('tempat_lahir');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" readonly class="form-control  <?= $validation->hasError('tanggal_lahir') ? 'is-invalid' : 'null' ?>" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('tanggal_lahir');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control  <?= $validation->hasError('telepon') ? 'is-invalid' : 'null' ?>" placeholder="0812-3456-7890" id="telepon" name="telepon" value="<?= $telepon; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('telepon');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_perkawinan" class="col-sm-3 col-form-label">Status Perkawinan</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">
                                                <input type="text" readonly class="form-control  <?= $validation->hasError('status_perkawinan') ? 'is-invalid' : 'null' ?>" id="status_perkawinan" name="status_perkawinan" value="<?= $status_perkawinan; ?>">

                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('status_perkawinan'); ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="umur" class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly class="form-control  <?= $validation->hasError('umur') ? 'is-invalid' : 'null' ?>" placeholder="Umur" id="umur" name="umur" value="<?= $umur ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('umur'); ?></small></div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="id_agama" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <div class="basic-form">
                                            <div class="form-row align-items-center">
                                                <div class="col">


                                                    <input type="text" readonly class="form-control  <?= $validation->hasError('id_agama') ? 'is-invalid' : 'null' ?>" id="id_agama" name="id_agama" value="<?= $id_agama ?>">
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

                                                <input type="text" readonly class="form-control  <?= $validation->hasError('id_darah') ? 'is-invalid' : 'null' ?>" id="id_darah" name="id_darah" value="<?= $id_darah ?>">
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

                                                <input type="text" readonly class="form-control  <?= $validation->hasError('id_pekerjaan') ? 'is-invalid' : 'null' ?>" id="id_pekerjaan" name="id_pekerjaan" value="<?= $id_pekerjaan ?>">
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
                                                <input type="text" readonly class="form-control  <?= $validation->hasError('umur') ? 'is-invalid' : 'null' ?>" placeholder="Umur" id="umur" name="umur" value="<?= $umur ?>">
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('id_asuransi');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="alamat_ktp" class="col-sm-3 col-form-label">Alamat KTP</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" class="form-control  <?= $validation->hasError('alamat_ktp') ? 'is-invalid' : 'null' ?>" placeholder="Alamat KTP" id="alamat_ktp" name="alamat_ktp" value="<?= $alamat_ktp; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('alamat_ktp');; ?></small></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_wali" class="col-sm-3 col-form-label">Nama Wali</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" class="form-control  <?= $validation->hasError('nama_wali') ? 'is-invalid' : 'null' ?>" placeholder="Nama Wali" id="nama_wali" name="nama_wali" value="<?= $nama_wali; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nama_wali');; ?></small></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nomor_wali" class="col-sm-3 col-form-label">Nomor Wali</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" class="form-control  <?= $validation->hasError('nomor_wali') ? 'is-invalid' : 'null' ?>" placeholder="0812-3456-7890" id="nomor_wali" name="nomor_wali" value="<?= $nomor_wali; ?>">
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('nomor_wali');; ?></small></div>
                                    </div>
                                </div>

                                <p>--------------------------------------------------------------------------------------------------</p>
                                <h5>ISI DATA DIBAWAH INI </h5>
                                <p>--------------------------------------------------------------------------------------------------</p>
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
                                        <input type="text" class="form-control  <?= $validation->hasError('biaya_pendaftaran') ? 'is-invalid' : 'null' ?>" placeholder="biaya pendaftaran" id="biaya_pendaftaran" name="biaya_pendaftaran" value="50000" readonly>
                                        <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('biaya_pendaftaran');; ?></small></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status_pembayaran" class="col-sm-3 col-form-label">Apakah Sudah Membayar ?</label>
                                    <div class="col-sm-9">
                                        <div class="form-row align-items-center">
                                            <div class="col">

                                                <select name="status_pembayaran" id="status_pembayaran" class="<?= $validation->hasError('status_pembayaran') ? 'is-invalid' : 'null' ?>" id="inlineFormCustomSelect">

                                                    <option value="Belum Lunas">Belum Lunas</option>
                                                    <option value="Lunas">Lunas</option>
                                                </select>
                                                <div class="invalid feedback text-danger m-1"><small><?= $validation->getError('status_pembayaran');; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>







                                <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                                <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>



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


<?= $this->endSection(); ?>