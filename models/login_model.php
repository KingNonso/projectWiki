<?php

class Login_Model extends Model {
    private  $_data;

    function __construct() {
        parent::__construct();
    }
    function check_status(){
        $status = parent::check_status();
        if($status){
            Redirect::to(URL . "wall");
        }
        return false;
    }

    public function find($user = null) {
        if ($user) {
            $field = (is_numeric($user)) ? 'id' : 'email';
            $data = $this->db->get('users', array($field, '=', $user));

            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    function hasPermission() {
        $group = $this->db->get('user_permissions',array('id', '=',$this->data()->user_perms_id));
        // die(print_r($group));
        if ($this->db->count()) {
            $permissions = json_decode($this->db->first()->permissions, true);
            Session::put('role',$permissions['role']);
            Session::put('role_name',$this->db->first()->name);

            Session::put('scope',$permissions['scope']);
            //die(print_r($_SESSION));
        }
        return false;
    }

    public function data() {
        return $this->_data;
    }

    public function exists() {
        return (!empty($this->_data)) ? true : false;
    }

    public function login($username = null, $password = null, $remember = false, $ajax = false) {
        if (!$username && !$password && $this->exists()) {
            //log user in
            Session::put($this->_sessionName, $this->data()->id);
        } else {
            $user = $this->find($username);
            if ($user) {
                if ($this->data()->password === Hash::make($password, $this->data()->salt)) {
                    Session::put($this->_sessionName, $this->data()->id);
                    //	return true;
                    if ($remember) {
                        $hash = Hash::unique();
                        $hashCheck = $this->db->get('user_sessions', array('user_id', '=', $this->data()->id));
                        if (!$hashCheck->count()) {
                            $this->db->insert('user_sessions', array(
                                'user_id' => $this->data()->id,
                                'hash' => $hash
                            ));
                        } else {
                            $hash = $hashCheck->first()->hash;
                        }

                        Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                    }
                    $this->run();

                    return true;
                }
            }
        }
        return false;
    }


    public function run() {
        $update = $this->db->update('users',array(
            'lastLogin' => $this->today,
        ),'id',$this->data()->id);

        if($this->data()->user_status == 2){
            Session::put('error',"This account has been blocked. Please contact admin!");
            Redirect::to(URL.'login');
        }
        $_SESSION['user_id'] = $this->data()->id;
        $_SESSION['email'] = $this->data()->email;
        $me = $this->data()->firstname.' '.$this->data()->surname;
        Session::put('logged_in_user_name',$me);

        $photo = $this->data()->firstname;
        if(!empty($photo)){
            $myPhoto = URL.'public/uploads/profile_pictures/'.$photo;

        }else{
            $myPhoto = URL.'public/images/avatar.png';
        }
        Session::put('logged_in_user_photo',$myPhoto);

        Session::put('loggedIn',true);


        //activate my duties tab
        $duty = $this->data()->user_perms_id;
        if ($duty > 1) {

            $_SESSION['duty'] = $duty;
            Redirect::to(URL . "admin");

        }else{
            Redirect::to(URL.'dashboard');
        }
    }



}
