<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <form action="" method="POST">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
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

                                    <form action="<?= base_url(); ?>/login/reset_password" method="POST">
                                    <?= csrf_field()?>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>TOKEN</strong></label>
                                            <input type="text" class="form-control" id="token" name="token" value="" placeholder="Masukkan Token Terkirim">
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
                                            
                                            <?php if (isset($validation)) : ?>
                                             <div class="col-12">
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $validation->listErrors() ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="reset" value="reset">Sign Me In</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>