<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Medicus | A Health Care Center</title>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <div id="preloader" class="preloader-light">
        <h1></h1>
        <div id="preload-spinner"></div>
        <p>A Health Care Center</p>
        <em>You Can get verious types of medical service here</em>
    </div>
    <div id="page-transitions" class="page-build light-skin highlight-blue">
        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-index" data-load="menu-list.php" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.php" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-find" data-load="menu-find.php" data-height="420" class="menu-box menu-load menu-bottom"></div>
        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden header-logo-left">
                <a href="#" class="back-button header-logo-image"></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
            </div>
            <div class="header-line-2 header-scroll-effect">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">Medicus</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
            </div>
        </div>
        
        
        <div class="page-content header-clear-large">
            <div class="content">
                <img src="logos/logo.png" alt="img" class="preload-image center-item" width="120">
            </div>
            <div class="content-title bottom-30 top-30">
                <span class="color-highlight center-text">A few words about us</span>
                <h1 class="center-text bottom-30 font-30">Who we Are</h1>
                <p class="center-text">
                    Our main theme is for helping the people to get serve by doctor when they needed by sitting at home. They will be serve by doctor by our virtuL Doctor. It is an automated disease detector which will detect disease and serve an primary treatment for that disease.Even it will give the prascription
                </p>
            </div>
            
            <div class="simple-slider owl-carousel owl-no-dots top-30">
               <div class="content call-to-action-1">
                    <div class="one-half">
                        <a href="tel:01711574805" class="shadow-small button button-s button-full button-rounded bg-highlight uppercase ultrabold">Call Now</a>
                    </div>
                    <div class="one-half last-column">
                        <a href="index.php" class="shadow-small button button-s button-full button-rounded button-green uppercase ultrabold">Take a TOUR</a>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="content call-to-action-2">
                    <div class="call-to-action-socials">
                        <a href="#" class="shadow-small bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="shadow-small bg-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="shadow-small bg-twitter"><i class="fab fa-twitter"></i></a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="content call-to-action-3">
                    <a href="pharmacy.php" class="shadow-small button button-s button-center-large button-rounded bg-highlight uppercase ultrabold">GET Medicine</a>
                </div>
                
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content">
                <div class="icon-column icon-large">
                    <i class="fa fa-trophy color-yellow-dark"></i>
                    <h1 class="bolder">Elite Author</h1>
                    <p class='bottom-0'>
                        We became elite because of you, and we always give our customers the best! We treat our customers like our friends.
                    </p>
                </div>
            </div>
            <div class="content">
                <div class="icon-column icon-large">
                    <i class="far fa-life-ring color-blue-dark"></i>
                    <h1 class="bolder">24/7 Support</h1>
                    <p class="bottom-0">
                        A product is only as good as it's support. Our documentations are easy and our reply times are incredibly fast.
                    </p>
                </div>
            </div>
            <div class="content">
                <div class="icon-column icon-large">
                    <i class="fa fa-code color-teal-dark"></i>
                    <h1 class="bolder">Easy, Custom Code</h1>
                    <p class="bottom-0">
                        Our custom code makes pages fast, and feature filled, unlike other heavy, clumsy frameworks.
                    </p>
                </div>
            </div>
            <div class="content">
                <div class="icon-column icon-large">
                    <i class="fa fa-wrench color-orange-dark"></i>
                    <h1 class="bolder">Always updated</h1>
                    <p class="bottom-50">
                        We make our code easy, and always compatible with the latest technologies.
                    </p>
                </div>
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-20">
                <span class="color-highlight">25k Customers</span>
                <h1>Testimonials</h1>
                <a href="#">See All</a>
            </div>
            <div class="quote-slider owl-carousel owl-no-dots">
                <div class="blockquote-2">
                    <img class="shadow-large" src="images/pictures/faces/1s.png">
                    <p class="color-night-light">
                        The code is always great with any Enabled template, but its the customer
                        support that wins me over all the time.
                    </p>
                </div>
                <div class="blockquote-2">
                    <img class="shadow-large" src="images/pictures/faces/2s.png">
                    <p class="color-night-light">
                        The code is always great with any Enabled template, but its the customer
                        support that wins me over all the time.
                    </p>
                </div>
            </div>
            
            
           <?php include ("footer.php"); ?>