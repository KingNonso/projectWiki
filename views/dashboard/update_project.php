<?php $paper = $this->paper ?>
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
                                <p>Please update the details with respect to this project work. Thanks</p>
                            </div>
                        <?php } ?>

                    </div>

                </div>
             </div>
            <div class="row">
                <div class="col-sm-12 panel-body">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <form action="<?php echo(URL . 'dashboard/add_paper/'.$paper['paper_id']); ?>" method="post" id="contact_form" enctype="multipart/form-data" class="form-horizontal">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Project Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Paper Title" value="<?php if (Session::exists('title')) {
                                            echo(Session::flash('title'));
                                        } elseif (isset($paper['paper_title'])) {
                                            echo($paper['paper_title']);
                                        } ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date" class="col-sm-2 control-label">Year</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="date" id="date">
                                            <?php
                                                $flash = false;
                                                if (Session::exists('date')){ $flash = (Session::flash('date')); }elseif (isset($paper['date_presented'])) {
                                                    $date = new DateTime($paper['date_presented']);
                                                    $flash =($date->format('Y'));
                                                } ?>
                                            <?php if($flash){ ?>
                                                <option value="<?php echo($flash); ?>"><?php echo($flash); ?></option>
                                            <?php } ?>
                                            <?php Date::yeargen()  ?>

                                        </select>

                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="author" class="col-sm-2 control-label">Author(s)</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="author" name="author" rows="2" placeholder="Paper author">
                                            <?php if (Session::exists('author')) {
                                                echo(Session::flash('author'));
                                            } elseif (isset($paper['paper_author'])) {
                                                echo($paper['paper_author']);
                                            } ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="abstract" class="col-sm-2 control-label">Abstract</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="abstract" name="abstract" rows="6" placeholder="Paper abstract">
                                            <?php if (Session::exists('abstract')) {
                                                echo(Session::flash('abstract'));
                                            } elseif (isset($paper['abstract'])) {
                                                echo($paper['abstract']);
                                            } ?>
                                        </textarea>
                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block">Submit Project</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.box -->



                </div>
            </div>
        </div>
        <!-- Main site ends -->
