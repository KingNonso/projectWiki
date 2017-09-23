<?php

class About extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->about = $this->model->get_about();

        $this->view->title = 'About Project Wiki';
       $this->view->render('about/index'); 
    }
    


}