<?php

class Dashboard_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function my_summary(){
        $all = $this->db->get('technical_papers');
        $all = $this->db->count();

        $mine = $this->db->get('technical_papers',array('uploaded_by','=',Session::get('user_id')));
        $mine = $this->db->count();

        return array($all, $mine);
    }

    public function papers($id = null) {
        if($id){

            $data =  $this->db->fetch_exact('technical_papers', 'paper_id',$id);
            $all =  $this->db->getAll_assoc('technical_papers');
            $count = $this->db->count_assoc();

            return array($data,$count);
        }else{
            $data =  $this->db->getAll_assoc('technical_papers')->results_assoc();

            $years = array();
            $content = array();

            foreach($data as $d){
                $date = new DateTime($d['date_presented']);
                $dob = $date->format('Y'); //h:i a
                if(in_array($dob,$years)){
                    //add only contents
                    $content[] = array(
                        'date' => $dob,
                        'occasion' => $d['occasion'],
                        'paper_id' => $d['paper_id'],
                        'paper_author' => $d['paper_author'],
                        'paper_title' => $d['paper_title'],
                        'full_paper_pdf' => $d['full_paper_pdf'],
                        'paper_slide' => $d['paper_slide'],
                    );
                }else{
                    //add year and contents
                    $years[] = $dob;
                    $content[] = array(
                        'date' => $dob,
                        'occasion' => $d['occasion'],
                        'paper_id' => $d['paper_id'],
                        'paper_author' => $d['paper_author'],
                        'paper_title' => $d['paper_title'],
                        'full_paper_pdf' => $d['full_paper_pdf'],
                        'paper_slide' => $d['paper_slide'],
                    );

                }

            }
            return array($years,$content);
        }
    }

    public function delete_papers($id) {
        try {
            $this->db->delete('technical_papers',array('paper_id', '=',$id) );
            cleanUP();
            Session::flash('home', 'Information successfully deleted!');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }


    function add_paper($update = null){
        //get this user details
        $user = $this->db->fetch_exact('users','id',Session::get('user_id'));
        $dept = $this->db->fetch_exact('yearbook','id',$user['yearbook_id']);
        try{
            if($update){
                $this->db->update( 'technical_papers', array(
                    'uploaded_by' => $_SESSION['user_id'],
                    'uploaded_on' => $this->today,
                    'paper_title' => Input::get('title'),
                    'paper_author' => Input::get('author'),
                    'date_presented' => Input::get('date').'-10-01',
                    'occasion' => $dept['dept'],
                    //'place_presented' => Input::get('place'),
                    'abstract' => Input::get('abstract'),
                    //'tags' => Input::get('tag'),
                ), 'paper_id', $update);
                $id = $update;
                Session::flash('home','Project record was edited Successfully - Proceed to upload the file!');

            }else{
                $this->db->insert('technical_papers',array(
                    'uploaded_by' => $_SESSION['user_id'],
                    'uploaded_on' => $this->today,
                    'paper_title' => Input::get('title'),
                    'paper_author' => Input::get('author'),
                    'date_presented' => Input::get('date').'-10-01',
                    'occasion' => $dept['dept'],
                    //'place_presented' => Input::get('place'),
                    'abstract' => Input::get('abstract'),
                    //'tags' => Input::get('tag'),

                ));
                $id = $this->db->last_insert_id();
                Session::flash('home','Project record was created Successfully - Proceed to upload the file!');

            }
            cleanUP();

            return $id;
        }catch(Exception $e){
            //redirect user to specific page saying oops
            $result[] = "Contact Webmaster: File could not be uploaded";
            return false;//$e->getMessage();
        }


    }

    function add_file($upload,$update){
        try{

            $this->db->update( 'technical_papers', array(
                'full_paper_pdf' => $upload,
            ), 'paper_id', $update);

            cleanUP();

            Session::flash('home','Thanks, File Upload Successful!');
            return true;
        }catch(Exception $e){
            //redirect user to specific page saying oops
            $result[] = "Contact Webmaster: File could not be uploaded";
            return false;//$e->getMessage();
        }


    }



}

