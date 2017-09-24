

<div id="contact" class="container">
    <h2 class="text-center">LOGIN</h2>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="box-body">
                <?php if (Session::exists('home')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        <?php echo Session::flash('home'); ?>                         </div>
                    <?php ?>
                <?php } elseif (Session::exists('error')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        <?php echo Session::flash('error');  //echo  //$this->error;?>
                    </div>
                <?php } else {
                    ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        Enter your details to login
                    </div>
                <?php } ?>

            </div>

            <form action="<?php echo URL; ?>login/login" method="post">

                <div class="row" id="academic_info">


                    <div class="col-sm-12 form-group">
                        <label for="login_email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                            <input class="form-control" id="login_email" name="login_email" placeholder="Enter your email" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="login_pwd">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="login_pwd" name="login_pwd" placeholder="Enter password" type="password" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



