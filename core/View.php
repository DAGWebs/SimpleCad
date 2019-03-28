<?php
	
	class View {
		protected $_head, $_body, $_siteTitle, $_ob, $_layout = DEFAULT_LAYOUT;

		public function __construct() {

		}

		public function render($viewName) {
			$viewArray = explode('/', $viewName);
			$viewString = implode(DS, $viewArray);

			if(file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
				include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
				include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
			} else {
				die("this view does not exsist");
			}
		}

		public function content($type) {
			if($type === 'head') {
				return $this->_head;
			} else if($type === 'body') {
				return $this->_body;
			}
			return false;
		}

		public function start($type) {
			$this->_ob = $type;
			ob_start();
		}

		public function end() {
			if($this->_ob == 'head') {
				$this->_head = ob_get_clean();
			} else if($this->_ob == 'body') {
				$this->_body = ob_get_clean();
			} else {
				die("You must use the start method first");
			}
		}

		public function siteTitle() {
			if($this->_siteTitle == '') {
				return SITE_TITLE;
			} else {
				return $this->_siteTitle;
			}
		}

		public function setSiteTitle($title) {
			$this->_siteTitle = $title;
		}

		public function setLayout($path) {
			$this->_layout = $path;
		}
	}