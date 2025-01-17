<?php  


 ob_start();

 session_start();

 define("ROOT_PATH_MAIN", realpath(dirname(__FILE__)));

 define("BASE_URL", "http://localhost/furniture_donation");


 $controllers = "controllers";
 $cssAssets = "assets/css";
 $jsAssets =  "assets/js";
 $imgAssets =  "assets/images";
 $includes =  "includes/";

$errors = array();


   
 include $controllers . '/controllers.php';
 include $includes . 'functions.php';






 

?>