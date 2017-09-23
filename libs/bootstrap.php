<?php

class Bootstrap {

    public function __construct(){

    }

    function run() {

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);

		//if no path is set
		
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
            $controller->loadModel('index');
			$controller->index();
			return false;
		}

		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
        }else{

            $this->error();
            return false;
        }

		$controller = new $url[0];
		$controller->loadModel($url[0]);

        // calling methods
        if(isset($url[4])){
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2],$url[3],$url[4]);
            } else {
                $this->error();
            }
        }else{
            if(isset($url[3])){
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}($url[2],$url[3]);
                } else {
                    $this->error();
                }
            }else{
            if (isset($url[2])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}($url[2]);
                } else {
                    $this->error();
                }
            } else {
                if (isset($url[1])) {
                    if (method_exists($controller, $url[1])) {
                        $controller->{$url[1]}();
                    } else {//if url0 is defined and url1 is undefined as a method in url0
                        if(!$this->engine($url[0],$url[1])){
                            $this->error();
                        }

                    }
                } else {
                    $controller->index();
                }
            }

        }
        }

		
	}


    public function error() {
        require 'controllers/errata.php';
        $controller = new Errata();
        $controller->index();
        return false;
    }

}