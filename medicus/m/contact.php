<?php
session_start();
include("../assets/includes/connection.php");
include("../assets/function/function.php");

?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Medicus | Contact Us</title>
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/framework.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <div id="page-transitions" class="page-build light-skin highlight-blue">
        <div id="menu-hider"></div>
        <div id="menu-list" data-selected="menu-pages" data-load="menu-list.php" data-height="415" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-demo" data-load="menu-demo.php" data-height="210" class="menu-box menu-load menu-bottom"></div>
        <div id="menu-find" data-load="menu-find.php" data-height="420" class="menu-box menu-load menu-bottom"></div>
        <div class="header header-scroll-effect">
            <div class="header-line-1 header-hidden header-logo-app">
                <a href="#" class="back-button header-logo-title">Back to Pages</a>
                <a href="#" class="back-button header-icon header-icon-1"><i class="fa fa-angle-left"></i></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-3"><i class="fa fa-search"></i></a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-4"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-2"><i class="fa fa-cog"></i></a>
            </div>
            <div class="header-line-2 header-scroll-effect">
                <a href="#" class="header-pretitle header-date color-highlight"></a>
                <a href="#" class="header-title">Contact Us</a>
                <a href="#" data-menu="menu-list" class="header-icon header-icon-1"><i class="fa fa-bars"></i></a>
                <a href="#" data-menu="menu-find" class="header-icon header-icon-2"><i class="fa fa-search"></i></a>
                <a href="#" data-menu="menu-demo" class="header-icon header-icon-3"><i class="fa fa-cog"></i></a>
            </div>
        </div>
        <div class="page-content header-clear-small">
            <div class="content-fullscreen">
                <iframe class="responsive-image maps shadow-medium bottom-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.098170400515!2d90.42334931543232!3d23.81510789221716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth+South+University!5e0!3m2!1sen!2sbd!4v1539779570847"></iframe>
            </div>
            <div class="content-title bottom-30 top-30">
                <span class="color-highlight">GET IN TOUCH</span>
                <h1>Send us a Message</h1>
                <p>Send us a message and we'll get back to you in the shortest possbile time</p>
            </div>
            <div class="content">
                <div class="container bottom-0">
                    <div class="contact-form">
                        <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                            <div class="notification-small notification-has-icon notification-green shadow-small">
                                <div class="notification-icon"><i class="fa fa-check notification-icon"></i></div>
                                <p>Message sent! We'll be in Touch!</p>
                                <a href="#" class="close-notification"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <form action="../php/contact.php" method="post" class="contactForm" id="contactForm">
                            <fieldset>
                                <div class="formValidationError bg-red-dark" id="contactNameFieldError">
                                    <p class="center-text color-white">Name is Required!</p>
                                </div>
                                <div class="formValidationError bg-red-dark" id="contactEmailFieldError">
                                    <p class="center-text color-white">Mail Address Required!</p>
                                </div>
                                <div class="formValidationError bg-red-dark" id="contactEmailFieldError2">
                                    <p class="center-text color-white">Mail Address Must be Valid!</p>
                                </div>
                                <div class="formValidationError bg-red-dark" id="contactMessageTextareaError">
                                    <p class="center-text color-white">Message Field is Empty!</p>
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span>
                                    </label>
                                    <input type="text" name="contact-name" value="" class="contactField requiredField" id="contactNameField" />
                                </div>
                                <div class="formFieldWrap">
                                    <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span>
                                    </label>
                                    <input type="text" name="contact-email" value="" class="contactField requiredField requiredEmailField" id="contactEmailField" />
                                </div>
                                   <div class="formFieldWrap">
                                    <label class="field-title contactNameField" for="contactEmailField">Subject: <span>(required)</span>
                                    </label>
                                    <input type="text" name="contact-subject" value="" class="contactField requiredField requiredEmailField" id="contactsubjectField" />
                                </div>
                                <div class="formTextareaWrap">
                                    <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span>
                                    </label>
                                    <textarea name="contact-message" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                                </div>
                                <div class="formSubmitButtonErrorsWrap contactFormButton">
                                    <input type="submit" class="buttonWrap button bg-highlight button-sm button-rounded uppercase ultrabold contactSubmitButton shadow-small top-30" id="contactSubmitButton" value="Send Message" name="post" data-formId="contactForm" />
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="decoration"></div>
            </div>
            <div class="content-title bottom-30 top-30">
                <span class="color-highlight">More contacts</span>
                <h1>Contact Information</h1>
                <p>Reach us on any of the addresses or social networks below. We're always available for you.</p>
            </div>
            <div class="content">
                <div class="decoration"></div>
                <div class="contact-information last-column">
                    <div class="container no-bottom">
                        <p class="contact-information">
                            <strong class="color-highlight">Postal Information</strong>
                            <br> PO Box 22161 Street North South University
                            <br> PO Box 16122 bashundahra baridhara
                            <br> Victoria 8007 Dhaka
                        </p>
              
                        <p class="contact-information">
                            <strong class="color-highlight">Contact Information:</strong>
                            <br>
                            <a href="tel: +123 456 7890"><i class="fa fa-phone-square color-green-dark"></i>+880 1711574805</a>
                            <a href="mailto:name@domain.com"><i class="fa fa-envelope-square color-blue-dark"></i>info@medicus.ml</a>
                            <a href="#"><i class="fab fa-facebook-square color-facebook"></i>medicus</a>
                            <a href="#"><i class="fab fa-twitter-square color-twitter"></i>@medicus</a>
                            <a href="#"><i class="fab fa-google-plus-square color-google"></i>@medicus</a>
                        </p>
                    </div>
                </div>
            </div>
            
            	
	



            <?php include("footer.php"); ?>