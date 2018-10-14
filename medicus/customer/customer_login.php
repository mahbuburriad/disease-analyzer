<?php
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
						<div class="cart">							
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="Cart" id="language" type="button" class="btn dropdown-toggle"><i class="fa fa-shopping-cart"></i></button>
							<?php
                        
                        $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        
                        
                        ?>
							<ul class="dropdown-menu no-padding">
							<?php
                                        
                                        
                                        $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                                $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['qty'];
                                                $only_price = $row_cart['p_price'];
                                            
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($con,$get_products);
                                                while($row_products = mysqli_fetch_array($run_products)){
                                                    $product_title = $row_products['product_title'];
                                                    $product_img1 = $row_products['product_img1'];
                                                    $sub_total = $only_price*$pro_qty;
                                                    $_SESSION['pro_qty'] = $pro_qty;
                                                    $total += $sub_total;
                                                    
                                                    $per_product = ($sub_total*2.25)/100;
                                                    $per_product_price = $per_product+50+$sub_total;
                                                    $tax = ($total*2.25)/100;
                                                    $total_charge = $tax+50+$total;
                                            
                                        
                                        ?>
								<li class="mini_cart_item">
									<a href="#" class="cart-item-image">
										<img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" style="height:70px; width:70px;" src="admin/product_images/<?php echo $product_img1; ?>">
									</a>
									<div class="cart-detail">
										<a href="#"><?php echo $product_title; ?></a>
										<span class="quantity"><?php echo $sub_total; ?></span>
										<a href="#" class="remove-cart"><i class="fa fa-trash" aria-hidden="true"></i></a>
									</div>
								</li>
								<?php } } ?>
								
								<li class="subtotal">
									<h5>subtotal <span><?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$total"; } ?></span></h5>
								</li>
								<li class="button">
									<a href="#" title="View Cart">View Cart</a>
									<a href="#" title="Check Out">Check out</a>
								</li>
							</ul>
						</div>
						<div class="Login">	
								<a href="customer/customer_login.php" id="login" title="Login"><i class="fa fa-sign-in"></i></a>
							</div>
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

	<main class="site-main page-spacing">
		<!-- Login Page 1 -->
		<div class="login-page-1 container-fluid no-padding">
			<div class="padding-100"></div>
			<!-- Container -->
			<div class="container">
				<div class="col-md-6 col-sm-8 col-xs-12">
					<div class="login-tab">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#login" title="Login" role="tab" data-toggle="tab">Login</a></li>
							<li role="presentation"><a href="#register" title="Register" role="tab" data-toggle="tab">register</a></li>
						</ul><!-- Nav tabs /- -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="login">
								<form class="login-form" method="post" action="../checkout.php">
									<h3>login to your account</h3>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" placeholder="Login" name="c_email" required>
									</div>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" placeholder="Password" name="c_pass" required>
									</div>
									<div class="checkbox">
										<label>
										  <input type="checkbox">Keep me logged in 
										</label>
										<a href="#">forgot Your password?</a>
									</div>
									<button name="login" class="btn btn-primary" value="Login">
              <i class="fas fa-sign-in-alt"></i> Sign In
           </button>
								</form>
								<div class="login-social">
									<h3>LogIn With Social</h3>
									<ul>
										<li><a href="#" title="twitter"><i class="social_twitter"></i>twitter</a></li>
										<li><a href="#" title="Facebook"><i class="social_facebook"></i>Facebook</a></li>
										<li><a href="#" title="pinterest"><i class="social_pinterest"></i>pinterest</a></li>
										<li><a href="#" title="dribbble"><i class="social_dribbble"></i>dribbble</a></li>
									</ul>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="register">
								<form class="login-form" method="post" action="customer_login.php#register" enctype="multipart/form-data">
									<h3>REGISTER TO YOUR ACCOUNT</h3>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" name="c_name" required placeholder="Enter Your Name">
									</div>
									
									
									<div class="form-group col-md-12 no-padding">
										<input type="email" class="form-control" name="c_email" required placeholder="Enter Your Email">
									</div>
									<?php
                        $ipn = getRealUserIp();
             
 $json  = file_get_contents("http://api.ipstack.com/$ipn?access_key=a6df04d294a0fb365fe76ad6b58723cf");
 $json  =  json_decode($json ,true);
 $countryip =  $json['country_name'];
$regionss= $json['region_name'];
 $cityss = $json['city'];
 $zip_codes = $json['zip'];
      ?>
									<div class="form-group col-md-12 no-padding">
										<input type="password" id="pass" class="form-control" name="c_pass" required placeholder="Enter Password">
									</div>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" name="c_country" value="<?php echo $countryip;?>" required placeholder="Enter Your County">
									</div>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" name="c_city" value="<?php echo $cityss; ?>" required placeholder="Enter Your City">
									</div>
									<div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" name="c_contact" required placeholder="Enter Mobile No">
									</div><div class="form-group col-md-12 no-padding">
										<input type="text" class="form-control" name="c_address" required placeholder="Enter Your Address">
									</div><div class="form-group col-md-12 no-padding">
										<input type="file" class="form-control" name="c_image" required>
									</div>
									<div class="form-group col-md-12 no-padding">
										<select class="form-control" name="c_gender">
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>
									</div>
									<div class="checkbox">
										<label>
										  <input type="checkbox">Keep me logged in 
										</label>
										<a href="#">forgot Your password?</a>
									</div>
									 <button id="submit" type="submit" name="register" class="btn btn-primary">
                             <i class="fas fa-user-plus"></i> Sign Up
                             
                         </button>
								</form>
									
<?php

 if(isset($_POST['register'])){ $c_name = $_POST['c_name']; $c_email = $_POST['c_email']; $c_pass = $_POST['c_pass']; $c_country = $_POST['c_country']; $c_city = $_POST['c_city']; $c_contact = $_POST['c_contact']; $c_gender = $_POST['c_gender']; $c_address = $_POST['c_address']; $c_zipcode = $_POST['c_zipcode']; $c_image = $_FILES['c_image']['name']; $c_image_tmp =$_FILES['c_image']['tmp_name'];

        $c_ip = getRealUserIp(); 

        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
                               
                               $get_email = "SELECT * FROM customers WHERE customer_email='$c_email'";
                               $run_email = mysqli_query($con, $get_email);
                               $check_email = mysqli_num_rows($run_email);
                               if($check_email == 1){
                                   echo "<script>alert('This Email is already registered ! please choose another email')</script>";
                                   exit();
                                   
                               }
                               
                               $customer_confirm_code = mt_rand();
$subject = "Medicus Email Confirmation Message";
$from = "mahbubur.riad@gmail.com";
$message = "
<h2>
Hey $c_name,
</h2>


We received a request to set your email to $c_email. If this is correct, please confirm by clicking the button below. If you don’t know why you got this email, please tell us straight away so we can fix this for you.

<p>
Information That save in our database
</p>

<table style='border:2px solid black;'>
  <tr>
    <th>Name</th>
    <td>$c_name</td>
    </tr>
    <tr>
    <th>E-mail</th> 
    <td>$c_email</td> 
    </tr>
    <tr>
    <th>Pass</th>
     <td>$c_pass</td> 
    </tr>
    <tr>
    <th>Country</th>
    <td>$c_country</td>
    </tr>
    <tr>
    <th>City</th>
    <td>$c_city</td>
    </tr>
    <tr>
    <th>Contact</th>
    <td>$c_contact</td>
    </tr>
    <tr>
    <th>Zipcode</th>
    <td>$c_zipcode</td>
    </tr>
    <tr>
    <th>Gender</th>
    <td>$c_gender</td>
    </tr>
    <tr>
    <th>Address</th>
    <td>$c_address</td>
    </tr>
    </tr>
    

</table>
<br>
<br>

<a style='background-color: #af0c42; text-decoration: none; padding: 10px; font-size: 130%; color: white; margin-top:20px;' href='http://medicus.ml/customer/my_account.php?$customer_confirm_code'>
Click Here To Confirm Email
</a>
";
$headers = "From: $from \r\n";
$headers .= "Content-type: text/html\r\n";
mail($c_email,$subject,$message,$headers);
                               

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_gender,customer_zipcode,customer_address,customer_image,customer_ip, customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact', '$c_gender','$c_zipcode','$c_address','$c_image','$c_ip', '$customer_confirm_code')";


                $run_customer = mysqli_query($con,$insert_customer);
                $sel_cart = "select * from cart where ip_add='$c_ip'";
                $run_cart = mysqli_query($con,$sel_cart);
                $check_cart = mysqli_num_rows($run_cart);

                if($check_cart>0){
                $_SESSION['customer_email']=$c_email;
                echo "<script>alert('You have been Registered Successfully')</script>";
                echo "<script>window.open('checkout.php','_self')</script>";
                }

                else{
                $_SESSION['customer_email']=$c_email;
                echo "<script>alert('You have been Registered Successfully')</script>";
                echo "<script>window.open('customer/my_account.php?profile','_self')</script>";
                }




        }

        ?>
        
        
<?php

                if(isset($_POST['login'])){

                $customer_email = $_POST['c_email'];

                $customer_pass = $_POST['c_pass'];

                $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

                $run_customer = mysqli_query($con,$select_customer);

                $get_ip = getRealUserIp();

                $check_customer = mysqli_num_rows($run_customer);

                $select_cart = "select * from cart where ip_add='$get_ip'";

                $run_cart = mysqli_query($con,$select_cart);

                $check_cart = mysqli_num_rows($run_cart);

                if($check_customer==0){

                echo "<script>alert('password or email is wrong')</script>";

                exit();

                }

                if($check_customer==1 AND $check_cart==0){

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('customer/my_account.php?profile','_self')</script>";

                }
                else {

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('checkout.php','_self')</script>";

                } 


                }

        ?>
								<div class="login-social">
									<h3>LogIn With Social</h3>
									<ul>
										<li><a href="#" title="twitter"><i class="social_twitter"></i>twitter</a></li>
										<li><a href="#" title="Facebook"><i class="social_facebook"></i>Facebook</a></li>
										<li><a href="#" title="pinterest"><i class="social_pinterest"></i>pinterest</a></li>
										<li><a href="#" title="dribbble"><i class="social_dribbble"></i>dribbble</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Login Page 1 /- -->
	</main>

<?php include "../assets/includes/footer.php"?>