<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        
    }

    function index(){
        $this->view->js = array('index/js/default.js');
        $this->view->title = 'Project Wiki - Welcome';
        $this->view->render('index/index', 'none');
    }





}