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
<?php include "assets/includes/header.php"?>

<main>
		<!-- Page Breadcrumb -->
		<div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<h3>Checkout Your Product</h3>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li>Checkout</li>
				</ol>
			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		
    </main>
    
    <div class="padding-100"></div>
		<!-- Shop Section -->
		<div id="product-section" class="product-section woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
<?php include "assets/sidebar/sidebar.php";?>
					<!-- Content Area /- -->
					<div class="content-area col-md-9 col-sm-8 col-xs-12">
					 <?php
                  
                
                if(!isset($_SESSION['customer_email'])){
                    include("customer/customer_login.php");
                }
               
                else
                {
                    include("payment_options.php");
                }
                
                ?>
						
						

					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Header /- -->
    
	</main>
	
<?php include "assets/includes/footer.php"?>