<?php require_once "includes/header.php"; ?>
<?php  
	if(!isset($_COOKIE['Loggedin'])) {
		redirect("login?user=mustbeloggedin");
	} else if(!isset($_GET['type'])) {
		redirect("dashboard?type=notSelected");
	}
?>
<?php require_once "includes/modals/dmv.php"; ?>
<?php require_once "includes/modals/reg_car.php"; ?>
<?php require_once "includes/modals/cac.php"; ?>
<?php
	$type = $_GET['type'];

	switch ($type) {
		case 'civ':
			$menu = '
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="#">' . $com_name  . '</a>
							

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
								<ul class="sidebar-nav">
									<li><a href="#" data-toggle="modal" data-target=".dmv">DMV</a></li>
									<li><a href="#" data-toggle="modal" data-target=".reg_gun">ATF</a></li>
									<li><a href="#" data-toggle="modal" data-target=".call_911">911</a></li>
									<li><a href="mdt?type=civ&modal=cac" data-toggle="modal" data-target=".cac">Create Civilian</a></li>
									<li><a href="#" data-toggle="modal" data-target=".warents">Warrants</a></li>
								</ul>
								<a href="dashboard" class="btn btn-danger btn-block" style="margin: 0 auto;"><i class="fas fa-tachometer-alt"></i> | Dashboard</a>
							</div>
							<!-- Page Content -->
							<div id="page-contnet-wrapper">
								<div class="container-fluid">
									<div class="row">
										<div class="col-5 justify-content-center">
											<h1 class="text-center">My Characters</h1>
											<div class="character"><a href="mdt?type=civ&dmv=modal" data-toggle="modal" data-target=".civ">My Civilian</a></div>
										</div>
										<div class="col-5 justify-content-center">
											<h1 class="text-center">My Cars</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					';
			break;
		case 'police':
			# code...
			break;
		case 'fire':
			# code...
			break;
		case 'dispatch':
			# code...
			break;
		
		default:
			redirect("dashboard?type=notSelected");
			break;
	}
?>
<!-- tool bar top -->
<?php echo $menu; ?>


<script>
	$("#menu").click(function(e){
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script>
<?php require_once "includes/footer.php"; ?>
