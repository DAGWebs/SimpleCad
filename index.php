<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

/*==============================================
	=            load config and helper            =
	==============================================*/
	
	require_once (ROOT . DS . 'config' . DS . 'config.php');
	require_once (ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');
	
	/*=====  End of load config and helper  ======*/

	/*=========================================
	=            auto load classes            =
	=========================================*/
	
	function autoload($className) {
		if(file_exists(ROOT . DS . 'core' . DS . $className . '.php')) {
			require_once (ROOT . DS . 'core' . DS . $className . '.php');
		} else if(file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS. $className . '.php')) {
			require_once (ROOT . DS . 'app' . DS . 'controllers' . DS. $className . '.php');
		} else if(file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php')) {
			require_once (ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
		}
	}
	
	spl_autoload_register('autoload');

	session_start();
	/*=====  End of auto load classes  ======*/

	if(!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
		Users::loginUserFromCookie();
	}

	/*====================================
	=            rout request            =
	====================================*/
	
	Router::route($url);
	
	/*=====  End of rout request  ======*/
	
 