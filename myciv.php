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
			<a href="dashboard" class="btn btn-danger btn-block" style="margin: 0 auto;"><i class="fas fa-tachometer-alt"></i> | Dashboard</a>
		</div>
		<!-- Page Content -->
		<div id="page-contnet-wrapper">
			<div class="container-fluid">
				<h1 class="text-center">My Wallet</h1>
				<div class="row">
					<div class="col-6">
						<div class="dl">
							<p>: 1228215</p>
							<p class="issued">: DATE</p>
							<p class="dob">: DATE</p>
						</div>
					</div>
					<div class="col-6 text-center">
						<div class="social">
							<p class="ss-number">
					          11200891
					        </p>
					        <p class="name">My Name</p>
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