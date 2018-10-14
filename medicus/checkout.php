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

	<title>Customer Login</title>

	<?php include "assets/includes/header.php";?>

	<main class="site-main page-spacing">
		<!-- Login Page 1 -->
		<div class="login-page-1 container-fluid no-padding">
			<div class="padding-100"></div>
			<!-- Container -->
			<div class="container">
<?php
                  
                
                if(!isset($_SESSION['customer_email'])){
                    include("customer/customer_login.php");
                }
               
                else
                {
                    include("payment_options.php");
                }
                
                ?>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Login Page 1 /- -->
	</main>

<?php include "assets/includes/footer.php"?>