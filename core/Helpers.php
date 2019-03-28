<?php  
	class Helpers {
		public static function dnd($data) {
			echo '<pre>';
			var_dump($data);
			echo '</pre>';
			die();
		}

		public static function sanitize($string) {
			return htmlentities($string, ENT_QUOTES, 'UTF-8');
		}

		public static function currentUser() {
			return Users::currentLoggedInUser();
		}

		public static function inputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
			$divString = self::stringifyAttrs($divAttrs);
			$inputString = self::stringifyAttrs($inputAttrs);
			$html = '<div' . $divString . '>';
			$html .= '<label for="' . $name . '">' . $label . '</label>';
			$html .= '<input type="' . $type . '" id="' . $name . '" name="' . $name . '" value="' . $value . '"' . $inputString . ' />';
			$html .= '</div>';

			return $html;
		}

		public static function submitTag($buttonText, $inputAttrs=[]) {
			$inputString = self::stringifyAttrs($inputAttrs);
			$html = '<input type="submit" value="' . $buttonText . '"' . $inputString . ' />';

			return $html;

		}

		public static function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[], $divclass='', $inputclass='') {
			$divString = self::stringifyAttrs($divAttrs);
			$inputString = self::stringifyAttrs($inputAttrs);

			$html = '<div class="' . $divclass . '" ' . $divString . '>';
			$html .= '<input type="submit" value="' . $buttonText . '" class="' . $inputclass . '" ' . $inputString . ' />';
			$html .= '</div>';

			return $html;
		}

		public static function stringifyAttrs($attrs) {
			$string = '';
			foreach($attrs as $key => $value) {
				$string .= ' ' . $key . '="' . $value . '"';
			}

			return $string;
		}

		public static function generateToken() {
			$token = base64_encode(openssl_random_pseudo_bytes(32));

			Session::set('csrf_token', $token);

			return $token;
		}

		public static function checkToken($token) {
			return (Session::exists('csrf_token') && Session::get('csrf_token') == $token);
		}

		public static function csrfInput() {
			return '<input type="hidden" name="csrf_token" id="csrf_token" value="' . self::generateToken() . '" />';
		}
	}
?>