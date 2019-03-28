<?php 

	class Router {
		public static function route($url) {
			//get the controller from the url
			$controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
			$controller_name = $controller;

			array_shift($url);

			//get the action from url
			$action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action' : 'indexAction';
			$action_name = $controller;

			array_shift($url);

			//get params
			$queryParams = $url;

			if(class_exists($controller)) {
				$dispatch = new $controller($controller_name, $action);
			} else {
				header("Location: error404");
			}

			if(method_exists($controller, $action)) {
				call_user_func_array([$dispatch, $action], $queryParams);
			} else {
				header("Location: http://localhost" . PROOT . "error404");
			}
		}

		public static function redirect($location) {
			if(!headers_sent()) {
				header("Location: " . PROOT . $location);
				exit();
			} else {
				echo '<script type="text/javascript">';
				echo 'widndow.location.href="' . PROOT . $location . '";';
				echo '</script>';
				echo '<noscript>';
				echo '<meta http-equiv="refresh" content="0";url="' . $location . '">';
				echo '</noscript'; exit;
			}
		}
	}