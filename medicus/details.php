<?php
session_start();
include("assets/includes/connection.php");
include("assets/function/function.php");
?>
<?php
    
    if(isset($_GET['pro_id'])){
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        $pro_desc = $row_product['product_desc'];
        $pro_features = $row_product['product_features'];
        
        
        
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];    
    }
    
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

	<?php 
    include "assets/includes/header.php" 
    ?>
	
	<main>
		<!-- Page Breadcrumb -->
		<div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<h3><?php echo $p_cat_title; ?></h3>
				<ol class="breadcrumb">
					<li>
<a href="index.php">Home</a>
</li>

<li><a href="pharmacy.php">Shop</a></li>

<li>

<a class="active" href="pharmacy.php?p_cat=<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title; ?> </a>

</li>

<li> <?php echo $pro_title; ?> </li>
				</ol>
			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		<!-- Shop Section -->
		<div id="product-section" class="product-section woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Content Area /- -->
					<div class="content-area col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="col-md-6 col-sm-12 product-carousel">
						    <img src="admin/product_images/<?php echo $pro_img1; ?>" alt="">
						</div>
						<div class="col-md-6 col-sm-12 product-detail">
							<div class="product-controls">
								<a href="#"><i class="arrow_carrot-left"></i></a>
								<a href="#"><i class="arrow_carrot-right"></i></a>
							</div>
							<div class="product-title">
								<h4><?php echo $pro_title; ?></h4>
								<?php
                                
                                add_cart();
                                
                                ?>
							</div>
							<h4><span class="amount">৳ <?php echo $pro_price;  ?></span></h4>
							<p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of dapper charm into your after-dark wardrobe.</p>
							
							<form action="details.php?add_cart=<?php echo $product_id;?>" method="post" class="form-horizontal">


                                        <div class="form-group">


                                            <!--<label class="col-md-5" control-label>Product Price</label>-->
                                            <div class="col-md-7">

                                                <input type="hidden" name="product_price" value="<?php echo $pro_price;  ?>">


                                            </div>
                                </div>
                                           <div class="form-group">
                                            <div class="quantity-cart">
								<div class="quantity">
									<input type="button" data-field="quantity1" class="qtyminus btn" value="-">
									<input type="text" class="qty btn" value="0" name="product_qty">
									<input type="button" data-field="quantity1" class="qtyplus btn" value="+">
								</div>
								<button class="btn button product_type_simple add_to_cart_button" type="submit" name="add_cart">
                                     <i class="fa fa-shopping-cart"></i>
                                     Add To Cart
                                     
                                 </button>
                                 <button class="btn btn-primary" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> Add to Wishlist

</button>
								<a href="#" class="wishlist"><i class="icon_heart"></i></a>
							</div>



                                        </div>
                                        
</form><!-- form-horizontal Ends -->
							<div class="product-content">
								<p><span>sku:</span> 11E25A-068</p>
								<p><span>Categories:</span> <a href="#">Men</a><a href="#">Hipster</a><a href="#">T-shirt</a><a href="#">Short T-Shirt</a></p>
								<p><span>Tags:</span> <a href="#">Men’s Clothing</a><a href="#">T-shirt</a></p>
								<div class="share">
									<h4>Share:</h4>
									<ul>
										<li class="tw"><a href="#"><i class="social_twitter_circle"></i></a></li>
										<li class="fb"><a href="#"><i class="social_facebook_circle"></i></a></li>
										<li class="pin"><a href="#"><i class="social_pinterest_circle"></i></a></li>
										<li class="inst"><a href="#"><i class="social_instagram_circle"></i></a></li>
										<li class="dri"><a href="#"><i class="social_dribbble_circle"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-xs-12 col-xs-12 type-product">
							<div class="padding-60"></div>
							<!-- Tabs -->
							<div class="woocommerce-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs">
									<li class="description_tab active">
										<a href="#tab-description">Product Description </a>
									</li>
									<li class="information">
										<a href="#information">additional information</a>
									</li>
									<li class="reviews_tab">
										<a href="#tab-reviews">Reviews (4)</a>
									</li>
								</ul>
								<div id="tab-description" class="panel entry-content wc-tab">
                                    <p><?php echo $pro_desc; ?></p>
								</div>
								<div id="information" class="panel entry-content wc-tab">
									<p><?php echo $pro_features; ?></p>
								</div>
								<div id="tab-reviews" class="panel entry-content wc-tab">
									<p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of dapper charm into your after-dark wardrobe. Our model is wearing a size medium blazer, and usually takes a size medium/38L shirt. He is 6’2 1/2” (189cm) tall with a 38” (96 cm) chest and a 31” (78 cm) waist..</p>
									<ul>
										<li>Length: 74cm</li>
										<li>Regular fit</li>
										<li>Notched lapels</li>
										<li>Twin button front fastening</li>
										<li>Front patch pockets; chest pocket</li>
										<li>Internal pockets</li>
										<li>Centre-back vent</li>
										<li>Please refer to the garment for care instructions.</li>
										<li>Length: 74cm</li>
										<li>Material: Outer: 50% Linen & 50% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
									</ul>
								</div>
							</div><!-- Tabs /- -->
						</div>
						
						<div class="related-products col-md-12 col-sm-12 col-xs-12">
							<div class="padding-60"></div>
							<h4>related products</h4>
							<ul class="products row">
								<?php
                        
                        $get_products = "SELECT * FROM products order by rand() LIMIT 0,2";
                        
                        $run_products = mysqli_query($con, $get_products);
                        
                        while($row_products = mysqli_fetch_array($run_products)){
                            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                               echo"
                                <li class='product'>							
								<a href='details.php?pro_id=$pro_id' title='$pro_title'>
									<div class='product-img-box'>
										<img alt='$pro_title' src='admin/product_images/$pro_img1'/>
									</div>
									<div class='detail-box'>
                                    
										<h3>$pro_title</h3>
										<span class='price'>
											<span class='amount'>৳ $pro_price</span>
										</span>
									</div>
								</a>
								<a class='button product_type_simple add_to_cart_button' href='#' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>

 
                                ";
                            }


?>
							</ul>
						</div>						
					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Example /- -->
	</main>

	<?php
    include "assets/includes/footer.php"
    
    ?>