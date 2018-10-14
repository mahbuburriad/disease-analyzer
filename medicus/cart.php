
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

                                <table class="table">

                                    <thead>

                                        <tr>
                                            <th colspan="2"> Product </th>
                                            <th>Quantity</th>

                                            <th>Unit Price</th>

                                            <th> Size </th>

                                            <th colspan="1"> Delete </th>

                                            <th colspan="2"> Sub Total</th>
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


                                            <tr>


                                                <td>

                                                    <img src="admin/product_images/<?php echo $product_img1; ?>">

                                                </td>

                                                <td>

                                                    <a href="#">
                                                        <?php echo $product_title; ?> </a>

                                                </td>

                                                <td>
                                                    <input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
                                                </td>

                                                <td>


                                                    <?php echo $only_price; ?> /=

                                                </td>

                                                <td>

                                                    <?php echo $pro_size; ?>

                                                </td>

                                                <td>
                                                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                </td>

                                                <td>


                                                    <?php echo $sub_total; ?> /=

                                                </td>

                                            </tr>


                                            <?php } } ?>



                                    </tbody>

                                    <tfoot>

                                        <tr>
                                            <th colspan="5"> Total </th>
                                            <th colspan="2">

                                                <?php echo $total; ?> BDT</th>


                                        </tr>

                                    </tfoot>



                                </table>
                                <div class="form-inline pull-right">
                                    <div class="form-group">
                                        <label>Coupon Code : </label>

                                        <input type="text" name="code" class="form-control">

                                    </div>


                                    <input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code">

                                </div>


                            </div>

                            <div class="box-footer">

                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default"><i class="fas fa-chevron-circle-left"></i> Continue Shopping</a>

                                </div>

                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                  <i class="fas fa-retweet"></i> Update Cart
                                   
                               </button>

                                    <a href="checkout.php" class="btn btn-primary">Proceed to Checkout <i class="fas fa-chevron-circle-right"></i></a>



                                </div>

                            </div>


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




            </div>



            <div class="col-md-3">

                <div class="box" id="order-summary">

                    <div class="box-header">

                        <h3>Order Summary</h3>

                    </div>

                    <p class="text-muted">

                        Shipping and additional costs are calculated based on the values you have entered
                    </p>

                    <div class="table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>
                                    <td>Order Subtotal</td>

                                    <th>
                                        <?php echo $total; ?>
                                    </th>

                                </tr>

                                <tr>
                                    <td>Shipping Charge</td>

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

                                <tr class="total">

                                    <td>Total</td>
                                    <th>

                                        <?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$total_charge"; } ?>

                                    </th>

                                </tr>

                            </tbody>

                        </table>


                    </div>


                </div>


   










 

				</div>
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

