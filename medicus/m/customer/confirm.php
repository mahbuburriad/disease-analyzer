<?php
session_start();

if(!isset($_SESSION['customer_email'])){
    echo "<script>alert('Please Login to go to your account. If you have not user account Please register and it is more fun to buy here. Thank you!')</script>";
    echo "<script>window.open('../checkout.php', '_self')</script>";
}
else{    

include("../../assets/includes/connection.php");
include("../../assets/function/function.php");

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
        if(!isset($_SESSION['customer_email'])){

        }
        else{
    
       if(isset($_GET['order_id']))
    { $order_id = $_GET['order_id']; } ?>
        
       
      <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Medicus | Payment Confirmation</title>
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="styles/framework.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
<div id="page-transitions" class="page-build light-skin highlight-blue">
<div id="menu-hider"></div>
<div id="menu-list" data-selected="menu-pages" data-load="menu-list.php" data-height="415" class="menu-box menu-load menu-bottom"></div>
<div id="menu-demo" data-load="menu-demo.php" data-height="210" class="menu-box menu-load menu-bottom"></div>
<div id="menu-find" data-load="menu-find.php" data-height="420" class="menu-box menu-load menu-bottom"></div>
<div class="header header-scroll-effect">
<div class="header-line-1 header-hidden header-logo-app">
<a href="my_account.php" class="back-button header-logo-title">Back to Pages</a>
<a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
</div>
<div class="header-line-2 header-scroll-effect">
<a href="#" class="header-pretitle header-date color-highlight"></a>
<a href="#" class="header-title">Payment Confirmation</a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
</div>
</div>
<div class="page-content header-clear-large">
<div class="page-login page-login-full bottom-20">
<img class="preload-image login-bg responsive-image bottom-30 shadow-medium" src="images/empty.png" data-src="images/pictures/10w.jpg" alt="img">

                       

                       
                            <div class="page-login-field top-15">

                                <input type="text" name="c_name" placeholder="Full Name" required>

    </div >
                                <form action="confirm.php?update_id=<?php echo $order_id;?>" method="post" enctype="multipart/form-data">

                                <div class="page-login-field top-15">

                                    <input type="text" class="form-control" placeholder="Invoice No" name="invoice_no" required>
                                    </div>

                                <div class="page-login-field top-15">

                                    <input type="text" class="form-control" placeholder="Amount Sent" name="amount_sent" required>


                                </div>
                                <div class="page-login-field top-15">
            
                                    <select name="payment_mode" class="form-control" id="">
                              <option >Select Payment Method</option>
                              <option >Visa/Master Card</option>
                              <option>Bkash</option>
                              <option>Dutch Bangla Mobile</option>
                              <option>PayPal</option>
                              <option>Western Union</option>
                          </select>


                                </div>
                                <div class="page-login-field top-15">
          
                                    <input type="text" class="form-control" name="ref_no" placeholder="Transection/Refference Id" required value="<?php echo $customer_session; ?>">


                                </div>
                                <div class="page-login-field top-15">

                                    <input type="text" class="form-control" placeholder="Bkash Code" name="code">


                                </div>
                                <div class="page-login-field top-15">
                                    <input type="text" class="form-control" placeholder="Payment Date" name="date" required>
                                </div>


                                <div class="page-login-field top-15">
                                    <button type="submit" name="confirm_payment" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold">
                               <i class="fas fa-money-bill-alt"></i> Confirm Payment
                               
                           </button>

                                </div>
                                

                            </form>


                            <?php

        if(isset($_POST['confirm_payment'])){

            $update_id = $_GET['update_id'];
            $invoice_no = $_POST['invoice_no'];
            $amount = $_POST['amount_sent'];
            $payment_mode = $_POST['payment_mode'];
            $ref_no = $_POST['ref_no'];
            $code = $_POST['code'];
            $payment_date = $_POST['date'];
            $complete = "Complete";

            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

            $run_payment = mysqli_query($con,$insert_payment);
            $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
            $run_customer_order = mysqli_query($con,$update_customer_order);
            $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
            $run_pending_order = mysqli_query($con,$update_pending_order);

            if($run_pending_order){

            echo "<script>alert('your Payment has been received,order will be completed within 24 hours')</script>";

            echo "<script>window.open('my_orders.php','_self')</script>";

}



}



?>

<?php include "../footer.php"; } } ?>