
<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="../admin/assets/logos/rsz_1rsz_1logo.png" />
<link href="images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<link href="images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<title>Medicus - Bangladesh's Number One Medical Service Povider</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="css/animations.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
			<nav class="sidebar-nav">
				<ul>
					<li><a href="index.php" class="close-panel"><img src="images/icons/white/home.png" alt="" title="" /><span>Home</span></a></li>
					<li><a href="about.php" class="close-panel"><img src="images/icons/white/mobile.png" alt="" title="" /><span>About</span></a></li>
					<li><a href="features.php" class="close-panel"><img src="images/icons/white/features.png" alt="" title="" /><span>Features</span></a></li>
					<li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Login</span></a></li>
					<li><a href="team.php" class="close-panel"><img src="images/icons/white/users.png" alt="" title="" /><span>Team</span></a></li>
					<li><a href="blog.php" class="close-panel"><img src="images/icons/white/blog.png" alt="" title="" /><span>Blog</span></a></li>		
					<li><a href="photos.php" class="close-panel"><img src="images/icons/white/photos.png" alt="" title="" /><span>Photos</span></a></li>
					<li><a href="videos.php" class="close-panel"><img src="images/icons/white/video.png" alt="" title="" /><span>Videos</span></a></li>
					<li><a href="music.php" class="close-panel"><img src="images/icons/white/music.png" alt="" title="" /><span>Music</span></a></li>
					<li><a href="shop.php" class="close-panel"><img src="images/icons/white/shop.png" alt="" title="" /><span>Shop</span></a></li>
					<li><a href="cart.php" class="close-panel"><img src="images/icons/white/cart.png" alt="" title="" /><span>Cart</span></a></li>
					<li><a href="tables.php" class="close-panel"><img src="images/icons/white/tables.png" alt="" title="" /><span>Tables</span></a></li>
					<li><a href="toggle.php" class="close-panel"><img src="images/icons/white/toggle.png" alt="" title="" /><span>Toggle</span></a></li>
					<li><a href="tabs.php" class="close-panel"><img src="images/icons/white/tabs.png" alt="" title="" /><span>Tabs</span></a></li>
					<li><a href="form.php" class="close-panel"><img src="images/icons/white/form.png" alt="" title="" /><span>Forms</span></a></li>
					<li><a href="contact.php" class="close-panel"><img src="images/icons/white/contact.png" alt="" title="" /><span>Contact</span></a></li>
				</ul>
			</nav>
    </div>

    <div class="panel panel-right panel-reveal">
      <div class="user_login_info">
      <?php	
                            if(isset($_SESSION['customer_email'])){
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
            echo"
	  
                <div class='user_thumb'>
		  <div class='user_avatar'><img src='../customer/customer_images/$customer_image' alt='' title='' /></div>  
                  <div class='user_details'>
                   <p>Welcome <span>$customer_name</span></p>
                  </div>  
                  <div class='user_social'>";}
          else{
              echo"
              <div class='user_thumb'>
		  <div class='user_avatar'><img src='images/avatar.jpg' alt='' title='' /></div>  
                  <div class='user_details'>
                   <p>Welcome <span>Please log in</span></p>
                  </div>  
                  <div class='user_social'>
              
              ";
          }
          
          ?>
      <ul>
      <li><a href="http://twitter.com/" class="external"><img src="images/icons/white/twitter.png" alt="" title="" /></a></li>
      <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/white/facebook.png" alt="" title="" /></a></li>
      <li><a href="http://plus.google.com" class="external"><img src="images/icons/white/gplus.png" alt="" title="" /></a></li>
      </ul>	  
                  </div>     
                </div>
				
                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li>
                      <li><a href="../logout.php" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
      </div>
    </div>

    <div class="views">

      <div class="view view-main">



        <div class="pages">

          <div data-page="index" class="page homepage">
            <div class="page-content homepagecontent">	

                        <div class="homenavbar">
                                <h1><span>Medi</span>cus</h1>	
				<a href="#" data-panel="left" class="open-panel">
					<div class="navbar_right"><img src="images/icons/white/menu.png" alt="" title="" /></div>
				</a>			
                        </div>
						
                  <!-- Slider -->
                 <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide">
			 <img src="../admin/slides_images/1.jpg" alt="" title="" />
				<div class="slider-caption">
				<h2 data-swiper-parallax="-100%">We <b>Care</b> for <b>You</b></h2>
				<span class="subtitle" data-swiper-parallax="-60%">Medicus - A perfect place for you</span>
				<p data-swiper-parallax="-30%">We are here to care your health. you can find doctor and buy medicine here</p>
				</div>
                       </div>
                      <div class="swiper-slide">		  
			<img src="../admin/slides_images/2.jpg" alt="" title="" />
                      </div>
                      <div class="swiper-slide">
			<img src="../admin/slides_images/3.jpg" alt="" title="" />
		   </div> 		   
                    </div>
                  </div>	
		  <div class="swiper-pagination"></div>						  
			
			<nav class="main-nav">
			<ul>
				<li><a href="index.html"><img src="images/icons/white/home.png" alt="" title="" /><span>HOME</span></a></li>
				<li><a href="about.html"><img src="images/icons/white/user.png" alt="" title="" /><span>ABOUT</span></a></li>
				<li><a href="features.html"><img src="images/icons/white/settings.png" alt="" title="" /><span>FEATURES</span></a></li>
				
				<li><a href="blog.html"><img src="images/icons/white/blog.png" alt="" title="" /><span>JOURNAL</span></a></li>	
				<li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /><span>PHOTOS</span></a></li>
				<li><a href="videos.html"><img src="images/icons/white/video.png" alt="" title="" /><span>VIDEOS</span></a></li>
				

				<li><a href="shop.php"><img src="images/icons/white/shop.png" alt="" title="" /><span>SHOP</span></a></li>
				<li><a href="cart.php"><img src="images/icons/white/cart.png" alt="" title="" /><span>CART</span></a></li>
				<li><a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/white/twitter.png" alt="" title="" /><span>SOCIAL</span></a></li>
				
				<li><a href="#" data-popup=".popup-login" class="open-popup"><img src="images/icons/white/lock.png" alt="" title="" /><span>LOGIN</span></a></li>
				<li><a href="#" data-panel="right" class="open-panel"><img src="images/icons/white/users.png" alt="" title="" /><span>MY ACCOUNT</span></a></li>
				<li><a href="contact.html"><img src="images/icons/white/contact.png" alt="" title="" /><span>CONTACT</span></a></li>
			</ul>
			</nav>	
    
            </div>
          </div>
        </div>


      </div>
    </div>

	
    <!-- Login Popup -->
    <div class="popup popup-login">
        <div class="content-block">
            <h4>LOGIN</h4>
            <div class="loginform">
                <form id="LoginForm" action="index.php" method="post">
                    <input type="text" name="c_email" value="" class="form_input required" placeholder="username" />
                    <input type="password" name="c_pass" value="" class="form_input required" placeholder="password" />
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
                    <input type="submit" name="login" class="form_submit" id="submit" value="SIGN IN" />
                </form>
                <div class="signup_bottom">
                    <p>Don't have an account?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
                </div>
            </div>
            <?php

                if(isset($_POST['login'])){

                $customer_email = $_POST['c_email'];

                $customer_pass = $_POST['c_pass'];

                $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

                $run_customer = mysqli_query($con,$select_customer);

                $get_ip = getRealUserIp();

                $check_customer = mysqli_num_rows($run_customer);

                $select_cart = "select * from cart where ip_add='$get_ip'";

                $run_cart = mysqli_query($con,$select_cart);

                $check_cart = mysqli_num_rows($run_cart);

                if($check_customer==0){

                echo "<script>alert('password or email is wrong')</script>";

                exit();

                }

                if($check_customer==1 AND $check_cart==0){

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('index.php','_self')</script>";

                }
                else {

                $_SESSION['customer_email']=$customer_email;

                echo "<script>alert('You are Logged In')</script>";

                echo "<script>window.open('index.php','_self')</script>";

                } 


                }

        ?>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>REGISTER</h4>
            <div class="loginform">
                <form method="post" action="customer_login.php" class="login-form login-form-1 login-form-2" enctype="multipart/form-data">

                               

                                <input type="text" class="form_input" name="c_name" required> 
                                <input type="email" class="form_input" name="c_email" required placeholder="Enter Your Email">

           

            
                        <?php
                        $ipn = getRealUserIp();
             
 $json  = file_get_contents("http://api.ipstack.com/$ipn?access_key=a6df04d294a0fb365fe76ad6b58723cf");
 $json  =  json_decode($json ,true);
 $countryip =  $json['country_name'];
$regionss= $json['region_name'];
 $cityss = $json['city'];
 $zip_codes = $json['zip'];
      ?>



                                    <input type="password" id="pass" class="form_input" name="c_pass" required placeholder="Enter Password">

                                    <input type="password" id="cpass" class="form_input" name="conf_pass" required placeholder="Enter Password Again">

                                    <input type="text" class="form_input" name="c_country" value="<?php echo $countryip;?>" required placeholder="Enter Your County">


                                    <input type="text" class="form_input" name="c_city" value="<?php echo $cityss; ?>" required placeholder="Enter Your City">
 

                                    <input type="text" class="form-control" name="c_contact" required placeholder="Enter Mobile No">


                                    <select class="form_input" name="c_gender">
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select>



                                    <input type="text" class="form_input" name="c_address" required placeholder="Enter Your Address">

   
                                    <input type="text" class="form_input" value="<?php echo $zip_codes; ?>" name="c_zipcode" required placeholder="Enter Your Zipcode">
    
                                    <input type="file" class="form-control" name="c_image" required>
                                    <input type="submit" name="register" class="form_submit" id="submit" value="SIGN UP" />


                       
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
		<h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
		<div class="signup_social">
			<a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
			<a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>            
		</div>		
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>FORGOT PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                    <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
                </form>
                <div class="signup_bottom">
                    <p>Check your email and follow the instructions to reset your password.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Social Icons Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
		  <li><a href="http://twitter.com/" class="external"><img src="images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
		  <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
		  <li><a href="http://plus.google.com" class="external"><img src="images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
		  <li><a href="http://www.dribbble.com/" class="external"><img src="images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
		  <li><a href="http://www.linkedin.com/" class="external"><img src="images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
		  <li><a href="http://www.pinterest.com/" class="external"><img src="images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/email.js"></script>
<script type="text/javascript" src="js/audio.min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/selectFx.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>