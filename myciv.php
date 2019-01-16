<?php require_once "includes/header.php"; ?>
<?php  
	if(!isset($_COOKIE['Loggedin'])) {
		redirect("login?user=mustbeloggedin");
	}

	if(isset($_GET['ss'])) {
		$idd = $_GET['ss'];
		$sql = "SELECT * FROM identities WHERE id_ss = '$idd'";
		$query = query($sql);
		if(rows($query) == 1) {
			$row = assoc($query);
			$first = $row['id_first'];
			$last = $row['id_last'];
			$gender = $row['id_gender'];
			$date = $row['id_date'];
			$address = $row['id_address'];
			$hair = $row['id_hair'];
			$eyes = $row['id_eyes'];
			$height = $row['id_height'];
			$weight = $row['id_weight'];
			$blood = $row['id_blood'];
			$organ = $row['id_organ'];
			$dlStatus = $row['id_dlStatus'];
			$ss = $row['id_ss'];
			$job = $row['id_job'];
			$profile = $row['id_profile'];
			$time = $row['id_time'];
			$date_created = $row['id_date_created'];
		} else {
			redirect("dashboard?id=social_does_not_exsist");
		}
	} else {
		redirect("dashboard?id=invalid_Social");
	}
?>
<!-- tool bar top -->
<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="#"><?php echo $com_name ?></a>
		

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<ul class="navbar-nav mr-auto">
		        <li class="nav-item active">
			      	<a class="nav-link" href="#">My Profile <span class="sr-only">(current)</span></a>
			    </li>
			    <li class="nav-item active">
			      	<a class="nav-link" href="#">My Support <span class="sr-only">(current)</span></a>
			    </li>
		    </ul>
		</div>
		<button class="navbar-toggler right" id="menu">
		   MENU
		</button>
	</nav>
<div class="wrapper" id="wrapper">
	<div class="row">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class='sidebar-nav'>
				<li><a href="#">Police MDT</a></li>
				<li><a href="#">Fire/EMS MDT</a></li>
				<li><a href="#">Dispatch Center</a></li>
				<li><a href="mdt?type=civ">My Civ Center</a></li>
				<li><a href="#">My Profile</a></li>
			</ul>
			<a href="dashboard" class="btn btn-danger btn-block" style="margin: 0 auto;"><i class="fas fa-tachometer-alt"></i> | Dashboard</a>
		</div>
		<!-- Page Content -->
		<div id="page-contnet-wrapper">
			<div class="container-fluid">
				<h1 class="text-center">My Civ</h1>
				<div id="dmv" style="color: black; float: left; position: relative; height: 850px; width: 100%; background: url(https://spyrestudios.com/wp-content/uploads/christmas-paper/crumpled-paper.jpg); padding: 40px;">
					<div id="watermark" style="">
						<div style="background-image: url(https://olympus.soc.texas.gov/files/images/dpsLogoNew.png); width: 100%; height: 100%; background-repeat: no-repeat; background-position: center;" style="background-color: rgba(255, 255,255,.5);">
							<div class="row" style="">
								<div class="col-4">
									<p>Location: 127</p>
									<p>Time Stamp: <?php echo $time ?></p>
									<p>Date Stamp: <?php echo $date_created ?></p>
									<br>
									<br>
									<p>Organ Donor: <?php echo $organ ?></p>
									<p>Voter Registration: Yes</p>
									<br>
									<br>
									<p><strong>Receit Number: </strong><?php echo rand(1000000, 9999999) ?></p>
									<br>
									<br>
									<p>Restriction Text: </p>
									<p>None</p>
									<br>
									<br>
									<p>Endorcment Text: </p>
									<p>None</p>
									<br>
									<br>
									<p>Mailing Address: </p>
									<p><?php echo $address; ?></p>
								</div>
								<div class="col-3"></div>
								<div class="col-4">
									<p><?php  echo $state_name; ?> Department of Public Safty</p>
									<p>Temporary Perment: Valid Until Year 9999</p>
									<br>
									<div class="row">
										<div class="col-4";">
											<img src="<?php echo $profile; ?>" alt="">
										</div>
										<div class="col-8" style="padding-left: 25px">
											<p style="font-size: 15px;">DL Number: <?php echo rand(10000000, 999999999) ?>     Class: <strong>C </strong> TYPE: <strong>DL</strong></p>
											<p style="font-size: 12px;">Restriction Code: None    ENDORCMENT CODE: None</p>
											<p style="font-size: 15px;">Name: <strong><?php echo $first . ' ' . $last ?></strong></p>
											<p style="font-size: 15px;">Address: <strong><?php echo $address ?></strong></p>
										</div>
									</div>
									<p>
										Date Of Birth: <strong><?php echo $date ?></strong>    
									</p>
									<p>
										Sex: <strong><?php echo $gender; ?></strong>    Height: <strong><?php echo $height ?> IN</strong>  Weight: <strong><?php echo $weight ?> LBS</strong>
									</p>
									<p>Hair Color: <strong><?php echo $hair ?></strong>   Eye Color: <strong><?php echo $eyes ?></strong></p>
									<p>Blood Type: <strong><?php echo $blood ?></strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<div id="ssa" style="float: right; position: relative; height: 300px; width: 45%; background-color: #ffffff;">
					<div id="left" style="float: left;">test</div>
					<div id="right" style="float: right;">test</div>
					<div id="bottom" style="position: absolute; bottom: 0;">test</div>
				</div> -->
			</div>	
		</div>
	</div>
</div>
<script>
	$("#menu").click(function(e){
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script>
<?php require_once "includes/footer.php"; ?>