<?php
    
    
    $session_email = $_SESSION['customer_email'];
    $select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";
    $run_customer = mysqli_query($con, $select_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];
    
    
    ?>
              
                       <div class="page-login content-boxed content-boxed-padding top-0 bottom-0 bg-white">
                        <img class="preload-image login-bg responsive-image bottom-0 shadow-small" src="images/pictures/american-express-89024_640.jpg" data-src="images/pictures/american-express-89024_640.jpg" alt="img">
                        <img class="preload-image login-image shadow-small" data-src="logos/rsz_1rsz_1logo.png" alt="img">
                        <p class="smaller-text bottom-15">Choose Payment option</p>
                        <?php
        
        if(!isset($_SESSION['customer_email'])){
        
    }
        else{
            
        
    $c_email = $_SESSION['customer_email'];
    $get_customer = "SELECT * FROM customers WHERE  customer_email = '$c_email'";
    $run_customer = mysqli_query($con, $get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_confirm_code = $row_customer['customer_confirm_code'];
    if(!empty($customer_confirm_code)){
    
    ?>

                <div class="alert alert-danger">
                    <center>
                        <strong>Warning! </strong> Please Confirm Through Your Email. If you have not recieved your confirmation email
                        <a href="customer/my_account.php?send_email" class="alert-link">Send E-mail Again</a>

                    </center>


                </div>
                <?php } }?>
                       
                       
                       <p class="lead text-center">
            <?php
            
            if(!empty($customer_confirm_code)){
                ?>
                <a class="isDisabled">Pay By Bkash / Offline</a>
                <?php } else{  ?>
                <a href="order.php?c_id=<?php echo $customer_id; ?>">Pay By Bkash / Offline</a>
                <?php  }?>



        </p>
                       <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="business" value="mahbubur.riad-facilitator@gmail.com">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="upload" value="1">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="return" value="http://localhost/virtualdoctor/medicus/m/paypal_order.php?c_id=<?php echo $customer_id;?>">
                <input type="hidden" name="cance_return" value="http://localhost/virtualdoctor/medicus/m/index.php">

                <?php 
                
                $i = 0;


$ip_add = getRealUserIp();

$get_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$get_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_qty = $row_cart['qty'];

$pro_price = $row_cart['p_price'];

    $bd_price = $pro_price/84.44;

$get_products = "select * from products where product_id='$pro_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>

                <input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $product_title; ?>">

                <input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $i; ?>">

                <input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $bd_price; ?>">

                <input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $pro_qty; ?>">


                <?php } ?>

                <?php
            
            if(!empty($customer_confirm_code)){
                ?>
                    <input type="image" name="submit" width="200" height="200" src="../images/paypal.jpg" disabled>

                    <?php } else{  ?>
                    <input type="image" name="submit" width="200" height="200" src="../images/paypal.jpg">
                    <?php  }?>




            </form>
            <!-- form Ends -->
                        
                       </div>