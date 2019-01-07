<?php require_once "includes/header.php"; ?>
<?php  
	if(!isset($_COOKIE['Loggedin'])) {
		redirect("login?user=mustbeloggedin");
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
			<a href="#" class="btn btn-danger btn-block" style="margin: 0 auto;">Log Out</a>
		</div>
		<!-- Page Content -->
		<div id="page-contnet-wrapper">
			<div class="container-fluid">
				<?php  
					if(isset($_GET['type'])) {
						$type = $_GET['type'];
						if($type == 'notSelected') {
							echo '<div class="alert alert-danger" role="alert">
									  <h4 class="alert-heading">Something went wrong!</h4>
									  <p>Ohhhh NO!, You did not select a valid type of mdt.....</p>
									  <hr>
									  <p class="mb-0">maybe next time try using the buttons instead?</p>
									</div>';
						}
					}
				?>
				<div class="row top">
					<div class="col-5">
						<h2 class="text-center">My Registered Identities</h2>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Picture
								</div>
								<div class="col-3">
									Name
								</div>
								<div class="col-3">
									Job
								</div>
								<div class="col-3">
									Rank
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Picture
								</div>
								<div class="col-3">
									Name
								</div>
								<div class="col-3">
									Job
								</div>
								<div class="col-3">
									Rank
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Picture
								</div>
								<div class="col-3">
									Name
								</div>
								<div class="col-3">
									Job
								</div>
								<div class="col-3">
									Rank
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Picture
								</div>
								<div class="col-3">
									Name
								</div>
								<div class="col-3">
									Job
								</div>
								<div class="col-3">
									Rank
								</div>
							</div>
						</div>
					</div>
					<div class="col-5">
						<h2 class="text-center">My Settings</h2>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Setting Name
								</div>
								<div class="col-3">
									Setting Symbole
								</div>
								<div class="col-3">
									Setting Value
								</div>
								<div class="col-3">
									<button class="btn btn-primary btn-block">Change Setting</button>
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Setting Name
								</div>
								<div class="col-3">
									Setting Symbole
								</div>
								<div class="col-3">
									Setting Value
								</div>
								<div class="col-3">
									<button class="btn btn-primary btn-block">Change Setting</button>
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Setting Name
								</div>
								<div class="col-3">
									Setting Symbole
								</div>
								<div class="col-3">
									Setting Value
								</div>
								<div class="col-3">
									<button class="btn btn-primary btn-block">Change Setting</button>
								</div>
							</div>
						</div>
						<div class="civ bg-dark">
							<div class="row">
								<div class="col-3">
									Setting Name
								</div>
								<div class="col-3">
									Setting Symbole
								</div>
								<div class="col-3">
									Setting Value
								</div>
								<div class="col-3">
									<button class="btn btn-primary btn-block">Change Setting</button>
								</div>
							</div>
						</div>

					</div>
				</div>
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