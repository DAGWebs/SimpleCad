<?php

	class Login extends Controller {

		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
			$this->load_model('Users');
			$this->view->setLayout('default');
		}

		public function indexAction() {
			if(Session::loggedin()) {
				Router::redirect('dashboard');
			}
			$validation = new Validate();
			if($_POST) {
				$validation->check($_POST, [
					'username' => [
						'display' => "Username",
						'valid' => 1,
						'required' => true
					],
					'password' => [
						'display' => "Password",
						'required' => true
					],
				], true);
				if($validation->passed()) {
					$user = $this->UsersModel->findByUsername($_POST['username']);

					if($user && password_verify(Input::get('password'), $user->password)) {
						
						if(isset($_POST['remember_me'])) {
							$remember = true;
						} else {
							$remember = false;
						}
						$user->login($remember);
						Router::redirect('');

					} else {
						$validation->addError("The password provided is incorrect!");
					}
				} 
			}
			$this->view->displayErrors = $validation->displayErrors();
			$this->view->render('forms/login');
		}

		public function resetAction() {
			$this->view->render("forms/forgotpassword");
		}
	}		