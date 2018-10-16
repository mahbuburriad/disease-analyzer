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
<a href="#" class="header-title">Register</a>
<a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
<a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
<a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
</div>
</div>
<div class="page-content header-clear-large">
<div class="page-login page-login-full bottom-20">
<img class="preload-image login-bg responsive-image bottom-30 shadow-medium" src="images/empty.png" data-src="images/pictures/10w.jpg" alt="img">

                        <form method="post" action="customer_register.php" class="login-form login-form-1 login-form-2" enctype="multipart/form-data">

                       
                            <div class="page-login-field top-15">

                                <input type="text" name="c_name" placeholder="Full Name" required>

                            </div>
                            <div class="page-login-field top-15">

                                <input type="email" name="c_email" placeholder="Email" required >
                                                                                       

                            </div>

                      
                        <?php
                        $ipn = getRealUserIp();
             
 $json  = file_get_contents("http://api.ipstack.com/$ipn?access_key=a6df04d294a0fb365fe76ad6b58723cf");
 $json  =  json_decode($json ,true);
 $countryip =  $json['country_name'];
$regionss= $json['region_name'];
 $cityss = $json['city'];
 $zip_codes = $json['zip'];
      ?>



           
                                <div class="page-login-field top-15">


                                    <input type="password" id="pass" placeholder="Password" name="c_pass" required >
                                </div>

                                <div class="page-login-field top-15">

                    
                                    <input type="password" id="cpass" placeholder="Confirm Password" name="conf_pass" required >
                                </div>







                                <div class="page-login-field top-15">

                                    <input type="text" class="form-control" placeholder="Country" value="<?php echo $countryip;?>" required >

                                </div>

                                <div class="page-login-field top-15">
                                    <input type="text" class="form-control"  placeholder="City" value="<?php echo $cityss; ?>" required >
                                </div>

                            
 
                                <div class="page-login-field top-15">

                                    <input type="text"  name="c_contact" placeholder="Enter Mobile No" required >
                                </div>
                                <!--<div class="col-md-6">
                                    <label for="">Gender</label>
                                    <input type="text" class="form-control" name="c_gender" required placeholder="Enter Your Gender">

                                </div>-->

                                <div class="page-login-field top-15">

                                    <select  name="c_gender">
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>

                                </div>

 


 
                                <div class="page-login-field top-15">

                                    <input type="text"  placeholder="Address" name="c_address" required >

                                </div>
                                <div class="page-login-field top-15">

                                    <input type="file" placeholder="Image" name="c_image" required>

                                </div>




                
                                <div class="page-login-field top-15">
                    
                                    <input type="text" placeholder="Zip Code" value="<?php echo $zip_codes; ?>" name="c_zipcode" required >
                                </div>

                                
                                <div class="clear"></div>



                         

                            <div style="margin-top: 20px;" class="text-center">
                                <button id="submit" type="submit" name="register" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold">
                             <i class="fas fa-user-plus"></i> Sign Up
                             
                         </button>
                            </div>
                    </form>
                    
<?php

 if(isset($_POST['register'])){ $c_name = $_POST['c_name']; $c_email = $_POST['c_email']; $c_pass = $_POST['c_pass']; $c_country = $_POST['c_country']; $c_city = $_POST['c_city']; $c_contact = $_POST['c_contact']; $c_gender = $_POST['c_gender']; $c_address = $_POST['c_address']; $c_zipcode = $_POST['c_zipcode']; $c_image = $_FILES['c_image']['name']; $c_image_tmp =$_FILES['c_image']['tmp_name'];

        $c_ip = getRealUserIp(); 

        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
                               
                               $get_email = "SELECT * FROM customers WHERE customer_email='$c_email'";
                               $run_email = mysqli_query($con, $get_email);
                               $check_email = mysqli_num_rows($run_email);
                               if($check_email == 1){
                                   echo "<script>alert('This Email is already registered ! please choose another email')</script>";
                                   exit();
                                   
                               }
                               
                               $customer_confirm_code = mt_rand();
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
                               

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_gender,customer_zipcode,customer_address,customer_image,customer_ip, customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact', '$c_gender','$c_zipcode','$c_address','$c_image','$c_ip', '$customer_confirm_code')";


                $run_customer = mysqli_query($con,$insert_customer);
                $sel_cart = "select * from cart where ip_add='$c_ip'";
                $run_cart = mysqli_query($con,$sel_cart);
                $check_cart = mysqli_num_rows($run_cart);

                if($check_cart>0){
                $_SESSION['customer_email']=$c_email;
                echo "<script>alert('You have been Registered Successfully')</script>";
                echo "<script>window.open('checkout.php','_self')</script>";
                }

                else{
                $_SESSION['customer_email']=$c_email;
                echo "<script>alert('You have been Registered Successfully')</script>";
                echo "<script>window.open('customer/my_account.php?profile','_self')</script>";
                }




        }

        ?>
  <?php include("footer.php"); ?>