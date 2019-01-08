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
		$hair = $_POST['blood'];
		$organ = $_POST['organ'];
		$dlStatus = $_POST['dlStatus'];
	}
?>