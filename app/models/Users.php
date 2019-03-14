<?php  
	class Users extends Model {
		private $_isLoggedIn, $_sessionName, $_cookieName;

		public static $currentLoggedInUser = null;

		public function __construct($user = '') {
			$table = 'users';

			parent::__construct($table);

			$this->_sessionName = CURRENT_USER_SESSION_NAME;
			$this->_cookieName = REMEMBER_ME_COOKIE_NAME;
			$this->_softDelete = true;

			if($user != '') {
				
				$u = $this->_db->findFirst($table, ['conditions'=>'id','bind'=>[$user]]);

				if($u) {
					foreach($u as $key => $value) {
						$this->$key = $value;
					}
				}
			}
		}

		public function findByUsername($username) {
			return $this->findFirst(['conditions'=>"username = ?", 'bind'=>[$username]]);
		}

		public function findByUserId() {
			return $this->findFirst(['conditions'=>"id = " . $this::$currentLoggedInUser, 'bind'=>[$this::$currentLoggedInUser]]);
		}

		public static function currentLoggedInUser() {
			if(Session::exists(CURRENT_USER_SESSION_NAME)) {
				$u = new Users(Session::get(CURRENT_USER_SESSION_NAME));
				self::$currentLoggedInUser = $u;
			}

			return self::$currentLoggedInUser;
		}

		public function findByEmail($email) {
			return $this->findFirst(['conditions'=>"email = ?", 'bind'=>[$email]]);
		}

		public function getUser() {
			$this->_db->query("SELECT * FROM users WHERE id = ? ", [Session::get('id')]);

			Session::set('username', $this->username);
			Session::set('email', $this->email);
			Session::set('rank', $this->acl);
			Session::set('joined', $this->joined);
			Session::set('discord', $this->discord);
		}

		public function login($rememberMe = false) {
			Session::set($this->_sessionName, $this->id);
			Session::set('user_loggedin', 'yes');

			Session::set('username', $this->username);
			Session::set('id', $this->id);
			Session::set('email', $this->email);
			Session::set('rank', $this->acl);
			Session::set('joined', $this->joined);
			Session::set('discord', $this->discord);

			$date = date("Y-m-d");

			$this->_db->query("UPDATE users SET loggedin = ? WHERE id = ?", [1, $this->id]);
			$this->_db->query("UPDATE users SET lastlogin = ? WHERE id = ?", [$date, $this->id]);

			if($rememberMe) {
				$hash = md5(uniqid() + rand(0,100));
				$user_agent = Session::uagent_no_version();
				Cookie::set($this->_cookieName, $hash, REMEMBER_COOKIE_EXPIRY);

				$fields = [
					'user_id' => $this->id,
					'session' => $hash,
					'user_agent' => $user_agent
				];

				$this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
				$u = new Users(Session::get(CURRENT_USER_SESSION_NAME));
				self::$currentLoggedInUser = $u;

				$this->_db->insert('user_sessions', $fields);
			}
		}

		public function register() {
			$code = md5(uniqid($_POST['username']));
			$pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$discord = $_POST['discord'];
			$last = ucfirst($_POST['last']);

			$fields = [
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'password' => $pwd,
				'discord' => $discord,
				'code' => $code
			];

			$this->_db->insert('users', $fields);

		}

		public static function loginUserFromCookie() {
			$user_session_model = new UserSessions();
			$user_session = $user_session_model->findFirst([
				'conditions' => 'user_agent = ? AND session = ?',
				'bind' => [Session::uagent_no_version(), Cookie::get(REMEMBER_ME_COOKIE_NAME)]
			]);

			if($user_session->user_id != '') {
				$user = new Self((int)$user_session->user_id);
				$user->login();
				return $user;
			}

			return false;
		}

		public function logout() {
			
			
			$this->_db->query("UPDATE users SET loggedin = ? WHERE id = ?", [0, $this->id]);
			$user_agent = Session::uagent_no_version();
			$this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);

			session_destroy();

			Session::delete('username');
			Session::delete('id');
			Session::delete('email');
			Session::delete('rank');
			Session::delete('joined');
			Session::delete('discord');

			Session::delete(CURRENT_USER_SESSION_NAME);
			if(Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
				Cookie::delete(REMEMBER_ME_COOKIE_NAME);
			}

			self::$currentLoggedInUser = null;

			return true;
		}
	} 
?>