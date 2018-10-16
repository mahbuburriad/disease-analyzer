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
            <div class="slider-margins">
                <div class="single-slider owl-carousel owl-no-dots">
                    <div class="item shadow-small">
                        <div class="caption-style-4">
                            <strong>Pharmacy</strong>
                            <h1>You can buy medicine here</h1>
                            <p>
                                The medicines supply will be within 1 hour in Dhaka city. and you will get medicines at market price.
                            </p>
                        </div>
                        <div class="overlay bg-black opacity-50"></div>
                        <img src="images/1.jpg" alt="img">
                    </div>
                    <div class="item shadow-small">
                        <div class="above-overlay above-overlay-bottom">
                            <div class="caption-style-1 above-overlay">
                                <h1 class="bold color-white">You will best service from here</h1>

                            </div>
                        </div>
                        <div class="overlay overlay-gradient-large"></div>
                        <img src="images/2.jpg" alt="img">
                    </div>
                    <div class="item shadow-small">
                        <div class="caption-style-3">
                            <h1>Virtual<br>Doctor</h1>
                            <p class="bg-white">
                                You can predict your disease By using our apps.
                            </p>
                        </div>
                        <div class="overlay bg-black opacity-50"></div>
                        <img src="images/3.jpg" alt="img">
                    </div>
                    <div class="item shadow-small">
                        <div class="caption-style-2">
                            <strong>Doctor <br> Seasrch</strong>
                            <span>You will able to find doctor by disease prediction.</span>

                        </div>
                        <div class="overlay overlay-gradient-large"></div>
                        <img src="images/4.jpg" alt="img">
                    </div>
                </div>
            </div>


            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-20">
                <span class="color-highlight">Loved by Thousands</span>
                <h1>Top Product</h1>
                <a href="pharmacy.php" class="color-highlight">See All</a>
            </div>
            <div class="content">
                <ul class="link-list">
                    <?php getMCategory(); ?>
                </ul>
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-20">
                <span class="color-highlight">Only the Best</span>
                <h1>Featured Mecicine</h1>
                <a href="pharmacy.php" class="color-highlight">See All</a>
            </div>
            <div class="slider-margins">
                <div class="double-slider owl-carousel bottom-10 owl-no-dots">

                    <?php getMIndex();?>

                </div>
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-20">
                <span class="color-highlight">Our Services</span>
                <h1 class="font-22">Medicus is The Best</h1>
                <a href="index.php" class="color-highlight">See All</a>
            </div>
            <div class="slider-margins bottom-30">
                <div class="double-slider owl-carousel owl-no-dots">
                    <div class="item bottom-10 shadow-small">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color-white uppercase ultrabold"><i class="fa fa-heartbeat top-20 fa-3x"></i></strong>
                        </div>
                        <div class="above-overlay above-overlay-bottom bottom-10">
                            <h1 class="color-white bolder">Pharmacy</h1>
                            <h5 class="color-white font-11">All Medicines are safe.</h5>
                        </div>
                        <div class="overlay bg-red-light"></div>
                        <a href="#"><img src="images/pictures/0t.jpg" alt="img" class="responsive-image"></a>
                    </div>
                    <div class="item bottom-10 shadow-small">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color-white uppercase ultrabold"><i class="fa fa-user-friends top-20 fa-3x"></i></strong>
                        </div>
                        <div class="above-overlay above-overlay-bottom bottom-10">
                            <h1 class="color-white bolder">Virtual Doctor</h1>
                            <h5 class="color-white font-11">You Can Predict you disease</h5>
                        </div>
                        <div class="overlay bg-green-dark"></div>
                        <a href="#"><img src="images/pictures/0t.jpg" alt="img" class="responsive-image"></a>
                    </div>
                    <div class="item bottom-10 shadow-small">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color-white uppercase ultrabold"><i class="fa fa-certificate top-20 fa-3x"></i></strong>
                        </div>
                        <div class="above-overlay above-overlay-bottom bottom-10">
                            <h1 class="color-white bolder">Certified</h1>
                            <h5 class="color-white font-11">Virtual Doctor Monitored By Doctor</h5>
                        </div>
                        <div class="overlay bg-blue-dark"></div>
                        <a href="#"><img src="images/pictures/0t.jpg" alt="img" class="responsive-image"></a>
                    </div>
                    <div class="item bottom-10 shadow-small">
                        <div class="above-overlay above-overlay-top">
                            <strong class="color-white uppercase ultrabold"><i class="fa fa-rocket top-20 fa-3x"></i></strong>
                        </div>
                        <div class="above-overlay above-overlay-bottom bottom-10">
                            <h1 class="color-white bolder">Doctor Search</h1>
                            <h5 class="color-white font-11">Search and Appointment doctor from here</h5>
                        </div>
                        <div class="overlay bg-teal-dark"></div>
                        <a href="#"><img src="images/pictures/0t.jpg" alt="img" class="responsive-image"></a>
                    </div>
                </div>
            </div>
            <div class="decoration decoration-margins"></div>


            <?php include ("footer.php"); ?>