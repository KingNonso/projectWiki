<?php

class About_Model extends Model {


    function __construct() {
        parent::__construct();
    }

    public function get_about($id = null) {
        $data =  $this->db->getAll_assoc('about_history')->results_assoc();
        if($id){
            $data =  $this->db->fetch_exact('about_history', 'id',$id);
        }

        return $data;

    }






}