<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title><?php echo SITE_TITLE; ?> | <?php echo $this->siteTitle(); ?></title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="<?php echo SITE_DESC ?>">
		<meta name="author" content="DAG UNSTOPPABLE">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo PROOT ?>assets/vendor/modernizr/modernizr.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo PROOT ?>assets/css/style.css">

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<h1 height="24" alt="Porto Admin" style="margin-top: -5px"> <?php echo SITE_TITLE ?> </h1>
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo PROOT ?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo Session::get('username') ?></span>
								<span class="role"><?php echo Session::get('rank') ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo PROOT ?>logout"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title text-light">
							<p class="text-primary"><strong>Navigation</strong></p>
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="<?php echo PROOT; ?>dashboard" class="nav-expanded nav-active">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<img src="<?php echo PROOT ?>assets/img/core-img/walkie-talkie.png" width="25px" alt="">
											<span>MDT</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo PROOT ?>dashboard">
													 Los Santos Police Department
												</a>
											</li>
											<li>
												<a href="pages-signin.html">
													 Sandy Shore Shariff Department
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 San Andreas Highway Patrol
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 San Andreas Part Ranger
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 San Andreas Port Authority
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 San Andreas State Police
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 San Andreas Prison Authority
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 N. O. O. S. E.
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Federal Investigation Bureau
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Drug Observation Agency
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Los Santos Fire Department
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Sandy Shores Fire Department
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Dispatch
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fas fa-user-alt" aria-hidden="true"></i>
											<span>Profile</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.html">
													 View Profile
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													 Edit Profile
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													Referals
												</a>
											</li>
											<li>
												<a href="ui-elements-tabs.html">
													 Settings
												</a>
											</li>
											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fas fa-users" aria-hidden="true"></i>
											<span>Friends</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.html">
													 Find Friends
												</a>
											</li>
											<li>
												<a href="forms-advanced.html">
													 View Friends List
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="far fa-user-circle" aria-hidden="true"></i>
											<span>Civilian</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-basic.html">
													 My Civs
												</a>
											</li>
											<li>
												<a href="tables-advanced.html">
													 Create Civ
												</a>
											</li>
											<li>
												<a href="tables-responsive.html">
													 Civ Manager 
													 <!-- only viewable by admin or higher ... soon -->
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fas fa-building"></i>
											<span>Buisness</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="maps-google-maps.html">
													 Create New Buisness
												</a>
											</li>
											<li>
												<a href="maps-google-maps-builder.html">
													 Entrepreneur Center
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fas fa-clipboard-list"></i>
											<span>Applications</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="layouts-default.html">
													 Apply for Police
												</a>
											</li>
											<li>
												<a href="layouts-boxed.html">
													 Apply for Fire
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 Apply for Dispatch
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 Apply for Judiciary
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 Apply for Staff
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fas fa-life-ring" aria-hidden="true"></i>
											<span>Support</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="layouts-default.html">
													 Open Ticket
												</a>
											</li>
											<li>
												<a href="layouts-boxed.html">
													 My Tickets
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 FAQ
												</a>
											</li>
											<?php  
											if(Session::get('rank') == 'Administrator' || Session::get('rank') == 'Manager' || Session::get('rank') == 'Support Agent' || Session::get('rank') == 'Support Manager' || Session::get('rank') == "Developer") {
												echo '<li>
														<a href="layouts-menu-collapsed.html">
															 View Tickets
														</a>
													</li>';
											}
											if(Session::get('rank') == 'Administrator' || Session::get('rank') == 'Manager' || Session::get('rank') == 'Support Manager' || Session::get('rank') == "Developer") {
												echo '<li>
														<a href="layouts-menu-collapsed.html">
															 Support Managment
														</a>
													</li>';
											}
											?>
										</ul>
									</li>


									<?php  
										if(Session::get('rank') == 'Administrator' || Session::get('rank') == 'Manager' || Session::get('rank') == "Developer") {
											echo '	
													<li class="nav-parent">
														<a>
															<i class="fas fa-cogs" aria-hidden="true"></i>
															<span>Admin</span>
														</a>
														<ul class="nav nav-children">
															<li>
																<a href="layouts-default.html">
																	 User Managment
																</a>
															</li>
															<li>
																<a href="layouts-boxed.html">
																	 Application Managment
																</a>
															</li>
															<li>
																<a href="layouts-menu-collapsed.html">
																	 Staff Managment
																</a>
															</li>
															<li>
																<a href="layouts-menu-collapsed.html">
																	 Settings
																</a>
															</li>
														</ul>
													</li>
												';
										}
									?>
									
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>My Info</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Profile</a></li>
										<li><a href="#">Created First Product</a></li>
										<li><a href="#">Terms Agreed</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>My Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Products Sold</span>
											<span class="stats-complete">3%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-danger progress-without-number" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
													<span class="sr-only">3% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Payment Thresh-hold</span>
											<span class="stats-complete">50%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
													<span class="sr-only">50% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Friends Added</span>
											<span class="stats-complete">100%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-success progress-without-number" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
													<span class="sr-only">100% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
					 <?php echo $this->content('body'); ?>
					
					<!-- start: page -->
					<!-- end: page -->
				</section>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="<?php echo PROOT ?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo PROOT ?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo PROOT ?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo PROOT ?>assets/javascripts/theme.init.js"></script>

	</body>
</html>