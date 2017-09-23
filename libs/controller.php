<?php

class Controller {

    public $model;

    function __construct() {
        //echo 'Main Controller <br/>';
        $this->view = new View();
       //$this->deviceType = View::getInstance();
        if (!isset($_SESSION['maxfiles'])) {
            $_SESSION['maxfiles'] = ini_get('max_file_uploads');
            $_SESSION['postmax'] = Upload::convertToBytes(ini_get('post_max_size'));
            $_SESSION['displaymax'] = Upload::convertFromBytes($_SESSION['postmax']);
        }

    }

    public static function checkLoginRole($role = null){
        $logged = Session::get('loggedIn');
        if ($logged == false || Session::get('role') !== $role ) {
            Redirect::to(URL.'login');
            return false;
        }
        return true;

    }


    public function loadModel($name){
        $path = 'models/'.$name.'_model.php';
        $modelName = $name.'_Model';

        if(class_exists($modelName)){
            $this->model = new $modelName();
        }else{
            if(file_exists($path)){
                require $path;

                $this->model = new $modelName();
            }else{
                if(class_exists('Error')){
                    $controller = new Error();
                }else{
                    require 'controllers/error.php';
                    $controller = new Error();
                }
                return false;
            }

        }

    }

    public function reMapRouteToModel($name){

        $path = 'models/'.$name.'_model.php';
        $modelName = $name.'_Model';

        if(class_exists($modelName)){
            $this->$name = new $modelName();
            //$this->reMappedRoute = new $modelName();

        }else{
            if(file_exists($path)){
                require $path;
                //$this->reMappedRoute = new $modelName();
                $this->$name = new $modelName();
            }else{
                require 'controllers/error.php';
                $controller = new Error();
                return false;
            }

        }

    }



}

