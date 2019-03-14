<?php 
	
	function dnd($data) {
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
		die();
	}

	function sanitize($string) {
		return htmlentities($string, ENT_QUOTES, 'UTF-8');
	}

	function currentUser() {
		return Users::currentLoggedInUser();
	}

	function inputBlock($type, $label, $name, $value='', $inputAttrs=[], $divAttrs=[]) {
		$divString = stringifyAttrs($divAttrs);
		$inputString = stringifyAttrs($inputAttrs);
		$html = '<div' . $divString . '>';
		$html .= '<label for="' . $name . '">' . $label . '</label>';
		$html .= '<input type="' . $type . '" id="' . $name . '" name="' . $name . '" value="' . $value . '"' . $inputString . ' />';
		$html .= '</div>';

		return $html;
	}

	function submitTag($buttonText, $inputAttrs=[]) {
		$inputString = stringifyAttrs($inputAttrs);
		$html = '<input type="submit" value="' . $buttonText . '"' . $inputString . ' />';

		return $html;

	}

	function submitBlock($buttonText, $inputAttrs=[], $divAttrs=[], $divclass='', $inputclass='') {
		$divString = stringifyAttrs($divAttrs);
		$inputString = stringifyAttrs($inputAttrs);

		$html = '<div class="' . $divclass . '" ' . $divString . '>';
		$html .= '<input type="submit" value="' . $buttonText . '" class="' . $inputclass . '" ' . $inputString . ' />';
		$html .= '</div>';

		return $html;
	}

	function stringifyAttrs($attrs) {
		$string = '';
		foreach($attrs as $key => $value) {
			$string .= ' ' . $key . '="' . $value . '"';
		}

		return $string;
	}