
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

	<title>Shield Theme</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">	
		
	<link rel="stylesheet" type="text/css" href="libraries/lightslider/lightslider.min.css" />
	
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
		<!-- Burger Menu -->
		<div class="burger-menu-block">
			<span><i class="icon_close"></i></span>
			<div class="burger-menu-content">
				<h3>Other PAges</h3>
				<ul>
					<li><a href="#" title="Custom page about">Custom page about</a></li>
					<li><a href="#" title="Custom page Team">Custom page Team</a></li>
					<li><a href="#" title="Custom page countdown">Custom page countdown</a></li>
					<li><a href="#" title="Custom page error 404">Custom page error 404</a></li>
					<li><a href="#" title="Custom page contact us">Custom page contact us</a></li>
				</ul>
			</div>
			<div class="burger-menu-content">
				<h3>useful links</h3>
				<ul>
					<li><a href="#" title="Elements">Elements</a></li>
					<li><a href="#" title="Portfolio">Portfolio</a></li>
					<li><a href="#" title="Blog">Blog</a></li>
					<li><a href="#" title="Single post">Single post</a></li>
					<li><a href="#" title="Contact us">Contact us</a></li>
				</ul>
			</div>
		</div><!-- Burger Menu /- -->
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
						<a href="index.html" class="navbar-brand"><img src="images/logo-black.png" alt="Logo" />Shield theme</a>
					</div>
					<div class="menu-icon">
						<div class="cart">							
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="Cart" id="language" type="button" class="btn dropdown-toggle"><i class="fa fa-shopping-cart"></i></button>
							<ul class="dropdown-menu no-padding">
								<li class="mini_cart_item">
									<a href="#" class="cart-item-image">
										<img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" src="http://placehold.it/70x70/ddd">
									</a>
									<div class="cart-detail">
										<a href="#">denim dots t-shirt</a>
										<span class="quantity">$105.25</span>
										<a href="#" class="remove-cart"><i class="fa fa-trash" aria-hidden="true"></i></a>
									</div>
								</li>
								<li class="mini_cart_item">
									<a href="#" class="cart-item-image">
										<img width="70" height="70" alt="poster_2_up" class="attachment-shop_thumbnail" src="http://placehold.it/70x70/ddd">
									</a>
									<div class="cart-detail">
										<a href="#">denim dots t-shirt</a>
										<span class="quantity">$105.25</span>
										<a href="#" class="remove-cart"><i class="fa fa-trash" aria-hidden="true"></i></a>
									</div>
								</li>
								<li class="subtotal">
									<h5>subtotal <span>$12,99</span></h5>
								</li>
								<li class="button">
									<a href="#" title="View Cart">View Cart</a>
									<a href="#" title="Check Out">Check out</a>
								</li>
							</ul>
						</div>
						<div class="search">	
							<a href="#" id="search" title="Search"><i class="fa fa-search"></i></a>
						</div>
						<div class="burger-menu">
							<a href="#" title="menu"><i class="fa fa-bars"></i></a>
						</div>
					</div>
					<div class="navbar-collapse collapse navbar-right" id="navbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="active dropdown mega-dropdown">
								<a href="index.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu" role="menu">
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="01_home_corporate_v1_light.html" title="Home 1">Home Corporate V1 Light</a></li>
												<li><a href="home_corporate_01_dark.html" title="Home 2">Home Corporate Dark</a></li>
												<li><a href="home_corporate_01_light.html" title="Home 3">Home Corporate Light</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>												
												<li><a href="home_corporate_02.html" title="Home 4">Home Corporate 2</a></li>
												<li><a href="home_corporate_03.html" title="Home 4">Home Corporate 3</a></li>
												<li><a href="home_shop_boxed.html">Home Shop Boxed</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="home_shop_carousel.html">Home Shop Carousel</a></li>
												<li><a href="home_shop_full_width.html">Home Shop Full Width</a></li>
												<li><a href="home_shop_parallax.html">Home Shop Parallax</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="home_shop_presentation.html">Home Shop Presentation</a></li>
												<li><a href="home_shop_simple.html">Home Shop Simple</a></li>
												<li><a href="home_shop_with_sidebar.html">Home Shop With Sidebar</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							
							<li class="dropdown mega-dropdown">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">pages</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu" role="menu">
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="header1.html" title="Header 1">Header 1</a></li>
												<li><a href="header2.html" title="Header 2">Header 2</a></li>
												<li><a href="header3.html" title="Header 3">Header 3</a></li>
												<li><a href="header4.html" title="Header 4">Header 4</a></li>
												<li><a href="header5.html" title="Header 5">Header 5</a></li>				
												<li><a href="header6.html" title="Header 6">Header 6</a></li>
												<li><a href="header7.html" title="Header 7">Header 7</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>												
												<li><a href="header8.html" title="Header 8">Header 8</a></li>
												<li><a href="header9.html" title="Header 9">Header 9</a></li>
												<li><a href="header10.html" title="Header 10">Header 10</a></li>				
												<li><a href="header11.html" title="Header 11">Header 11</a></li>
												<li><a href="header12.html" title="Header 12">Header 12</a></li>
												<li><a href="header13.html" title="Header 13">Header 13</a></li>
												<li><a href="header14.html" title="Header 14">Header 14</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="vertical_fixed_01.html" title="Vertical Fixed">Vertical Fixed 01</a></li>
												<li><a href="header-vertical-one-click.html" title="Header Vertical One Click">Header Vertical One Click 02</a></li>
												<li><a href="vertical_push_content_03.html" title="Vertical Push Content">Vertical Push Content 03</a></li>
												<li><a href="about-me.html" title="About Me">About Me</a></li>
												<li><a href="about_us_01.html" title="About Us 1">About Us 1</a></li>
												<li><a href="about_us_02.html" title="About Us 2">About Us 2</a></li>
												<li><a href="services.html" title="Service">Service</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="login-1.html" title="Login 1">Login 1</a></li>
												<li><a href="login-2.html" title="Login 2">Login 2</a></li>
												<li><a href="comingsoon.html" title="Coming Soon">Coming Soon</a></li>
												<li><a href="shopping_cart.html" title="Shopping Cart">Shopping Cart</a></li>
												<li><a href="checkout.html" title="Checkout">Checkout</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="footer.html">footer</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown mega-dropdown"> 
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shortcode</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu">
									<li>
										<div class="dropdown-box col-md-3">
											<h4>shortcodes 01</h4>
											<ul>
												<li><a href="shortcodes_01_accordion.html" title="Accordion & Toggles"><i class="fa fa-sort"></i>Accordion & Toggles</a></li>
												<li><a href="shortcodes_01_blockquotes.html" title="Block Quotes"><i class="fa fa-quote-left"></i>Block Quotes</a></li>
												<li><a href="shortcodes_01_brand.html" title="Brands"><i class="fa fa-bookmark"></i>Brands</a></li>
												<li><a href="shortcodes_01_button.html" title="Button"><i class="fa fa-sort"></i>Button</a></li>
												<li><a href="shortcodes_01_carousel.html" title="Carousel"><i class="fa fa-sort"></i>Carousel</a></li>
												<li><a href="shortcodes_01_counters.html" title="Countdown"><i class="fa fa-clock-o"></i>Countdown</a></li>
												<li><a href="shortcodes_01_facts_box.html" title="Facts Box"><i class="fa fa-chain"></i>Facts Box</a></li>	
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<h4>shortcodes 02</h4>
											<ul>
												<li><a href="shortcodes_02_divider.html" title="Divider"><i class="fa fa-ellipsis-h"></i>Divider</a></li>
												<li><a href="shortcodes_02_dropcaps.html" title="Dropcaps"><i class="fa fa-font"></i>Dropcaps</a></li>
												<li><a href="shortcodes_02_google_maps.html" title="Google Maps"><i class="fa fa-map-marker"></i>Google Maps</a></li>
												<li><a href="shortcodes_02_heading_style.html" title="Heading"><i class="fa fa-header"></i>Heading</a></li>
												<li><a href="shortcodes_02_image.html" title="Image"><i class="fa fa-image"></i>Image</a></li>
												<li><a href="shortcodes_02_image_gallery.html" title="Image Gallery"><i class="fa fa-exchange"></i>Image Gallery</a></li>
												<li><a href="shortcodes_02_paggination.html" title="Paginations"><i class="fa fa-gears"></i>Paginations</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<h4>shortcodes 03</h4>
											<ul>
												<li><a href="shortcodes_03_CTA_box.html" title="CTA Box"><i class="fa fa-image"></i>CTA Box</a></li>	
												<li><a href="shortcodes_03_icon_box.html" title="Icon Box"><i class="fa fa-th-list"></i>Icon Box</a></li>
												<li><a href="shortcodes_03_icon_list.html" title="Icon List"><i class="fa fa-list"></i>Icon List</a></li>
												<li><a href="shortcodes_03_message_box.html" title="Message Box"><i class="fa fa-comment"></i>Message Box</a></li>
												<li><a href="shortcodes_03_post_grid.html" title="Post Grid"><i class="fa fa-th-large"></i>Post Grid</a></li>
												<li><a href="shortcodes_03_pricing_table.html" title="Pricing Table"><i class="fa fa-money"></i>Pricing Table</a></li>
												<li><a href="shortcodes_03_team_member.html" title="Team Members"><i class="fa fa-users"></i>Team Members</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<h4>shortcodes 04</h4>
											<ul>
												<li><a href="shortcodes_04_media_embeds.html" title="Media Embeds"><i class="fa fa-play"></i>Media Embeds</a></li>
												<li><a href="shortcodes_04_pie_chart.html" title="Pie Chart"><i class="fa fa-bar-chart"></i>Pie Chart</a></li>
												<li><a href="shortcodes_04_process_steps.html" title="Process Steps"><i class="fa fa-bookmark"></i>Process Steps</a></li>
												<li><a href="shortcodes_04_progress_bar.html" title="Progress Bar"><i class="fa fa-tasks"></i>Progress Bar</a></li>
												<li><a href="shortcodes_04_tabs.html" title="Tabs"><i class="fa fa-th-list"></i>Tabs</a></li>
												<li><a href="shortcodes_04_testimonials.html" title="Testimonials"><i class="fa fa-quote-right"></i>Testimonials</a></li>
												<li><a href="shortcodes_04_text_block.html" title="Text Block"><i class="fa fa-text-width"></i>Text Block</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown mega-dropdown"> 
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu" role="menu">
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="blog.html">Blog List No Sidebar</a></li>
												<li><a href="blog_list_sidebar_left.html">Blog List Sidebar Left</a></li>
												<li><a href="blog_list_sidebar_right.html">Blog List Sidebar Right</a></li>
												<li><a href="blog_small_thumb_no_sidebar.html">Blog Small Thumb No Sidebar</a></li>
												<li><a href="blog_small_thumb_left_sidebar.html">Blog Small Thumb Left Sidebar</a></li>
												<li><a href="blog_small_thumb_right_sidebar.html">Blog Small Thumb Right Sidebar</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="blog_grid_2_cloumn.html">Blog Grid 2 Column</a></li>
												<li><a href="blog_grid_3_cloumn.html">Blog Grid 3 Column</a></li>
												<li><a href="blog_grid_4_cloumn.html">Blog Grid 4 Cloumn</a></li>
												<li><a href="blog_grid_sidebar_left.html">Blog Grid Sidebar Left</a></li>
												<li><a href="blog_grid_sidebar_right.html">Blog Grid Sidebar Right</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="blog_mansory_2_column.html">Blog Mansory 2 Column</a></li>
												<li><a href="blog_mansory_3_column.html">Blog Mansory 3 Column</a></li>
												<li><a href="blog_mansory_4_column.html">Blog Mansory 4 Column</a></li>
												<li><a href="blog_mansory_sidebar_left.html">Blog Mansory Sidebar Left</a></li>
												<li><a href="blog_mansory_sidebar_right.html">Blog Mansory Sidebar Right</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="blog_single_audio.html">Blog Single Audio</a></li>
												<li><a href="blog_single_blockquotes.html">Blog Single Blockquotes</a></li>
												<li><a href="blog_single_no_sidebar.html">Blog Single No Sidebar</a></li>
												<li><a href="blog_single_revolution_slider.html">Blog Single Revolution Slider</a></li>
												<li><a href="blog_single_sidebar_left.html">Blog Single Sidebar Left</a></li>
												<li><a href="blog_single_sidebar_right.html">Blog Single Sidebar Right</a></li>
												<li><a href="blog_single_video.html">Blog Single Video</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown mega-dropdown">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu mega-menu" role="menu">
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="portfolio_2_grid.html" title="Portfolio 2 grid">portfolio 2 grid</a></li>
												<li><a href="portfolio_2_grid_sidebar.html" title="Portfolio 2 grid sidebar">portfolio 2 grid sidebar</a></li>
												<li><a href="portfolio_3_grid.html" title="Portfolio 3 grid">portfolio 3 grid</a></li>
												<li><a href="portfolio_3_grid_sidebar.html" title="Portfolio 3 grid sidebar">portfolio 3 grid sidebar</a></li>
												<li><a href="portfolio_no_padding.html" title="portfolio no padding">portfolio no padding</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="portfolio_4_grid.html" title="Portfolio 4 grid">portfolio 4 grid</a></li>
												<li><a href="portfolio_mansory_2_column.html" title="mansory 2 column">mansory 2 column</a></li>
												<li><a href="portfolio_mansory_2_column_sidebar_left.html" title="mansory 3 column sidebar left">mansory 3 column sidebar left</a></li>
												<li><a href="portfolio_mansory_2_column_sidebar_right.html" title="mansory 2 column sidebar right">mansory 2 column sidebar right</a></li>
												<li><a href="portfolio_mansory_3_column.html" title="mansory 3 column">mansory 3 column</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="portfolio_mansory_3_column_sidebar_left.html" title="mansory 3 column sidebar_left">mansory 3 column sidebar_left</a></li>
												<li><a href="portfolio_mansory_3_column_sidebar_right.html" title="mansory 3 column sidebar right">mansory 3 column sidebar right</a></li>
												<li><a href="portfolio_mansory_4_column.html" title="mansory 4 column">mansory 4 column</a></li>
												<li><a href="lazy_load.html" title="lazy load">Lazy Load</a></li>
												<li><a href="load_more.html" title="Load More">Load more</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="dropdown-box col-md-3">
											<ul>
												<li><a href="paggination.html" title="paggination">paggination</a></li>
												<li><a href="single_portfolio_audio.html" title="Audio Format">Audio Format</a></li>
												<li><a href="single_portfolio_gallery.html" title="Gallery Format">Gallery Format</a></li>
												<li><a href="single_portfolio_image.html" title="Image Format">Image Format</a></li>
												<li><a href="single_portfolio_video.html" title="video Format">Video Format</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu" role="menu">
									<li><a href="shop_no_sidebar.html">Shop No Sidebar</a></li>
									<li><a href="shop_sidebar_left.html">Shop Sidebar Left</a></li>
									<li><a href="shop_sidebar_right.html">Shop Sidebar Right</a></li>
									<li><a href="product_example.html">Product Example</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
								<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu" role="menu">
									<li><a href="contact_01.html" title="Contact 1">Contact 01</a></li>
									<li><a href="contact_02.html" title="Contact 2">Contact 02</a></li>
								</ul>
							</li>
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
				<h3>shop Left sidebar</h3>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop Left Sidebar</li>
				</ol>
			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		<!-- Shop Section -->
		<div id="product-section" class="product-section woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-4 col-xs-12 widget-area">
						<!-- Widget Select Product -->
						<aside class="product-widget product-widget-categories">
							<h3 class="widget-title">Select Product</h3>
							<ul>
								<li><a href="#">Women <span>(12)</span></a></li>
								<li><a href="#">men <span>(22)</span></a></li>
								<li><a href="#">footwear <span>(15)</span></a></li>
								<li><a href="#">Bags and Backpacks <span>(09)</span></a></li>
								<li><a href="#">Accessories  <span>(07)</span></a></li>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Filter Price -->
						<aside class="product-widget widget-price-filter">
							<h3 class="widget-title">FILTER SELECTION</h3>
							<div class="price-filter">
								<h5>Price</h5>
								<div id="slider-range"></div>
								<div class="price-input">
									<label>Range:</label>
									<span id="amount"></span>
									<label> - </label>
									<span id="amount2"></span>
								</div>
							</div>
						</aside><!-- Widget Filter Price /- -->
						<!-- Widget Select Product -->
						<aside class="product-widget product-widget-categories">
							<h3 class="widget-title">Select Product</h3>
							<ul>
								<li><a href="#">Black <span>(07)</span></a></li>
								<li><a href="#">Blue <span>(05)</span></a></li>
								<li><a href="#">Grey <span>(11)</span></a></li>
								<li><a href="#">Red <span>(09)</span></a></li>
								<li><a href="#">White  <span>(03)</span></a></li>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Best Sellers -->
						<aside class="product-widget widget-best-seller">
							<h3 class="widget-title">recent products</h3>
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">duranior t-shrit</a> <span>$75.25</span></h4>
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">grey shirt denim</a> <span>$92.35</span></h4>								
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">staple t-shirt</a> <span>$92.35</span></h4>
							</div><!-- Seller Box /- -->
						</aside><!-- Widget Best Sellers /- -->
					</div><!-- Widget Area /- -->
					<!-- Content Area /- -->
					<div class="content-area col-md-9 col-sm-8 col-xs-12">
						<p class="woocommerce-result-count">show all 9 results</p>
						<form method="get" class="woocommerce-ordering">
							<select class="orderby" name="orderby">
								<option selected="selected" value="menu_order">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>
						
						<ul class="products row">
<?php getProducts(); ?>
						</ul>
						<!-- Pagination:: Layout2 -->
						<div class="pagination-block layout layout2">
							<!-- Ow Pagination -->
							<nav class="ow-pagination">
								<ul>
									<li class="prev"><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#" title="">1</a></li>
									<li><a href="#" title="">2</a></li>
									<li class="pages"><a href="#" title="">...</a></li>
									<li><a href="#" title="">4</a></li>
									<li class="next"><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav><!-- Ow Pagination /- -->
						</div><!-- Pagination:: Layout2 /- -->
					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Header /- -->
	</main>

	<!--footer one start-->
	<footer class="container-fluid no-left-padding no-right-padding">
		<div class="container footer-1">
			<div class="row">
				<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-about">
					<div class="footer-logo"> 
						<a href="#"><img class="logo" src="images/logo-white.png" alt="Logo Footer"> Shield Theme</a>
					</div>
					<p>Shield Theme is a multpurpose HTML Template which is the perfect solution for business, online shop websites</p>
					<ul>
						<li><i class="icon_pin"></i> 1234 New Design St, Melbourne Australia </li>
						<li><i class="icon_mail_alt"></i> <a href="mailto:hello@example.com">hello@example.com</a> </li>
						<li><i class="icon_phone"></i> <a href="tel:00918547632521">(0091) 8547 632521</a> </li>
					</ul>
				</aside>
				<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-tag">
					<h4 class="ftr-widget-title"> Popular Tags </h4>
					<div class="tags">
						<a href="#">Amazing</a>
						<a href="#">Shield</a>
						<a href="#">Themes</a>
						<a href="#">Clean</a>
						<a href="#">Wordpress</a>
						<a href="#">Creative</a>
						<a href="#">Multipurpose</a>
						<a href="#">Retina Ready</a>
						<a href="#">Twitter</a>
						<a href="#">Responsive</a>
					</div>
				</aside>
				<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-rnt-post">
					<h4 class="ftr-widget-title"> Recent Posts </h4>
					<ul>
						<li><a href="#">How you can impact your customers.</a> </li>
						<li><a href="#">Shield in all about quality.</a> </li>
						<li><a href="#">Is your website user friendly?</a> </li>
						<li><a href="#">Shield Theme offer weekly updates &amp; more.</a> </li>
						<li><a href="#">Your customer should love your web.</a> </li>
						<li><a href="#">Make your site smooth and stunning. </a> </li>
					</ul>
				</aside>
				<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-newsletter">
					<h4 class="ftr-widget-title">Maling List</h4>
					<p>Sign up for our mailing list to get latest updates and offers.</p>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="//onistaweb.us10.list-manage.com/subscribe/post?u=10590ad9370c662d14679fd55&amp;id=eb5b66e30f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">						
								<div class="mc-field-group">
									<input type="email" value="" name="EMAIL" placeholder="Enter your email" id="mce-EMAIL">
									<button type="submit"  name="subscribe" id="mc-embedded-subscribe" class="button btn no-padding"> <i class="arrow_right"></i> </button>
								</div>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_10590ad9370c662d14679fd55_eb5b66e30f" tabindex="-1" value="">
								</div>					
							</div>
						</form>
					</div><!--End mc_embed_signup-->
					<ul>
						<li><a href="#"><i class="social_twitter"></i></a></li>
						<li><a href="#"><i class="social_googleplus"></i></a></li>
						<li><a href="#"><i class="social_pinterest"></i></a></li>
						<li><a href="#"><i class="social_rss"></i></a></li>
						<li><a href="#"><i class="social_facebook"></i></a></li>
						<li><a href="#"><i class="social_dribbble"></i></a></li>
					</ul>
				</aside>
			</div>
		</div><!-- Container /- -->
		<div class="copyright">
			<div class="container">
				<p>Copyrights &copy; 2016 by <span><a href="#">Shield</a></span>. All Rights Reserved </p>
				<a class="backto-top" id="back-to-top" href="#"><i class="fa fa-long-arrow-up"></i></a>
			</div>
		</div>
	</footer>

	<!-- JQuery v1.11.3 -->
	<script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><!-- MailChimp -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Library JS -->
	<script src="libraries/lib.js"></script>
	<script src="js/mailchip.js"></script>
	<script src="libraries/jquery.countdown.min.js"></script>
	<script src="libraries/jquery.knob.js"></script>
	<script src="libraries/lightslider/lightslider.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>

</body>
</html>