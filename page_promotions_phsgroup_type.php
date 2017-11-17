<?php
/**
 * Template Name: Promotions PHS Group Type
 *
 * @package WordPress
 * @subpackage GreenLeaf
 * @since GreenLeaf 1.0
 */
 ?>

 <?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 5/26/2017
 * Time: 11:18 AM
 */

?>

<html>
<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />		
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<style type="text/css">


</style>

<title>
	<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
	?>
</title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php global $greenleaf_theme_options; ?>

<?php echo $greenleaf_theme_options['google_tag_manager']; ?>

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
?>
<div class="container-full promo-header-full-width">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
				
				<a class="promo-header-logo" href="https://www.phsgreenleaf.co.uk"><img src="http://www.phsgreenleaf.co.uk/wp-content/uploads/2017/08/PHS_GREENLEAF_LOGO.png" alt="logo" class="img-responsive" ></a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
				<div class="promo-header">
					<p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo get_field('header_telephone_number_PHS'); ?>"><?php echo get_field('header_telephone_number_PHS'); ?></a> </p>
					
							
				</div>
			</div>		
		</div>
	</div>
	
</div>

<div class="MainContainer">
	<div class="container-full ">
		<div class="row-fluid">
			
			<div class="col-xs-12 no-padding-left no-padding-right promoimage">
				<div class="tea-promotion-main-image promoimageheight" style="background: linear-gradient(transparent,rgba(0, 0, 0, 0.7)),url(<?php echo get_field('main_banner_image_PHS'); ?>);background-size:cover;"></div>
			</div>
		</div>
	</div> 
</div>
	<div class="container mid-banner">
		<div class="row-fluid abs-position1">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding promo-top-box">
				<div class="color-bar"></div>
				<div class="promo-top-title">
				<?php echo get_field('top_title_phs'); ?>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="email-form">
				<div class="email-form-title"><?php echo get_field('contact_form_title'); ?></div>
				
				<?php $cform = get_field('contact_form_short_code_PHS'); ?>
				<?php echo do_shortcode( $cform ); ?>
				</div>
			</div>
		</div>
	</div>
	
	



<div class="promo-main-content-outer">
	<div class="container yellow-top-content">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="promo-contents">
					<?php echo get_field('top_contents_PHS'); ?>
					<?php if (get_field( "download_button_link" )) {?>
					
						<div class="buttons">          
							<a href="<?php echo get_field( "download_button_link" );?>" class="download-brochure" id="download-brochure" target="_blank"><?php echo get_field( "download_button_text" );?></a>
				        </div>
						
						<?php
						$show_button = get_field('show_download_button');
						
						if( $show_button && in_array('yes', $show_button) ){ ?>
							<script>document.getElementById("download-brochure").style.display = "none"; </script>

						<?php } 
						
						$open_file = get_field('open_the_file');
						if( $open_file && in_array('yes', $open_file) ){ ?>
							<script>document.getElementById("download-brochure").style.display = "none"; </script>
						<?php } ?>
						
					<?php }?>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				
			</div>
							
		</div>
	</div>
	
	<div class="clear"></div>

	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				
				<div class="promo-middle_title">
					<?php echo get_field('middle_title_PHS'); ?>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="clear"></div>
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
				<div class="promo-product-wrapper">
					<div class="product-title">
						<?php echo get_field('product1_title'); ?>
					</div>
					<div class="product-image">
						<img src="<?php echo get_field('product1_image'); ?>" width="300" height="300" class="img-responsive" />
					</div>
					<div class="product-contents">
						<?php echo get_field('product1_content'); ?>
					</div>
					
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
				<div class="promo-product-wrapper">
					<div class="product-title">
						<?php echo get_field('product2_title'); ?>
					</div>
					<div class="product-image">
						<img src="<?php echo get_field('product2_image'); ?>" width="300" height="300" class="img-responsive" />
					</div>
					<div class="product-contents">
						<?php echo get_field('product2_content'); ?>
					</div>
					
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
				<div class="promo-product-wrapper">
					<div class="product-title">
						<?php echo get_field('product3_title'); ?>
					</div>
					<div class="product-image">
						<img src="<?php echo get_field('product3_image'); ?>" width="300" height="300" class="img-responsive" />
					</div>
					<div class="product-contents">
						<?php echo get_field('product3_content'); ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>

	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="bottom-title">
					<?php echo get_field('bottom_title'); ?>
				</div>
				<div class="bottom-content">
					<?php echo get_field('bottom_content'); ?>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="bottom-image">
					<img src="<?php echo get_field('bottom_right_image'); ?>" width="500" height="500" class="img-responsive" />
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="clear"></div>
	<div class="container bottom-icon">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right footer-icon">
				<img src="<?php echo get_field('footer_icon_1'); ?>" width="75" height="75" />
				<p><?php echo get_field('footer_text_1'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right footer-icon">
				<img src="<?php echo get_field('footer_icon_2'); ?>" width="75" height="75" />
				<p><?php echo get_field('footer_text_2'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right footer-icon">
				<img src="<?php echo get_field('footer_icon_3'); ?>" width="75" height="75" />
				<p><?php echo get_field('footer_text_3'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right footer-icon">
				<img src="<?php echo get_field('footer_icon_4'); ?>" width="75" height="75" />
				<p><?php echo get_field('footer_text_4'); ?></p>
			</div>
		</div>
	</div>
	
	<div class="clear"></div>

	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right promo-footer-button">
				
				
				<div class="icon-button">
				  <a class="icon-container" href="<?php echo get_field('footer_button_link'); ?>">
					<i class="fa fa-angle-up"></i><?php echo get_field('footer_button_text'); ?>
				  </a>
				</div>
			</div>
			
		</div>
	</div>
	
	
</div>

<!--
<div class="tea-promotion-footer-outer">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="tea-promotion-footer-text">
					<p><?php // echo get_field('promotion_footer_text'); ?></p>
				</div>
			</div>	
		</div>
	</div>
</div>
-->

<div class="clear"></div>

<div class="promo-page-bottom-space2"></div>

<?php
		} // end while
	} // end if
?>
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
				<div class="footer-social-links">
					<h4>Follow PHS</h4>
					<ul>
					
												
												
													<li class="linkedin"><a href="https://www.linkedin.com/company/phsgreenleaf" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												
												
													
												
													<li class="instagram"><a href="https://www.instagram.com/phs_greenleaf/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
											
											<div class="cookie-text">This site uses cookies. View our Cookie policy <a href="https://www.phsgreenleaf.co.uk/cookie-policy/" target="_blank">here</a></div>
				</div>
				
			</div>
		</div>
		
	
	</div>
</footer>
<?php wp_footer(); ?> 

	<script>
		
		
		
		/** 
		 * sales force integration
		 *  Contact Form 7 Integration
		 *	wpcf7:invalid
		 *	wpcf7:spam
		 *	wpcf7:mailsent
		 *	wpcf7:mailfailed
		 *	wpcf7:submit
		 */ 
		jQuery(".wpcf7").on('wpcf7:mailsent', function(e){
		//jQuery('.wpcf7-submit').on('click', function (e) {
			
			var input_id = Date.now().toString(); // .slice(-3) removed
			var input_name = jQuery('.wpcf7 :input[name="your-name"]').val().toString();
			var input_company = jQuery('.wpcf7 :input[name="company"]').val().toString();
			var input_postcode = jQuery('.wpcf7 :input[name="postcode"]').val().toString();
			var input_tel = jQuery('.wpcf7 :input[name="your-tel"]').val().toString();
			var input_email = jQuery('.wpcf7 :input[name="your-email"]').val().toString();	
			var ref = document.referrer;
			var url = window.location.href;
			if(ref == null || ref == ""){
				var referrer = ref;
			}else{
				var referrer = "";
			}
				
			jQuery.ajax({
				 url: "https://mobilewebapi.phs.co.uk/Salesforce.MobileServicesTest/api/Authentication/Login",
				 data: { employeeNumber: "53698", password: "" },
				 type: "POST",
				 success: function(r) { 
					
					jQuery.ajax({
						 url: "https://mobilewebapi.phs.co.uk/Salesforce.MobileServicesTest/api/DriverLeads/Leads",
						 data: { 
							id: input_id,
							surname: input_name,
							companyName: input_company,
							postcode: input_postcode,
							phoneNumber: input_tel,
							description: "sample string 7",
							accountNumber: 7,
							createdDate: "2017-06-06T14:22:33.7060968+01:00",
							status: "sample string 8",
							email: input_email,
							images: [
								"sample string 1",
								"sample string 2"
							],
							source: url,
							referrer: referrer
						 },
						 type: "POST",
						 beforeSend: function(xhr){xhr.setRequestHeader('auth_key', r.token);},
						 success: function(res) {
							
						 }		 
					});
					
				 }		 
			});
			
			<?php
						$show_button = get_field('show_download_button');
						if( $show_button && in_array('yes', $show_button) ){
							echo 'document.getElementById("download-brochure").style.display = "block";'; 
						}
						$open_file = get_field('open_the_file');
						if( $open_file && in_array('yes', $open_file) ){ ?>
							//window.location=<?php echo get_field( "download_button_link" ); ?>
							//alert <?php echo get_field( "download_button_link" ); ?>;
							
							window.open('<?php echo get_field( "download_button_link" ); ?>', "_blank")
							
							
							
							
						<?php } ?>
			
		});

	</script>

	

<?php echo $greenleaf_theme_options['analytics_script']; ?>

</body>
</html>

