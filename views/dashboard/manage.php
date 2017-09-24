
        <!-- Main site starts -->
        <div class="col-sm-9">
            <div class="well">
                <p>All your project works...</p>
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
                        <?php } ?>

                    </div>

                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Author</th>
                            <th>Title </th>
                            <th>Year</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($this->papers as $p) {
                                    ?>
                                <tr>
                                    <td><?php echo ($p['paper_author']); ?></td>
                                    <td><?php echo ($p['paper_title']); ?></td>

                                    <td><?php  echo ($p['date']); ?></td>
                                    <td>
                                        <a href="<?php echo URL; ?>dashboard/edit/<?php echo $p['paper_id']; ?>" class="btn btn-primary btn-flat">Edit Project </a>
                                    </td>

                                    <td>
                                        <a href="<?php echo URL; ?>project/delete/<?php echo $p['paper_id']; ?>" class="btn btn-danger btn-flat">Delete Project</a>
                                    </td>




                                </tr>
                                <?php   } ?>


                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Author</th>
                            <th>Title </th>
                            <th>Year</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
        <!-- Main site ends -->
