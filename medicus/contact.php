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

	<title>Customer Login</title>

	<?php include "assets/includes/header.php";?>
   
    <main>		
		<!-- Map -->
		<div class="map layout7">
			<div id="map-canvas-contact7" class="map-canvas"  data-lat="23.8151079" data-lng="90.4233493" data-string="5th Floor, north South University, Bashundahra Baridhara" data-zoom="15"></div>
		</div><!-- Map /- -->
		
		<!-- Contact2 Section  -->
		<div class="contact2-section container-fluid no-padding">
			<div class="container">
				<div class="row">
					<div class="contact2-section-header">
						<h3>contact us</h3>
						<span>Get in touch with us !</span>
					</div>
					<!-- Contact2 Info Block -->
					<div class="contact2-info-blocks">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="contact2-infobox">
									<span class="icon_mobile" aria-hidden="true"></span>
									<h3>Phone</h3>
									<p>Phone 01: <a href="tel:+918547632521" title="+918547632521"> (0091) 8547 632521</a></p>
									<p>Phone 02: <a href="tel:+849654788" title="+849654788">(084) 965 4788</a></p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="contact2-infobox">
									<span class="icon_pin_alt" aria-hidden="true"></span>
									<h3>Address</h3>
									<p>5th Floor, North South University</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="contact2-infobox">
									<span class="icon_mail_alt" aria-hidden="true"></span>
									<h3>Email</h3>
									<a href="mailto:mail@example.com" title="support@example.com">support@medicus.ml</a>
									<a href="mailto:mail@example.com" title="hello@example.com">info@medicus.ml</a>
								</div>
							</div>
						</div>
					</div><!-- Contact2 Info Block /- -->
					
					<!-- ContactUs Form2 -->
					<div class="col-md-8 col-sm-12">
						<form action="php/contact.php" method="post" id="contact-form2" class="contactus-form2">
							<h3 class="contact2-title">
								If you have any questions
								<span>please do not hesitate to send us a message.</span>
							</h3>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="text" name="contact-name" class="form-control" id="input_name_2" placeholder="Your Name"/>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="email" name="contact-email" class="form-control" id="input_email_2" placeholder="Your Email"/>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="text" name="contact-subject" class="form-control" id="input_subject_2" placeholder="Subject"/>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<textarea rows="5"  name="contact-message" class="form-control" id="textarea_message_2" placeholder="Message"></textarea>
									</div>
								</div>	
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<input type="submit" value="Send Message" id="btn_submit2" title="Send" name="post">
									</div>
								</div>
								<div id="alert-msg_2" class="alert-msg"></div>
							</div>
						</form>	
					</div><!-- ContactUs Form2 /- -->
				</div>
			</div>
		</div><!-- Contact2 Section /- -->
	</main>	
	
	
    <?php include "assets/includes/footer.php"?>