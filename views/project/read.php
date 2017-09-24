
<?php $paper = ($this->paper); ?>

<!-- Container (About Section) -->
<div id="services" class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Title:</p>
            <h2><?php echo($paper['paper_title']); ?></h2>
            <hr/>
            <p>Author:</p>
            <h2><?php echo($paper['paper_author']); ?></h2>
            <hr/>

            <p>Abstract:</p>
            <h4><?php echo($paper['abstract']); ?></h4>
            <hr/>
            <p>Download Path:</p>
            <?php if (isset($paper['full_paper_pdf'])) { ?>
                <a href="<?php echo URL; ?>project/download/<?php echo $paper['full_paper_pdf']; ?>" class="btn btn-success btn-flat">Download Project</a>
            <?php }else{ echo('N/A'); } ?>
            <hr/>
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

            <p>Write a review for this project:</p>
            <h4><?php echo($paper['paper_author']); ?></h4>


            <form action="<?php echo(URL.'project/review'); ?>" method="post" id="contact_form">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="name">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" id="name" name="name" placeholder="Enter Full Name" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>

                </div>


                <input type="hidden" id="user_id" name="user_id" value="<?php echo(Session::get('user_id')); ?>">


                <input type="hidden" id="paper_id" name="paper_id" value="<?php echo($paper['paper_id']); ?>">
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <span id="status"></span>
                <button type="submit" class="btn btn-success btn-block" id="submit">Submit</button>
            </form>


        </div>

        <br/>
        <br/>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-12">
            <h3> Previous review for this project:</h3>
            <hr/>

            <div class="list-group">
                <?php foreach($this->review as $r){ ?>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"> <?php echo($r->name);  ?>  <small> <?php echo($r->date);  ?> </small></h4>
                        <p class="list-group-item-text"> <?php echo nl2br($r->message);  ?></p>
                    </a>

                <?php } ?>


            </div>




        </div>
    </div>

</div>




