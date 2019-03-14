<?php
	
	class Logout extends Controller {
		public function __construct($controller, $action) {
			if(currentUser()) {
				currentUser()->logout();
			}
			Router::redirect('login');
		}
	}