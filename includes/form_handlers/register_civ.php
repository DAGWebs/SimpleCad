<?php  
	$first = "";
	$last = "";
	$gender = "";
	$date = "";
	$address = "";
	$hair = "";
	$eyes = "";
	$height = "";
	$weight = "";
	$hair = "";
	$organ = "";
	$dlStatus = "";

	if(isset($_POST['submit'])) {
		echo '<script>$.support.transition = false; $(".cac").modal("show");</script>';
		$first = clean(escape($_POST['first']));
		$last = clean(escape($_POST['last']));
		$gender = $_POST['gender'];
		$date = $_POST['dob'];
		$address = clean(escape($_POST['address']));
		$hair = $_POST['hair'];
		$eyes = $_POST['eyes'];
		$height = clean(escape($_POST['height']));
		$weight = clean(escape($_POST['weight']));
		$blood = $_POST['blood'];
		$organ = $_POST['organ'];
		$dlStatus = $_POST['dlStatus'];

		$first = ucfirst($first);
		$last = ucfirst($last);

		echo $date;

		$errors = [];

		if(empty($first)) {
			array_push($errors, "You Can Not Leave Your First Name Empty");
		}
		if(empty($last)) {
			array_push($errors, "You Can Not Leave Your Last Name Empty");
		}
		if(empty($date)) {
			array_push($errors, "You Can Not Leave Your Date Of Birth Empty");
		}
		if(empty($address)) {
			array_push($errors, "You Can Not Leave Your Address Empty");
		}
		if(empty($height)) {
			array_push($errors, "You Can Not Leave Your Height Empty");
		}
		if(empty($weight)) {
			array_push($errors, "You Can Not Leave Your Weight Empty");
		}
		if($gender === "No Option") {
			array_push($errors, "You Must Select A Gender");
		}
		if($hair === "No Option") {
			array_push($errors, "You Must Select A Hair Color");
		}
		if($eyes === "No Option") {
			array_push($errors, "You Must Select An Eye Color");
		}
		if($blood === "No Option") {
			array_push($errors, "You Must Select A Blood Type");
		}
		if($organ === "No Option") {
			array_push($errors, "You Must Select An Organ Donor Status");
		}
		if($dlStatus === "No Option") {
			array_push($errors, "You Must Select A License Status");
		}
		if(!is_numeric($height)) {
			array_push($errors, "Your Height Must Only Contain Numbers");
		} else if($height >= 96) {
			array_push($errors, "Your Height Can Not Be Taller Than 8FT (95 INCHES)");
		} else if($height <= 36) {
			array_push($errors, "Your Height Can can not be less than 37 INCHES");
		}
		if(!is_numeric($weight)) {
			array_push($errors, "Your Weight Must Only Contain Numbers");
		} else if($weight >= 301) {
			array_push($errors, "Your Weight Can Not Be Larger Than 300 LBS");
		} else if( $weight <= 44) {
			array_push($errors, "Your Weight Can can not be less than 45 lbs");
		}

		$sql = "SELECT * FROM identities WHERE user_id = '$user_id'";
		$query = query($sql);

		if(rows($query) > 3) {
			array_push($errors, "You Have Reached The Max Amount of Identities You Can Create");
		}

		if(!empty($errors)) {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
			$x = 1;
			foreach($errors as $error) {
				echo $x . ') <strong>OOPS ...</strong> ' . $error . '.<br>
						  ';
				$x++;    
			}
			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						  </button></div>';
		} else {
			$ss = rand(100, 999) . ' - ' . rand(10, 99) . ' - ' . rand(1000, 9999);
			$job = 'Civillian';
			$profile_location = rand(1, 21);
			switch($profile_location) {
				case 1:
					$profile = 'assets/img/profile/default/avatar.png';
					break;
				case 2:
					$profile = 'assets/img/profile/default/avatar04.png';
					break;
				case 3:
					$profile = 'assets/img/profile/default/avatar2.png';
					break;
				case 4:
					$profile = 'assets/img/profile/default/avatar3.png';
					break;
				case 5:
					$profile = 'assets/img/profile/default/avatar5.png';
					break;
				case 6:
					$profile = 'assets/img/profile/default/head_alizarin.png';
					break;
				case 7:
					$profile = 'assets/img/profile/default/head_amethyst.png';
					break;
				case 8:
					$profile = 'assets/img/profile/default/head_belize_hole.png';
					break;
				case 9:
					$profile = 'assets/img/profile/default/head_carrot.png';
					break;
				case 10:
					$profile = 'assets/img/profile/default/head_deep_blue.png';
					break;
				case 11:
					$profile = 'assets/img/profile/default/head_nephritis.png';
					break;
				case 12:
					$profile = 'assets/img/profile/default/head_emerald.png';
					break;
				case 13:
					$profile = 'assets/img/profile/default/head_green_sea.png';
					break;
				case 14:
					$profile = 'assets/img/profile/default/head_pete_river.png';
					break;
				case 15:
					$profile = 'assets/img/profile/default/head_pomegranate.png';
					break;
				case 16:
					$profile = 'assets/img/profile/default/head_pumpkin.png';
					break;
				case 17:
					$profile = 'assets/img/profile/default/head_red.png';
					break;
				case 18:
					$profile = 'assets/img/profile/default/head_sun_flower.png';
					break;
				case 19:
					$profile = 'assets/img/profile/default/head_turqoise.png';
					break;
				case 20:
					$profile = 'assets/img/profile/default/head_wet_asphalt.png';
					break;
				case 21:
					$profile = 'assets/img/profile/default/head_wisteria.png';
					break;
			}

			$sql = "INSERT INTO identities (id_first, id_last, id_gender, id_date, id_address, id_hair, id_eyes, id_height, id_weight, id_blood, id_organ, id_dlStatus, id_ss, id_job, id_profile, user_id) VALUES ('$first', '$last', '$gender', '$date', '$address', '$hair', '$eyes', '$height', '$weight', '$blood', '$organ', '$dlStatus', '$ss', '$job', '$profile', '$user_id')";

			query($sql);

			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
			echo '<strong>Success .... </strong>  Your Character ' . $first . ' ' . $last .' Was Created';
			echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						  </button></div>';
		}
	}
?>

