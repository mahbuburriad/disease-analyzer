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

	<title>Medicus | Shop</title>

    <?php include "assets/includes/header.php" ?>
	
	<main>
		<!-- Page Breadcrumb -->
		<div class="page-breadcrumb container-fluid no-padding">
			<div class="container">
				<h3>shop Left sidebar</h3>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop Left Sidebar</li>
				</ol>
			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		<!-- Shop Section -->
		<div id="product-section" class="product-section woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Widget Area -->
					<div class="col-md-3 col-sm-4 col-xs-12 widget-area">
						<!-- Widget Select Product -->
						<aside class="product-widget product-widget-categories">
							<h3 class="widget-title">Select Product</h3>
							<ul>
								<li><a href="#">Women <span>(12)</span></a></li>
								<li><a href="#">men <span>(22)</span></a></li>
								<li><a href="#">footwear <span>(15)</span></a></li>
								<li><a href="#">Bags and Backpacks <span>(09)</span></a></li>
								<li><a href="#">Accessories  <span>(07)</span></a></li>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Filter Price -->
						<aside class="product-widget widget-price-filter">
							<h3 class="widget-title">FILTER SELECTION</h3>
							<div class="price-filter">
								<h5>Price</h5>
								<div id="slider-range"></div>
								<div class="price-input">
									<label>Range:</label>
									<span id="amount"></span>
									<label> - </label>
									<span id="amount2"></span>
								</div>
							</div>
						</aside><!-- Widget Filter Price /- -->
						<!-- Widget Select Product -->
						<aside class="product-widget product-widget-categories">
							<h3 class="widget-title">Select Product</h3>
							<ul>
								<li><a href="#">Black <span>(07)</span></a></li>
								<li><a href="#">Blue <span>(05)</span></a></li>
								<li><a href="#">Grey <span>(11)</span></a></li>
								<li><a href="#">Red <span>(09)</span></a></li>
								<li><a href="#">White  <span>(03)</span></a></li>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Best Sellers -->
						<aside class="product-widget widget-best-seller">
							<h3 class="widget-title">recent products</h3>
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">duranior t-shrit</a> <span>$75.25</span></h4>
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">grey shirt denim</a> <span>$92.35</span></h4>								
							</div><!-- Seller Box /- -->
							<!-- Seller Box -->
							<div class="seller-box">
								<div class="product-img"><a href="#" title="Product"><img src="http://placehold.it/77x98/ddd" alt="Seller" /></a></div>
								<h4><a href="#">staple t-shirt</a> <span>$92.35</span></h4>
							</div><!-- Seller Box /- -->
						</aside><!-- Widget Best Sellers /- -->
					</div><!-- Widget Area /- -->
					<!-- Content Area /- -->
					<div class="content-area col-md-9 col-sm-8 col-xs-12">
						<p class="woocommerce-result-count">show all 9 results</p>
						<form method="get" class="woocommerce-ordering">
							<select class="orderby" name="orderby">
								<option selected="selected" value="menu_order">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>
						
						<ul class="products row">
<?php getProducts(); ?>
						</ul>
						<!-- Pagination:: Layout2 -->
						<div class="pagination-block layout layout2">
							<!-- Ow Pagination -->
							<nav class="ow-pagination">
								<ul>
									<li class="prev"><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#" title="">1</a></li>
									<li><a href="#" title="">2</a></li>
									<li class="pages"><a href="#" title="">...</a></li>
									<li><a href="#" title="">4</a></li>
									<li class="next"><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav><!-- Ow Pagination /- -->
						</div><!-- Pagination:: Layout2 /- -->
					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Header /- -->
	</main>
	<script>

$(document).ready(function(){

/// Hide And Show Code Starts ///

$('.nav-toggle').click(function(){

$(".panel-collapse,.collapse-data").slideToggle(700,function(){

if($(this).css('display')=='none'){

$(".hide-show").html('Show');

}
else{

$(".hide-show").html('Hide');

}

});

});

/// Hide And Show Code Ends ///

/// Search Filters code Starts /// 

$(function(){

$.fn.extend({

filterTable: function(){

return this.each(function(){

$(this).on('keyup', function(){

var $this = $(this), 

search = $this.val().toLowerCase(), 

target = $this.attr('data-filters'), 

handle = $(target), 

rows = handle.find('li a');

if(search == '') {

rows.show(); 

} else {

rows.each(function(){

var $this = $(this);

$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

});

}

});

});

}

});

$('[data-action="filter"][id="dev-table-filter"]').filterTable();

});

/// Search Filters code Ends /// 

});

 

</script>


<script>


$(document).ready(function(){
 
  // getProducts Function Code Starts 

  function getProducts(){
  
  // Manufacturers Code Starts 

    var sPath = ''; 

var aInputs = $('li').find('.get_manufacturer');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

var sPath = '';

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'man[]=' + aKeys[i]+'&'; 

}

}

// Manufacturers Code ENDS 

// Products Categories Code Starts 

var aInputs = Array();

var aInputs = $('li').find('.get_p_cat');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

}

}

// Products Categories Code ENDS 

   // Categories Code Starts 

var aInputs = Array();

var aInputs = $('li').find('.get_cat');

var aKeys  = Array();

var aValues = Array();

iKey = 0;

    $.each(aInputs,function(key,oInput){

    if(oInput.checked){

    aKeys[iKey] =  oInput.value

};

    iKey++;

});

if(aKeys.length>0){

    for(var i = 0; i < aKeys.length; i++){

    sPath = sPath + 'cat[]=' + aKeys[i]+'&';

}

}

   // Categories Code ENDS 
   
   // Loader Code Starts 

$('#wait').html('<img src="images/load.gif">'); 

// Loader Code ENDS

// ajax Code Starts 

$.ajax({

url:"load.php", 
 
method:"POST",
 
data: sPath+'sAction=getProducts', 
 
success:function(data){
 
 $('#Products').html('');  
 
 $('#Products').html(data);
 
 $("#wait").empty(); 
 
}  

});  

    $.ajax({
url:"load.php",  
method:"POST",  
data: sPath+'sAction=getPaginator',  
success:function(data){
$('.pagination').html('');  
$('.pagination').html(data);
}  

    });

// ajax Code Ends 
   
   }

   // getProducts Function Code Ends    

$('.get_manufacturer').click(function(){ 

getProducts(); 

});


  $('.get_p_cat').click(function(){ 

getProducts();

}); 

$('.get_cat').click(function(){ 

getProducts(); 

});
 
 
 }); 

</script>
<?php include "assets/includes/footer.php"?>