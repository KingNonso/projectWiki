

<!-- Container (About Section) -->
<div id="services" class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
                foreach($this->about as $mod){
                    ?>
                    <h2 class="text-center"> <?php echo($mod['title']); ?></h2>
                    <hr>
                    <p> <?php echo(html_entity_decode($mod['details'])); ?>
                    </p>
                <?php }  ?>
        </div>
    </div>
    <br><br>
    <br><br>

</div>




