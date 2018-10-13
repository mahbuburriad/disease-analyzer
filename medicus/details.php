<?php
session_start();
include("assets/includes/connection.php");
include("assets/function/function.php");
?>
<?php


$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3']; 

$pro_label = $row_product['product_label'];

$pro_psp_price = $row_product['product_psp_price'];

$pro_features = $row_product['product_features'];

$pro_video = $row_product['product_video'];

$status = $row_product['status'];

$pro_url = $row_product['product_url'];

if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




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

	<title>Medicus | Details</title>

	 <?php include "assets/includes/header.php" ?>
	
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
								<h4><?php echo $p_cat_title; ?></h4>
								<?php 


if(isset($_POST['add_cart'])){

$ip_add = getRealUserIp();

$p_id = $pro_id;

$product_qty = $_POST['product_qty'];

$product_size = $_POST['product_size'];


$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

$run_check = mysqli_query($con,$check_product);

if(mysqli_num_rows($run_check)>0){

echo "<script>alert('This Product is already added in cart')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else {

$get_price = "select * from products where product_id='$p_id'";

$run_price = mysqli_query($con,$get_price);

$row_price = mysqli_fetch_array($run_price);

$pro_price = $row_price['product_price'];

$pro_psp_price = $row_price['product_psp_price'];

$pro_label = $row_price['product_label'];

if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = $pro_psp_price;

}
else{

$product_price = $pro_price;

}

$query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

$run_query = mysqli_query($db,$query);

echo "<script>window.open('$pro_url','_self')</script>";

}

}


?>
							</div>
							<h4><span class="amount">$102.35</span><del><span>$205.05</span></del></h4>
							<p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of dapper charm into your after-dark wardrobe.</p>
							
							<form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->

<?php

if($status == "product"){

?>

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-5 control-label" >Product Quantity </label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_qty" class="form-control" >

<option>Select quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>


</select>

</div><!-- col-md-7 Ends -->

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-5 control-label" >Product Size</label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_size" class="form-control" >

<option>Select a Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>


</select>

</div><!-- col-md-7 Ends -->


</div><!-- form-group Ends -->

<?php }else { ?>


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-5 control-label" >Bundle Quantity </label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_qty" class="form-control" >

<option>Select quantity</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>


</select>

</div><!-- col-md-7 Ends -->

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-5 control-label" >Bundle Size</label>

<div class="col-md-7" ><!-- col-md-7 Starts -->

<select name="product_size" class="form-control" >

<option>Select a Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>


</select>

</div><!-- col-md-7 Ends -->


</div><!-- form-group Ends -->


<?php } ?>

<center><!-- center Starts -->

<?php

$get_icons = "select * from icons where icon_product='$pro_id'";

$run_icons = mysqli_query($con,$get_icons);

while($row_icons = mysqli_fetch_array($run_icons)){

$icon_image = $row_icons['icon_image'];

echo "<img src='admin_area/icon_images/$icon_image' width='45' height='45' > &nbsp;&nbsp;&nbsp; ";


}

?>

</center><!-- center Ends -->

<?php

if($status == "product"){




if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<p class='price'>

Product Price : <del> $$pro_price </del><br>

Product sale Price : $$pro_psp_price

</p>

";

}
else{

echo "

<p class='price' > <a href='https://api.whatsapp.com/send?phone=601151762381&text'>Whatapp For Price</a> </p>

";

}

}
else{


if($pro_label == "Sale" or $pro_label == "Gift"){

echo "

<p class='price'>

Bundle Price : <del> $$pro_price </del><br>

Bundle sale Price : $$pro_psp_price

</p>

";

}
else{

echo "

<p class='price'>

Bundle Price : $$pro_price

</p>

";

}


}

?>

<p class="text-center buttons" ><!-- text-center buttons Starts -->

<button class="btn btn-primary" type="submit" name="add_cart">

<i class="fa fa-shopping-cart" ></i> Add to Cart

</button>

<button class="btn btn-primary" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> Add to Wishlist

</button>


<?php

if(isset($_POST['add_wishlist'])){

if(!isset($_SESSION['customer_email'])){

echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}
else{

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id']; 

$select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

$run_wishlist = mysqli_query($con,$select_wishlist);

$check_wishlist = mysqli_num_rows($run_wishlist);

if($check_wishlist == 1){

echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else{

$insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

$run_wishlist = mysqli_query($con,$insert_wishlist);

if($run_wishlist){

echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

echo "<script>window.open('$pro_url','_self')</script>";

}

}

}

}

?>

</p><!-- text-center buttons Ends -->

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
						<?php

if($status == "product"){

echo "Product Description";

}
else{

echo "Bundle Description";

}

?>
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

$get_products = "select * from products order by rand() LIMIT 0,3";

$run_products = mysqli_query($con,$get_products); 

while($row_products = mysqli_fetch_array($run_products)) {

$pro_id = $row_products['product_id'];

$pro_title = $row_products['product_title'];

$pro_price = $row_products['product_price'];

$pro_img1 = $row_products['product_img1'];

$pro_label = $row_products['product_label'];

$manufacturer_id = $row_products['manufacturer_id'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

$run_manufacturer = mysqli_query($db,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$manufacturer_name = $row_manufacturer['manufacturer_title'];

$pro_psp_price = $row_products['product_psp_price'];

$pro_url = $row_products['product_url'];


if($pro_label == "Sale" or $pro_label == "Gift"){

$product_price = "<del> $$pro_price </del>";

$product_psp_price = "| $$pro_psp_price";

}
else{

$product_psp_price = "";

$product_price = "$$pro_price";

}


if($pro_label == ""){


}
else{

$product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}
						echo"		<li class='product'>							
									<a href='details.php' title='Prouct'>
										<div class='product-img-box'>
											<img alt='shop' src='admin/product_images/$pro_img1' />
										</div>
										<div class='detail-box'>
											<h3>$pro_title</h3>
											<span class='price'>
												<span class='amount'>$pro_price</span>
											</span>
										</div>
									</a>
									<a class='button product_type_simple add_to_cart_button' href='#' title='Add To Cart'>Add to cart</a>
									<div class='whishlist-btn'>
										<a href='$pro_url' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
										<a href='$pro_url' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
									</div>
								</li>";
                            }


?>

<?php } ?>
                            
    

							</ul>
						</div>						
					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Example /- -->
	</main>

	<?php
    include "admin/assets/includes/footer.php"
    
    ?>
    