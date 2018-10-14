
<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");

?>
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
          <div class="shop_thumb"><a href="shop-item.html"><img src="../admin/product_images/<?php echo $pro_img1;?>" alt="" title="" /></a></div>
          <div class="shop_item_details">
          <h4><a href="shop-item.html"><?php echo $pro_title;?></a></h4>
          <div class="shop_item_price"><?php echo $pro_price;?></div>
          <a href="cart.html" id="addtocart">ADD TO CART</a>
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