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
    
    

    $get_products = "SELECT * FROM products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db, $get_products);
    while($row_products = mysqli_fetch_array($run_products))
    {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
}

    echo"
    <li class='product'>							
								<a href='$pro_url' title='$pro_title'>
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
								<a class='button product_type_simple add_to_cart_button' href='#' title='Add To Cart'>Add to cart</a>
								<div class='whishlist-btn'>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Add to wishlist'><i class='icon_heart'></i></a>
									<a href='details.php?pro_id=$pro_id' data-toggle='tooltip' data-placement='bottom' title='Expand'><i class='arrow_expand_alt'></i></a>
								</div>
							</li>
    ";

}
/// getProducts function Code Ends ///



}


/// getPaginator Function Starts ///

function getPaginator(){

/// getPaginator Function Code Starts ///

$per_page = 6;

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

echo "' >".'<i class="fa fa-angle-right"></i>'."</a></li>";

/// getPaginator Function Code Ends ///

}

/// getPaginator Function Ends ///

?>