<?php
	
	class Session {
		public static function exists($name) {
			return (isset($_SESSION[$name])) ? true : false;
		}

		public static function get($name) {
			return $_SESSION[$name];
		}

		public static function set($name, $value) {
			return $_SESSION[$name] = $value;
		}

		public static function delete($name) {
			if(self::exists($name)) {
				unset($_SESSION[$name]);
			}
		}

		public static function uagent_no_version() {
			$uagent = $_SERVER['HTTP_USER_AGENT'];
			$regx = '/\/[a-zA-Z0-9.]+/';
			$newstring = preg_replace($regx, '', $uagent);
			return $newstring;
		}

		public static function uagent() {
			$uagent = $_SERVER['HTTP_USER_AGENT'];
			
			return $uagent;
		}

		public static function loggedin() {
			if(isset($_SESSION['user_loggedin'])) {
				return true;
			} else {
				return false;
			}
		}
	}