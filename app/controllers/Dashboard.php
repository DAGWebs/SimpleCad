<?php

class Dashboard extends Controller {

	public function __construct($controller, $action) {
		parent::__construct($controller, $action);
		$this->load_model('Users');
		$this->view->setLayout('dashboard');
		if(!Session::loggedin()) {
			Router::redirect('login');
		}else {
			$this->UsersModel->getUser();
		}
	}

	public function indexAction() {
		$user = $this->UsersModel->findByUserId();
		
		$this->view->render('dashboard/index');
	}

	public function New_ProductAction() {
		self::getUser();
		$user = $this->UsersModel->findByUserId();
		
		$this->view->render('dashboard/newproduct');
	}
}