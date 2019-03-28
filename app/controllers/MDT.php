<?php  

	
	class MDT extends Controller {
		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
			$this->load_model('Users');
			$this->view->setLayout('mdt');
			if(!Session::loggedin()) {
				Router::redirect('login');
			}else {
				$this->UsersModel->getUser();
			}
		}

		public function indexAction() {
			$this->view->render('mdt/police');
		}
	}


?>