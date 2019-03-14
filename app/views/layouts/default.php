<!DOCTYPE html>
<html lang="en" class="fixed">

<head>
    <?php echo $this->content('head'); ?>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $this->siteTitle(); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo PROOT ?>assets/img/core-img/favicon.ico">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/morris/morris.css" />
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/vendor/pnotify/pnotify.custom.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo PROOT ?>assets/stylesheets/theme-custom.css">

        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">

        <!-- Head Libs -->
        <script src="<?php echo PROOT ?>assets/vendor/modernizr/modernizr.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo PROOT ?>assets/css/style.css">

</head>
<body>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <h5><?php echo SITE_TITLE ?></h5>
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    
                     <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="register">
                            
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                <span class="name"><a href="home" class="nav-link">Home</a></span>
                            </div>
                        </a>
            
                        
                    </div>
                     <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="register">
                            
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                <span class="name"><a href="about" class="nav-link">About</a></span>
                            </div>
                        </a>
            
                        
                    </div>
                    <span class="separator"></span>
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                <span class="name text-primary">Featured Stores</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Store 1</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Store 2</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Store 3</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     <span class="separator"></span>
            
                    <?php
                        if(Session::loggedin()) {
                            echo '<div id="userbox" class="userbox">
                            <a href="dashboard">
                                
                                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                    <span class="name"><a href="login" class="nav-link">Dashboard</a></span>
                                </div>
                            </a>
                
                            
                        </div>';
                        } else {
                            echo '<div id="userbox" class="userbox">
                            <a href="login">
                                
                                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                    <span class="name"><a href="login" class="nav-link">login</a></span>
                                </div>
                            </a>
                
                            
                        </div>
                
                        <span class="separator"></span>
                
                        <div id="userbox" class="userbox">
                            <a href="register">
                                
                                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                    <span class="name"><a href="register" class="nav-link">Register</a></span>
                                </div>
                            </a>
                
                            
                        </div>';
                        }
                    ?>
                    <span class="separator"></span>
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
    <?php echo $this->content('body'); ?>
   

        <!-- Vendor -->
        <script src="<?php echo PROOT ?>assets/vendor/jquery/jquery.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="<?php echo PROOT ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/flot/jquery.flot.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/flot/jquery.flot.categories.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/raphael/raphael.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/morris/morris.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/gauge/gauge.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/snap-svg/snap.svg.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
        <script src="<?php echo PROOT ?>assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="<?php echo PROOT ?>assets/vendor/pnotify/pnotify.custom.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo PROOT ?>assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="<?php echo PROOT ?>assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="<?php echo PROOT ?>assets/javascripts/theme.init.js"></script>


        <!-- Examples -->
        <script src="<?php echo PROOT ?>assets/javascripts/dashboard/examples.dashboard.js"></script>
        <script src="<?php echo PROOT ?>assets/javascripts/forms/examples.wizard.js"></script>
    </body>
</html>