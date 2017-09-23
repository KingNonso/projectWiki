
        <!-- Main site starts -->
        <div class="col-sm-9">
            <div class="well">
                <p>Welcome...</p>
                <h2><?php echo(Session::get('logged_in_user_name')); ?></h2>

            </div>
            <div class="row">
                <div class="col-sm-12">
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
                                Upload Necessary Files with regards to the project
                            </div>
                        <?php } ?>

                    </div>


                    <!-- general form elements -->
                    <div class="box box-primary">
                        <form action="<?php echo(URL . 'dashboard/add_file/'.$this->task); ?>" method="post" id="contact_form" enctype="multipart/form-data" class="form-horizontal">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="filename" class="col-sm-2 control-label">File</label>

                                    <div class="col-sm-10">
                                        <input type="hidden" name="MAX_FILE_SIZE" id="MAX_FILE_SIZE" value="<?php echo $max; ?>" />
                                        <input type="file" name="filename" id="filename"
                                               data-maxfiles="<?php echo $_SESSION['maxfiles']; ?>"
                                               data-postmax="<?php echo $_SESSION['postmax']; ?>"
                                               data-displaymax="<?php echo $_SESSION['displaymax']; ?>"
                                            />

                                        <p id="status" class="help-block">Upload file should be no more than <?php echo Upload::convertFromBytes($max); ?>.</p>
                                        <p id="output" class="help-block"></p>


                                    </div>
                                </div>



                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block">Upload Project File</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.box -->


                </div>
            </div>
        </div>
        <!-- Main site ends -->
