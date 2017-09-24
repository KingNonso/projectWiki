<!-- Scripts -->
<script src="<?php echo URL; ?>public/bootstrap/js/jQuery-2.2.0.min.js"></script>
<script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
<?php
    //general applicable js
    if (isset($this->generalJS))
    {
        foreach ($this->generalJS as $general)
        {
            echo '<script type="text/javascript" src="'.URL.'public/'.$general.'"></script>';
        }
    }
    //page specific js
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }

?>
</div>
</div>
<footer class="container-fluid text-center bg-grey">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Design and Developed by <a href="http://www.moveup.com.ng" title="Visit Us">Electronics and Computer Engineering Students (Computer Option - Class of 2017)</a></p>
</footer>


</body>
</html>
