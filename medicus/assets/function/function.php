<?php

$db = mysqli_connect("localhost","root","","medicus");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////


/// getProducts Function Starts ///

function getProducts(){

/// getProducts function Code Starts ///

global $db;
    
    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){
                            
                            $per_page=12;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                            else
                            {
                                $page = 1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            $get_products = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";
                            
                            $run_products = mysqli_query($db, $get_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
    <li class='product'>							
								<a href='details.php?pro_id=$pro_id' title='$pro_title'>
									<div class='product-img-box'>
										<img alt='$pro_title' src='admin/product_images/$pro_img1'/>
									</div>
									<div class='detail-box'>
                                    
										<h3>$pro_title</h3>
										<span class='price'>
											<span class='amount'>৳ $pro_price</span>
										</span>
									</div>
								</a>
								<a class='button product_type_simple add_to_cart_button' href='details.php?pro_id=$pro_id' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>
 
                                ";
                            }
                            
                        }
                    }
    
    

}
function getmProducts(){

/// getProducts function Code Starts ///

global $db;
    
    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){
                            
                            $per_page=12;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                            else
                            {
                                $page = 1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            $get_products = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";
                            
                            $run_products = mysqli_query($db, $get_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                $pro_p_cat_id = $row_products['p_cat_id'];
                                
                                $get_p_cat = "SELECT * FROM product_categories where p_cat_id = '$pro_p_cat_id'";
                            
                            $run_p_cat = mysqli_query($db, $get_p_cat);
                            
                            $row_p_cat = mysqli_fetch_array($run_p_cat);
                            $p_cat_title = $row_p_cat['p_cat_title'];
                                $price_before = $pro_price+rand(2,6);
                                $price_before_500 = $pro_price+rand(10,20);
                                $price_before_1000 = $pro_price+rand(20,50);
                                $price_before_1500 = $pro_price+rand(40,70);
                                
                                
                                
                                
                                
                                echo"
                        <div style='margin-bottom:15px;' class='store-slide-2'>
                <a href='details.php?pro_id=$pro_id' class='store-slide-image'>
                    <img class='preload-image' src='images/empty.png' data-src='../admin/product_images/$pro_img1' alt='img'>
                </a>
                <div class='store-slide-title'>
                    <strong><a href='details.php?pro_id=$pro_id'>$pro_title</a></strong>
                    <em class='color-gray-dark'>$p_cat_title</em>
                </div>
                <div class='store-slide-button'>
                    <strong><del class='color-blue-light font-10'> ";
                    if($pro_price>200){
                    echo "Was $$price_before";
                    }
                                elseif($pro_price>600){
                                    echo "Was $$price_before_500";
                                }
                                elseif($pro_price>1000){
                                    echo "Was $$price_before_1000";
                                }
                                elseif($pro_price>1500){
                                    echo "Was $$price_before_1500";
                                }
                    else{
                    echo " ";
                    }
                                echo"
                    
                    </del>৳ $pro_price</strong>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart color-highlight'></i></a>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-heart color-red-dark'></i></a>
                </div>
            </div>
            <hr>
                                ";
                            }
                            
                        }
                    }
    
    

}

function getMobileProduct(){

/// getProducts function Code Starts ///

global $db;
    
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
                            
                            $run_products = mysqli_query($db, $get_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
    <li>
          <div class='shop_thumb'><a href='shop-item.html'><img   src='../admin/product_images/$pro_img1' alt='' title='' /></a></div>
          <div class='shop_item_details'>
          <h4><a href='shop-item.html'>$pro_title</a></h4>
          <div class='shop_item_price'>৳ $pro_price</div>
          <a href='cart.html' id='addtocart'>ADD TO CART</a>
          <a href='#' data-popup='.popup-social' class='open-popup shopfav'><img src='images/icons/black/love.png' alt='' title='' /></a>
          </div>
          </li> 
 
                                ";
                            }
                            
                        }
                    }
    
    

}
function getRP(){

/// getProducts function Code Starts ///

global $db;
    

                            
                            $per_page=6;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }
                            else
                            {
                                $page = 1;
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                            $get_products = "SELECT * FROM products order by 1 DESC LIMIT 0,3";
                            
                            $run_products = mysqli_query($db, $get_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
    <div class='seller-box'>
								<div class='product-img'><a href='details.php?pro_id=$pro_id' title='$pro_title'><img style='width: 77px; height: 98px;' src='admin/product_images/$pro_img1' alt='$pro_title' /></a></div>
								<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a> <span>৳ $pro_price</span></h4>
							</div>
 
                                ";
                            }
                            
                
    

}


/// getPaginator Function Starts ///

function getPaginator(){

/// getPaginator Function Code Starts ///

$per_page = 12;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<li  class='prev'><a title='First Page' href=pharmacy.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'<i class="fa fa-angle-left"></i>'."</a></li>";

for ($i=1; $i<=$total_pages; $i++){

echo "<li><a href='pharmacy.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

};

echo "<li class='next'><a title='' href='pharmacy.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'<i class="fa fa-angle-right"></i>'."</a>";

/// getPaginator Function Code Ends ///

}

function getMobilePaginator(){

/// getPaginator Function Code Starts ///

$per_page = 12;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<a style='float: left' title='First Page' href=pharmacy.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'<i class="fa fa-angle-left"></i>'."</a>";

for ($i=1; $i<=$total_pages; $i++){

echo "<a class='no-border' href='pharmacy.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a>";

};

echo "<li class='next'><a title='' href='pharmacy.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'<i class="fa fa-angle-right"></i>'."</a>";

/// getPaginator Function Code Ends ///

}

        


function getcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        $get_cat = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
        $run_cat = mysqli_query($db, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        
       
        
        $get_products = "select * from products where cat_id='$cat_id'";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class='box'>
            
            <h1>$cat_title</h1>
            
            <p>$cat_desc</p>
            
            <h1 class='bg-danger'> No Products Founds In this product category <i class='fas fa-frown'></i></h1>
            
            
            </div>
            
            
            ";
        }
        
        else{
            
            echo "
            
            <div class='box'>
            
            <h1>$cat_title</h1>
            
            <p>$cat_desc</p>
            
            
            </div>
            
            ";
            
        }
        
        while($row_products = mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
                                <li class='product'>							
								<a href='details.php?pro_id=$pro_id' title='$pro_title'>
									<div class='product-img-box'>
										<img alt='$pro_title' src='admin/product_images/$pro_img1'/>
									</div>
									<div class='detail-box'>
                                    
										<h3>$pro_title</h3>
										<span class='price'>
											<span class='amount'>৳ $pro_price</span>
										</span>
									</div>
								</a>
								<a class='button product_type_simple add_to_cart_button' href='details.php?pro_id=$pro_id' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>
 
                                ";
                    }
        
    }
    
    
}


function add_cart(){
    global $db;
    
    if(isset($_GET['add_cart'])){
        $ip_add = getRealUserIp();
        $p_id = $_GET['add_cart'];
        $product_qty = $_POST['product_qty'];
        $product_size = $_POST['product_size'];
        $product_price = $_POST['product_price'];
        $check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check=mysqli_query($db, $check_product);
        if(mysqli_num_rows($run_check)>0){
            echo "
            <script>
            alert('This product is already added in cart, Please choose another');
            </script>
            ";
            
            echo "
            <script>window.open('details.php?pro_id=$p_id', '_self')</script>
            ";
        }
        
        else{
            $query = "INSERT INTO cart(p_id, ip_add, qty, p_price, size) VALUES ('$p_id', '$ip_add',  '$product_qty', '$product_price', '$product_size')";
            
            $run_query = mysqli_query($db, $query);
            echo "
            <script>window.open('details.php?pro_id=$p_id', '_self')</script>
            ";
        }
    }
    
if(isset($_POST['add_wishlist'])){

if(!isset($_SESSION['customer_email'])){

echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}
else{

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id']; 

$select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

$run_wishlist = mysqli_query($con,$select_wishlist);

$check_wishlist = mysqli_num_rows($run_wishlist);

if($check_wishlist == 1){

echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else{

$insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

$run_wishlist = mysqli_query($con,$insert_wishlist);

if($run_wishlist){

echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

echo "<script>window.open('$pro_url','_self')</script>";

}

}

}

}
}




function items(){
    
    global $db;
    
    $ip_add = getRealUserIp();
    $get_items = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_items = mysqli_query($db, $get_items);
    $count_items = mysqli_num_rows($run_items);
    echo "
    $count_items;
    ";
    
}



function total_price(){
    
    global $db;
    
    $ip_add = getRealUserIp();
    $total = 0;
    $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
    $run_cart = mysqli_query($db, $select_cart);
    while($record = mysqli_fetch_array($run_cart)){
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];
        $p_price = $record['p_price'];
        $get_price = "SELECT * FROM products WHERE product_id='$pro_id'";
        $run_price = mysqli_query($db, $get_price);
        while($row_price=mysqli_fetch_array($run_price)){
            $sub_total = $p_price*$pro_qty;
            $total += $sub_total;  
        }
        
        
    }
    
    echo $total;
    
}

function mCart(){
    
    global $db;
    
    $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($db, $select_cart);
                        $count = mysqli_num_rows($run_cart);
    $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                               $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['qty'];
                                                $only_price = $row_cart['p_price'];
                                            
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($db,$get_products);
                                                while($row_products = mysqli_fetch_array($run_products)){
                                                    $product_title = $row_products['product_title'];
                                                    $product_img1 = $row_products['product_img1'];
                                                    $sub_total = $only_price*$pro_qty;
                                                    $_SESSION['pro_qty'] = $pro_qty;
                                                    $total += $sub_total;
                                                    
                                                    $per_product = ($sub_total*2.25)/100;
                                                    $per_product_price = $per_product+50+$sub_total;
                                                    $tax = ($total*2.25)/100;
                                                    $total_charge = $tax+50+$total;
                                             

                                                    echo "
                                                    <div style='margin-bottom: 15px;' class='menu-cart-item'>
                    <img class='preload-image' src='images/empty.png' data-src='../admin/product_images/$product_img1' alt='img'>
                    <strong>$product_title</strong>
                    <span>৳ $only_price * $pro_qty</span>
        
                    <em class='color-green-dark'>৳ $sub_total</em>
                    <a href='delete_cart.php?delete_cart= $pro_id' class='color-red-dark'><i class='fa fa-times'></i> Remove item</a>
                </div>

                <div class='decoration bottom-1'></div>"
                                                        
                                                        ;
                                                    
                                                    
                                                }}
    echo"
    <div class='menu-cart-item'>
    
   <strong>Total</strong>
   <em class='color-red-dark'>৳ $total</em>
    
    </div>

                <div class='decoration bottom-1'></div>
    ";

}
function mCartm(){
    
    global $db;
    
    $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($db, $select_cart);
                        $count = mysqli_num_rows($run_cart);
    $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                                $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['qty'];
                                                $only_price = $row_cart['p_price'];
                                            
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($db,$get_products);
                                                while($row_products = mysqli_fetch_array($run_products)){
                                                    $product_title = $row_products['product_title'];
                                                    $product_img1 = $row_products['product_img1'];
                                                    $sub_total = $only_price*$pro_qty;
                                                    $_SESSION['pro_qty'] = $pro_qty;
                                                    $total += $sub_total;
                                                    
                                                    $per_product = ($sub_total*2.25)/100;
                                                    $per_product_price = $per_product+50+$sub_total;
                                                    $tax = ($total*2.25)/100;
                                                    $total_charge = $tax+50+$total;
                                             

                                                    echo "
                                                    <div class='store-cart-2'>
                                                    
                    <img class='preload-image' src='images/empty.png' data-src='../admin/product_images/$product_img1' alt='img'>
                    <strong>$product_title</strong>
                    <span>$only_price</span>
                    <em class='color-green-dark'>$sub_total <del class='color-gray-light'>$pro_qty</del></em>
                    
                    <input type='text' value='$pro_qty'>
                </div>
                <div class='decoration bottom-1'></div>"
                                                        
                                                        ;
                                                    
                                                    
                                                }}}
    


function getCategory(){
    
    global $db;
    
    $get_cats = "SELECT * FROM categories";
    
    $run_cats = mysqli_query($db, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats))
    {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        
        echo"
        
        <li><a href='pharmacy.php?cat=$cat_id'>$cat_title</a></li>
        
        ";
    }
    
    
    
}
function getMCategory(){
    
    global $db;
    
    $get_cats = "SELECT * FROM categories LIMIT 0,4";
    
    $run_cats = mysqli_query($db, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats))
    {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        
        echo"
        
        <li><a  href='pharmacy.php?cat=$cat_id'><i class='fa fa-heart color-blue-dark'></i><span>$cat_title</span><i class='fa fa-angle-right'></i></a></li>
        
        
        ";
    }
    
    
    
}
function getsCategory(){
    
    global $db;
    
    $get_cats = "SELECT * FROM categories LIMIT 0,4";
    
    $run_cats = mysqli_query($db, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats))
    {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        
        echo"
        
        <li><a  href='pharmacy.php?cat=$cat_id'>$cat_title</a></li>
        
        
        ";
    }
    
    
    
}

function getsCategorySearch(){
    
    global $db;
    
    $get_product = "select * from products";
        $run_product = mysqli_query($db,$get_product);
        while($row_product = mysqli_fetch_array($run_product)){
            $p_cat_id = $row_product['p_cat_id'];
        $cat_id = $row_product['cat_id'];
        $pro_id = $row_product['product_id'];
        $manufacturer_id = $row_product['manufacturer_id'];
            
            
        $pro_title = $row_product['product_title'];
        $pro_titles = $row_product['product_title'];
            
            $pro_title=strtolower($pro_title);
        
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        $pro_desc = $row_product['product_desc'];
        $pro_features = $row_product['product_features'];
            
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
            $p_cat_title=strtolower($p_cat_title);
            
            $get_manufacturer_id = "select * from manufacturers where manufacturer_id='$manufacturer_id'";
        $run_manufacturer_id = mysqli_query($db,$get_manufacturer_id);
        $row_manufacturer_id = mysqli_fetch_array($run_manufacturer_id);
        $manufacturer_title = $row_manufacturer_id['manufacturer_title'];
            $manufacturer_title=strtolower($manufacturer_title);
            
            
        $get_cat = "select * from categories where cat_id='$cat_id'";
        $run_cat = mysqli_query($db,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];
            $cat_title=strtolower($cat_title);
            
            
            echo"
            
            <div data-filter-item data-filter-name='all products $pro_title $p_cat_title $cat_title $manufacturer_title' class='search-result-list'>
<img src='images/empty.png' class='preload-search-image' data-src='../admin/product_images/$pro_img1' alt='$pro_titles'>
<h1>$pro_titles</h1>
<p>৳ $pro_price</p>


<a href='details.php?pro_id=$pro_id' class='bg-highlight'>VIEW</a>
</div>
            ";
            
        }

        
    
    
    
}


function getProductCategory(){
    
    global $db;
    
    $get_p_cats = "SELECT * FROM product_categories";
    
    $run_p_cats = mysqli_query($db, $get_p_cats);
    while($row_p_cats = mysqli_fetch_array($run_p_cats))
    {
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];
        
        echo"
        
        <li><a href='pharmacy.php?p_cat=$p_cat_id'>$p_cat_title</a></li>
        
        ";
    }
    
    
    
}

function getProIndex(){
    global $db;
    
    $get_products = "SELECT * FROM products order by 1 DESC LIMIT 0,24";
    
    $run_products = mysqli_query($db, $get_products);
    while($row_products = mysqli_fetch_array($run_products))
    {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        
        echo"
                                
                                    <li style='height: 200px; width:150px;' class='product'>							
								<a href='details.php?pro_id=$pro_id' title='$pro_title'>
									<div class='product-img-box'>
										<img  alt='$pro_title' src='admin/product_images/$pro_img1'/>
									</div>
									<div class='detail-box'>
                                    
										<h3>$pro_title</h3>
										<span class='price'>
											<span class='amount'>৳ $pro_price</span>
										</span>
									</div>
								</a>
								<a class='button product_type_simple add_to_cart_button' href='details.php?pro_id=$pro_id' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>
 
                                ";
        
    }
}


function getMIndex(){
    global $db;
    
    $get_products = "SELECT * FROM products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db, $get_products);
    while($row_products = mysqli_fetch_array($run_products))
    {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        
        echo"
                                
                                    <div class='item'>
                        <div>
                            <div class='above-overlay above-overlay-bottom'>
                                <div class='image-details bottom-20'>
                                    <a href='#'><img src='images/preload-logo-small.png' alt='img'></a>
                                    <a href='#'><i class='fa fa-heart color-red-dark'></i>৳ $pro_price</a>
                                </div>
                            </div>
                            <div class='overlay overlay-gradient'></div>
                            <a href='#'><img src='../admin/product_images/$pro_img1' alt='img' class='responsive-image'></a>
                        </div>
                        <h4 class='bolder'>$pro_title</h4>
                        <a href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart color-highlight'></i></a>
                        
                    </div>
 
                                ";
        
    }
}

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
       
        
        $get_products = "select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class='box'>
            
            <h1>$p_cat_title</h1>
            
            <p>$p_cat_desc</p>
            
            <h1 class='bg-danger'> No Products Founds In this product category <i class='fas fa-frown'></i></h1>
            
            
            </div>
            
            
            ";
        }
        
        else{
            
            echo "
            
            <div class='box'>
            
            <h1>$p_cat_title</h1>
            
            <p>$p_cat_desc</p>
            
            
            </div>
            
            ";
            
        }
        
        while($row_products = mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
    <li class='product'>							
								<a href='details.php?pro_id=$pro_id' title='$pro_title'>
									<div class='product-img-box'>
										<img alt='$pro_title' src='admin/product_images/$pro_img1'/>
									</div>
									<div class='detail-box'>
                                    
										<h3>$pro_title</h3>
										<span class='price'>
											<span class='amount'>৳ $pro_price</span>
										</span>
									</div>
								</a>
								<a class='button product_type_simple add_to_cart_button' href='details.php?pro_id=$pro_id' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>
 
                                ";
            
            
        }
        
    }
    
    
    
}

function getMpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
       
        
        $get_products = "select * from products where p_cat_id='$p_cat_id'";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class='box'>
            
            <h1>$p_cat_title</h1>
            
            <p>$p_cat_desc</p>
            
            <h1 class='bg-danger'> No Products Founds In this product category <i class='fas fa-frown'></i></h1>
            
            
            </div>
            
            
            ";
        }
        
        else{
            
        while($row_products = mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                           echo "  
                        <div style='margin-bottom:15px;' class='store-slide-2'>
                <a href='details.php?pro_id=$pro_id' class='store-slide-image'>
                    <img class='preload-image' src='images/empty.png' data-src='../admin/product_images/$pro_img1' alt='img'>
                </a>
                <div class='store-slide-title'>
                    <strong>$pro_title</strong>
      
                </div>
                <div class='store-slide-button'>
                    <strong><del class='color-blue-light font-10'>Was $250</del>৳ $pro_price</strong>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart color-highlight'></i></a>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-heart color-red-dark'></i></a>
                </div>
            </div>
     
                                ";
                                  }
            
            
        }
        
    }
    
    
}

function getMcatpro(){
    
    global $db;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        $get_cat = "SELECT * FROM categories WHERE cat_id = '$cat_id'";
        $run_cat = mysqli_query($db, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        
       
        
        $get_products = "select * from products where cat_id='$cat_id'";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class='box'>
            
            <h1>$cat_title</h1>
            
            <p>$cat_desc</p>
            
            <h1 class='bg-danger'> No Products Founds In this product category <i class='fas fa-frown'></i></h1>
            
            
            </div>
            
            
            ";
        }
        
        else{
            
            echo "
            
            <div class='box'>
            
            <h1>$cat_title</h1>
            
            <p>$cat_desc</p>
            
            
            </div>
            
            ";
            
        }
        
       while($row_products = mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
            
                                
                                
                                echo"
                        <div style='margin-bottom:15px;' class='store-slide-2'>
                <a href='details.php?pro_id=$pro_id' class='store-slide-image'>
                    <img class='preload-image' src='images/empty.png' data-src='../admin/product_images/$pro_img1' alt='img'>
                </a>
                <div class='store-slide-title'>
                    <strong>$pro_title</strong>
              
                </div>
                <div class='store-slide-button'>
                    <strong><del class='color-blue-light font-10'>Was $250</del>৳ $pro_price</strong>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-shopping-cart color-highlight'></i></a>
                    <a href='details.php?pro_id=$pro_id'><i class='fa fa-heart color-red-dark'></i></a>
                </div>
            </div>
            <hr>
                                ";
                    }
        
    }
    
    
}










?>













