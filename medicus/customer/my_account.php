
<?php
session_start();

if(!isset($_SESSION['customer_email'])){
    echo "<script>alert('Please Login to go to your account. If you have not user account Please register and it is more fun to buy here. Thank you!')</script>";
    echo "<script>window.open('../checkout.php', '_self')</script>";
}
else{
    

include("assets/includes/connection.php");
include("assets/function/function.php");
    /*include("includes/config.php");
    $redirectURL = "http://localhost/shopcart/customer/fb-callback.php"
        $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);*/

    
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

	<title>Customer Login</title>

	<?php include "../assets/includes/header.php";?>
		<main class="site-main page-spacing">
		<!-- Login Page 1 -->
		<div class="login-page-1 container-fluid no-padding">
			<div class="padding-100"></div>
			<!-- Container -->
			<div class="container">
			
			<div class="col-md-12">

                    <ul class="breadcrumb">

                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>

                    </ul>

                </div>

                <div class="col-md-12">
                    <?php
    $c_email = $_SESSION['customer_email'];
    $get_customer = "SELECT * FROM customers WHERE  customer_email = '$c_email'";
    $run_customer = mysqli_query($con, $get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_confirm_code = $row_customer['customer_confirm_code'];
    if(!empty($customer_confirm_code)){
    
    ?>

                        <div class="alert alert-danger">
                            <strong>Warning! </strong> Please Confirm Through Your Email. If you have not recieved your confirmation email
                            <a href="my_account.php?send_email" class="alert-link">Send E-mail Again</a>

                        </div>
                        <?php } ?>


                </div>


                <div class="col-md-3">

                    <?php
                
                include("../assets/includes/sidebar.php");
                
                ?>


                </div>



                <div class="col-md-9">

                    <div class="box">





                        <?php
    
    if(isset($_GET[$customer_confirm_code])){
        $update_customer = "update customers set customer_confirm_code='' where customer_confirm_code = '$customer_confirm_code'";
        $run_confirm = mysqli_query($con, $update_customer);
        echo "<script>alert('Your Email has been confirm')</script>";
        echo "<script>window.open('my_account.php?my_orders', '_self')</script>";
    }
    
    if(isset($_GET['send_email'])){
        
        $subject = "Shopcart Email Confirmation Message";
$from = "mahbubur.riad@gmail.com";
$message = "
<h2>
Hey $c_name,
</h2>


We received a request to set your email to $c_email. If this is correct, please confirm by clicking the button below. If you don’t know why you got this email, please tell us straight away so we can fix this for you.

<p>
Information That save in our database
</p>

<table style='border:2px solid black;'>
  <tr>
    <th>Name</th>
    <td>$c_name</td>
    </tr>
    <tr>
    <th>E-mail</th> 
    <td>$c_email</td> 
    </tr>
    <tr>
    <th>Pass</th>
     <td>$c_pass</td> 
    </tr>
    <tr>
    <th>Country</th>
    <td>$c_country</td>
    </tr>
    <tr>
    <th>City</th>
    <td>$c_city</td>
    </tr>
    <tr>
    <th>Contact</th>
    <td>$c_contact</td>
    </tr>
    <tr>
    <th>Zipcode</th>
    <td>$c_zipcode</td>
    </tr>
    <tr>
    <th>Gender</th>
    <td>$c_gender</td>
    </tr>
    <tr>
    <th>Address</th>
    <td>$c_address</td>
    </tr>
    </tr>
    

</table>
<br>
<br>

<a style='background-color: #af0c42; text-decoration: none; padding: 10px; font-size: 130%; color: white; margin-top:20px;' href='http://shopcartbd.cf/customer/my_account.php?$customer_confirm_code'>
Click Here To Confirm Email
</a>
";
$headers = "From: $from \r\n";
$headers .= "Content-type: text/html\r\n";
mail($c_email,$subject,$message,$headers);
        
        echo "<script>alert('Your Confirmation Email Has Been sent to you, check your inbox')</script>";
echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
    
                   
                   if(isset($_GET['my_orders'])){
                       
                       include("my_orders.php");
                       
                   }
                    
                    
                    if(isset($_GET['edit_account'])){
                       
                       include("edit_account.php");
                       
                   }
                    
                     if(isset($_GET['pay_offline'])){
                       
                       include("pay_offline.php");
                       
                   }
                    
                    if(isset($_GET['change_pass'])){
                       
                       include("change_pass.php");
                       
                   }
                    
                    if(isset($_GET['delete_account'])){
                       
                       include("delete_account.php");
                       
                   }
    
    if(isset($_GET['chat'])){
                       
                       include("chat/chat.php");
                       
                   }
    
      if(isset($_GET['profile'])){
                       
                       include("profile.php");
                       
                   }
                   
                   
                   
                   
                   ?>


                    </div>

                </div>

 

			
		
				</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Login Page 1 /- -->
	</main>
	<?php } ?>
	
<?php include "../assets/includes/footer.php"?>