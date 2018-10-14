
<?php
session_start();
include("assets/includes/connection.php");
include("assets/function/function.php");

?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Medicus | Shopping Cart</title>
	
<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="admin/assets/logos/rsz_1rsz_1logo.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin/assets/logos/rsz_logo.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin/assets/logos/rsz_1rsz_1logo.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="admin/assets/logos/rsz_1rsz_1logo.png">	
		
	<link rel="stylesheet" type="text/css" href="libraries/lightslider/lightslider.min.css" />
	
	<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css"> 
	<link rel="stylesheet" type="text/css" href="libraries/lightslider/lightslider.min.css" />
	<link rel="stylesheet" type="text/css" href="libraries/lib.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<link rel="stylesheet" type="text/css" href="css/header.css" />
	<link rel="stylesheet" type="text/css" href="css/navigation-menu.css" />
	<link rel="stylesheet" type="text/css" href="css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/woocommerce.css" />
	
	
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="styles.css" />

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	
	
	<a id="top"></a>

	<!-- Header Section -->
	<header id="header" class="header-section header-bg-light header-section1 header-section6 text-color-black container-fluid no-padding">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- nav -->
				<nav class="navbar navbar-default ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.html" class="navbar-brand"><img src="admin/assets/logos/rsz_1rsz_1logo.png" alt="Logo" />Medicus</a>
					</div>
					<div class="menu-icon">

						<div class="search">	
							<a href="#" id="search" title="Search"><i class="fa fa-search"></i></a>
						</div>

					</div>
					<div class="navbar-collapse collapse navbar-right" id="navbar">
						<ul class="nav navbar-nav navbar-right">
							<?php include "assets/includes/menu.php"; ?>
						</ul>
					</div><!--/.nav-collapse -->
				</nav><!-- nav /- -->
				<!-- Search Box -->
				<div class="search-box">
					<button type="button" class="close"><i class="icon icon-arrows-circle-remove"></i></button>
					<form>
						<input type="search" value="" placeholder="type keyword(s) here" />
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div><!-- Search Box /- -->
			</div><!-- Row /- -->
		</div><!-- Container /- -->
	</header><!-- Header Section /- -->

<main>
		<!-- Page Breadcrumb -->
		<div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<h3>shopping cart</h3>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">shopping cart</li>
				</ol>
			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		
    </main>
    
     <div class="col-md-9">

                <?php
                  
                
                if(!isset($_SESSION['customer_email'])){
                    include("customer/customer_login.php");
                }
               
                else
                {
                    include("payment_options.php");
                }
                
                ?>




            </div>


<?php include "assets/includes/footer.php" ?>