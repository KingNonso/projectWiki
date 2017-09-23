<?php

class View {
    private static $deviceType = null;

    function __construct() {
    }



    public function render($page_to_render, $noInclude = false) {

        $path = 'views/'.$page_to_render.'.php';
        if(file_exists($path)){

            if ($noInclude === 'none') {
                require $path;
            } elseif ($noInclude === 'admin') {
                require 'views/includes/admin_header.php';
                require $path;
                include 'views/includes/admin_footer.php';
            } elseif ($noInclude === 'member') {
                require 'views/includes/member_header.php';
                require $path;
                include 'views/includes/member_footer.php';
            } else {
                require 'views/includes/header.php';
                require $path;
                include 'views/includes/footer.php';
            }

        }else{
            require 'controllers/errata.php';
            $controller = new Errata();
            $controller->index();
            return false;
        }


    }


    public static function NavBar(){
        return 'views/includes/navigation.php';

    }
    public static function dashBar(){
        return 'views/includes/dashboard.php';

    }
    public static function staffBar(){
        return 'views/includes/staff.php';

    }
    public static function rightNav(){
        return 'views/includes/rightNav.php';

    }
    public static function topNav(){
        return 'views/includes/topNav.php';

    }



}
