<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="../admin/assets/logos/rsz_1rsz_1logo.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../admin/assets/logos/rsz_logo.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../admin/assets/logos/rsz_1rsz_1logo.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="../admin/assets/logos/rsz_1rsz_1logo.png">	
		
	<link rel="stylesheet" type="text/css" href="../libraries/lightslider/lightslider.min.css" />
	
	<link rel="stylesheet" type="text/css" href="../revolution/css/settings.css">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="../revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="../revolution/css/navigation.css"> 
	<link rel="stylesheet" type="text/css" href="../libraries/lightslider/lightslider.min.css" />
	<link rel="stylesheet" type="text/css" href="../libraries/lib.css" />
	<link rel="stylesheet" type="text/css" href="../css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="../css/footer.css" />
	<link rel="stylesheet" type="text/css" href="../css/header.css" />
	<link rel="stylesheet" type="text/css" href="../css/navigation-menu.css" />
	<link rel="stylesheet" type="text/css" href="../css/plugins.css" />
	<link rel="stylesheet" type="text/css" href="../css/shortcodes.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/woocommerce.css" />
	
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="../styles.css" />

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
						<a href="index.html" class="navbar-brand"><img src="../admin/assets/logos/rsz_1rsz_1logo.png" alt="Logo" />Medicus</a>
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
										<img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" style="height:70px; width:70px;" src="../admin/product_images/<?php echo $product_img1; ?>">
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
									<a href="../cart.php" title="View Cart">View Cart</a>
									<a href="../checkout.php" title="Check Out">Check out</a>
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
										<img width='70' height='70' alt='Profile pic' class='attachment-shop_thumbnail'  src='customer_images/$customer_image'>
									</a>
									<div class='cart-detail'>
										<a href='customer/my_account.php?profile'>$customer_name</a>
										<span class='quantity'>$customer_email</span>
										
									</div>
								</li>
								
								
								<li class='button'>
									<a href='../logout.php' title=='Logout'>Logout</a>
									<a href='my_account.php?profile' title='Profile'>Profile</a>
								</li>
							</ul>
						</div>";
                                
                            }
                            else{
                                echo"
                                <div class='Login'>
								<a href='customer_login.php' id='login' title='Login'><i class='fa fa-sign-in'></i></a>
							</div>";
                                
                            }
                                ?>
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