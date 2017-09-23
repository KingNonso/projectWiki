<?php

class Reg_Model extends Model {

    function __construct() {
        parent::__construct();
        $this->user = new User();
    }

    function retrieve($action){
        $echo = '';
        switch ($action) {
            case "faculty":
                $data =  $this->db->get('unizik_depts',array('faculty_id','=',Input::get('faculty')))->results();
                $echo = '<option value="0">Select Department</option>';
                foreach($data as $d){
                    $echo .= '<option  value="'.$d->id.'"';
                    $echo .= '>'.$d->name.'</option>';

                }

                break;
            case "dept":
                $data =  $this->db->fetch_exact_two('yearbook','year',Input::get('grad_year'),'dept',Input::get('department'));

                $echo = '<option value="0">Select Name</option>';
                $people =  $this->db->get('users',array('yearbook_id','=',$data['id']))->results();

                foreach($people as $d){
                    $name = $d->surname.' '.$d->firstname.' '.$d->othername;
                    if(!empty($d->surname)){
                        $name .= " aka ".$d->nickname;
                    }
                    $echo .= '<option  value="'.$d->id.'"';
                    $echo .= '>'.$name.'</option>';

                }

                break;

            case "name":
                $data = $this->db->fetch_exact('users','id',Input::get('name_id'));
                $echo = $data['slug'];
                break;

        }
        echo($echo);
    }

    public function reg_all_now($path = null, $dob= null) {
        try{
            $year = Input::get('grad_yr');
            $program = Input::get('program');
            $level = Input::get('level');
            $faculty = Input::get('faculty');
            $dept = Input::get('department');

            $yearbook = $this->db->get('yearbook')->results();
            $yearbook_id = 0;
            foreach($yearbook as $y){
                if($y->year == $year && $y->program == $program  && $y->faculty == $faculty && $y->dept == $dept){//&& $y->level == $level
                    $yearbook_id = $y->id;
                    break;
                }
            }

            if(!$yearbook_id ){
                $this->db->insert('yearbook', array(
                    'year' => $year,
                    'program' => $program,
                    'faculty' => $faculty,
                    'dept' => $dept,
                    'date' => $this->today,
                ));
                $yearbook_id = $this->db->last_insert_id();

            }

            $email = Input::get('email');
            $salt = Hash::salt(32);

            $this->db->insert('users', array(
                'password' => Hash::make(Input::get('password'), $salt),
                'salt' => $salt,
                'joined' => $this->today,
                'lastLogin' => $this->today,
                'user_perms_id' => 1,

                'reg_no' => Input::get('reg_no'),
                'level' => $level,
                'yearbook_id' => $yearbook_id,

                'surname' => Input::get('surname'),
                'firstname' => Input::get('firstname'),
                'email' => $email,
                //'slug' => (Input::get('slug')),
                //'profile_picture' => $path,
                'date_created' => $this->today,
            ));

            $last_id = $this->db->last_insert_id();
            if ($last_id) {
                $_SESSION['user_id'] = $last_id;

            }

            $this->db->insert('yearbook_joins', array(
                'yearbook_id' => $yearbook_id,
                'user_id' => Session::get('user_id'),
                'date' => $this->today,
            ));
            cleanUP();
            Session::flash('home','Done... Registration was successful');
            Redirect::to(URL.'login');
            //return true;

        }catch(Exception $e){
            return false;
        }


    }

}
