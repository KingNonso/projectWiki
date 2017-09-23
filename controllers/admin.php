<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->view->dashboard = $this->model->dashboard();

        $this->view->title = 'Project Wiki - Admin';
       $this->view->render('admin/index', 'admin');
    }

    function projects(){
        $this->reMapRouteToModel('project');
        list($this->view->years,$this->view->papers) = $this->project->papers();
        $this->view->render('admin/manage', 'admin');
        $this->view->title = 'Manage Project Works - Project Wiki';
    }

    function view($id){
        list($paper, $review) = $this->model->view_paper($id);
        $this->view->paper = $paper;
        $this->view->review = $review;
        $this->view->title = $paper['paper_title'];

        $this->view->render('admin/read','admin');

    }

    function remove_review($id = null){
        $this->model->remove_review($id);
        Redirect::to(backToSender());

    }
    function delete_about($id = null){
        $this->model->delete_about($id);
        Redirect::to(backToSender());

    }

    function users(){
        $this->view->users = $this->model->users();
        $this->view->render('admin/users', 'admin');
        $this->view->title = 'Manage Users - Project Wiki';
    }

    function make($what,$who){
        $this->view->users = $this->model->make($what,$who);
        Redirect::to(backToSender());
    }

    function about($id = null){
        $this->view->about = $this->model->get_about($id);
        $this->view->update = $id;

        $this->view->cssPlugin = array('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');
        $this->view->jsPlugin = array('bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');
        $this->view->js = array('admin/js/ui.js');

        $this->view->title = 'Admin - About Project Wiki';
        $this->view->render('admin/about', 'admin');
    }

    function create_history($update = null) {
        //@Task: Do your error checking
        if (Input::exists()) {
            $validate = new Validate();
            //validate input
            $validation = $validate->check($_POST, array(
                'title' => array(
                    'name' => 'Name',
                    'required' => true,
                ),
                'details' => array(
                    'name' => 'Details',
                    'required' => true,
                ),
            ));

            if ($validation->passed()) {
                $this->model->create_history($update);

            } else {
                if (count($validation->errors()) == 1) {
                    $message = "There was 1 error in the form.";
                } else {
                    $message = "There were " . count($validation->errors()) . " errors in the form.<br />";
                }
                $message .= $validate->display_errors();
                Session::put('error', $message);
            }
        }
        Redirect::to(backToSender());
    }







}