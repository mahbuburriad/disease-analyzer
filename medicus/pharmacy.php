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
					<?php
                
                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat'])){
                        echo"

                        <h1>Shop</h1>
                        
                        <p>Shopping with fun and Trust. Every product condition is good. we keep the value of customer's trust</p>

                        ";
                        
                    }
                    else{
                        echo"

                        <h1>Shop By Category</h1>
                        
                        <p>Shopping with fun and Trust. Every product condition is good. we keep the value of customer's trust</p>

                        ";
                        
                    }
                }
    else{
                        echo"

                        <h1>Shop By Product Category</h1>
                        
                        <p>Shopping with fun and Trust. Every product condition is good. we keep the value of customer's trust</p>

                        ";
                        
                    }
                
                ?>

			</div>
		</div><!-- Page Breadcrumb /- -->
		<div class="padding-100"></div>
		<!-- Shop Section -->
		<div id="product-section" class="product-section woocommerce container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
<?php include "assets/sidebar/sidebar.php";?>
					<!-- Content Area /- -->
					<div class="content-area col-md-9 col-sm-8 col-xs-12">
<!--						<p class="woocommerce-result-count">show all 9 results</p>
						<form method="get" class="woocommerce-ordering">
							<select class="orderby" name="orderby">
								<option selected="selected" value="menu_order">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>-->
						
						<ul class="products row">
<?php getProducts(); 
                        getpcatpro();
                        getcatpro();
                        
                        ?>
						</ul>

                    
						<!-- Pagination:: Layout2 -->
						<div class="pagination-block layout layout2">
							<!-- Ow Pagination -->
							<nav class="ow-pagination">
								<ul>
									<?php getPaginator(); ?>
								</ul>
							</nav><!-- Ow Pagination /- -->
						</div><!-- Pagination:: Layout2 /- -->
					</div><!-- Content Area /- -->
				</div>
			</div><!-- Container /- -->
			<div class="padding-100"></div>
		</div><!-- Shop Header /- -->
	</main>
	
<?php include "assets/includes/footer.php"?>