<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Medicus | Cart</title>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <div id="page-transitions" class="page-build light-skin highlight-blue">
        <link rel="stylesheet" type="text/css" href="styles/framework-store.css">
        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-pages" data-load="menu-list.html" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.html" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden header-logo-app">
                <a href="pharmacy.php" class="back-button header-logo-title">Back to Store</a>
                <a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
                <a href="#" data-menu="menu-cart" class="header-icon header-icon-2"><i class="fa fa-shopping-bag"></i></a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
            </div>
            <div class="header-line-2 header-scroll-effect">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">Cart</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-cart" class="header-icon header-icon-3"><i class="fa fa-shopping-bag"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
            </div>
        </div>
               <div id="menu-cart" data-height="420" class="menu-box menu-bottom">
            <div class="menu-title">
                <span class="color-highlight">Your Products</span>
                <h1>Your Cart</h1>
                
                <a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
            </div>
            <form action="cart.php" method="post" enctype="multipart-form-data">
            <div class="content bottom-0">
     <?php  mCart();?>
            </div>
            <button style="margin-top: 50px;" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold"><a style="color: white" href="checkout.php">
                            <i class="fa fa-shopping-bag"></i>
                            Checkout</a>
                        </button>
        </div>
        
        <div class="page-content header-clear-medium">
            <div class="content">
               <?php
                        
                        $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        
                        
                        ?>
                        
                <?php mCartm(); ?>
                
                <aside class="widget widget-coupon">
							<h3>Coupon Codes</h3>
							<div class="coupon">
								<form>
									<input type="text" name="code" class="form-control" placeholder="Enter your code here !" />
									
									<input name="apply_coupon" type="submit" class="button button-blue button-rounded button-full button-sm ultrabold uppercase shadow-small" value="apply coupon"/>
									
<!--									<button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                  <i class="fas fa-retweet"></i> Delete Product
                                   
                               </button>-->
									
								</form>
							</div>
						</aside>
               
                </form>
                
                <div class="decoration"></div>
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
                                        <?php } } ?>
                <div class="store-cart-total">
                    <strong class="font-14">Subtotal</strong>
                    <span class="font-14"><?php echo $total; ?></span>
                    <div class="clear"></div>
                </div>
                <div class="store-cart-total">
                    <strong class="font-14">Shipping</strong>
                    <span class="font-14">50.00</span>
                    <div class="clear"></div>
                </div>
                <div class="store-cart-total">
                    <strong class="font-14 color-highlight">Tax(2.25%)</strong>
                    <span class="font-14 color-highlight"><?php
                                       if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$tax"; } ?></span>
                    <div class="clear"></div>
                </div>
                
                <div class="store-cart-total top-20 bottom-30">
                    <strong class="font-16 uppercase ultrabold">Grand Total</strong>
                    <span class="font-16 uppercase ultrabold"> <?php if(empty($only_price)){
                                               echo "0.00";
                                               }
                                               else{ echo "$total_charge"; } ?></span>
                    <div class="clear"></div>
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
                	
                <div class="decoration"></div>
                <a href="checkout.php" class="button button-blue button-rounded button-full button-sm ultrabold uppercase shadow-small">Proceed to Checkout</a>
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
            </div>
            <div class="footer">
                <a href="#" class="footer-logo"></a>
                <p class="footer-text">There's nothing that comes close to Apptastic<br> It's the best Mobile Template on Envato</p>
                <div class="footer-socials">
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-facebook border-teal-3d"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-google"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs bg-phone"><i class="fa fa-phone"></i></a>
                    <a href="#" data-menu="menu-share" class="scale-hover icon icon-round no-border icon-xs bg-teal-dark"><i class="fa fa-retweet font-15"></i></a>
                    <a href="#" class="scale-hover icon icon-round no-border icon-xs back-to-top bg-blue-dark"><i class="fa fa-angle-up font-16"></i></a>
                </div>
                <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
            </div>
        </div>
        <a href="#" class="back-to-top-badge back-to-top-small bg-highlight"><i class="fa fa-angle-up"></i>Back to Top</a>
        <div id="menu-share" data-height="420" class="menu-box menu-bottom">
            <div class="menu-title">
                <span class="color-highlight">Just tap to share</span>
                <h1>Sharing is Caring</h1>
                <a href="#" class="menu-hide"><i class="fa fa-times"></i></a>
            </div>
            <div class="sheet-share-list">
                <a href="#" class="shareToFacebook"><i class="fab fa-facebook-f bg-facebook"></i><span>Facebook</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToTwitter"><i class="fab fa-twitter bg-twitter"></i><span>Twitter</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToLinkedIn"><i class="fab fa-linkedin-in bg-linkedin"></i><span>LinkedIn</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToGooglePlus"><i class="fab fa-google-plus-g bg-google"></i><span>Google +</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToPinterest"><i class="fab fa-pinterest-p bg-pinterest"></i><span>Pinterest</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToWhatsApp"><i class="fab fa-whatsapp bg-whatsapp"></i><span>WhatsApp</span><i class="fa fa-angle-right"></i></a>
                <a href="#" class="shareToMail no-border bottom-5"><i class="fas fa-envelope bg-mail"></i><span>Email</span><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
  
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/plugins.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>

</html>