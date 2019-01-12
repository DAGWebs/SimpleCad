<?php 

			if(isset($_GET['userhas'])) {
				$sql = "SELECT * FROM settings WHERE setting_id = 1";
				$query = query($sql);
				$row = assoc($query);

				$confirmed = $row['setting_value'];

				if($confirmed === 'No') {
					$conf = 1;
				} else {
					$conf = 0;
				}

				if($conf == 1) {
					echo '<div class="alert alert-success" role="alert">
							  <h4 class="alert-heading">Thanks for Registering!</h4>
							  <p>Aww yeah, you successfully registered for the cad system.</p>
							  <hr>
							  <p class="mb-0">The Owner Has Decided Not To Make you Verify Your Email! Try Logging In Now!</p>
							</div>';
				} else {
					echo '<div class="alert alert-success" role="alert">
							  <h4 class="alert-heading">Thanks for Registering!</h4>
							  <p>Aww yeah, you successfully registered for the cad system.</p>
							  <hr>
							  <p class="mb-0">The Owner Has Decided To Make you Verify Your Email! Try Logging In Once You Have Verified Your Email!</p>
							</div>';
				}
			}
	if(isset($_POST['submit'])) {
		$username = clean(escape($_POST['username']));
		$password = clean(escape($_POST['password']));

		$errors = [];

		if(empty($username)) {
			array_push($errors, "Your Username Can Not Be Left Empty!");
		} 

		if(empty($password)) {
			array_push($errors, "Your Password Can Not Be Left Empty!");
		}

		$sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email = '$username'";
		$query = query($sql);

		if(rows($query) == 1) {
			$row = assoc($query);
			$db_pass = $row['user_password'];
			$confirmed = $row['user_confirmed'];

			if($confirmed == 0) {
				array_push($errors, "You Have Not Verified Your Account Yet!");
			} else {
				if(password_verify($password, $db_pass)) {

				} else {
					array_push($errors, "Your password was incorrect!");
				}
			}
		} else {
			array_push($errors, "Your Username or Email Does Not Exist!");
		}if(!empty($errors)) {
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
			 * Log User In
			 *
			 */

			$sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email = '$username'";
			$query = query($sql);

			$row = assoc($query);
			$username = $row['user_username'];

			if(isset($_POST['remember'])) {
				setcookie('Loggedin', $username, time() + 604800);
			} else {
				setcookie('Loggedin', $username, time() + 86400);
			}
			redirect("dashboard");
		}
	} else {
		$username = "";
		$email = "";
		$discord = "";
	}
?>