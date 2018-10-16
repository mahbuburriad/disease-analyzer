
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
<div id="menu-list" data-selected="menu-pages" data-load="menu-list.html" data-height="415" class="menu-box menu-load menu-bottom"></div>
<div id="menu-demo" data-load="menu-demo.html" data-height="210" class="menu-box menu-load menu-bottom"></div>
<div id="menu-find" data-load="menu-find.html" data-height="420" class="menu-box menu-load menu-bottom"></div>
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

                                <input type="text" name="c_name" placeholder="Full Name" value="<?php echo $customer_name; ?>" required>

                            </div>
                            <div class="page-login-field top-15">

                                <input type="email" name="c_email" value="<?php echo $customer_email; ?>" placeholder="Email" required >
                                                                                       

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

                                    <input type="text" class="form-control" placeholder="Country" value="<?php echo $customer_country; ?>" required >

                                </div>

                                <div class="page-login-field top-15">
                                    <input type="text" class="form-control"  placeholder="City" value="<?php echo $customer_city ?>" required >
                                </div>

                            
 
                                <div class="page-login-field top-15">

                                    <input type="text"  name="c_contact" placeholder="Enter Mobile No" value="<?php echo $customer_contact; ?>" required >
                                </div>
                                <!--<div class="col-md-6">
                                    <label for="">Gender</label>
                                    <input type="text" class="form-control" name="c_gender" required placeholder="Enter Your Gender">

                                </div>-->

                                <div class="page-login-field top-15">

                                    <input type="text"  name="c_gender" value="<?php echo $customer_gender; ?>" required placeholder="Enter Your Gender">

                                </div>

 


 
                                <div class="page-login-field top-15">

                                    <input type="text"  placeholder="Address" value="<?php echo $customer_address; ?>" name="c_address" required >

                                </div>
                                <div class="page-login-field top-15">

                                    <input type="file" placeholder="Image" name="c_image" required>


                                </div>




                
                                <div style="margin-top: 25px;" class="page-login-field top-15">
                    
                                    <input type="text" placeholder="Zip Code" value="<?php echo $customer_zipcode; ?>" name="c_zipcode" required >
                                </div>

                                
                                <div class="clear"></div>



                         

                            <div style="margin-top: 20px;" class="text-center">
                           <button type="submit" name="update" class="button button-blue button-icon button-full button-sm shadow-small top-15 button-rounded uppercase ultrabold">

<i class="fa fa-user-md" ></i> Update Now

</button>
                            </div>
                    </form>
                    
 <?php

        if(isset($_POST['update'])){

            $update_id = $customer_id;
            $c_name = $_POST['c_name'];
            $c_email = $_POST['c_email'];
            $c_country = $_POST['c_country'];
            $c_city = $_POST['c_city'];
            $c_zipcode = $_POST['c_zipcode'];
            $c_gender = $_POST['c_gender'];
            $c_contact = $_POST['c_contact'];
            $c_address = $_POST['c_address'];
            $c_image = $_FILES['c_image']['name'];
            $c_image_tmp = $_FILES['c_image']['tmp_name'];

            move_uploaded_file($c_image_tmp,"../../customer_images/$c_image");

            $update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_zipcode='$c_zipcode', customer_gender='$c_gender',customer_image='$c_image' where customer_id='$update_id'";

            $run_customer = mysqli_query($con,$update_customer);
            if($run_customer){
            echo "<script>alert('Your account has been updated please login again')</script>";
            echo "<script>window.open('my_account.php','_self')</script>";

}

}


?>

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
</div>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>


<?php }}?>