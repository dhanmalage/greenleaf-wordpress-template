/**
 * Created by Dananjaya on 7/12/2016.
 */

 
/* ****************** detect IE 8 or less and alert ******************** */



var ie = (function(){

    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');

    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );

    return v > 4 ? v : undef;

}());

jQuery(document).ready(function(){

	

	if(ie == 8){
		
		var para = document.createElement("P");                       // Create a <p> node
		var t = document.createTextNode("You are currently on an outdated version of Internet Explorer. Please Update your browser in order to view this website");      // Create a text node
		para.appendChild(t);                                          // Append the text to <p>
		document.getElementById("preLoaderWrapper").appendChild(para);           // Append <p> to <div> with id="myDIV"
		
	}
	else if(ie < 8){
		alert("You are currently on an outdated version of Internet Explorer. Please Update your browser in order to view this website");
	}
	else{
		//pre load animation
		//paste this code under the head tag or in a separate js file.
		// Wait for window load
		jQuery(window).load(function() {
			// Animate loader off screen
			jQuery(".se-pre-con").fadeOut("slow");
		});
	}
});

/* ****************** detect IE 8 or less and alert end ******************** */

jQuery(document).ready(function(){
     jQuery('.bxgallery').bxSlider({
     auto:true,
     pager:false,
     nextSelector:'#gal-next',
     prevSelector:'#gal-prev',
     nextText: '<i class="fa fa-play" aria-hidden="true"></i>',
     prevText: '<i class="fa fa-play fa-rotate-180" aria-hidden="true"></i>'
     });	 	 
});

jQuery(document).ready(function(){	

/*	
	var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;	
	var offsetHeight = jQuery(".bottom-visualizer").height();	
	
	if (deviceWidth > 768){		
		jQuery( ".page-bottom-small-slider > .sp-mask" ).css( "height", offsetHeight );
	}
*/
	
});


jQuery('document').ready(function() {
    var youtubeid = jQuery('#youtubevideoid').text();
    var options = { videoId: youtubeid, start: 0 };
    jQuery('#video').tubular(options);
    // f-UGhWj1xww cool sepia hd
    // 49SKbS7Xwf4 beautiful barn sepia
	var videoPoster = jQuery('#posterImage').text();	
	var videofilter = jQuery('#videofilter').text();	
    jQuery('#video').css('background-image', 'url(' + videoPoster + ')');
    jQuery('#tubular-shield').css("background-color", videofilter);
});






jQuery(document).ready(function(){
    jQuery("#hide").click(function(){
        jQuery("#show-text").addClass("hide");
        jQuery("#show").removeClass("hide");
        jQuery("#show-text").hide();
    });
    jQuery("#show").click(function(){
        jQuery("#show-text").removeClass("hide");
        jQuery("#show").addClass("hide");
        jQuery("#show-text").show();
    });
});

/* ****************** Read More ****************** */

/*
jQuery(document).ready(function() {
    jQuery(function () {
        jQuery('.content').hide();
        jQuery('a.read').click(function () {
            jQuery(this).parent('.excerpt').hide();
            jQuery(this).closest('.content-read-more').find('.content').slideDown('fast');
            return false;
        });
        jQuery('a.read-less').click(function () {
            jQuery(this).parent('.content').slideUp('fast');
            jQuery(this).closest('.content-read-more').find('.excerpt').show();
            return false;
        });
    });
});
*/

/*
jQuery('#video').YTPlayer({
    fitToBackground: true,
    videoId: 'LSmgKRx5pBo'
});*/

/*
jQuery(function(){
    var myPlayer;
    jQuery(function () {
        var isIframe=function(){
            var a=!1;
            try{self.location.href!=top.location.href&&(a=!0)}catch(b){a=!0}return a};
        if(!isIframe()){
            var logo=jQuery("<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");
            jQuery("#wrapper").prepend(logo),jQuery("#logo").fadeIn()
        }
        myPlayer = jQuery(".player").YTPlayer();
    });
});
*/

/* ******** header video element height ************** */

/* Header Banner Height */


jQuery(document).ready(function(){
	
	var windowHeight = parseInt(jQuery(window).height());
	
	/*
	if(windowHeight <= 730){
		var vew_height = windowHeight/1.5;
		jQuery('#video').css({

			height:(vew_height)+'px'

		});
	}else{	
		jQuery('#video').css({

			height:(windowHeight - 315)+'px'

		});
	}
	*/
	
	if(windowHeight <= 730){
		var vew_height = windowHeight/1.5;
		jQuery('#video').css({

			height:(vew_height)+'px'

		});
		console.log('devide', windowHeight, vew_height);
	}else{	
	
		jQuery('#video').css({

			height:(windowHeight - 315)+'px'

		});
		
		console.log('substract', windowHeight);
		
	}
	
	/*
	if(windowHeight <= 900){
		jQuery('#video').css({

			height:(windowHeight - 315)+'px'

		});
	}else{	
		var vew_height = windowHeight/1.5;
		jQuery('#video').css({

			height:(vew_height)+'px'

		});
	}
	*/
	
});

	


/*
jQuery(window).resize(function(){

    var windowHeight=jQuery(window).height();

    jQuery('#video').css({

        height:windowHeight+'px'

    });



});
*/

/*
 * @param  ***************
 * Home Page slider over video
 */

jQuery(document).ready( function() {
    jQuery('#myCarousel').carousel({
        interval:   8000		
    });

    var clickEvent = false;
    jQuery('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        jQuery('#myCarousel .nav li').removeClass('active');
        jQuery(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if(!clickEvent) {
            var count = jQuery('#myCarousel .nav').children().length-1;
            var current = jQuery('#myCarousel .nav li.active');
            var id = parseInt(current.data('slide-to'));
			current.removeClass('active').next().addClass('active');
						
            if(count == id) {
                jQuery('#myCarousel .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});


/* ***************** inner page sliders ***************** */

jQuery( document ).ready(function( $ ) {

    $( '#inner-page-bottom-slider' ).sliderPro({
        /*width: 960,
        height: 500,*/
        width: window.innerWidth,
        height: window.innerHeight,
        arrows: true,
        buttons: false,
        waitForLayers: false,
        thumbnailWidth: 0,
        thumbnailHeight: 0,
        thumbnailPointer: false,
        autoplay: true,
        autoScaleLayers: false,
        /*breakpoints: {
            500: {
                thumbnailWidth: 120,
                thumbnailHeight: 50
            }
        }*/
    });	
	
	var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;	
	var offsetHeight = jQuery(".bottom-visualizer").height();
	if (deviceWidth > 768){
		var divHeight = offsetHeight;
	}
	$( '#inner-page-bottom-slider-small' ).sliderPro({	
		width: 950, 
		height: 584,  
		arrows: true,  
		buttons: false,  
		waitForLayers: false,  
		thumbnailWidth: 0,   
		thumbnailHeight: 0,    
		thumbnailPointer: false, 
		autoplay: true, 
		autoScaleLayers: false,   
	});
	
	$( '#inner-page-top-slider' ).sliderPro({
        width: 1324,
        height: 600,
        orientation: 'vertical',
        loop: false,
        arrows: true,
        buttons: false,
        thumbnailsPosition: 'left',
        thumbnailPointer: true,
        thumbnailWidth: 190,
        thumbnailHeight: 111,
        breakpoints: {
			1400: {
                thumbnailsPosition: 'left',
				thumbnailPointer: true,
                thumbnailWidth: 190,
                thumbnailHeight: 111
            },
			1024: {
                thumbnailsPosition: 'left',
				thumbnailPointer: true,
                thumbnailWidth: 190,
                thumbnailHeight: 111
            },
            800: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 190,
                thumbnailHeight: 111
            },
            500: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 120,
                thumbnailHeight: 50
            }
        }
    });
			
});


/* contact us banner redirect */

/*
jQuery('.contact-banner-wrapper').click(function(){	window.location.href = contactUrl;});
*/


jQuery(function() {
    jQuery('.flower-names').css({
		'height' : jQuery('.hanging-basket-main-img-wrap').height()
    });
});

jQuery(function($){
	$("#menu-search-btn").click(function(){
		$("#search-form").removeClass('hide');
	});
	$(".search-close-btn").click(function(){
		$("#search-form").addClass('hide');
	});
});


// set product id in enquiry form

jQuery(".product-enq-btn").click(function(){
	jQuery("form#single-product-enquire").removeClass('hide');
	jQuery("p.enquire-status").empty();
	var productid = jQuery(this).attr('productid');
	jQuery("#enq_prod_id").append("#enq_prod_id").val(productid);
	
	var data = {
		'action': 'get_product_enquire',
		'product': productid
	};
	jQuery.post(ajaxurl, data, function (response) {
		if(response){
			jQuery("#form-product-data").empty();
			jData = response;
			obj = JSON.parse(jData);			
			jQuery("#form-product-data").append("<h4>" + obj.title + "</h4>");
			jQuery("#form-product-data").append("<img src='" + obj.image + "' height='220px' width='220px'>");
			if(obj.cat == 9 || obj.cat == 10){
				jQuery("#form-product-data").append('<p style="text-align: center;">Available in various colour options</p>');
			}
		}			
	});
	
});


jQuery("#single-product-enquire").submit(function(e){	
	
	// ajax request to send email
	var data = {
		'action': 'product_enquire',
		'product': jQuery("form#single-product-enquire #enq_prod_id").val(),
		'name': jQuery("form#single-product-enquire #name").val(),
		'email': jQuery("form#single-product-enquire #email").val(),
		'contact': jQuery("form#single-product-enquire #contact").val(),
		'message': jQuery('form#single-product-enquire  #message').val(),
	};
	jQuery.post(ajaxurl, data, function (response) {
		if(response){
			jQuery("form#single-product-enquire").addClass('hide');
			jQuery("p.enquire-status").append('<div class="alert alert-success"><strong>Thank you!</strong> Your enquiry has been successfully sent out to PHS Greenleaf. We will get back to you soon.</div>');
			_gaq.push(['_trackPageview', '/product-enquire.html']);
		}			
	});
			
    return false;
});


jQuery(document).ready(function($){
	var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;	
	if (deviceWidth < 768){
		$( ".menu-main-menu-container ul li" ).removeClass( "dropdown" );
		$( ".menu-main-menu-container ul li a" ).removeClass( "dropdown-toggle" );
		$( ".menu-main-menu-container ul li ul" ).removeClass( "dropdown-menu" );
	}
});











/* ********************* 3D Carousel start ************************* */

(function($){
$.fn.carousel3d = function(args){

	var el = ({
		carousel_frame: $(this)
	});

	var size = el.carousel_frame.children().size();	
	var panelSize = el.carousel_frame.width();
	var translateZ = Math.round( ( panelSize / 2 ) / Math.tan( Math.PI / size ) );

	el.carousel_frame.css({
		"transform": "rotateY(0deg) translateZ(-"+translateZ+"px)"
	})


	var rotateY = 0;
	var rotate_int = 0;
	var ry =  360/size;
	var box = 0;

	function animate_slider(){
		rotateY = ry*rotate_int;
		$("#test").text(rotateY+", "+rotate_int+", ");
		
		for(i=0;i<size;i++){
			var z = (rotate_int*ry)+(i*ry);		
			el.carousel_frame.children("figure:eq("+i+")").css({
				"transform":"rotateY("+z+"deg ) translateZ("+translateZ+"px)"
			});

			if(z == 0){
				el.carousel_frame.children("figure").removeClass("active");
				el.carousel_frame.children("figure:eq("+i+")").addClass("active");
			}

		}
		
		rotateY = 0;
		box = 0; // reset rotateY, ready for re-use
	}

	animate_slider();

	$(".next").on("click", function(){		
		rotate_int -=1;
		animate_slider();
	});

	$(".prev").on("click", function(){		
		rotate_int +=1;
		animate_slider();
	});


	el.carousel_frame.children().on("click", function(){
		new_int = -1*$(this).index();
		if(new_int < rotate_int+(-1*(size/2)) ){
			rotate_int = size + new_int;
			$("figure").removeClass("active");
			$(this).addClass("active");

		} else {
			rotate_int = new_int;
			/*
			$("figure").removeClass("active");
			$(this).addClass("active");
			*/
		}

		animate_slider();
	});

}
})(jQuery);


jQuery(document).ready(function(){
	jQuery('#carousel').carousel3d();
});

jQuery("figure").click(function(){
	//var productUrl = jQuery("figure").hasClass("active").attr('productUrl');
	if ( jQuery( this ).hasClass( "active" ) ) {
 
        var productUrl = jQuery(this).attr('productUrl');
		// similar behavior as clicking on a link
		window.location.href = productUrl;
 
    }
});



/* ********************* 3D Carousel ends ************************** */




/* ***************** remove video background from mobile ****************** */

jQuery(document).ready(function($){
	var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;	
	if (deviceWidth < 978){
		$("#tubular-container").remove();
		$("#tubular-shield").remove();
		var mobileimage = $("#mobileimage").text();
		$("#ytvideo").css("background-image", "url(" + mobileimage + ")");
	}
});


/* ****************** promotion page js ******************** */

// matchHeight
jQuery(function($) {
    $('.promo-footer').matchHeight();
    $('.health-benifits').matchHeight();
    $('.woocommerce ul.products li.product').matchHeight();
	$('.promo-main-content-outer  .promo-product-wrapper').matchHeight();
	
});


/*

jQuery("#promoDownloadSubmit").click(function(e){	

	jQuery('#status').empty();

	if(jQuery("#fullName").val() == '' || jQuery("#telephone").val() == '' || jQuery("#email").val() == ''){
		jQuery('#status').append('<div class="col-xs-12"><div class="alert alert-danger">Plese fill all fields!</div></div>');
	}else{
		
		var fullName = jQuery("#fullName").val();
		var telephone = jQuery("#telephone").val();
		var email = jQuery("#email").val();
		
		// ajax request to send email
		
		var data = {
			'action': 'promo_submit',
			'name': fullName,
			'telephone': telephone,
			'email': email,
		};
		jQuery.post(ajaxurl, data, function (response) {
			if(response){
				jQuery("#promoDownloadForm").addClass('hide');
				jQuery("#status").append('<div class="alert alert-success"><strong>Thank you!</strong> Your enquiry has been successfully sent out to PHS Greenleaf. We will get back to you soon.</div>');
				window.location = 'http://www.phsgreenleaf.co.uk/wp-content/uploads/2016/08/Christmas-Tree-Hire-Guide-2016.pdf';
			}			
		});
			
		return false;
	
	}
	
});

*/


/* ********************* 3D carasole IE fix ******************** */

function msieversion() {

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
    {
		
		var d = document.getElementById("3d-carousel");
		d.className += " hide";
		
		document.getElementById("3d-carousel-IE").className = "";
		        
    }
    else  // If another browser, return 0
    {
        //alert('otherbrowser');		
    }

    return false;
}

msieversion();



/* ********* quotes section owl carasole ************ */
jQuery(document).ready(function(){
	var owl = jQuery('.quote-slider');
	owl.owlCarousel({
		items:1,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:6000,
		autoplayHoverPause:true
	});
});

/* ********* Artificial plants page owl carasole ************ */
jQuery(document).ready(function(){
	var owl = jQuery('.artificial-carousel');
	owl.owlCarousel({
		items:1,
		rtl:true,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        autoHeight:true,
        nav:true,
        smartSpeed:900,
        navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		dots: true,
		animateOut: 'fadeOut'
	});
});

jQuery(document).ready(function(){
	
	jQuery('.cart-contents').addClass('hide');
	
	jQuery('#header-cart-button').hover(function(){
		jQuery('.cart-contents').removeClass('hide');
	}, function() {
		jQuery('.cart-contents').addClass('hide');
	  }
	);
		
});

/* *********** artificial flowers js ************ */
jQuery('form.cart').on( 'change', '.variations select', function( event ) {
    $val=jQuery(this).val();	
	if($val == "direct-debit"){
		jQuery(".single_variation_wrap a").remove();
		jQuery(".woocommerce-variation-add-to-cart").addClass('hide');
		var url = jQuery('.direct-debit-url-text').text();
		jQuery(".single_variation_wrap").append('<a href="' + url + '" class="direct-debit-link" target="_blank">Direct debit</a>');
	} else{
		jQuery(".single_variation_wrap a").remove();
		jQuery(".woocommerce-variation-add-to-cart").removeClass('hide');		
	}
});


jQuery('form.cart .single_variation_wrap').on( 'click', '.direct-debit-link', function(e) {
	
	// ajax request to send email
	var data = {
		'action': 'direct_debit',
	};
	jQuery.post(ajaxurl, data, function (response) {
		if(response){
			
			console.log(response);
		}			
	});
			
    return true;
});
