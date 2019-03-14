<?php  

class Register extends Controller {

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
						'required' => true,
						'min' => 6,
						'max' => 20,
						'unique' => 'users'
					],
					'email' => [
						'display' => "Email",
						'required' => true,
						'valid_email',
						'unique' => 'users'
					],
					'first' => [
						'display' => "First Name",
						'required' => true,
						'min' => 2,
						'max' => 20
					],
					'last' => [
						'display' => "Last Name",
						'required' => true,
						'min' => 2,
						'max' => 20
					],
					'password' => [
						'display' => "Password",
						'required' => true,
						'min' => 6,
						'max' => 20
					],
					'confirmPassword' => [
						'display' => "Confirm Password",
						'required' => true,
						'min' => 6,
						'max' => 20,
						'matches' => 'password'
					]
				], true);
				if($validation->passed()) {
					if(isset($_POST['tos'])) {
						$this->UsersModel->register();
						Router::redirect('login');
					} else {
						$validation->addError("You must agree to your terms of service!");
					}
				} 
			}
			$this->view->displayErrors = $validation->displayErrors();
		$this->view->render('forms/register');

		
	}

	
}		