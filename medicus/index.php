
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

    <meta name="description" content="Medicus is the Bangladesh's highest popular medical service website that make life easier">
    <meta name="author" content="Medicus Heath Cate Ltd.">

	<title>Medicus - Bangladesh's Number One Medical Service Povider</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="admin/assets/logos/logo.png" />

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
	
	
	
	
<!--	<link rel="stylesheet" type="text/css" href="m/styles/framework.css">-->


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="styles.css" />


	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

	<a id="top"></a>


	<div class="corporate-home">

		<!-- Header Section -->
		<header id="header" class="header-section header-section1 header-transparent header-position header-responsive-bg-dark container-fluid no-padding">

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
							<a href="index.php" class="navbar-brand"><img src="admin/assets/logos/rsz_1logo.png" alt="Logo" />Medicus</a>
						</div>
						<div class="menu-icon">
							<div class="cart">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="Cart" id="language" type="button" class="btn dropdown-toggle"> <i class="fa fa-shopping-cart"></i><sup><b><?php items() ?></b></sup></button>
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
									<a href="details.php?pro_id=<?php echo $pro_id;?>" class="cart-item-image">
										<img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail " style="height:70px; width:70px;" src="admin/product_images/<?php echo $product_img1; ?>">
									</a>
									<div class="cart-detail">
										<a href="details.php?pro_id=<?php echo $pro_id;?>"><?php echo $product_title; ?></a>
										<span class="quantity"> <?php echo "৳ $only_price * $pro_qty = ৳ $sub_total" ; ?></span>
										<a href='delete_cart.php?delete_cart=<?php echo $pro_id;?>' style="color: #c0392b!important;" class='color-red-dark'><i class='fa fa-times'></i> Remove item</a>
									</div>
								</li>
								<?php } } ?>

								<li class="subtotal">
									<h5>subtotal <span><?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "৳ $total"; } ?></span></h5>
								</li>
								<li class="button">
									<a href="cart.php" title="View Cart">View Cart</a>
									<a href="checkout.php" title="Check Out">Check out</a>
								</li>
							</ul>
						</div>
						<?php
                            if(isset($_SESSION['customer_email'])){
    $customer_session = $_SESSION['customer_email'];

        $get_customer = "select * from customers where customer_email='$customer_session'";
        $run_customer = mysqli_query($con,$get_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_image = $row_customer['customer_image'];
        $customer_name = $row_customer['customer_name'];
        $customer_email = $row_customer['customer_email'];
        $customer_country = $row_customer['customer_country'];
        $customer_city = $row_customer['customer_city'];
        $customer_gender = $row_customer['customer_gender'];
        $customer_zipcode = $row_customer['customer_zipcode'];
        $customer_address = $row_customer['customer_address'];
        $customer_contact = $row_customer['customer_contact'];
            echo"


                                <div style='margin-left:20px;' class='cart'>
							<button aria-expanded='true' aria-haspopup='true' data-toggle='dropdown' title='Cart' id='language' type='button' class='btn dropdown-toggle'><i class='fa fa-sign-out'></i></button>

							<ul class='dropdown-menu no-padding'>
							
								<li class='mini_cart_item'>
									<a href='#' class='cart-item-image'>
										<img width='70' height='70' alt='Profile pic' class='attachment-shop_thumbnail'  src='customer/customer_images/$customer_image'>
									</a>
									<div class='cart-detail'>
										<a href='customer/my_account.php?profile'>$customer_name</a>
										<span class='quantity'>$customer_email</span>

									</div>
								</li>


								<li class='button'>
									<a href='logout.php' title=='Logout'>Logout</a>
									<a href='customer/my_account.php?profile' title='Profile'>Profile</a>
								</li>
							</ul>
						</div>";

                            }
                            else{
                                echo"
                                <div class='Login'>
								<a href='checkout.php' id='login' title='Login'><i class='fa fa-sign-in'></i></a>
							</div>";

                            }

                                ?>
                                
                                <!--<div id="menu-find" data-load="menu-find.php" data-height="420" class="menu-box menu-load menu-bottom"></div>-->




							<div class="search">
                    <a href="#" id="search" title="Search"><i class="fa fa-search"></i></a>
								
							<!--	<a href="#"  data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>-->
							</div>
							
							
							
							
                            
                            
                            


						</div>
						<div class="navbar-collapse collapse navbar-right" id="navbar">
							<ul class="nav navbar-nav navbar-right">
								<?php
                                include "assets/includes/menu.php";
                                ?>
							</ul>
						</div><!--/.nav-collapse -->
					</nav><!-- nav /- -->
					<!-- Search Box -->
					<div class="search-box">
						<button type="button" class="close"><i class="icon icon-arrows-circle-remove"></i></button>
						<form method="post">
							<!--<input type="Search" placeholder="Search" data-search>-->
							
							    <script>
  $( function() {
    var availableTags = [
        
        <?php
    
    $get_product = "select * from products";
        $run_product = mysqli_query($db,$get_product);
        while($row_product = mysqli_fetch_array($run_product)){
            $p_cat_id = $row_product['p_cat_id'];
        $cat_id = $row_product['cat_id'];
        $pro_id = $row_product['product_id'];
        $manufacturer_id = $row_product['manufacturer_id'];
            
            
        $pro_title = $row_product['product_title'];
        $pro_titles = $row_product['product_title'];
            
            $pro_title=strtolower($pro_title);
        
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        $pro_desc = $row_product['product_desc'];
        $pro_features = $row_product['product_features'];
            
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
            $p_cat_title=strtolower($p_cat_title);
            
            $get_manufacturer_id = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
        $run_manufacturer_id = mysqli_query($db,$get_manufacturer_id);
        $row_manufacturer_id = mysqli_fetch_array($run_manufacturer_id);
        $manufacturer_title = $row_manufacturer_id['manufacturer_title'];
            $manufacturer_title=strtolower($manufacturer_title);
            
            
        $get_cat = "select * from categories where cat_id='$cat_id'";
        $run_cat = mysqli_query($db,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];
            $cat_title=strtolower($cat_title);
                                
    
    echo "'$pro_title',";
}

    ?>
     
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script> <?php echo"
                                
                               <input type='Search'  id='tags' name='prosearch'>";
                               
                              
                            
                            
                            
                            $prosearch=$_POST['prosearch'];
                            echo"
                             <button type='submit' class='btn btn-primary'><a href='pharmacy.php?prosearch='$prosearch''>Search</a></button>
                            ";
                           
                            
                            ?>
							
						</form>

						
					</div><!-- Search Box /- -->
				</div><!-- Row /- -->
			</div><!-- Container /- -->
		</header><!-- Header Section /- -->

		<!-- Slider Section -->
		<div id="slider-section1" class="slider-section container-fluid no-padding">
			<!-- START REVOLUTION SLIDER 5.0 -->
			<div class="rev_slider_wrapper">
				<div id="slider-light1" class="rev_slider" data-version="5.0">
					<ul>
						<li data-transition="fade">
							<!-- MAIN IMAGE -->
							<img src="admin/slides_images/1.jpg"  alt=""  width="1920" height="1280">
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-fontsize="['60','60','60','45']"
								data-lineheight="['60','60','60','50']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1000"
								data-splitin="chars"
								data-splitout="none"
								data-responsive_offset="on"
								data-elementdelay="0.05"
								style="z-index: 5; text-transform:uppercase;">We <b>Care</b> for <b>You</b>
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
								id="slide-1-layer-2"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['65','65','65','65']"
								data-fontsize="['18','16','14','35']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1500"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"
								style="z-index: 6; font-style: italic; font-family: 'Droid Serif', serif;">We are here to care your health. you can find doctor and buy medicine here
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
								id="slide-1-layer-3"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['95','95','95','95']"
								data-fontsize="['18','16','14','35']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1500"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"
								style="z-index: 6; font-style: italic; font-family: 'Droid Serif', serif;">A perfect place for you
							</div>
						</li>

						<li data-transition="fade">
							<!-- MAIN IMAGE -->
							<img src="admin/slides_images/2.jpg"  alt=""  width="1920" height="1280">
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3" id="slide-2-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-fontsize="['70','70','70','45']"
								data-lineheight="['70','70','70','50']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:0px;"
								data-mask_out="x:inherit;y:inherit;"
								data-start="1000"
								data-splitin="chars"
								data-splitout="none"
								data-responsive_offset="on"
								data-elementdelay="0.05"
								style="z-index: 5; white-space: nowrap; text-transform:uppercase;">You can buy medicine here easily from here
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
								id="slide-2-layer-2"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['65','65','65','65']"
								data-fontsize="['18','16','14','35']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1500"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"
								style="z-index: 6; font-style: italic; font-family: 'Droid Serif', serif;">Please Upload your prescription too.
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
								id="slide-2-layer-3"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['95','95','95','95']"
								data-fontsize="['18','16','14','35']"
								data-width="auto"
								data-height="none"
								data-whitespace="noraml"
								data-transform_idle="o:1;"
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1500"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"
								style="z-index: 6; font-style: italic; font-family: 'Droid Serif', serif;">You can find almost any medicine from here
							</div>
						</li>
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div><!-- END OF SLIDER WRAPPER -->
		</div><!-- Slider Section -->

		<!-- History Section -->
		<div id="history-section" class="history-section">
			<div class="padding-100"></div>
			<!-- Container -->
			<div class="container">
				<div class="col-md-8 col-sm-8 history-content">
				<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//ec2-18-136-155-136.ap-southeast-1.compute.amazonaws.com/disease/disease.pl" allowfullscreen></iframe>
</div>

				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<img src="admin/assets/all/rsz_virtual-doctor.jpg" alt="history-img" />
				</div>
			</div><!-- Container /- -->
		</div><!-- History Section /- -->

		<div class="padding-100"></div>

				<!-- Fact Section -->
		<div class="fact-section corporate-home-fact container-fluid no-padding">
		<div class="padding-60"></div>
		<div class="section-header section-header2">
					<h3>Pharmacy</h3>
					<p>You will get medicine within a hour</p>
				</div>
				<div class="padding-10"></div>
		</div><!-- Fact Section /- -->



		<!-- Team Section -->
            <div id="product-section" class="product-section woocommerce container-fluid no-padding">

			<div class="padding-60"></div>
			<!-- Container -->
			<div class="container">
									<div class="content-area">


						<ul class="products row">
<?php getProIndex(); ?>
						</ul>

                    </div>
					</div><!-- Content Area /- -->

			</div><!-- Container /- -->


		<div class="padding-100"></div>

		<!-- Fact Section -->
		<div class="fact-section corporate-home-fact container-fluid no-padding">
			<div class="padding-60"></div>
			<div class="facts-main-1">
				<div class="col-md-3 col-xs-6 col-xs-12">
					<div class="fact-box">
						<h3><span class="count" id="statistics_count-1" data-statistics_percent="228">&nbsp;</span><sub>/Doctors</sub></h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 col-xs-12">
					<div class="fact-box">
						<h3><span class="count" id="statistics_count-2" data-statistics_percent="676">&nbsp;</span><sub>/Medicines</sub></h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 col-xs-12">
					<div class="fact-box">
						<h3><span class="count" id="statistics_count-3" data-statistics_percent="530">&nbsp;</span><sub>/Medicine Category</sub></h3>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 col-xs-12">
					<div class="fact-box">
						<h3><span class="count" id="statistics_count-4" data-statistics_percent="132">&nbsp;</span><sub>/Happy User</sub></h3>
					</div>
				</div>
			</div>
			<div class="padding-30"></div>
		</div><!-- Fact Section /- -->



		<!-- Team Section -->
		<div class="team-section container-fluid no-padding">
			<div class="padding-60"></div>
			<!-- Container -->
			<div class="container">
				<div class="section-header section-header2">
					<h3>meet our team</h3>
					<p>Let’s see our team members who are working for you day and night <b>24/7</b></p>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="team-img-hover">
							<img src="images/Members/Mahbubur%20Riad.jpg" alt="team" width="330" height="607" />
							<div class="team-content">
								<h3>Mahbubur Riad</h3>
								<h5>CEO</h5>
								<ul>
									<li><a href="#" title="Twitter"><span class="social_twitter" aria-hidden="true"></span></a></li>
									<li><a href="#" title="Facebook"><span class="social_facebook" aria-hidden="true"></span></a></li>
									<li><a href="#" title="Dribbble"><span class="social_dribbble" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="team-img-hover">
							<img src="images/Members/41330039_2139425559401938_3408581518933622784_o.jpg" alt="team" width="330" height="607" />
							<div class="team-content">
								<h3>Mysha Rahman</h3>
								<h5>Managing Director</h5>
								<ul>
									<li><a href="#" title="Twitter"><span class="social_twitter" aria-hidden="true"></span></a></li>
									<li><a href="#" title="Facebook"><span class="social_facebook" aria-hidden="true"></span></a></li>
									<li><a href="#" title="Dribbble"><span class="social_dribbble" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div><!-- Container /- -->
		</div><!-- Team Section /- -->
		<div class="padding-100"></div>

<?php
        include "assets/includes/footer.php"
        ?>
