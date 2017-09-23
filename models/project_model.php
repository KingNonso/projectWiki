<?php

class Project_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function my_papers(){
        $content = array();
        $data = $this->db->get('technical_papers',array('uploaded_by','=',Session::get('user_id')))->results();
        foreach($data as $d){
            $date = new DateTime($d->date_presented);
            $dob = $date->format('Y'); //h:i a
            $content[] = array(
                'date' => $dob,
                'paper_id' => $d->paper_id,
                'paper_author' => $d->paper_author,
                'paper_title' => $d->paper_title,
                'full_paper_pdf' => $d->full_paper_pdf,
            );

        }

        return $content;

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
                $dept = $this->db->fetch_exact('unizik_depts','id',$d['occasion']);
                if(in_array($dob,$years)){
                    //add only contents
                    $content[] = array(
                        'date' => $dob,
                        'occasion' => $dept['name'],
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
                        'occasion' => $dept['name'],
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

    public function view_paper($id){
        $data =  $this->db->fetch_exact('technical_papers', 'paper_id',$id);
        $review =  $this->db->get('project_review', array('project_id','=',$id))->results();
        return array($data, $review);
    }

    public function delete_papers($id) {
        try {
            $this->db->delete('technical_papers',array('paper_id', '=',$id) );
            cleanUP();
            Session::flash('home', 'Project was successfully deleted!');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    function comment() {
        try {
            $this->db->insert('project_review', array(
                'name' => Input::get('name'),
                'user_id' => Input::get('user_id'),
                'email' => Input::get('email'),
                'message' => Input::get('message'),
                'date' => $this->today,
                'project_id' => Input::get('paper_id'),
            ));
            Session::flash('home', 'Your review was successfully submitted!');
            return true;

        }catch (Exception $e) {
            //return false;
        }





    }

}

