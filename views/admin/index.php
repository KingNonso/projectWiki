<div class="col-sm-9">
    <div class="panel panel-primary">
        <div class="panel-heading">Admin Dashboard</div>
        <div class="panel-body"> <?php echo(Session::get('logged_in_user_name')); ?></div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="well">
                <h4>Users</h4>
                <p> <?php echo ($this->dashboard[0]);  ?></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Projects</h4>
                <p> <?php echo ($this->dashboard[1]);  ?></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Reviews</h4>
                <p> <?php echo ($this->dashboard[2]);  ?></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
                <h4>Admin</h4>
                <p> <?php echo ($this->dashboard[3]);  ?></p>
            </div>
        </div>
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
                        <p>Admin can add project to the archive</p>
                    </div>
                <?php } ?>

            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="box-body">
                <p>When you wish to add to the File, there are a couple of things you need to note.</p>
                <ul>
                    <li><strong>The Paper:</strong>
                        Just upload a single picture, ensure it is of a high resolution. </li>
                    <li><strong>The Title:</strong>
                        This is the header, usually appears in bold. </li>
                    <li><strong>The Paper Description:</strong>
                        Tell everyone about the Paper, what it means and what it symbolizes. </li>
                </ul>



            </div>
        </div>
        <div class="col-sm-9 well">

            <!-- general form elements -->
            <div class="box box-primary">
                <form action="<?php echo(URL . 'dashboard/add_paper'); ?>" method="post" id="contact_form" enctype="multipart/form-data" class="form-horizontal">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Project Title</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Paper Title" value="<?php if (Session::exists('title')) {
                                    echo(Session::flash('title'));
                                } elseif (isset($update['paper_title'])) {
                                    echo($update['paper_title']);
                                } ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-2 control-label">Year</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="date" id="date">
                                    <?php
                                        $flash = false;
                                        if (Session::exists('date')){ $flash = (Session::flash('date')); }elseif (isset($update['date_presented'])) {
                                            $flash =($update['date_presented']);
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
                                    } elseif (isset($update['paper_author'])) {
                                        echo($update['paper_author']);
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

