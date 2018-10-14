<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");
?>
<?php
    
    if(isset($_GET['pro_id'])){
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_desc = $row_product['product_desc'];
        $pro_features = $row_product['product_features'];
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];    
    }
    
?>
 

 <div class="pages">
  <div data-page="shopitem" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="index.html"><span>Medi</span>cus</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
     
     <div id="pages_maincontent">  
    
     <h2 class="page_title">SHOP PRODUCT</h2>
 <a href="shop.php" class="backtoshop"><img src="images/icons/black/back.png" alt="" title="" /></a>  
	<div class="page_single layout_fullwidth_padding">
      
      <div class="shop_item">

          <div class="shop_thumb">
          <h1><?php echo $pro_title;?></h1>
          <a rel="gallery-3" href=".#" title="Photo title" class="swipebox"><img src="../admin/product_images/<?php echo $pro_img1;?>" alt="" title="" /></a>
          <div class="shop_item_price"><?php echo $pro_price;?></div>
          <a href="#" data-popup=".popup-social" class="open-popup shopfav"><img src="images/icons/white/love.png" alt="" title="" /></a>
          <a href="#" data-popup=".popup-social" class="open-popup shopfriend"><img src="images/icons/white/users.png" alt="" title="" /></a>
          </div>
          <div class="shop_item_details">
          <h3>PRODUCT DESCRIPTION</h3>
          <p><?php echo $pro_desc;?></p>
          <p><strong>CATEGORY:</strong> <a href="shop.html">cars</a></p>
          <h3>SELECT QUANTITY</h3>
            <div class="item_qnty_shopitem">
                <form id="myform" method="POST" action="#">
                    <input type="button" value="-" class="qntyminusshop" field="quantity" />
                    <input type="text" name="quantity" value="1" class="qntyshop" />
                    <input type="button" value="+" class="qntyplusshop" field="quantity" />
                </form>
            </div>
          <h3>SELECT SIZE</h3>
                <div class="size_selectors">                
                    <input id="size_s" type="radio" name="size" value="s">  
                    <label for="size_s">S</label>
                    <input id="size_m" type="radio" name="size" value="m" checked="checked">
                    <label for="size_m">M</label> 
                    <input id="size_l" type="radio" name="size" value="l">     
                    <label for="size_l">L</label>
                    <input id="size_xl" type="radio" name="size" value="xl">  
                    <label for="size_xl">XL</label>
                    <input id="size_xxl" type="radio" name="size" value="xxl">
                    <label for="size_xxl">XXL</label> 
                </div> 
          <h3>SELECT COLOR</h3>
                <div class="color_selectors">                
                    <input id="color_red" type="radio" name="color" value="red">  
                    <label for="color_red" class="colorred"></label>
                    <input id="color_orange" type="radio" name="color" value="orange">
                    <label for="color_orange" class="colororange"></label> 
                    <input id="color_yellow" type="radio" name="color" value="yellow" checked="checked">
                    <label for="color_yellow" class="coloryellow"></label> 
                    <input id="color_green" type="radio" name="color" value="green">  
                    <label for="color_green" class="colorgreen"></label>
                    <input id="color_blue" type="radio" name="color" value="blue">
                    <label for="color_blue" class="colorblue"></label> 
                    <input id="color_magenta" type="radio" name="color" value="magenta">
                    <label for="color_magenta" class="colormagenta"></label> 
                </div>   
          <a href="cart.html" class="button_full btyellow">ADD TO CART</a>
          
          </div>

          
      </div>
      
      
      
      </div>
      
      </div>
      
      
    </div>
  </div>
</div>