<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Register Akun Petugas</h4>
                                <form class="" action="<?= base_url(); ?>/login/register" method="POST">
                                    <div class="form-group">
                                        <label for="nama_petugas" class="mb-1"><strong>Nama Petugas</strong></label>
                                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= old('nama_petugas'); ?>" placeholder="Masukkan Nama Petugas">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= old('email'); ?>" placeholder="masukkanEmailPetugas@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="token" name="token" value="<?php helper('text'); echo random_string('alnum',16);?>">
                                    </div>

                                    <?php if (isset($validation)) : ?>
                                        <div class="col-12">
                                            <div class="alert alert-danger" role="alert">
                                                <?= $validation->listErrors() ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Sudah Punya Akun? <a class="text-primary" href="<?= base_url(); ?>">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>