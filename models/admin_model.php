<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function view_paper($id){
        $data =  $this->db->fetch_exact('technical_papers', 'paper_id',$id);
        $review =  $this->db->get('project_review', array('project_id','=',$id))->results();
        return array($data, $review);
    }

    public function remove_review($id) {
        try {
            $this->db->delete('project_review',array('id', '=',$id) );
            cleanUP();
            Session::flash('home', 'Review was successfully deleted!');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function users(){
        $users =  $this->db->get('users')->results();

        $add = array();
        foreach($users as $u){
            $perms = ($u->user_perms_id == 1)? 'User': 'Admin';
            $status = ($u->user_status == 1)? 'Allowed': 'Blocked';
            $add[] = array(
                'name' => $u->firstname.' '.$u->surname,
                'email' => $u->email,
                'id' => $u->id,
                'lastLogin' => $u->lastLogin,
                'user_status' => $u->user_status,
                'user_perms_id' => $u->user_perms_id,
                'status' => $status,
                'perms' => $perms,
            );
        }
        return $add;
    }

    public function make($what, $who){
        switch($what){
            case 'admin':
                $this->db->update('users',array(
                    'user_perms_id' => 2,
                ),'id',$who);
                break;
            case 'user':
                $this->db->update('users',array(
                    'user_perms_id' => 1,
                ),'id',$who);
                break;
            case 'block':
                $this->db->update('users',array(
                    'user_status' => 2,
                ),'id',$who);
                break;
            case 'allow':
                $this->db->update('users',array(
                    'user_status' => 1,
                ),'id',$who);
                break;
        }

        Session::put('home','Operation succeeded... Changes effected!');
        return true;
    }

    public function get_about($id = null) {
        $data =  $this->db->getAll_assoc('about_history')->results_assoc();
        if($id){
            $data =  $this->db->fetch_exact('about_history', 'id',$id);
        }

        return $data;

    }

    public function delete_about($id) {
        try {
            $this->db->delete('about_history',array('id', '=',$id) );
            cleanUP();
            Session::flash('home', 'Successfully deleted!');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function create_history($update = null) {

        try {
            if($update){
                $this->db->update('about_history', array(
                    'title' => trim(Input::get('title')),
                    'details' => trim(Input::get('details')),
                    'date' => $this->today,
                ), 'id', $update);
            }else{
                $this->db->insert('about_history', array(
                    'title' => trim(Input::get('title')),
                    'details' => trim(Input::get('details')),
                    'date' => $this->today,
                ));
            }
            cleanUP();
            Session::flash('home', 'Information successfully saved!');

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function dashboard(){
        $users = $this->db->get('users',array('user_perms_id','=',1))->results();
        $users = $this->db->count();

        $admin = $this->db->get('users',array('user_perms_id','=',2))->results();
        $admin = $this->db->count();

        $project = $this->db->get('technical_papers')->results();
        $project = $this->db->count();


        $review = $this->db->get('project_review')->results();
        $review = $this->db->count();

        return array($users,$project,$review,$admin);

    }





}

