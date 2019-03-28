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
    <link rel="stylesheet" href="<?php echo PROOT ?>assets/css/menu.css">

    <style>
       
    </style>

</head>
<body>
    <body>

            <!-- start: header -->
                <div id="main">
                  <div class="container">
                    
                    <nav>
                      <div class="nav-fostrap">
                        <ul>
                            <?php  
                            if(Session::loggedin()) {
                                echo '<li>
                                        <a href="' . PROOT . 'dashboard"> Dashboard</a>
                                    </li>';
                            } else {
                                echo '<li><a href="' . PROOT . '">Login</a></li>
                                        <li><a href="' . PROOT . 'register">Register</a></li>';
                            }
                          ?>
                          
                          
                          <li><a href="javascript:void(0)" >Support<span class="arrow-down"></span></a>
                            <ul class="dropdown">
                              <li><a href="<?php echo PROOT ?>open_ticket">Submit A Ticket</a></li>
                              <li><a href="<?php echo PROOT ?>faq">FAQ</a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo PROOT ?>documentation">Documentation</a></li>
                          
                        </ul>
                      </div>
                      <div class="nav-bg-fostrap">
                        <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                        <a href="" class="title-mobile"><?php echo SITE_TITLE ?></a>
                      </div>
                    </nav>
                    <div class='content'>
                    </div>
                </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <!-- end: search & user box -->
            <!-- end: header -->
    <?php echo $this->content('body'); ?>
   <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2019 <?php echo SITE_TITLE; ?>. <a href="#">Developed By SimpleCad!</a>. </p>

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
        <script>
            $(document).ready(function(){
                $('.navbar-fostrap').click(function(){
                    $('.nav-fostrap').toggleClass('visible');
                    $('body').toggleClass('cover-bg');
                });
            });
        </script>
    </body>
</html>