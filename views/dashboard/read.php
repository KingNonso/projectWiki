<?php $paper = ($this->paper); ?>

<!-- Main site starts -->
<div class="col-sm-9">
    <div class="well">
        <p>Title:</p>
        <h2><?php echo($paper['paper_title']); ?></h2>

    </div>
    <div class="well">
        <p>Author:</p>
        <h2><?php echo($paper['paper_author']); ?></h2>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>Abstract:</p>
            <h4><?php echo nl2br($paper['abstract']); ?></h4>
            <hr/>
            <p>Download Path:</p>

            <?php if (isset($paper['full_paper_pdf'])) { ?>
                <a href="<?php echo URL; ?>project/download/<?php echo $paper['full_paper_pdf']; ?>" class="btn btn-success btn-flat">Download Project</a>
            <?php }else{ echo('N/A'); } ?>


            <hr/>

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
                <?php } ?>

            </div>

            <p>Write a review for this project:</p>
            <h4><?php echo(Session::get('logged_in_user_name')); ?></h4>


            <form action="<?php echo(URL.'project/review'); ?>" method="post" id="contact_form">
                <input type="hidden" id="name" name="name" value="<?php echo(Session::get('logged_in_user_name')); ?>">
                <input type="hidden" id="user_id" name="user_id" value="<?php echo(Session::get('user_id')); ?>">
                <input type="hidden" id="email" name="email" value="<?php echo(Session::get('email')); ?>">
                <input type="hidden" id="paper_id" name="paper_id" value="<?php echo($paper['paper_id']); ?>">
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <span id="status"></span>
                <button type="submit" class="btn btn-success btn-block" id="submit">Submit</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3> Previous review for this project:</h3>
            <hr/>

                <div class="list-group">
                    <?php foreach($this->review as $r){ ?>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"> <?php echo($r->name);  ?>  <small><?php echo($r->date);  ?> </small></h4>
                            <p class="list-group-item-text"> <?php echo nl2br($r->message);  ?></p>
                        </a>

                    <?php } ?>


                </div>




        </div>
    </div>

</div>
<!-- Main site ends -->
