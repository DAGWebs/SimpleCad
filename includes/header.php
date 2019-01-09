<?php require_once "core/init.php"; ?>
<?php  
	if(isset($_COOKIE['Loggedin'])) {
		$username = $_COOKIE['Loggedin'];
		$sql = "SELECT * FROM users WHERE user_username = '$username'";	
		$query = query($sql);

		$row = assoc($query);
		$email = $row['user_email'];
		$discord = $row['user_discord'];
		$user_id = $row['user_id'];
	} 
	$sql = "SELECT * FROM settings WHERE setting_name = 'Simple Cad Theme'";
	$query = query($sql);

	$row = assoc($query);
	$theme = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'Community Description'";
	$query = query($sql);

	$row = assoc($query);
	$communityDescription = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'Login Text'";
	$query = query($sql);

	$row = assoc($query);
	$loginDescription = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'TOS'";
	$query = query($sql);

	$row = assoc($query);
	$tos = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'Community Name'";
	$query = query($sql);

	$row = assoc($query);
	$com_name = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'Roleplay State'";
	$query = query($sql);

	$row = assoc($query);
	$state_name = $row['setting_value'];

	$sql = "SELECT * FROM settings WHERE setting_name = 'County Location'";
	$query = query($sql);

	$row = assoc($query);
	$county_name = $row['setting_value'];

	$sql = "SELECT * FROM backgrounds WHERE background_name = 'Constable'";
	$query = query($sql);

	$row = assoc($query);
	$background_img = $row['background_img'];
	$background = $row['background_name'];

	$page = $_SERVER["PHP_SELF"];
	switch($page) {
		case $pageRoot . 'login.php':
			$pageTitle = 'Login';
			break;
		case $pageRoot . 'register.php';
			$pageTitle = 'Register';
			break;
		case $pageRoot . 'documentation.php';
			$pageTitle = 'Documentation';
			break;
		case $pageRoot . 'mdt.php';
			$pageTitle = 'MDT';
			break;
		default:
			$pageTitle = "Cad System";
	}

	require_once "includes/modals/tos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="author" content="SimpleCad Development">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $com_name ?> | <?php echo $pageTitle ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/themes/<?php echo $theme; ?>/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Staatliches|Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	