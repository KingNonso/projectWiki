
        <!-- Main site starts -->
        <div class="col-sm-9">
            <div class="panel panel-primary">
                <div class="panel-heading">Users</div>
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

                    <h2>All Users</h2>
                    <hr/>

                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email </th>
                                <th>Permission</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($this->users as $p) {
                                    ?>
                                    <tr>
                                        <td><?php echo ($p['name']); ?></td>
                                        <td><?php echo ($p['email']); ?></td>

                                        <td><?php  echo ($p['perms']); ?></td>
                                        <td><?php  echo ($p['status']); ?></td>
                                        <td><?php  echo ($p['lastLogin']); ?></td>
                                        <td>
                                            <?php if($p['user_perms_id'] == 1){  ?>
                                                <a href="<?php echo URL; ?>admin/make/admin/<?php echo $p['id']; ?>" class="btn btn-primary btn-flat"> Make Admin </a>
                                            <?php }else{ ?>
                                                <a href="<?php echo URL; ?>admin/make/user/<?php echo $p['id']; ?>" class="btn btn-default btn-flat"> Remove Admin </a>
                                            <?php } ?>

                                        </td>

                                        <td>

                                            <?php if($p['user_status'] == 1){  ?>
                                                <a href="<?php echo URL; ?>admin/make/block/<?php echo $p['id']; ?>" class="btn btn-warning btn-flat"> Block User</a>
                                            <?php }else{ ?>
                                                <a href="<?php echo URL; ?>admin/make/allow/<?php echo $p['id']; ?>" class="btn btn-default btn-flat"> Unblock User </a>
                                            <?php } ?>

                                        </td>




                                    </tr>
                                <?php   } ?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email </th>
                                <th>Permission</th>
                                <th>Status</th>
                                <th>Last Login</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main site ends -->
