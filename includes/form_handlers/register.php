<?php  
	if(isset($_POST['submit'])) {
		$username = clean(escape($_POST['username']));	
		$email = clean(escape($_POST['email']));	
		$discord = clean(escape($_POST['discord']));	
		$password = clean(escape($_POST['password']));	
		$cpas = clean(escape($_POST['cpas']));	

		$errors = [];

		/*===========================================================
		=            Check if values submitted are empty            =
		===========================================================*/
		
		if(empty($username)) {
			array_push($errors, "Your Username Can Not Be Left Empty!");
		}

		if(empty($email)) {
			array_push($errors, "Your Email Can Not Be Left Empty!");
		}

		if(empty($discord)) {
			array_push($errors, "Your Discord Can Not Be Left Empty!");
		}

		if(empty($password)) {
			array_push($errors, "Your Password Can Not Be Left Empty!");
		}

		if(empty($cpas)) {
			array_push($errors, "OOPS... You Forgot To Confirm Your Password!");
		}	

		/*=====  End of Check if values submitted are empty  ======*/

		/*============================================================
		=            Other Username and email Validations            =
		============================================================*/
		if(strlen($username) <= 5) {
			array_push($errors, "Your Username Must Be At Least 6 Characters Long!");
		} else if(strlen($username) >= 21) {
			array_push($errors, "Your Username Can Not Be Longer than 21 Characters!");
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "That Was Not A Valid Email!");		  
		}

		$sql = "SELECT * FROM users WHERE user_username = '$username'";
		$query = query($sql);

		if(rows($query) == 1) {
			array_push($errors, "Your Username Is Already Registered With Us!");
		}

		$sql = "SELECT * FROM users WHERE user_email = '$email'";
		$query = query($sql);

		if(rows($query) == 1) {
			array_push($errors, "Your Email Is Already Registered With Us!");	
		}
		
		
		/*=====  End of Other Username Validations  ======*/
		
		/*===========================================
		=            hash Password            =
		===========================================*/

		if($password !== $cpas) {
			array_push($errors, "Your Passwords Dont Match!");
		}

		if(strlen($password) <= 5) {
			array_push($errors, "Your Password Must Be At Least 6 Characters Long!");
		} else if(strlen($password) >= 21) {
			array_push($errors, "Yourn Password Can Not Be Longer than 21 Characters!Your Username Can Not Be Longer than 21 Characters!");
		}
		
		$password = password_hash($password, PASSWORD_BCRYPT);
		
		/*=====  End of hash Password  ======*/
		
		/**
		 *
		 * Verify if there are any erorrs
		 *
		 */
		if(!isset($_POST['tos'])) {
			array_push($errors, "You Must Agree To Our Terms of Service!");	
		}

		if(!empty($errors)) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
			$x = 1;
			foreach($errors as $error) {
				echo $x . ') <strong>Something Went Wrong!</strong> ' . $error . '.<br>
						  ';
						$x++;    
			}
			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						  </button></div>';
		} else {
			/**
			 *
			 * If no errors then send to database
			 *
			 */
			$sql = "SELECT * FROM settings WHERE setting_id = 1";
			$query = query($sql);
			$row = assoc($query);

			$confirmed = $row['setting_value'];

			if($confirmed === 'No') {
				$conf = 1;
			} else {
				$conf = 0;
			}
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			    $ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
			    $ip = $_SERVER['REMOTE_ADDR'];
			}
			$rand = rand(10000, 999999);
			$code = md5($rand . $username . $password);

			$sql = "INSERT INTO users (user_username, user_email, user_discord, user_password, user_code, user_ip, user_confirmed) VALUES ('$username', '$email', '$discord', '$password', '$code', '$ip', '$conf')";

			query($sql);

			header("Location: login?userhas=registered");
			
		}
	} else {
		$username = "";
		$email = "";
		$discord = "";
	}

?>