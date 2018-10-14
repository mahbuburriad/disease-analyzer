
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
	
<?php include "assets/includes/header.php" ?>


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
		<!-- Shop Section -->
		<div id="product-cart" class="product-cart woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Order Summary -->
					<div class="col-md-7 col-sm-7 order-summary">
					
						<h3>your shopping cart</h3>
                    <form action="cart.php" method="post" enctype="multipart-form-data">

                        <h1>Shopping Cart</h1>

                        <?php
                        
                        $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        
                        
                        ?>



                            <p class="text-muted"> You Currently have
                                <?php items(); ?> item(s) in you cart </p>

                            <div class="table-responsive">

						<div class="order-summary-content">
							<table class="shop_cart">
								<thead>
									<tr>
										<th colspan="3" class="product-thumbnail">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
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
									<tr class="cart_item">
									 <td>
                                                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                </td>
										<td data-title="Product" class="product-thumbnail">
											<a title="Product Thumbnail" href=""><img style="width: 100px; height: 128px;" class="attachment-shop_thumbnail wp-post-image" src="admin/product_images/<?php echo $product_img1; ?>" alt="thumb-1" /></a>					
										</td>
										<td data-title="Product Name" class="product-name">
											<a title="Product Name" href="#"><?php echo $product_title; ?></a>
										</td>
										<td data-title="Total" class="product-price">
											<span><?php echo $only_price; ?> </span>
										</td>										
										<td data-title="Quantity" class="product-quantity">
											<div class="quantity"><input type="text" title="remove" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">"></div>
										</td>
										<td data-title="Total" class="product-price">
											<span><?php echo $sub_total; ?></span>
										</td>
									</tr>
									<?php } } ?>
																
								</tbody>
							</table>
						</div>
						<div>

	
<aside class="widget widget-coupon">
							<h3>Coupon Codes</h3>
							<div class="coupon">
								<form>
									<input type="text" name="code" class="form-control" placeholder="Enter your code here !" />
									
									<input name="apply_coupon" type="submit" value="apply coupon"/>
								</form>
							</div>
						</aside>
						<button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                  <i class="fas fa-retweet"></i> Update Cart
                                   
                               </button>
						
						
					</div><!-- Order Summary /- -->
					</div><!-- Order Summary /- -->
					</div><!-- Order Summary /- -->


                               					<!-- Widget Area -->
					


		
                                        <div class="col-md-4 col-sm-5 col-xs-12 widget-area">
											<aside class="widget widget-proceed-checkout">
							<h3>cart totals</h3>
							<div class="wc-proceed-to-checkout">
								<table>
									<tr>
										<td>Cart Subtotal</td>
										<td><?php echo $total; ?></td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>50.00</td>
									</tr>
									<tr>

                                    <td>Tax(2.25%)</td>
                                    <th>
                                        <?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$tax"; } ?>
                                    </th>


                                </tr>
									<tr>
										<td>Totals</td>
										                                    <th>

                                        <?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$total_charge"; } ?>

                                    </th>
									</tr>
								</table>
							</div>
							
							<a href="checkout.php" class="proceed-to-checkout">proceed to checkout</a>
						</aside>
					</div><!-- Widget Area /- -->




                                                                         
                                                  						

                            
                          
                          

                    </form>
                    </div>
					
					 <?php

            if(isset($_POST['apply_coupon'])){
             $code = $_POST['code'];
            if($code == ""){
            }
            else{
            $get_coupons = "select * from coupons where coupon_code='$code'";
            $run_coupons = mysqli_query($con,$get_coupons);
            $check_coupons = mysqli_num_rows($run_coupons);
            if($check_coupons == 1){
            $row_coupons = mysqli_fetch_array($run_coupons);
            $coupon_pro = $row_coupons['product_id'];
            $coupon_price = $row_coupons['coupon_price'];
            $coupon_limit = $row_coupons['coupon_limit'];
            $coupon_used = $row_coupons['coupon_used'];
            if($coupon_limit == $coupon_used){
            echo "<script>alert('Your Coupon Code Has Been Expired')</script>";
            }
            else{
            $get_cart = "select * from cart where p_id='$coupon_pro' AND ip_add='$ip_add'";
            $run_cart = mysqli_query($con,$get_cart);
            $check_cart = mysqli_num_rows($run_cart);
            if($check_cart == 1){
            $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
            $run_used = mysqli_query($con,$add_used);
            $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro' AND ip_add='$ip_add'";
            $run_update = mysqli_query($con,$update_cart);
            echo "<script>alert('Your Coupon Code Has Been Applied')</script>";
            echo "<script>window.open('cart.php','_self')</script>";
            }
            else{
            echo "<script>alert('Product Does Not Exist In Cart')</script>";
            }
            }
            }
            else{
            echo "<script> alert('Your Coupon Code Is Not Valid') </script>";
            }
            }
            }
?>


                    <?php
                
                function update_cart(){
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            $run_delete = mysqli_query($con, $delete_product);
                            if($run_delete){
                                echo"
                                <script>window.open('cart.php', '_self')</script>
                                ";
                            }
                            
                            
                        }
                        
                    }
                    
                }
                
                echo @$up_cart = update_cart();
                
                ?>



			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Header /- -->
	
	</main>
	<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <script>
            $(document).ready(function(data) {
                $(document).on('keyup', '.quantity', function() {
                    var id = $(this).data("product_id");
                    var quantity = $(this).val();
                    if (quantity != '') {
                        $.ajax({
                            url: "change.php",
                            method: "POST",
                            data: {
                                id: id,
                                quantity: quantity
                            },
                            success: function(data) {
                                $("body").load('cart_body.php');
                            }
                        });
                    }
                });
            });

        </script>
	
<?php include "assets/includes/footer.php" ?>

