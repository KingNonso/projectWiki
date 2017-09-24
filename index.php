<?php /* Model View Controller */?>
<?php 
//use an autoloader
require 'config/core/ini.php';

    define('URL', 'http://localhost/www/doing/dbms/');
    define('UPLOAD_PATH', __DIR__.'/public/uploads/');
    define('FILE_PATH', __DIR__.'/');
    //echo UPLOAD_PATH;

    //find site map. paths to every thing
//dont assume, use the paths include folder
//include 'path.php';

$app = new Bootstrap();
    $app->run();
?>

