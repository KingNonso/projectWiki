<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        if(!Session::get('loggedIn')){Redirect::to(URL.'login');}
    }
    
    function index($action = null, $id = null){
        list($this->view->all,$this->view->mine) = $this->model->my_summary();
        $this->view->title = 'Project Wiki';
        $this->view->render('dashboard/index','member');
    }

    function projects(){
        $this->reMapRouteToModel('project');
        list($this->view->years,$this->view->papers) = $this->project->papers();
        $this->view->render('dashboard/projects', 'member');
        $this->view->title = 'Project Wiki';

    }

    function manage(){
        $this->reMapRouteToModel('project');
        $this->view->papers = $this->project->my_papers();
        $this->view->render('dashboard/manage', 'member');
        $this->view->title = 'Manage my Works - Project Wiki';
    }

    function edit($id){
        $this->reMapRouteToModel('project');
        list($this->view->paper, $this->view->review) = $this->project->view_paper($id);

        $this->view->render('dashboard/update_project', 'member');
        $this->view->title = 'Edit my Work - Project Wiki';
    }


    function add_paper($update = null) {
        //@Task: Do your error checking
        if (Input::exists()) {

            $validate = new Validate();
            //validate input
            $validation = $validate->check($_POST, array(
                'title' => array(
                    'name' => 'Title',
                    'required' => true,
                ),
                'author' => array(
                    'name' => 'At least a single author',
                    'required' => true,
                ),
                'abstract' => array(
                    'name' => 'Abstract',
                    'required' => true,
                ),
                'occasion' => array(
                    'name' => 'The Occasion Presented at',
                ),
                'date' => array(
                    'name' => 'Date Presented',
                ),
                /*
                'tag' => array(
                    'name' => ' Tag',
                ),
                'abstract' => array(
                    'name' => ' Abstract',
                ),
                'place' => array(
                    'name' => 'the Place Presented at',
                ),
                 */

            ));


            if ($validation->passed() && $id = $this->model->add_paper($update)) {
                Redirect::to(URL . 'dashboard/redirect/'.$id);
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

    function redirect($smoke){
        $this->view->task = $smoke;
        $this->view->render('dashboard/add_file', 'member');
        $this->view->title = 'Upload Necessary File(s) - Project Wiki';

    }

    function add_file($update = null) {
        //@Task: Do your error checking
        if (Input::exists()) {
            $upload = $this->upload('pdfs');
            if ($upload) {
                $this->model->add_file($upload,$update);
            } else {
                //$this->model->add_file($update);
                Session::put('error', 'No file was Uploaded.');
            }

        }
        Redirect::to(backToSender());
    }

    function upload($folder = '', $error = false) {
        //echo($max);
        $result = array();

        //upload
        $destination = UPLOAD_PATH . $folder;
        $upload = new Upload($destination);
        //$upload->setMaxSize($max);
        $upload->allowAllTypes();
        $upload->upload();
        foreach ($upload->getMessages() as $msg) {
            $result[] = $msg;
        }
        //if the sub-folder doesn't exist yet create it
        if (!is_dir($destination)) {
            mkdir($destination);
        }
        $path = $upload->fileName();

        if (!isset($path) && $error) {
            $result[] = "Please Upload an Image file";
            $path = NULL;
            $output = "<p class=\"errors\"> ";
            $output .= "Please review the following fields: <br />";
            foreach ($result as $error) {
                $output .= " - " . $error . "<br />";
            }
            $output .= "</p>";
            Session::put('error', $output);
            //Redirect::to(URL . $step);
            //$this->view->render('reg/member/'.$step, true);

            return false;
        } else {
            return $path;
        }
        //Do not resize, do not save any resized image. Responsive system automatically adjust to fit screen size
        /*
          else{
          $resize = new Resize($destination.$path);
          $resize->resizeImage(120, 90, 'exact');
          $resize->saveImage($destination.'/'.$id_key.'/'.$path, 100);
          } */
    }


}