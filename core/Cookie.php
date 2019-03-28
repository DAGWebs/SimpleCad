<?php  
	class Cookie {
		public static function set($name, $value, $expire) {
			if(setCookie($name, $value, time() . $expire, '/')) {
				return true;
			}
		}

		public static function delete($name) {
			self::set($name, '',- 999999);
		}

		public static function get($name) {
			return $_COOKIE[$name];
		}

		public static function exists($name) {
			return isset($_COOKIE[$name]);
		}
	}
?>