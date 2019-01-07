<?php  
	$db_username = "root";
	$db_password = "";
	$db_host = "localhost";
	$db_name = "SimpleCad";

  $pageRoot = '/simplecad/'; //set to website url followed by a / IE http://google.com/

  define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

   /*======================================================
   =            DO NOT TOUCH (unless you know what you are doing) OR YOU WILL BRAKE it           =
   ======================================================*/
   
   define('LOGIN', ROOT . 'login');
   define('RESET', ROOT . 'reset');
   define('ADMIN', ROOT . 'admin');
   define('ERROR', ROOT . 'error404');
   define('REGISTER', ROOT . 'register');
   define('PROFILE', ROOT . 'profile');
   
   /*=====  End of DO NOT TOUCH OR YOU WILL BRAKE  ======*/

   /**
    *
    * THIS IS IMPORTANT NOT TO TOUCH -- NO TOUCHY TOUCHY Below this point! THINGS WILL BRAKE
    *
    */

   $creds = [
      'db_user' => $db_username,
      'db_pass' => $db_password,
      'db_host' => $db_host,
      'db_name' => $db_name
   ];

   foreach($creds as $cred => $value) {
      define(strtoupper($cred), $value);
   }
   
   
?>