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
    <title>Medicus | Checkout</title>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <div id="page-transitions" class="page-build light-skin highlight-blue">
        <link rel="stylesheet" type="text/css" href="styles/framework-store.css">
        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-pages" data-load="menu-list.php" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.php" data-height="210" class="menu-box menu-load menu-bottom"></div>
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
                <a href="#" class="header-title font-20">Checkout</a>
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
            <div class="content bottom-0">
     <?php  mCart();?>
            </div>
            
             <button style="margin-top: 50px;" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold"><a style="color: white" href="checkout.php">
                            <i class="fa fa-shopping-bag"></i>
                            checkout</a>
                        </button>
                        
                        
                        <?php
                        
                        $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        
                        
                        ?>
                        

        </div>
        
        <div class="page-content header-clear-medium">
            <div class="content">
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
            </div>
            <div class="decoration decoration-margins"></div>
            <div class="content-title bottom-0 top-30">
                <span class="color-highlight">Enter your info</span>
                <h1>Payment Info</h1>
                <p>
                    This information will be added to your bill as well, so be sure it's absolutely correct.
                </p>
            </div>
            <div class="content">
              
                <?php
                  
                
                if(!isset($_SESSION['customer_email'])){
                    include("customer/customer_login.php");
                }
               
                else
                {
                    include("payment_options.php");
                }
                
                ?>
            </div>
      <?php include("footer.php"); ?>