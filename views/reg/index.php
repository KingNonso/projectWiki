<div id="contact" class="container">
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
                        Registration is now open to all students. Please complete the form below.
                    </div>
                <?php } ?>

            </div>

            <form id="form1" name="form1" method="post" action="<?php echo URL; ?>reg/register"  enctype="multipart/form-data">

                <div class="row" id="academic_info">
                    <div class="col-sm-6 form-group">
                        <label for="firstname">First Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" id="firstname" name="firstname" placeholder="First Name" type="text" value="<?php if (Session::exists('firstname')){ echo(Session::flash('firstname')); } ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="surname">Last Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" id="surname" name="surname" placeholder="Last/Other Name(s)" type="text" value="<?php if (Session::exists('surname')){ echo(Session::flash('surname')); } ?>" required>
                        </div>
                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="program">Program</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-cog"></i> </span>
                            <select class="form-control" name="program" id="program"  required="required">
                                <?php if (Session::exists('program')){?>
                                    <option value="<?php echo $flash = Session::flash('program'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::student(); ?>
                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="grad_yr">Year of Graduation </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i> </span>
                            <div id="student_grad_yr">
                                <select class="form-control" name="grad_yr" id="grad_yr" required="required">
                                    <?php if (Session::exists('grad_yr')){?>
                                        <option value="<?php echo $flash = Session::flash('grad_yr'); ?>" selected="selected"><?php echo $flash; ?></option>
                                    <?php }?>
                                    <?php Person::sessionsInFuture(); ?>

                                </select>
                                <br/>
                            </div>


                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="level">Level </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-signal"></i> </span>
                            <select class="form-control" name="level" id="level" required="required">
                                <?php if (Session::exists('level')){?>
                                    <option value="<?php echo $flash = Session::flash('level'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::acad_level(); ?>

                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="faculty">Faculty </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i> </span>
                            <select class="form-control" name="faculty" id="faculty" required="required" onchange="retrieve_reg_no('faculty',1)">
                                <?php if (Session::exists('faculty')){?>
                                    <option value="<?php echo $flash = Session::flash('faculty'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <option value="0">Select</option>
                                <?php Person::faculty(); ?>
                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="department">Department </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-modal-window"></i> </span>
                            <select class="form-control" name="department" id="department" >
                                <option value="0">Loading</option>
                                <?php if (Session::exists('department')){?>
                                    <option value="<?php echo $flash = Session::flash('department'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::depts(); ?>

                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="reg_no">Reg Number </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-star"></i> </span>
                            <input class="form-control"  required="required" type="text" name="reg_no" id="reg_no"  value="<?php if (Session::exists('reg_no')){ echo(Session::flash('reg_no')); } ?>" >
                        </div>

                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="<?php if (Session::exists('email')){ echo(Session::flash('email')); } ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="password" name="password" placeholder="Enter password" type="password" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="password_again">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" type="password" required>
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
