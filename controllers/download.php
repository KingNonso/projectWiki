<?php

class Download extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index(){
        //$this->view->js = array('index/js/main.js');

        $this->view->title = "Winners Chapel Ifite";
        $this->view->render('index/download', 'none');
    }

    function req(){
        // Simple SMS send function
        function sendSMS($key, $to, $message, $originator) {
            $URL = "https://smstube.ng/api/sms/send?key=" . $key . "&to=" . $to;
            $URL .= "&text=".urlencode($message).'&from='.urlencode($originator);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $URL);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);
            return $output;
        }
        // Example of use
        /*
         For multiple destinations use sms/bulk instead of sms/send:
http(s)://smstube.ng/api/sms/bulk/key=yourkey&from=senderid&text=smstext&to[]=MOB1&to[]=MOB2&to[]=.....&to[]=MOBX

        *
         */
        // Simple SMS send function
        // Example of use
        $api_key = '8ec7d31e9a2774';
        $response = sendSMS( $api_key, '2347036609386', 'My test message, May the Force be with you!', 'IOT SMS' );
        echo $response;




    }

    function smstube(){
        $api_key = '8ec7d31e9a2774';

        $URL = "https://smstube.ng/api/balance/get?key=" . $api_key . "&type=json";
        $fp = fopen( $URL, 'r' );
        echo fread( $fp, 1024 );
    }

    function readfile(){
        //1. $this->view->read_file();
        /* 2.
         *     header("Content-Type: application/json");
        $path_to_file = TEST_INC.'index/js/sms.json';
    $jsonData = file_get_contents($path_to_file);
    echo $jsonData;

         */
        header("Content-Type: application/json");
        $var1 = $_POST["var1"];
        $var2 = $_POST["var2"];
        $jsonData = '{ "obj1":{ "propertyA":"'.$var1.'", "propertyB":"'.$var2.'" } }';
        echo $jsonData;
    }

    function json_gallery_data(){
        $this->view->json_gallery_data();
    }

    function json_timed_mysql_request(){
        $this->model->json_timed_mysql_request();
    }

    function infobip(){
        $this->model->infobip();
    }


    function balance(){
        //INFOBIP HTTP API
        header('location: http://api2.infobip.com/api/sendsms/plain?user=MoveUp&amp;password=augustine1&amp;type=LongSMS&amp;sender=Winners&amp;GSM=2347038659598&amp;SMSText=HELLO KING Test scrip, alive and long&amp;appid=@@msgid@@');
        //Account balance API:
       // header('location: http://api2.infobip.com/api/command?username=MoveUp&password=augustine1&cmd=CREDITS');

    }

    function file($path, $file){
        // grab the requested file's name
        $filename = UPLOAD_PATH.$path.'/'.$file;

        // make sure it's a file before doing anything!

        if(is_file($filename)) {
            /*
                Do any processing you'd like here:
                1.  Increment a counter
                2.  Do something with the DB
                3.  Check user permissions
                4.  Anything you want!
            I THINK I WILL DO THAT LATER, GET THE IP OF THE PC,
            THE TIME OF DOWNLOAD
            THE USER
            AND COUNT HOW MANY DOWNLOADS OF A PARTICULAR FILE
            */

            // required for IE
            if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}

            // get the file mime type using the file extension
            switch(strtolower(substr(strrchr($filename, '.'), 1))) {
                case 'pdf': $mime = 'application/pdf'; break;
                case 'zip': $mime = 'application/zip'; break;
                case 'jpeg':
                case 'jpg': $mime = 'image/jpg'; break;
                default: $mime = 'application/force-download';
            }

            $fileinfo = pathinfo($filename);
            $sendname = $fileinfo['filename'] . '.' .($fileinfo['extension']);

            header('Pragma: public'); 	// required
            header('Expires: 0');		// no cache
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($filename)).' GMT');
            header('Cache-Control: private',false);
            header('Content-Type: '.$mime);

            header("Content-Disposition: attachment; filename=\"$sendname\"");
            header('Content-Transfer-Encoding: binary');

            header('Content-Length: ' . filesize($filename));
            header('Connection: close');

            readfile($filename);

            exit();


        }else{
            return false;
            //file cannot be reached.
        }


    }


	

}