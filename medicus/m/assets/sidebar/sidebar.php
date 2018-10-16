					<!-- Widget Area -->
					<div class="col-md-3 col-sm-4 col-xs-12 widget-area">
						<!-- Widget Select Product -->
						<aside class="product-widget product-widget-categories">
							<h3 class="widget-title">Select Category</h3>
							<ul>
								<?php
            
            getCategory();
            
            ?>
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
							<h3 class="widget-title">Select Product Category</h3>
							<ul>
            <?php
            
            getProductCategory();
            
            ?>
							</ul>
						</aside><!-- Widget Select Product /- -->
						<!-- Widget Best Sellers -->
						<aside class="product-widget widget-best-seller">
							<h3 class="widget-title">recent products</h3>
							<!-- Seller Box -->
							<?php 
                            getRP();
                            
                            ?>
							
							<!-- Seller Box /- -->
						</aside><!-- Widget Best Sellers /- -->
					</div><!-- Widget Area /- -->