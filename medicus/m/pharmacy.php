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
    <title>Medicus | Pharmacy</title>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <div id="page-transitions" class="page-build light-skin highlight-blue">
        <link rel="stylesheet" type="text/css" href="styles/framework-store.css">
        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-pages" data-load="menu-list.html" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.html" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden header-logo-app">
                <a href="#" class="back-button header-logo-title">Back to Store</a>
                <a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
                <a href="#" data-menu="menu-cart" class="header-icon header-icon-2"><i class="fa fa-shopping-bag"></i></a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
            </div>
            <div class="header-line-2 header-scroll-effect">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">Pharmacy</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-cart" class="header-icon header-icon-3"><i class="fa fa-shopping-bag"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
            </div>
        </div>


        <!--cart section-->
        <div id="menu-cart" data-height="420" class="menu-box menu-bottom">
            <div class="menu-title">
                <span class="color-highlight">Your Products</span>
                <h1>Your Cart</h1>
                <a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
            </div>
            <div class="content bottom-0">
     <?php  mCart();?>
            </div>
            <button style="margin-top: 50px;" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold"><a style="color: white" href="checkout.php">
                            <i class="fa fa-shopping-bag"></i>
                            Checkout</a>
                        </button>
        </div>

        <!--cart section-->

        <!--pharmacy section-->
        <div class="page-content header-clear-small">
<?php getmProducts();?>
            <div class="decoration bottom-0"></div>

   
            <!--pharmacy section-->
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