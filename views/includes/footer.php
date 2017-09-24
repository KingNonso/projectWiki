<!-- Scripts -->
<script src="<?php echo URL; ?>public/bootstrap/js/jQuery-2.2.0.min.js"></script>
<script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<?php
    //general applicable js
    if (isset($this->generalJS))
    {
        foreach ($this->generalJS as $general)
        {
            echo '<script type="text/javascript" src="'.URL.'public/'.$general.'"></script>';
        }
    }
    if (isset($this->jsPlugin))
    {
        foreach ($this->jsPlugin as $jsPlugin)
        {
            echo '<script type="text/javascript" src="'.URL.'public/custom/plugins/'.$jsPlugin.'"></script>';
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
<br/>
<footer class="container-fluid text-center bg-grey">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Designed and Development by <a href="http://www.moveup.com.ng" title="Visit Us">Electronics and Computer Engineering Students (Computer Option - Class of 2017)</a></p>
</footer>


</body>
</html>
