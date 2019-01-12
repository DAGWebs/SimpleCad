<?php 

	function connect() {
		return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}

	function query($sql) {
		global $con;
		return mysqli_query($con, $sql);
	}

	function rows($query) {
		return mysqli_num_rows($query);
	}

	function assoc($query) {
		return mysqli_fetch_assoc($query);
	}

	function escape($string) {
		global $con;
		return mysqli_real_escape_string($con, $string);
	}

	$con = connect();

	if(!$con) {
		echo mysqli_erorr();
	}

?>