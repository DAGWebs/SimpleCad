<?php  
	class Validate {
		private $_passed = false, $_errors = [], $_db = null;

		public function __construct() {
			$this->_db = DB::getInstance();
		}

		public function check($source, $items = [], $csrfCheck = false) {
			$this->_errors = [];
			if($csrfCheck) {
				$csrfPass = Helpers::checkToken($source['csrf_token']);
				if(!isset($source['csrf_token']) || !$csrfPass) {
					$this->addError(['Something has gone wrong. Form was not submitted', 'csrf_token']);
				}
			}
			foreach($items as $item => $rules) {
				$item = Input::sanitize($item);
				$display = $rules['display'];

				foreach($rules as $rule => $rule_value) {
					$value = Input::sanitize(trim($source[$item]));

					if($rule === 'required' && empty($value)) {
						$this->addError(["{$display} is required", $item]);
					} else if(!empty($value)) {
						switch($rule) {
							case 'min':
								if(strlen($value) < $rule_value) {
									$this->addError(["{$display} must be a minimum of {$rule_value} characters.", $item]);
								}
								break;
							case 'max':
								if(strlen($value) > $rule_value) {
									$this->addError(["{$display} can only be a maximum of {$rule_value} characters.", $item]);
								}
								break;
							case 'matches':
								if($value != $source[$rule_value]) {
									$matchDisplay = $items[$rule_value]['display'];
									$this->addError(["{$matchDisplay} and {$display} must match", $item]);
								}
								break;
							case 'unique':
								$check = $this->_db->query("SELECT {$item} FROM {$rule_value} WHERE {$item} = ?", [$value]);

								if($check->count()) {
									$this->addError(["{$display} already exists. Please choose another {$display}", $item]);
								}
								break;
							case 'unique_update':
								$t = explode(',', $rule_value);
								$table = $t[0];
								$id = $t[1];

								$query = $this->_db->query("SELECT * FROM {$table} WHERE id != ? AND {$item} = ?",[$id,$value]);

								if($query->count()) {
									$this->addError(["{$display} already exists. please choose another {$display}.", $item]);
								}
								break;
							case "is_numeric":
								if(!is_numeric($value)) {
									$this->addError(["the {$display} must only contain numbers only. Please use a numeric value.", $item]);
								}
								break;
							case "contains_numbers":
								if(!preg_match('/[A-Za-z]/', $value) || !preg_match('/[0-9]/', $value)) {
									$this->addError(["Your {$display} must contain letters and numbers.", $item]);
								}
								break;
							case "valid_email":
								if(!filter_var($value, FILTER_VALIDATE_EMAIL)) {
									$this->addError(["{$display} must be a valid email address."]);
								}
								break;
							case 'valid': 
								
								$check = $this->_db->query("SELECT {$item} FROM users WHERE {$item} = ?", [$value]);

								if($check->count() >= 1) {
									$check = $this->_db->query("SELECT * FROM users WHERE {$item} = ? AND valid = 1", [$value]);
									if($check->count() < 1) {
										$this->addError(["{$display} has not been verified yet!", $item]);
									}
								} else {
									$this->addError(["{$display} does not exist!", $item]);
								}
								break;
							case 'exsists':
								$check = $this->_db->query("SELECT {$item} FROM users WHERE {$item} = ?", [$value]);

								if($check->count() < 1) {
									$this->addError(["{$display} does not exist!", $item]);
								}
								break;

						}	
					}
				}
			}
			if(empty($this->_errors)) {
				$this->_passed = true;
			}
			return $this;
		}

		public function addError($error) {
			$this->_errors[] = $error;

			if(empty($this->_errors)) {
				$this->_passed = true;
			} else {
				$this->_passed = false;
			}
		}

		public function displayErrors() {
			if(!empty($this->_errors)) {
				$html = '<div class="alert alert-danger" role="alert" style="box-shadow: 7px 7px 7px #555;">';
				foreach($this->_errors as $error) {
					if(is_array($error)) {
						$html .= '<p class="text-danger text-center">' . $error[0] . '</p>';
						$html .= '<script>jquery("document.ready(function(){jQuery("#' . $error[1] . '").parent().closest("input).addClass("is-invalid");});</script>';
					} else {
						$html .= '<p class="text-danger text-center">' . $error . '</p>';
					}
				}	
				
				$html .= '</div>';
				return $html;
			} 
		}

		public function errors() {
			return $this->_errors;
		}

		public function passed() {
			return $this->_passed;
		}
	}
?>