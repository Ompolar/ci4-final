<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Forgot Password</h4>
                                <?php if (session()->getFlashdata('error')) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo session()->getFlashdata('error')?>
                                    </div>
                                <?php }?><?php if (session()->getFlashdata('success')) { ?>
                                    <div class="alert alert-success">
                                        <?php echo session()->getFlashdata('success')?>
                                    </div>
                                <?php }?>
                                <form action="<?= base_url(); ?>/login/forgot_password" method="post">
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="hello@example.com">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>