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
                    Our app. is for helping the people to get serve by doctor when they needed by sitting at home. They will be serve by doctor by our virtuL Doctor. It is an automated disease detector which will detect disease and serve an primary treatment for that disease.Even it will
                </p>
            </div>
            <div class="simple-slider owl-carousel owl-no-dots top-30">
                <div class="content call-to-action-3">
                    <div class="call-to-action-socials">
                        <a href="#" class="shadow-small bg-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="shadow-small bg-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="shadow-small bg-twitter"><i class="fab fa-twitter"></i></a>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="content call-to-action-1">
                    <a href="#" class="shadow-small button button-s button-center-large button-rounded bg-highlight uppercase ultrabold">GET A QUOTE</a>
                </div>
                <div class="content call-to-action-2">
                    <div class="one-half">
                        <a href="#" class="shadow-small button button-s button-full button-rounded bg-highlight uppercase ultrabold">Call Now</a>
                    </div>
                    <div class="one-half last-column">
                        <a href="#" class="shadow-small button button-s button-full button-rounded button-green uppercase ultrabold">Take a TOUR</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <span class="center-text font-10 bottom-30 color-night-light">Swipe me to the left. Multiple Call To Actions are Available</span>
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
            <div class="footer">
                <a href="#" class="footer-logo"></a>
                <p class="footer-text">There's nothing that comes close to Apptastic<br> It's the best Mobile Template on Envato</p>
                <div class="footer-socials">
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-facebook border-teal-3d"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-google"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-phone"><i class="fa fa-phone"></i></a>
                    <a href="#" data-menu="menu-share" class="scale-hover icon icon-round no-border icon-xs bg-teal-dark"><i class="fa fa-retweet font-15"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs back-to-top bg-blue-dark"><i class="fa fa-angle-up font-16"></i></a>
                </div>
                <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
            </div>
        </div>
        <a href="#" class="back-to-top-badge back-to-top-small bg-highlight"><i class="fa fa-angle-up"></i>Back to Top</a>
        <div id="menu-share" data-height="420" class="menu-box menu-bottom">
            <div class="menu-title">
                <span class="color-highlight">Just tap to share</span>
                <h1>Sharing is Caring</h1>
                <a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
            </div>
            <div class="sheet-share-list">
                <a href="#" class="shareToFacebook"><i class="fab fa-facebook-f bg-facebook"></i><span>Facebook</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToTwitter"><i class="fab fa-twitter bg-twitter"></i><span>Twitter</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToLinkedIn"><i class="fab fa-linkedin-in bg-linkedin"></i><span>LinkedIn</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToGooglePlus"><i class="fab fa-google-plus-g bg-google"></i><span>Google +</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToPinterest"><i class="fab fa-pinterest-p bg-pinterest"></i><span>Pinterest</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToWhatsApp"><i class="fab fa-whatsapp bg-whatsapp"></i><span>WhatsApp</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToMail no-border bottom-5"><i class="fas fa-envelope bg-mail"></i><span>Email</span><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/plugins.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>

</html>