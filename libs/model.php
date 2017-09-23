<?php

class Model {

    function __construct() {
       $this->db = Database::getInstance();

        $this->_sessionName = Config::get('session/session_name');
        $this->_cookieName = Config::get('remember/cookie_name');
        //appointment dates
        $come = new DateTime('now');
        $this->today = $come->format('Y-m-d H:i:s');
        $come->add(new DateInterval('P1Y'));
        $this->nextYr = $come->format('Y-m-d');

    }

    function check_status(){
        if(Session::exists($this->_sessionName) && Cookie::exists($this->_cookieName)){
            $user = Session::get($this->_sessionName);
            $cookie = json_decode(Cookie::get($this->_cookieName));
            $expiry = $cookie->expiry;
            $hash = $cookie->hash;
            $hashCheck = $this->db->fetch_exact('user_sessions','user_id',$user);
            if(($hash === $hashCheck['hash']) && (time() < $expiry)  ){
                Cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
                //then just put in a logged in state
                    return $hashCheck['user_id'];
            }else{
                return false;
            }
        }
        return false;
    }

    public static function backToSender(){
        //help the user go back to where he is coming from
        // check that browser supports $_SERVER variables
        if (isset($_SERVER['HTTP_REFERER']) && isset($_SERVER['HTTP_HOST'])) {
            $url = parse_url($_SERVER['HTTP_REFERER']);
            // find if visitor was referred from a different domain
            if ($url['host'] == $_SERVER['HTTP_HOST']) {
                // if same domain, use referring URL
                $url = $_SERVER['HTTP_REFERER'];
            }
        }
        else {
            // otherwise, send to main page
            $url = 'wall';
        }
        return $url;
    }




}
