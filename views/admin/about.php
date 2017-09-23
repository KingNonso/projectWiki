
        <!-- Main site starts -->
        <div class="col-sm-9">
            <div class="panel panel-primary">
                <div class="panel-heading">About Project Wiki </div>
                <div class="panel-body"> <?php echo(Session::get('logged_in_user_name')); ?></div>
            </div>

            <?php
                $update = (isset($this->update))? $this->update : false;
                $mod = $this->about;
            ?>
            <?php
                if(!$update){?>
                    <!-- Main content -->
                    <section class="content">
                        <section class="content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Showing all </h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table id="example2" class="table table-bordered table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Details</th>
                                                    <th colspan="2">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    foreach($this->about as $mod){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo($mod['title']); ?></td>

                                                            <td><?php echo(html_entity_decode($mod['details'])); ?>
                                                            </td>
                                                            <td><a href="<?php echo URL; ?>admin/about/<?php echo $mod['id']; ?>" class="btn btn-success btn-flat">Update</a></td>

                                                            <td><a href="<?php echo URL; ?>admin/delete_about/<?php echo $mod['id']; ?>" onclick="return confirm('This will be permanently deleted. It cannot be undone. PROCEED?')" class="btn btn-danger btn-flat">Delete </a></td>

                                                        </tr>
                                                    <?php }  ?>


                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Details</th>
                                                    <th colspan="2">Actions</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>
                        <!-- Your Page Content Here -->
                        <section class="content-header">
                            <h2>
                                Write About
                            </h2>
                            <div class="box-body">
                                <?php if(Session::exists('home')){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        <?php echo Session::flash('home');?>                         </div>
                                    <?php  ?>
                                <?php } elseif(Session::exists('error')){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        <?php echo Session::flash('error');  //echo  //$this->error;?>
                                    </div>
                                <?php }
                                else{?>
                                    <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                                        Here is where you enter new info
                                    </div>
                                <?php } ?>

                            </div>


                        </section>

                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">THE About</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <div class="box-body">
                                        <p>When you wish to write about the school, there are a couple of things you need to note.</p>
                                        <ul>
                                            <li><strong>The Header:</strong> This is the title or name that appears at the top. </li>
                                            <li><strong>The Details:</strong> Full length description of anything you wish to talk about. </li>
                                        </ul>



                                    </div>
                                    <!-- /.box-body -->

                                </div>
                                <!-- /.box -->


                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"> Write</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form action="<?php echo(URL.'admin/create_history'); ?>" method="post" id="contact_form" enctype="multipart/form-data">


                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="title">Header </label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter  Title ..." value="<?php if (Session::exists('title')){ echo(Session::flash('title')); } ?>">
                                            </div>


                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea class="form-control textarea" rows="16" placeholder="Enter details here ..." id="compose-textarea"  name="details">
                                                    <?php if (Session::exists('details')){ echo(Session::flash('details')); } ?>
                                                </textarea>
                                            </div>



                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box -->


                            </div>
                            <!--/.col (left) -->
                        </div>
                    </section>
                    <!-- /.content -->
                <?php } else{?>
                    <section class="content">
                        <!-- Your Page Content Here -->
                        <section class="content-header">
                            <h2>
                                Update   <?php echo($mod['title']); ?>
                            </h2>
                            <div class="box-body">
                                <?php if(Session::exists('home')){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                        <?php echo Session::flash('home');?>                         </div>
                                    <?php  ?>
                                <?php } elseif(Session::exists('error')){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                        <?php echo Session::flash('error');  //echo  //$this->error;?>
                                    </div>
                                <?php }
                                else{?>
                                    <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                                        Here is where you update the info
                                    </div>
                                <?php } ?>

                            </div>

                        </section>

                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><?php echo($mod['title']); ?></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <div class="box-body">
                                        <p>When you wish to write about the school, there are a couple of things you need to note.</p>
                                        <ul>
                                            <li><strong>The Header:</strong> This is the title or name that appears at the top. </li>
                                            <li><strong>The Details:</strong> Full length description of anything you wish to talk about. </li>
                                        </ul>



                                    </div>
                                    <!-- /.box-body -->

                                </div>
                                <!-- /.box -->


                            </div>
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"> Update <?php echo($mod['title']); ?></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <!-- form start -->
                                    <form action="<?php echo(URL.'admin/create_history/'.$mod['id']); ?>" method="post" id="contact_form" enctype="multipart/form-data">


                                        <div class="box-body">

                                            <div class="form-group">
                                                <label for="title">Header  </label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter  Title ..." value="<?php if (Session::exists('title')){ echo(Session::flash('title')); }else{ echo($mod['title']);} ?>">
                                            </div>



                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea class="form-control textarea" rows="16" placeholder="Enter details here ..." id="compose-textarea"  name="details">
                                                    <?php if (Session::exists('details')){ echo(Session::flash('details')); }else{ echo($mod['details']);} ?>
                                                </textarea>
                                            </div>




                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="<?php echo URL; ?>admin/about" class="btn btn-default pull-right">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box -->


                            </div>
                            <!--/.col (left) -->
                        </div>
                    </section>
                <?php }?>

        </div>
        <!-- Main site ends -->
