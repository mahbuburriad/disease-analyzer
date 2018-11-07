/*
	Project Name : Shield Theme

	## UDF Function 
	
	
	## Document Ready
		-- Scrolling Navigation
		-- Responsive Caret
		-- Remove p empty tag for Shortcode
		-- Tooltip
		
		-- Quick Contact Form

	## Window Load
		- Site Loader
*/


(function($){
	"use strict" 
	
	/* - About Section */
	function about_img() {
		var width = $(window).width();
		var about_section_height = $(".about-section").height();
		var about_content_height = $(".about-detail").height();
		var ele_id = 0;
		if ( width >= 992 ) {
			$( ".about-img" ).removeAttr("style");
			$( ".about-img img" ).remove();
			var about_img = $(".about-img").attr("data-image");
			$( ".about-img" ).css({"background-image":"url('" + about_img + "')","height": about_section_height });
		} else {
			$( ".about-img" ).removeAttr("style");
			$( ".about-img img" ).remove();
			var about_img = $(".about-img").attr("data-image");
			$( ".about-img" ).append("<img src='"+ about_img +"' />")
		}
	}
	
	/* - Left Background */
	function left_bg(){
		var width =	$(window).width();
		var container_width = $(".container").width();
		var left_bg = (( width - container_width ) / 2 );
		$(".left-background").css("width",left_bg);
	}
	
	/* - WebDesign Section */
	function webdesign_img() {
		var width = $(window).width();
		if ( width >= 992 ) {
			$( ".webdesign-bg" ).removeAttr("style");
			var contact_section_height = $(".webdesign-section").height();
			$( ".getintouch-img img" ).remove();
			var webdesign_img = $(".webdesign-bg").attr("data-image");
			$( ".webdesign-bg" ).css({"background-image":"url('" + webdesign_img + "')","height": contact_section_height });
		} else {
			$( ".webdesign-bg" ).removeAttr("style");
			$( ".webdesign-bg img" ).remove();
			var webdesign_img = $(".webdesign-bg").attr("data-image");
			$( ".webdesign-bg" ).append("<img src='"+ webdesign_img +"' />")
		}
	}
	
	/* - What We Do */
	function what_we_do_img() {
		var width = $(window).width();
		if ( width >= 992 ) {
			$( ".whatwedo-img" ).removeAttr("style");
			var what_we_do_section_height = $(".whatwedo-section").height();
			$( ".whatwedo-img img" ).remove();
			var whatwedo_img = $(".whatwedo-img").attr("data-image");
			$( ".whatwedo-img" ).css({"background-image":"url('" + whatwedo_img + "')","height": what_we_do_section_height });
		} else {
			$( ".whatwedo-img" ).removeAttr("style");
			$( ".whatwedo-img img" ).remove();
			var whatwedo_img = $(".whatwedo-img").attr("data-image");
			$( ".whatwedo-img" ).append("<img src='"+ whatwedo_img +"' />")
		}
	}
	
	/* - Contact Section */
	function getintouch_img() {
		var width = $(window).width();
		if ( width >= 992 ) {
			$( ".getintouch-img" ).removeAttr("style");
			var contact_section_height = $(".contact-section").height();
			$( ".getintouch-img img" ).remove();
			var getintouch_img = $(".getintouch-img").attr("data-image");
			$( ".getintouch-img" ).css({"background-image":"url('" + getintouch_img + "')","height": contact_section_height });
		} else {
			$( ".getintouch-img" ).removeAttr("style");
			$( ".getintouch-img img" ).remove();
			var getintouch_img = $(".getintouch-img").attr("data-image");
			$( ".getintouch-img" ).append("<img src='"+ getintouch_img +"' />")
		}
	}
	
	/* - HomeShop Section */
	function homeshop_img() {
		var width = $(window).width();
		var ele_id = 0;	
		$( "[id*='homeshop_ppt_img-']" ).removeAttr("style");
		$( "[id*='homeshop_ppt-']" ).each(function () { 
			ele_id = $(this).attr('id').split("-")[1];
			var homeshop_img_height = $( "[id*='homeshop_ppt-"+ele_id+"']" ).height();
			var homeshop_img = $("[id*='homeshop_ppt_img-"+ele_id+"']").attr("data-image");
			$( "[id*='homeshop_ppt_img-"+ele_id+"']" ).css({"background-image":"url('" + homeshop_img + "')","height": homeshop_img_height });
		});
	}
	
	/* - Contact1Right Bg */
	function contact1right_bg(){
		var width =	$(window).width();
		var container_width = $(".container").width();
		var contact1right_bg = (( width - container_width ) / 2 );
		$(".contact1right-bg").css("width",contact1right_bg);
	}
	
	/* - Google-map */
	function initialize(obj) {
		var lat = $('#'+obj).attr("data-lat");
        var lng = $('#'+obj).attr("data-lng");
		var contentString = $('#'+obj).attr("data-string");
		var myLatlng = new google.maps.LatLng(lat,lng);
		var map, marker, infowindow;
		var image = 'images/marker.png';
		var zoomLevel = parseInt($('#'+obj).attr("data-zoom"),10);
		if( obj == "map-canvas-contact" ){
			var styles = [{"featureType":"landscape","stylers":[{"saturation":25},{"lightness":100},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":30},{"lightness":15},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":50},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-50},{"lightness":10},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":30},{"lightness":20},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":10},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":15},{"saturation":150}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#d9ebff"},{"lightness":200},{"saturation":50}]}]
		} else if( obj == "map-canvas-contact2" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
		} else if( obj == "map-canvas-contact3" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-10},{"lightness":-100},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":-90},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"off"}]},{"featureType":"road.arterial","stylers":[{"saturation":-80},{"lightness":-100},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-80},{"lightness":-90},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-90},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":-90},{"saturation":-90}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ff5500"},{"lightness":-90},{"saturation":-90}]}]
		} else if( obj == "map-canvas-contact4" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-160},{"lightness":70},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-80},{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-80},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-50},{"lightness":50},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-180},{"lightness":150},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-10},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":-40},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#46bdec"},{"lightness":-30},{"saturation":40}]}]
		} else if( obj == "map-canvas-contact5" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":80},{"lightness":150},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-120},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-120},{"lightness":50},{"visibility":"of"}]},{"featureType":"road.local","stylers":[{"saturation":150},{"lightness":50},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":10},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":25},{"saturation":-50}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#adbcc9"},{"lightness":10},{"saturation":-180}]}]
		} else if( obj == "map-canvas-contact6" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#47bcec"},{"lightness":-25},{"saturation":-97}]}]
		}else if( obj == "map-canvas-contact7" ) {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#47bcec"},{"lightness":-25},{"saturation":-97}]}]
		} else {
			var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#d9ebff"},{"lightness":-25},{"saturation":-97}]}]
		}
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
		var mapOptions = {
			zoom: zoomLevel,
			disableDefaultUI: true,
			center: myLatlng,
            scrollwheel: false,
			mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			}
		}
		
		map = new google.maps.Map(document.getElementById(obj), mapOptions);

		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
	
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});      
	    
        marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});	
	}

	/* ## Document Scroll - Window Scroll */
	$( document ).scroll(function()
	{
		var scroll	= $(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$(".header-section:not(.vertical-menu)").addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section:not(.vertical-menu)").removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$(".header-section:not(.vertical-menu)").removeClass("navbar-fixed-top animated fadeInDown");
		} /* set sticky menu - end */

		if ($(this).scrollTop() >= 50)
		{
			/* If page is scrolled more than 50px */
			$('#back-to-top').fadeIn(200);    /* Fade in the arrow */
		}
		else
		{
			$('#back-to-top').fadeOut(200);   /* Else fade out the arrow */
		}
	});

	$('#back-to-top').on("click", function()
	{
		/* When arrow is clicked */
		$('body,html').animate(
		{
			scrollTop : 0 /* Scroll to top of body */
		},800);
	});		
		
	
	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* -- Scrolling Navigation */
		var scroll	=	$(window).scrollTop();
		var width	=	$(window).width();
		var height	=	$(window).height();
		
		/* ** set sticky menu ** */
		if( scroll >= height -500 )
		{
			$(".header-section:not(.vertical-menu)").addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$(".header-section:not(.vertical-menu)").removeClass("navbar-fixed-top");
		}
		else
		{
			$(".header-section:not(.vertical-menu)").removeClass("navbar-fixed-top");
		} /* set sticky menu - end */
		
		
		$('.navbar-nav li a[href*="#"]:not([href="#"]),#back-to-top[href*="#"]:not([href="#"]), .homeshop_ppt-index li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').bind('click', function(e) {
	
			var $anchor = $(this);
			
			$('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top - 49 }, 1500, 'easeInOutExpo');
			
			e.preventDefault();
		});

		/* -- Responsive Caret */
		$(".ddl-switch").on("click", function() {
			var li = $(this).parent();
			if ( li.hasClass("ddl-active") || li.find(".ddl-active").length !== 0 || li.find(".dropdown-menu").is(":visible") ) {
				li.removeClass("ddl-active");
				li.children().find(".ddl-active").removeClass("ddl-active");
				li.children(".dropdown-menu").slideUp();
			}
			else {
				li.addClass("ddl-active");
				li.children(".dropdown-menu").slideDown();
			}
		});
		
		$('[data-toggle="tooltip"]').tooltip();
		
		/* - Menu */
		if($(".vertical-menu").length){
			$("#menu-switch").on("click", function() {
				$(".vertical-menu").addClass("active");
			});
			$("#menu-close").on("click", function() {
				$(".vertical-menu").removeClass("active");
			});
		}
		if($(".vertical-menu3").length){
			$("#menu-switch").on("click", function() {
				$(".vertical-menu").addClass("active");
				var menu_width = $(".vertical-menu").width();
				$("main").css("margin-left",menu_width);
			});
			$("#menu-close").on("click", function() {
				$(".vertical-menu").removeClass("active");
				$("main").css("margin-left","0");
			});
		}
		
		/* - Revolution Slider */
		if($(".slider-section").length){
			$("#slider-light1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay: 9000,
				navigation: {
					arrows:{enable:true},
				}, 
				gridwidth:1230,
				gridheight:976
			});
			
			$("#slider1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay: 9000,
				navigation: {
					arrows:{enable:true},
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:778,
						style:"",
						hide_onleave:false,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:20,
						space:15,
						tmp:''
					 }
				}, 
				gridwidth:1230,
				gridheight:976
			}); 
			
			$("#slider-shop1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay: 9000,
				navigation: {
					arrows:{enable:true}
				}, 
				gridwidth:1230,
				gridheight:910
			}); 
			
			$("#shop-slider1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:9000,
				navigation: {
					arrows:{enable:false} 
				}, 
				gridwidth:1170,
				gridheight:570 ,
				/* stopAfterLoops:0,
				stopAtSlide:1 */
			}); 
			
			$("#slider-shop-with-sidebar1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay: 9000,
				navigation: {
					arrows:{enable:true}
				}, 
				gridwidth:1230,
				gridheight:960
			}); 
			
			$("#slider-shop-parallex1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay: 9000,
				navigation: {
					arrows:{enable:true}
				}, 
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50],
				},
				gridwidth:1230,
				gridheight:910
			}); 
		}
		
		/* - Search */
		if($(".search-box").length){
			$("#search").on("click", function(){
				$(".search-box").addClass("open");
				$(".search-box form input").focus();
			});
			$(".search-box .close").on("click", function(){
				$(".search-box").removeClass("open");
			});			
		}
		
		/* - Bureger Menu */
		if($(".burger-menu-block").length){
			var header_height = $(".header-section").height();
			var burger_menu_height = height - header_height;
			$(".burger-menu-block").css({"height":burger_menu_height, "top":header_height});
			$(".burger-menu a").on("click", function() {
				$(".burger-menu-block").addClass("active");
			});
			$(".burger-menu-block span").on("click", function() {
				$(".burger-menu-block").removeClass("active");
			});
		}
		
		/* - Counter */
		if($(".fact-section").length) {
			$(".fact-section").each(function ()
			{
				var $this = $(this);
				var myVal = $(this).data("value");

				$this.appear(function()
				{  
					var statistics_item_count = 0;
					var statistics_count = 0;     
					statistics_item_count = $( "[id*='statistics_count-']" ).length;
					for(var i=1; i<=statistics_item_count; i++)
					{
						statistics_count = $( "[id*='statistics_count-"+i+"']" ).attr( "data-statistics_percent" );
						$("[id*='statistics_count-"+i+"']").animateNumber({ number: statistics_count }, 4000);
					}    
				});
			});
		}
		
		/* - CountDown */  
		var ele_id = 0;
		$( "[id*='clock-']" ).each(function () { 
			ele_id = $(this).attr('id').split("-")[1];
			var cnt_date = $(this).attr("data-date");
			$("[id*='clock-"+ele_id+"']").countdown(cnt_date, function(event) {
				var $this = $(this).html(event.strftime(''    
					+ '<p>%D <span>Days</span></p>'
					+ '<p>%H <span>Hours</span></p>'
					+ '<p>%M <span>Mins</span></p>'
					+ '<p>%S <span>Secs</span></p>'
				));
			});
		});
		
		/* -- Team Section 1 */
		if($(".ele-team-carousel").length){
			$(".ele-team-carousel").owlCarousel({
				loop: true,    
				margin: 0,
				dots: true,
				nav:false,    
				autoplay:false,    
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:3
					}
				}
			})
		}
		/* - About Image */
		about_img();
		
		/* - Left Background */
		left_bg();
		
		/* -- Pie Chart  */
		$(".skill-progress").each(function ()
		{		
			var $this = $(this);
			var myVal = $(this).data("value");	

			$this.appear(function()
			{
				var skill_item_count = 0;
				var skills_count = 0;

				skill_item_count = $( "[id*='skill_count-']" ).length;

				for(var i=1; i<=skill_item_count; i++)
				{
					skills_count = $( "[id*='skill_count-"+i+"']" ).attr( "data-skills_percent" );
					$("[id*='skill_count-"+i+"']").animateNumber({ number: skills_count }, 2000);
				}
			});				
		});
		
		$(".dial").each(function ()
		{
			var $this = $(this);
			var myVal = $(this).data("value");		

			$this.appear(function()
			{
				// alert(myVal);
				$this.knob({ });
				$({ value: 0 }).animate({ value: myVal },
				{
					duration: 2000,
					easing: 'swing',
					step: function ()
					{
						$this.val(Math.ceil(this.value)).trigger("change");
					}
				});
			});
		});	
		
		/* -- Progress Section */
		$('.progress-section').each(function ()
		{
			var $this = $(this);
			var myVal = $(this).data("value");

			$this.appear(function()
			{			
				var skill_type1_item_count = 0;
				var skill_type1_count = 0;					
				skill_type1_item_count = $( "[id*='skill_type1_count-']" ).length;
				
				var skill_bar_count = 0;
				var skills_bar_count = 0;
				skill_bar_count = $( "[id*='skill_bar1_count-']" ).length;
				
				for(var i=1; i<=skill_type1_item_count; i++)
				{
					skill_type1_count = $( "[id*='skill_type1_count-"+i+"']" ).attr( "data-skill_percent" );
					$("[id*='skill_type1_count-"+i+"']").animateNumber({ number: skill_type1_count }, 2000);
				}			
				
				for(var j=1; j<=skill_bar_count; j++)
				{
					skills_bar_count = $( "[id*='skill_type1_count-"+j+"']" ).attr( "data-skill_percent" );
					$("[id*='skill_bar1_count-"+j+"']").css({'width': skills_bar_count+'%'});
				}
			});
		});
		
		/* -- Carousel Section */
		if($("#clients-carousel-4").length){
			$("#clients-carousel-4").owlCarousel({
				loop: true,				
				margin: 0,
				dots: true,
				nav:false,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:4
					}
				}
			})
		}
		
		/* -- Brand Section */
		if($("#brands-carousel").length){
			$("#brands-carousel").owlCarousel({
				loop: true,				
				margin: 0,
				dots: false,
				nav:false,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:4
					}
				}
			})
		}
		
		/* -- Brand Section */
		if($("#brand-carousel-1").length){
			$("#brand-carousel-1").owlCarousel({
				loop: true,				
				margin: 0,
				dots: true,
				nav:false,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:4
					}
				}
			})
		}
		
		/* - Blog Post Grid */
		if( $(".gallery-post").length ) {
			var totalItems = $("#blog-carousel .item").length;
			var currentIndex = $("#blog-carousel div.active").index() + 1;
			$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			$("#blog-carousel").carousel({
				interval: 2900
			});
			$("#blog-carousel").bind("slide.bs.carousel", function() {
				currentIndex = $("#blog-carousel div.active").index() + 1;
				$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			});
		}
		if( $(".gallery-post").length ) {
			var totalItems = $("#postgrid-carousel .item").length;
			var currentIndex = $("#postgrid-carousel div.active").index() + 1;
			$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			$("#postgrid-carousel").carousel({
				interval: 2900
			});
			$("#postgrid-carousel").bind("slide.bs.carousel", function() {
				currentIndex = $("#postgrid-carousel div.active").index() + 1;
				$(".num").html(""+ currentIndex +" / "+ totalItems +"");
			});
		}
		webdesign_img();
		what_we_do_img();
		getintouch_img();
		
		/* - Portfolio Section */
		if($(".portfolio-image-block").length){
			$(".portfolio-image-block").magnificPopup({
				delegate: 'a',
				type: 'image',
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
				}
			});
		}
		
		/* - Home 7 Team Section */
		if($(".team-carousel").length){
			$(".team-carousel").owlCarousel({
				autoplay: false,
				animateIn: 'fadeIn',
				loop: true,
				dots: false,
				nav: true,
				responsive:{
					0:{
						items:1
					},
					640:{
						items:2
					},
					992: {
						items:3
					}
				},
				margin: 30,
				stagePadding: 0,
				smartSpeed: 450
			});
		}
		
		/* - Portfolio Gallery Format */
		if($("#image-gallery").length){
			$('#image-gallery').lightSlider({
				gallery:true,
				item: 1,
				thumbItem: 4,
				responsive : [
					{
						breakpoint:992,
						settings: {
							thumbItem: 3
						}
					},{
						breakpoint:768,
						settings: {
							thumbItem: 4
						}
					},{
						breakpoint:767,
						settings: {
							thumbItem: 4
						}
					},{
						breakpoint:500,
						settings: {
							thumbItem: 3
						}
					}
				],
				slideMargin: 0,
				thumbMargin: 30,
				speed: 500,
				auto: false,
				loop: true,
				onSliderLoad: function() {
					$('#image-gallery').removeClass('cS-hidden');
				} 
			});
		}
		/* - Vertical slider */
		if($("#vertical").length){
			$('#vertical').lightSlider({
				gallery:true,
				item:1,
				vertical:true,
				thumbItem: 3,
				verticalHeight: 564,
				thumbMargin: 20,
				responsive : [
					{
						breakpoint:992,
						settings: {
							vThumbWidth: 100,
							thumbItem: 3,
						}
					},{
						breakpoint:768,
						settings: {
							verticalHeight: 464,
							vThumbWidth: 100,
							thumbItem: 2,
							thumbMargin: 30
						}
					},{
						breakpoint:641,
						settings: {
							verticalHeight: 245,
							vThumbWidth: 60,
							thumbItem: 2,
							thumbMargin: 30
						}
					}
				],
				slideMargin:0
			});
		}
		/* - Image Gallery Style:: 1 */
		if($(".img-gallery-style").length){
			$("#img_gallery_carousel").lightSlider({
				gallery: true,
				loop: true,
				item: 1,
				autoWidth: false,
				controls: true,
				enableDrag: false,
				thumbItem:7,
				thumbMargin: 20,
				galleryMargin: 18,
				responsive : [
					{
						breakpoint:800,
						settings: {
							item:1,
							slideMargin:7,
						  }
					},
					{
						breakpoint:480,
						settings: {
							thumbItem:4,
						}
					}
				]
				
			});
		}
		/* - Image Gallery Style:: 2 */		
		if( $(".img-gallery-style.layout2").length){
			var url;
			$(".img-gallery-style.layout2").magnificPopup({
				delegate: ".gallery-popup",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: "<a href="%url%">The image #%curr%</a> could not be loaded.",
				}
			});
		}
		
		/* -- Portfolio Section */
		if($(".portfolio-carousel").length){
			$(".portfolio-carousel").owlCarousel({
				loop: true,				
				margin: 10,
				dots: false,
				nav:true,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					640:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:3
					}
				}
			})
		}
		
		/* -- Banner Section */
		if($(".banner-carousel").length){
			$(".banner-carousel").owlCarousel({
				loop: true,				
				margin: 0,
				dots: false,
				nav:true,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					640:{
						items:2
					},
					991:{
						items:3
					},
					1200:{
						items:4
					}
				}
			})
		}
		
		/* -- Carousel 6 Blog Post Carousel */
		if($(".blog-post-carousel").length){
			$(".blog-post-carousel").owlCarousel({
				loop: true,				
				margin: 0,
				dots: false,
				nav:true,				
				autoplay:false,				
				autoplayHoverPause:true,
				responsive:{
					0:{
						items:1
					},
					640:{
						items:2
					},
					1200:{
						items:2
					}
				}
			})
		}
		
		
		/* - Quantity */
		$(".qtyplus").on( "click", function(e) {
			e.preventDefault();
			var fieldName = $(this).attr('data-field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$(this).find('input[name='+fieldName+']').val(0);
			}
		});
		$(".qtyminus").on( "click" , function(e) {		
			e.preventDefault();		
			var fieldName = $(this).attr('data-field');		
			var currentVal = parseInt($('input[name='+fieldName+']').val());		
			if (!isNaN(currentVal) && currentVal > 0) {			
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {			
				$('input[name='+fieldName+']').val(0);
			}
		});
		
		/* -- Woocommerce Tabs */
		$( '.wc-tabs-wrapper, .woocommerce-tabs' )
			.on( 'init', function() {
				$( '.wc-tab, .woocommerce-tabs .panel:not(.panel .panel)' ).hide();

				var hash  = window.location.hash;
				var url   = window.location.href;
				var $tabs = $( this ).find( '.wc-tabs, ul.tabs' ).first();

				if ( hash.toLowerCase().indexOf( 'comment-' ) >= 0 || hash === '#reviews' ) {
					$tabs.find( 'li.reviews_tab a' ).click();
				} else if ( url.indexOf( 'comment-page-' ) > 0 || url.indexOf( 'cpage=' ) > 0 ) {
					$tabs.find( 'li.reviews_tab a' ).click();
				} else {
					$tabs.find( 'li:first a' ).click();
				}
			})
			.on( 'click', '.wc-tabs li a, ul.tabs li a', function() {
				var $tab          = $( this );
				var $tabs_wrapper = $tab.closest( '.wc-tabs-wrapper, .woocommerce-tabs' );
				var $tabs         = $tabs_wrapper.find( '.wc-tabs, ul.tabs' );

				$tabs.find( 'li' ).removeClass( 'active' );
				$tabs_wrapper.find( '.wc-tab, .panel:not(.panel .panel)' ).hide();

				$tab.closest( 'li' ).addClass( 'active' );
				$tabs_wrapper.find( $tab.attr( 'href' ) ).show();

				return false;
			})
			.trigger( 'init' );

		$( 'a.woocommerce-review-link' ).click( function() {
			$( '.reviews_tab a' ).click();
			return true;
		});
		
		/* Star ratings for comments */
		$( '#rating' ).hide().before( '<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>' );

		$( 'body' )
			.on( 'click', '#respond p.stars a', function() {
				var $star   	= $( this ),
					$rating 	= $( this ).closest( '#respond' ).find( '#rating' ),
					$container 	= $( this ).closest( '.stars' );

				$rating.val( $star.text() );
				$star.siblings( 'a' ).removeClass( 'active' );
				$star.addClass( 'active' );
				$container.addClass( 'selected' );

				return false;
			})
			.on( 'click', '#respond #submit', function() {
				var $rating = $( this ).closest( '#respond' ).find( '#rating' ),
					rating  = $rating.val();

				if ( $rating.size() > 0 && ! rating && wc_single_product_params.review_rating_required === 'yes' ) {
					window.alert( wc_single_product_params.i18n_required_rating_text );

					return false;
				}
			});
		
		/* -- Price Filter */
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 15000,
			values: [ 0, 10000 ],
			slide: function( event, ui ) {
				$( "#amount" ).html( "$" + ui.values[ 0 ] )
				$( "#amount2" ).html( "$" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) );
		$( "#amount2" ).html( "$" + $(  "#slider-range" ).slider( "values", 1 ) );

		/* - Shop */
			homeshop_img();
			/* - Related Product */
			if($(".related-products .products").length){
				$(".related-products .products").owlCarousel({
					autoplay: false,
					animateIn: 'fadeIn',
					loop: true,
					dots: false,
					nav: true,
					responsive:{
						0:{
							items:1
						},
						640:{
							items:2
						},
						992: {
							items:4
						}
					},
					margin: 0,
					stagePadding: 0,
					smartSpeed: 450
				});
			}
			/* - Chekout Radio */
			$(".payment-gatway .payment-option input").on("click",function () {
				if ($(".payment-gatway .payment-option input:not(:checked)")) {
					$(".payment-gatway .payment-option").removeClass("style1");
				}
				if ($(".payment-gatway .payment-option input").is(":checked")) {
					$(this).parent().addClass("style1");
				}
			});
			
		/* - Map Section */		
		if($("#map-canvas-contact").length==1){
			initialize("map-canvas-contact");
		}
		if($("#map-canvas-contact2").length==1){
			initialize("map-canvas-contact2");
		}
		if($("#map-canvas-contact3").length==1){
			initialize("map-canvas-contact3");
		}
		if($("#map-canvas-contact4").length==1){
			initialize("map-canvas-contact4");
		}
		if($("#map-canvas-contact5").length==1){
			initialize("map-canvas-contact5");
		}
		if($("#map-canvas-contact6").length==1){
			initialize("map-canvas-contact6");
		}
		if($("#map-canvas-contact7").length==1){
			initialize("map-canvas-contact7");
		}
		
		contact1right_bg();
		
		
		/* - Quick Contact Form */
		$( "#btn_submit" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");					
						$("#input_name").val("");
						$("#input_email").val("");
						$("#input_company").val("");
						$("#input_subject").val("");
						$("#textarea_message").val("");
						$("#alert-msg").show();
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					//alert(textStatus);
				}
			});
			return false;
		});/* Quick Contact Form /- */
		
		/* - Quick Contact Form */
		$( "#btn_submit1" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact1.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg_1").html(data["msg"]);
						$("#alert-msg_1").removeClass("alert-msg-success");
						$("#alert-msg_1").addClass("alert-msg-failure");
						$("#alert-msg_1").show();
					} else {
						$("#alert-msg_1").html(data["msg"]);
						$("#alert-msg_1").addClass("alert-msg-success");
						$("#alert-msg_1").removeClass("alert-msg-failure");					
						$("#input_name_1").val("");
						$("#input_email_1").val("");
						$("#input_subject_1").val("");
						$("#textarea_message_1").val("");
						$("#alert-msg_1").show();
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					//alert(textStatus);
				}
			});
			return false;
		});/* Quick Contact Form /- */
		
		/* - Quick Contact Form */
		$( "#btn_submit2" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();
			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact2.php",
				data: mydata,
				success: function(data) {
					if( data["type"] == "error" ){
						$("#alert-msg_2").html(data["msg"]);
						$("#alert-msg_2").removeClass("alert-msg-success");
						$("#alert-msg_2").addClass("alert-msg-failure");
						$("#alert-msg_2").show();
					} else {
						$("#alert-msg_2").html(data["msg"]);
						$("#alert-msg_2").addClass("alert-msg-success");
						$("#alert-msg_2").removeClass("alert-msg-failure");					
						$("#input_name_2").val("");
						$("#input_email_2").val("");
						$("#input_subject_2").val("");
						$("#textarea_message_2").val("");
						$("#alert-msg_2").show();
					}
				},
				error: function(xhr, textStatus, errorThrown) {
					//alert(textStatus);
				}
			});
			return false;
		});/* Quick Contact Form /- */
		
		if($("#tweecool").length){
			$("#tweecool").tweecool({
				username : '@onistaweb2',
				limit : 2,
				profile_image: false
			});
		}
		
	});/* document.ready /- */
	
	/* ## Window Resize */
	$( window ).resize(function() {
		var width	=	$(window).width();
		var height	=	$(window).height();
		about_img();
		
		/* - Left Background */
		left_bg();
		webdesign_img();
		what_we_do_img();
		getintouch_img();
		homeshop_img();
		contact1right_bg();
	});	
	
	/* ## Window Load - Handler for .load() called */
	$(window).load(function() {
		/* - Site Loader */
		if ( !$("html").is(" .ie6, .ie7, .ie8 ") ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css("display","none");
		}
		
		/* - Portfolio Section */
		var $container = $(".portfolio-list");
		$container.isotope({
			itemSelector: "li",
			gutter: 0,
			transitionDuration: "0.5s"
		});	
		$("#filters a").on("click",function(){
			$('#filters a').removeClass("active");
			$(this).addClass("active");
			var selector = $(this).attr("data-filter");
			$container.isotope({ filter: selector });		
			return false;
		});		
			
		/* - Blog  */
		if($(".blog_masonry").length){
			var $container = $(".blog-masonry-list");
				$container.isotope({
				itemSelector: ".blog-masonry-box",
				gutter: 0,
				transitionDuration: "0.5s"
			});
		}
	});
	
})(jQuery);