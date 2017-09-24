<!DOCTYPE html>
<html lang="en">
<head>
    <title>NAU - Project Wiki</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL; ?>public/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>public/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>public/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>public/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>public/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>public/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>public/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>public/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>public/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL; ?>public/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>public/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>public/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>public/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo URL; ?>public/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo URL; ?>public/images/favicons/ms-icon-144x144.png">
    <?php  //page applicable plugin
        if (isset($this->generalCSS))
        {
            foreach ($this->generalCSS as $plugin)
            {
                echo '<link  href="'.URL.'public/'.$plugin.'" rel="stylesheet" type="text/css">';
            }
        }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .jumbotron {
            background-color: #f4511e;
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }
        .logo {
            color: #f4511e;
            font-size: 200px;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control.right, .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }
        .carousel-indicators li {
            border-color: #f4511e;
        }
        .carousel-indicators li.active {
            background-color: #f4511e;
        }
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .item span {
            font-style: normal;
        }
        .panel {
            border: 1px solid #f4511e;
            border-radius:0 !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }
        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        .panel-footer {
            background-color: white !important;
        }
        .panel-footer h3 {
            font-size: 32px;
        }
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }
        .navbar {
            margin-bottom: 0;
            background-color: #f4511e;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">NAU</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo URL; ?>">HOME</a></li>
                <li><a href="<?php echo URL; ?>about">ABOUT</a></li>
                <li><a href="<?php echo URL; ?>project">PROJECTS</a></li>
                <li><a href="<?php echo URL; ?>reg">REGISTER</a></li>
                <li><a href="<?php echo URL; ?>login">LOGIN</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <img src="<?php echo URL; ?>public/images/unizik_logo.jpg" class="img-thumbnail center-block" alt="UNIZIK" width="60" height="60">
    <h1>NAU</h1>
    <p>Nnamdi Azikiwe University</p>
    <p>Project Wiki</p>

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Welcome to Project Wiki</h2><br>
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br><a href="<?php echo URL; ?>project" class="btn btn-default btn-lg"> View Projects</a>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-folder-open logo"></span>
        </div>
    </div>
</div>

<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">REGISTER</h2>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
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
                <?php } else {
                    ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        Registration is now open to all students. Please complete the form below.
                    </div>
                <?php } ?>

            </div>

            <form id="form1" name="form1" method="post" action="<?php echo URL; ?>reg/register"  enctype="multipart/form-data">

                <div class="row" id="academic_info">
                    <div class="col-sm-6 form-group">
                        <label for="firstname">First Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" id="firstname" name="firstname" placeholder="First Name" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="surname">Last Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" id="surname" name="surname" placeholder="Last/Other Name(s)" type="text" required>
                        </div>
                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="program">Program</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-cog"></i> </span>
                            <select class="form-control" name="program" id="program"  required="required">
                                <?php if (Session::exists('program')){?>
                                    <option value="<?php echo $flash = Session::flash('program'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::student(); ?>
                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="grad_yr">Year of Graduation </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i> </span>
                            <div id="student_grad_yr">
                                <select class="form-control" name="grad_yr" id="grad_yr" required="required">
                                    <?php if (Session::exists('grad_yr')){?>
                                        <option value="<?php echo $flash = Session::flash('grad_yr'); ?>" selected="selected"><?php echo $flash; ?></option>
                                    <?php }?>
                                    <?php Person::sessionsInFuture(); ?>

                                </select>
                                <br/>
                            </div>


                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="level">Level </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-signal"></i> </span>
                            <select class="form-control" name="level" id="level" required="required">
                                <?php if (Session::exists('level')){?>
                                    <option value="<?php echo $flash = Session::flash('level'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::acad_level(); ?>

                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="faculty">Faculty </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i> </span>
                            <select class="form-control" name="faculty" id="faculty" required="required" onchange="retrieve_reg_no('faculty',1)">
                                <?php if (Session::exists('faculty')){?>
                                    <option value="<?php echo $flash = Session::flash('faculty'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <option value="0">Select</option>
                                <?php Person::faculty(); ?>
                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="department">Department </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-modal-window"></i> </span>
                            <select class="form-control" name="department" id="department" >
                                <option value="0">Loading</option>
                                <?php if (Session::exists('department')){?>
                                    <option value="<?php echo $flash = Session::flash('department'); ?>" selected="selected"><?php echo $flash; ?></option>
                                <?php }?>
                                <?php Person::depts(); ?>

                            </select>

                        </div>

                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="reg_no">Reg Number </label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-star"></i> </span>
                            <input class="form-control"  required="required" type="text" name="reg_no" id="reg_no"  value="<?php if (Session::exists('reg_no')){ echo(Session::flash('reg_no')); } ?>" >
                        </div>

                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                            <input class="form-control" id="new_member_email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="password" name="password" placeholder="Enter password" type="password" required>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="password_again">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" type="password" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="contact" class="container-fluid">
    <h2 class="text-center">LOGIN</h2>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
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
                <?php } else {
                    ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        Enter your details to login
                    </div>
                <?php } ?>

            </div>

            <form action="<?php echo URL; ?>login/login" method="post">

                <div class="row" id="academic_info">


                    <div class="col-sm-12 form-group">
                        <label for="login_email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                            <input class="form-control" id="login_email" name="login_email" placeholder="Enter your email" type="text" required>
                        </div>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="login_pwd">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" id="login_pwd" name="login_pwd" placeholder="Enter password" type="password" required>
                        </div>
                    </div>
                 </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<footer class="container-fluid text-center bg-grey">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Designed and Development by <a href="http://www.moveup.com.ng" title="Visit Us">Electronics and Computer Engineering Students (Computer Option - Class of 2017)</a></p>
</footer>
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


</body>
</html>
