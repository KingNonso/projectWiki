<?php

    class Reg extends Controller {


        function __construct() {
            parent::__construct();

            $this->view->title = "Registrations";
            $this->view->header = "Registrations";
            $this->view->generalJS = array('custom/js/upload_check.js','custom/js/ajax.js');


        }

        function index(){
            $this->view->title = 'Registration';
            $this->view->js = array('index/js/default.js');
            $this->view->render('reg/index');
        }


        function register() {
            //@Task: Do your error checking
            if (Input::exists()) {
                $validate = new Validate();
                //validate input
                $validation = $validate->check($_POST, array(
                    'program' => array(
                        'name' => 'Program',
                        'required' => true,
                    ),
                    'faculty' => array(
                        'name' => 'Faculty',
                    ),
                    'department' => array(
                        'name' => 'Department',
                    ),
                    'level' => array(
                        'name' => 'Level',
                    ),
                    'grad_yr' => array(
                        'name' => ' Year of Graduation',
                    ),
                    'reg_no' => array(
                        'name' => 'Reg Number',
                        'required' => true,
                    ),

                    'surname' => array(
                        'name' => 'Surname',
                        'required' => true,
                    ),
                    'firstname' => array(
                        'name' => 'First name',
                        'required' => true,
                    ),
                    'password' => array(
                        'name' => 'Password',
                        'required' => true,
                        'min' => 6,
                    ),
                    'password_again' => array(
                        'name' => 'Password Confirmation',
                        'required' => true,
                        'matches' => 'password'
                    ),

                    'email' => array(
                        'name' => 'Email',
                        'required' => true,
                        'unique' => 'users'
                    ),
                ));

                $upload = 1;//$this->upload('profile_pictures',true);

                if ($validation->passed()) {
                    $this->model->reg_all_now($upload);
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
            Redirect::to(URL.'reg');

        }


        function retrieve($action){
            $this->view->retrieve = $this->model->retrieve($action);
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
