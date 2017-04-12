
<div class="col-sm-12">

    <div class="wrapper-page">

        <div class="m-t-40 card-box">
            <div class="text-center">
                <h2 class="text-uppercase m-t-0 m-b-30">
                    <a href="#" class="text-success">
                        <span><img src="../img/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2>
                <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
            </div>
            <div class="account-content">


                <?= $this->Form->create()?>

                <div class="form-group m-b-20">
                    <div class="col-xs-12">
                        <label for="emailaddress">Username Or Email address</label>
                        <input class="form-control" type="text" id="username" name="username" value="" required="" placeholder="enter username or email">
                    </div>
                </div>

                <div class="form-group m-b-20">
                    <div class="col-xs-12">

                        <label for="password">Password</label>
                        <input class="form-control" type="password" required="" value="" name="password" id="password" placeholder="Enter your password">
                    </div>
                </div>

                <div class="form-group m-b-30">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox5" type="checkbox" name="cheked_cookies"   >
                            <label for="checkbox5">
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group account-btn text-center m-t-10">
                    <div class="col-xs-12">
                        <?= $this->Form->button(__('Login'), ['class'=>'btn btn-lg btn-primary btn-block']);?>
                        <a href="pages-forget-password.html" class="text-muted pull-right font-14">Forgot your password?</a>
                    </div>
                </div>


                <?= $this->Form->end()?>

                <div class="clearfix"></div>

            </div>
        </div>



        <div class="row m-t-50">
            <div class="col-sm-12 text-center">
                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-dark m-l-5">Sign Up</a></p>
            </div>
        </div>

    </div>


</div>


