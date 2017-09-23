<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function gallery() {
        $data =  $this->db->getAll_assoc('photo_gallery')->results_assoc();
        return lastFive($data);
    }
    public function events() {
        $data =  $this->db->getAll_assoc('events')->results_assoc();
        return lastFive($data);
    }

}
