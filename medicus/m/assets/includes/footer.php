	<!--footer one start-->
		<footer class="container-fluid no-left-padding no-right-padding">
			<div class="container footer-1">
				<div class="row">

					<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-tag">
						<h4 class="ftr-widget-title">Popular Medicines Category </h4>
						<div class="tags">
						<?php

$get_p_cats = "select * from product_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while($row_p_cats = mysqli_fetch_array($run_p_cats)){

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

echo "<a href='pharmacy.php?p_cat=$p_cat_id'> $p_cat_title </a>";

}

?>
						</div>
					</aside>
					<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-rnt-post">
						<h4 class="ftr-widget-title"> Facebook Page </h4>
						
					</aside>
					<aside class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr-widget ftr-widget-newsletter">
						<h4 class="ftr-widget-title">Maling List</h4>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<!-- Begin MailChimp Signup Form -->

						<ul>
							<li><a href="#"><i class="social_twitter"></i></a></li>
							<li><a href="#"><i class="social_googleplus"></i></a></li>
							<li><a href="#"><i class="social_pinterest"></i></a></li>
							<li><a href="#"><i class="social_rss"></i></a></li>
							<li><a href="#"><i class="social_facebook"></i></a></li>
							<li><a href="#"><i class="social_dribbble"></i></a></li>
						</ul>
					</aside>
				</div>
			</div><!-- Container /- -->

		</footer>
	</div>


	
	<!-- JQuery v1.11.3 -->
	<script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><!-- MailChimp -->
	<script src="js/jquery.min.js"></script>
	<!-- Library JS -->
	<script src="libraries/lib.js"></script>

	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>	
	<!-- Library - Theme JS -->	
	<script src="js/functions.js"></script>
	
	<!-- Library JS -->

	<script src="js/mailchip.js"></script>
	<script src="libraries/jquery.countdown.min.js"></script>
	<script src="libraries/jquery.knob.js"></script>
	<script src="libraries/lightslider/lightslider.min.js"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvybibU7s23-D58Z4_4basp0_C24KIHXc"></script>
	
	<!-- Library - Theme JS -->	


</body>
</html>