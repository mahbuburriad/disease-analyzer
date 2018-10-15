
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
<!--					<li><a href="blog.php" class="close-panel"><img src="images/icons/white/blog.png" alt="" title="" /><span>Blog</span></a></li>		
					<li><a href="photos.php" class="close-panel"><img src="images/icons/white/photos.png" alt="" title="" /><span>Photos</span></a></li>
					<li><a href="videos.php" class="close-panel"><img src="images/icons/white/video.png" alt="" title="" /><span>Videos</span></a></li>
					<li><a href="music.php" class="close-panel"><img src="images/icons/white/music.png" alt="" title="" /><span>Music</span></a></li>
					<li><a href="shop.php" class="close-panel"><img src="images/icons/white/shop.png" alt="" title="" /><span>Shop</span></a></li>
					<li><a href="cart.php" class="close-panel"><img src="images/icons/white/cart.png" alt="" title="" /><span>Cart</span></a></li>
					<li><a href="tables.php" class="close-panel"><img src="images/icons/white/tables.png" alt="" title="" /><span>Tables</span></a></li>
					<li><a href="toggle.php" class="close-panel"><img src="images/icons/white/toggle.png" alt="" title="" /><span>Toggle</span></a></li>
					<li><a href="tabs.php" class="close-panel"><img src="images/icons/white/tabs.png" alt="" title="" /><span>Tabs</span></a></li>
					<li><a href="form.php" class="close-panel"><img src="images/icons/white/form.png" alt="" title="" /><span>Forms</span></a></li>-->
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
  <div data-page="shop" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="index.php"><span>Medi</span>cus</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
     
     <div id="pages_maincontent">
      
     <h2 class="page_title">SHOP</h2>
      
	<div class="page_single layout_fullwidth_padding">
      
      <ul class="shop_items">
      <?php
       if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){
                            
                            $per_page=6;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                            else
                            {
                                $page = 1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            $get_products = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";
                            
                            $run_products = mysqli_query($con, $get_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                ?>
      
          <li>
          <?php

                                add_cart();

                                ?>
          <div class="shop_thumb"><a href="details.php?pro_id=<?php echo $pro_id;?>"><img src="../admin/product_images/<?php echo $pro_img1;?>" alt="" title="" /></a></div>
          <div class="shop_item_details">
          <h4><a href="details.php?pro_id=<?php echo $pro_id;?>"><?php echo $pro_title;?></a></h4>
          <div class="shop_item_price"><?php echo $pro_price;?></div>
          <div class="item_qnty_shop">
                <form id="myform" method="post" action="details.php?pro_id=<?php echo $pro_id;?>">
                    <button class="btn btn-success" id="addtocart">VIEW PORDUCT</button>
                </form>
            </div>
          <a href="#" data-popup=".popup-social" class="open-popup shopfav"><img src="images/icons/black/love.png" alt="" title="" /></a>
          </div>
          </li> 
          
          <?php }}} ?>
          
         
          
      </ul>
      
          <div class="shop_pagination">
          <?php getMobilePaginator(); ?>
          </div>
      
      
      </div>
      
      </div>
      
      
    </div>
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
        </div>
</div>
 
  </body>
</html>