<!DOCTYPE html>
<html lang="en">
<?php
    $user = new User();
    $max = 1024 * 2000;
?>

<head>
    <title><?php $title = isset($this->title)? $this->title: "NAU - Project Wiki"; echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php// echo $blogs['tags']; ?>" />
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

    <link rel="stylesheet" href="<?php echo URL; ?>public/bootstrap/css/bootstrap.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #000;
            color: #f4511e;
            height: 100%;
        }

        .bg-grey{
            background-color: #000;
            color: #f4511e;
            height: 100%;
        }


        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
    <?php  //General or public applicable css
        if (isset($this->generalCSS))
        {
            foreach ($this->generalCSS as $plugin)
            {
                echo '<link  href="'.URL.'public/'.$plugin.'" rel="stylesheet" type="text/css">';
            }
        }
    ?>
    <?php  //General or public applicable css
        if (isset($this->pageCSS))
        {
            foreach ($this->pageCSS as $plugin)
            {
                echo '<link  href="'.URL.'views/'.$plugin.'" rel="stylesheet" type="text/css">';
            }
        }
    ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php
    $navigation = array(
        'dashboard' => array(
            'name' => 'Dashboard',
            'title' => 'Go to your Dashboard',
            'href' => URL.'dashboard',
        ),
        'projects' => array(
            'name' => 'Projects',
            'href' => URL.'dashboard/projects',
            'title' => 'View Projects',
        ),
        'manage' => array(
            'name' => 'Manage Project',
            'href' => URL.'dashboard/manage',
            'title' => 'My Projects',
        ),
        'logout' => array(
            'name' => 'Logout',
            'href' => URL.'login/logout',
            'title' => 'Logout this Session',
        ),
    );

    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    $url_count = count($url);

    if(count($url) > 1){
        //reconstruct the url back
        //$url = $url[0].'/'.$url[1];
        $url = $url[count($url)-1];
    }else{
        //it means we are viewing the index page
        $active = $url[0];
        $url = $url[0];

    }

?>


<!-- New stuff -->
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project Wiki </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <?php
                    if (isset($navigation)){
                        foreach($navigation as $item => $page){?>
                            <li <?php if($item === $url ){ echo('class="active"'); }  ?>> <a href="<?php echo $page['href']; ?>" title="<?php echo $page['title']; ?>"><?php echo $page['name']; ?></a></li>

                        <?php }  ?>
                    <?php }    ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <h2>NAU - Project Wiki </h2>
            <ul class="nav nav-pills nav-stacked">
                <?php
                    if (isset($navigation)){
                        foreach($navigation as $item => $page){?>
                            <li <?php if($item === $url ){ echo('class="active"'); }  ?>> <a href="<?php echo $page['href']; ?>" title="<?php echo $page['title']; ?>"><?php echo $page['name']; ?></a></li>

                        <?php }  ?>
                    <?php }    ?>
            </ul><br>
        </div>
        <br>
