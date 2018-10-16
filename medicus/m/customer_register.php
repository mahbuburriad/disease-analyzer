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

	<title>Customer Login</title>

	<?php include "assets/includes/header.php" ?>
	
	   
	


		<!-- Login Page 1 -->
		<div class="login-page-1 container-fluid no-padding">
			<div class="padding-100"></div>
			<!-- Container -->
			<div class="container">
                           <center><h1>Customer Registration</h1></center>
                            
								<div class="col-md-12">
					<form method="post" action="customer_register.php" class="login-form login-form-1 login-form-2" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="">Full Name</label>

                                <input type="text" class="form-control" name="c_name" required>

                            </div>
                            <div class="col-md-12">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="c_email" required 
                                                                                       >

                            </div>

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



                            <div class="form-group">
                                <div class="col-md-12">

                                    <label for="">Password</label>
                                    <input type="password" id="pass" class="form-control" name="c_pass" required >
                                </div>

                                <div class="col-md-12">

                                    <label for="">Confirm Password</label>
                                    <input type="password" id="cpass" class="form-control" name="conf_pass" required >
                                </div>


                            </div>
                            <p id="text"></p>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control" name="c_country" value="<?php echo $countryip;?>" required >

                                </div>

                                <div class="col-md-12">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="c_city" value="<?php echo $cityss; ?>" required >
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="">Enter Mobile No</label>
                                    <input type="text" class="form-control" name="c_contact" required >
                                </div>
                                <!--<div class="col-md-6">
                                    <label for="">Gender</label>
                                    <input type="text" class="form-control" name="c_gender" required placeholder="Enter Your Gender">

                                </div>-->

                                <div class="col-md-12">
                                    <label for="">Gender</label>
                                    <select class="form-control" name="c_gender">
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>

                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="c_address" required >

                                </div>


                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="">Zip Code</label>
                                    <input type="text" class="form-control" value="<?php echo $zip_codes; ?>" name="c_zipcode" required >
                                </div>

                                <div class="col-md-12">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="c_image" required>

                                </div>



                            </div>
                         

                            <div style="margin-top: 20px;" class="text-center">
                                <button id="submit" type="submit" name="register" class="btn btn-primary">
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
				</div>
            </div>
        </div>
          
        
   <?php include "assets/includes/footer.php"?>