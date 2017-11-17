/**
 * Created by Dananjaya on 7/12/2016.
 */


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


jQuery('document').ready(function() {
    var youtubeid = jQuery('#youtubevideoid').text();
    var options = { videoId: youtubeid, start: 0 };
    jQuery('#video').tubular(options);
    // f-UGhWj1xww cool sepia hd
    // 49SKbS7Xwf4 beautiful barn sepia
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
var windowHeight=jQuery(window).height();

jQuery('#video').css({

    height:windowHeight+'px'

});



jQuery(window).resize(function(){

    var windowHeight=jQuery(window).height();

    jQuery('#video').css({

        height:windowHeight+'px'

    });



});


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
            var count = jQuery('#myCarousel .nav').children().length -1;
            var current = jQuery('#myCarousel .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if(count == id+1) {
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
	
	$( '#inner-page-top-slider' ).sliderPro({
        width: 1324,
        height: 600,
        orientation: 'vertical',
        loop: false,
        arrows: true,
        buttons: false,
        thumbnailsPosition: 'left',
        thumbnailPointer: true,
        thumbnailWidth: 300,
        thumbnailHeight: 176,
        breakpoints: {
			1024: {
                thumbnailsPosition: 'left',
				thumbnailPointer: true,
                thumbnailWidth: 270,
                thumbnailHeight: 158
            },
            800: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 270,
                thumbnailHeight: 158
            },
            500: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 120,
                thumbnailHeight: 50
            }
        }
    });
	
});








