
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
  
            
        
        ?>
        
       <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>AppTastic</title>
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
<a href="#" class="back-button header-logo-title">Back to Pages</a>
<a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
</div>
<div class="header-line-2 header-scroll-effect">
<a href="#" class="header-pretitle header-date color-highlight"></a>
<a href="#" class="header-title">Change Password</a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
</div>
</div>
<div class="page-content header-clear-large">
<div class="page-login page-login-full bottom-20">
<img class="preload-image login-bg responsive-image bottom-30 shadow-medium" src="images/empty.png" data-src="images/pictures/10w.jpg" alt="img">


<form action="" method="post">

    <div class="page-login-field top-15">
        <input type="text" name="old_pass" placeholder="Old Password">

    </div>
    <div class="page-login-field top-15">

        <input type="text" name="new_pass" placeholder="New Password">

    </div>
    <div class="page-login-field top-15">
        <input type="text" name="new_pass_again" placeholder="Confirm Password">

    </div>



        <button type="submit" name="submit" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold">
           <i class="fas fa-key"></i> Change Password
            
        </button>



</form>



<?php

    if(isset($_POST['submit'])){

        $c_email = $_SESSION['customer_email'];
        $old_pass = $_POST['old_pass'];
        $new_pass = $_POST['new_pass'];
        $new_pass_again = $_POST['new_pass_again'];
        $sel_old_pass = "select * from customers where customer_pass='$old_pass'";
        $run_old_pass = mysqli_query($con,$sel_old_pass);
        $check_old_pass = mysqli_num_rows($run_old_pass);
        
        if($check_old_pass==0){
        echo "<script>alert('Your Current Password is not valid try again')</script>";
        exit();
        }

        if($new_pass!=$new_pass_again){
        echo "<script>alert('Your New Password dose not match')</script>";
        exit();
        }
        

        $update_pass = "update customers set customer_pass='$new_pass' where customer_email='$c_email'";
        $run_pass = mysqli_query($con,$update_pass);
        if($run_pass){
        echo "<script>alert('your password has been Changed Successfully')</script>";
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";


}

}

?>

<?php include "../footer.php"; } } ?>
