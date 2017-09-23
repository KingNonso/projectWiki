<?php

class Project extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
       $this->view->title = 'Students\' Projects';
        $this->view->about = null;
        $this->view->count= null;
        list($this->view->years,$this->view->papers) = $this->model->papers();
        $this->view->render('project/index');
    }

    function download($id){
        $filename = UPLOAD_PATH.'pdfs/'.$id;
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=\"$id\"");
        readfile($filename);


        exit();

    }

    function view($id){
        list($paper, $review) = $this->model->view_paper($id);
        $this->view->paper = $paper;
        $this->view->review = $review;
        $this->view->title = $paper['paper_title'];
        if(Session::get('loggedIn')){
            $this->view->render('dashboard/read','member');
        }else{
            $this->view->render('project/read');
        }

    }

    function delete($id = null){
        $this->reMapRouteToModel('project');
        $this->project->delete_papers($id);
            Redirect::to(backToSender());

    }

    function review() {
        //@Task: Do your error checking
        if (Input::exists()) {

            $validate = new Validate();
            //validate input
            $validation = $validate->check($_POST, array(
                'name' => array(
                    'name' => ' Name(s)',
                    'required' => true),
                'email' => array(
                    'name' => 'Email'),
                'message' => array(
                    'name' => 'Message',
                    'required' => true),
            ));


            if ($validation->passed()) {
                $this->model->comment();
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