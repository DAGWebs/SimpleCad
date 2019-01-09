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
				<h1 class="text-center">My Civ</h1>
				<div id="dmv" style="float: left; position: relative; height: 300px; width: 45%; background-color: #ffffff;">
					<div id="watermark" style="padding-left: 20px; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp4uI8AuGV7_0Rbxhh9s2JmaMwbRjy85bSkvAey9cJoZjTDwse); width: 100%; height: 300px; background-repeat: no-repeat; background-position: center; background-size: 300px 300px;">
						<div class="row" style="background-color: rgba(255, 255, 255, .6); width: 100%; height: 100%;">
							<div class="col-4">test</div>
							<div class="col-4">test</div>
							<div class="col-4">test</div>
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