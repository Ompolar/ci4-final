<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <form action="" method="POST">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Login Akun Petugas</h4>
                                    <hr>
                                    <?php if (session()->get('success')) : ?>
                                         <div class="alert alert-success" role="alert">
                                            <?php echo session()->get('success') ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (session()->getFlashdata('error')) { ?>
                                        <div class="alert alert-danger">
                                            <?php echo session()->getFlashdata('error')?>
                                        </div>
                                    <?php }?>

                                    <form action="<?= base_url(); ?>/" method="POST">
                                    <?= csrf_field()?>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?= session()->getFlashdata('email') ?>" placeholder="masukkanEmailPetugas@email.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                        </div>
                                        <?php if (isset($validation)) : ?>
                                             <div class="col-12">
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $validation->listErrors() ?>
                                                </div>
                                            </div> -->
                                        <?php endif; ?>
                                        
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <!-- <div class="form-group">
                                                <a class="text-primary" href="<?php //echo base_url(); ?>/login/forgot_password">Forgot Password?</a>
                                            </div> -->
                                            <?php if (isset($validation)) : ?>
                                             <div class="col-12">
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $validation->listErrors() ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Belum Punya akun Petugas? <a class="text-primary" href="<?= base_url(); ?>/login/register">Register</a></p>
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