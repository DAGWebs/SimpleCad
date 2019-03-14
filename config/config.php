<?php

/**
 *
 * SET UP DEFAULT CONTROLLER
 *
 */

define('DEFAULT_CONTROLLER', "Login"); //only called if not defined in url

/**
 *
 * set up debuggin
 *
 */

define('DEBUG', true);

/**
 *
 * DATABASE INFO
 *
 */

$db_host = '127.0.0.1';
$db_name = 'simplecad';
$db_user = 'root';
$db_pass = '';

////////////////////////
//	   DO NOT CHANGE  //
///////////////////////

$creds = [
	'host' => $db_host,
	'name' => $db_name,
	'user' => $db_user,
	'pass' => $db_pass
];

foreach($creds as $cred => $value) {
	define(strtoupper($cred), $value);
}

//////////////////////////////
///     You can change now  //
//////////////////////////////

/**
 *
 * DEFAULT LAYOUT
 *
 */

define('DEFAULT_LAYOUT', 'default');

/**
 *
 * site title
 *
 */

define('SITE_TITLE', 'SimpleCad');
define('SITE_DESC','SimpleCad A cad simply developed!');

/**
 *
 * SET ROOT FOLDER
 *
 */

define("PROOT", '/cad/');

/**
 *
 * sessions
 *
 */

define('CURRENT_USER_SESSION_NAME', 'jkasoidfhgweiurgasjkhhiuajwks');

define('REMEMBER_ME_COOKIE_NAME', 'akuhrweuwfoawasokdfwoeifhaesdfg');

define('REMEMBER_COOKIE_EXPIRY', + 2592000); //time in seconds



