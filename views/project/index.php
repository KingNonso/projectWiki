

<!-- Container (About Section) -->
<div id="services" class="container">
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
                            <table id="example2" class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Author</th>
                                    <th>Project Title </th>
                                    <th>Year</th>
                                    <th colspan="2">Action</th>
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
                                                    <a href="<?php echo URL; ?>project/view/<?php echo $p['paper_id']; ?>" class="btn btn-default btn-flat">View Project </a>
                                                </td>

                                                <td>
                                                    <?php if (isset($p['full_paper_pdf'])) { ?>
                                                        <a href="<?php echo URL; ?>project/download/<?php echo $p['full_paper_pdf']; ?>" class="btn btn-success btn-flat">Download Project</a>
                                                    <?php }else{ echo('N/A'); } ?>

                                                </td>




                                            </tr>
                                        <?php   }} ?>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Program</th>
                                    <th>Author</th>
                                    <th>Paper Title </th>
                                    <th>Year</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    <?php } ?>




            </div>
        </div>

        <br/>
        <br/>
    </div>
    <br><br>
    <br><br>

</div>




