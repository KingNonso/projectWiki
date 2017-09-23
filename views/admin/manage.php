
        <!-- Main site starts -->
        <div class="col-sm-9">
            <div class="panel panel-primary">
                <div class="panel-heading"> All project works...</div>
                <div class="panel-body"> <?php echo(Session::get('logged_in_user_name')); ?></div>
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
                        <?php } ?>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box">
                                <?php
                                    if (!$this->papers) {
                                        ?>
                                        <div class="box-header">
                                            <h3 class="box-title">Nothing to Display </h3>
                                        </div>
                                    <?php
                                    } else {
                                        ?>
                                        <div class="box-header">
                                            <h3 class="box-title">Showing all </h3>
                                            <hr/>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <ul class="nav nav-pills nav-stacked">

                                                        <?php
                                                            foreach ($this->years as $yr) {
                                                                ?>
                                                                <li <?php if($yr == 2012){ echo('class="active"'); } ?>><a data-toggle="pill" href="#<?php echo($yr); ?>_tab"><?php echo($yr); ?></a></li>
                                                            <?php } ?>

                                                    </ul>
                                                </div>
                                                <div class="col-md-10">

                                                    <div class="tab-content">

                                                        <?php
                                                            foreach ($this->years as $yr) {
                                                                ?>
                                                                <div id="<?php echo($yr); ?>_tab" class="tab-pane fade <?php if($yr == 2012){ echo('in active'); } ?>">
                                                                    <h3><?php echo($yr); ?></h3>
                                                                    <p>Showing all content.</p>
                                                                    <div class="table-responsive">
                                                                        <table id="example2" class="table table-bordered table-hover table-striped">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>Department</th>
                                                                                <th>Author</th>
                                                                                <th>Title </th>
                                                                                <th>Year</th>
                                                                                <th colspan="3">Action</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <?php
                                                                                foreach ($this->papers as $p) {
                                                                                    if($yr == $p['date']){
                                                                                        ?>

                                                                                        <tr>
                                                                                            <td><?php echo($p['occasion']); ?></td>
                                                                                            <td><?php echo ($p['paper_author']); ?></td>
                                                                                            <td><?php echo ($p['paper_title']); ?></td>

                                                                                            <td><?php echo($yr); ?>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="<?php echo URL; ?>admin/view/<?php echo $p['paper_id']; ?>" class="btn btn-default btn-flat">View Project </a>
                                                                                            </td>
                                                                                            <td>
                                                                                                <a href="<?php echo URL; ?>dashboard/edit/<?php echo $p['paper_id']; ?>" class="btn btn-primary btn-flat">Edit Project </a>
                                                                                            </td>

                                                                                            <td>
                                                                                                <a href="<?php echo URL; ?>project/delete/<?php echo $p['paper_id']; ?>" class="btn btn-danger btn-flat">Remove Project</a>
                                                                                            </td>




                                                                                        </tr>
                                                                                    <?php   }} ?>


                                                                            </tbody>
                                                                            <tfoot>
                                                                            <tr>
                                                                                <th>Department</th>
                                                                                <th>Author</th>
                                                                                <th>Title </th>
                                                                                <th>Year</th>
                                                                                <th colspan="3">Action</th>
                                                                            </tr>
                                                                            </tfoot>
                                                                        </table>

                                                                    </div>
                                                                </div>

                                                            <?php } ?>




                                                    </div>
                                                </div>

                                                <br/>
                                                <br/>
                                            </div>


                                        </div>
                                    <?php } ?>
                                <!-- /.box-body -->
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- Main site ends -->
