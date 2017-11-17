<?php
/*
Template Name: Promotions
*/
?>
<html>
<head>
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

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
			
			<a class="promo-header-logo" href="<?php bloginfo('url'); ?>"><img src="<?php echo $greenleaf_theme_options['logo_header']['url']; ?>" alt="logo" class="img-responsive" ></a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
			<div class="promo-header">
				<p>call us today on <span><?php echo $greenleaf_theme_options['header_contact_no']; ?></span></p>				
			</div>
		</div>		
    </div>
</div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<div class="promo-main-content">               
				<h1>christmas made simple <br>with phs greenleaf</h1>
				<h2>a guide to christmas tree hire</h2>			
				<img src="<?php echo get_template_directory_uri(); ?>/images/promo_book.png" alt="promotion" class="img-responsive">
				<div class="promo2-download-btn-wrap1">
					<?php echo do_shortcode('[contact-form-7 id="993" title="Promotion Download 2"]'); ?>
				</div>
            </div>
			
			<hr>			
			
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="promo-sub-content promo-footer">               
				<h2>Choose the right Christmas tree with our Christmas Hire Guide!</h2>	
				<p>PHS Greenleaf can take the strain away from decorating your premises over the festive period. With over 15 years' experience, we can help you with the Installation, delivery and collection of your display. All you have to do is choose the right tree and accessories with the help of our Christmas Tree Hire Guide.</p>
				<hr>
				<h4>Our guide has everything you need to help you choose  the perfect tree</h4>
				<div class="promo-list-wrap">
					<ul>
						<li>Real or replica trees</li>
						<li>Size</li>
						<li>Accessories</li>
						<li>Colour and design</li>
					</ul>
				</div>
				<hr>
				<h5>Download our Christmas Tree Hire guide to enjoy a stress free Christmas!</h5>
				<div class="promo2-download-btn-wrap2">
					<?php echo do_shortcode('[contact-form-7 id="993" title="Promotion Download 2"]'); ?>
				</div>
            </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="promo-enquire-content promo-footer">               
				<h2>get your free quote today</h2>	
				<?php echo do_shortcode('[contact-form-7 id="984" title="Promo Enquire"]'); ?>
				<!--
				<form>
					<div class="row">
						<div class="col-xs-12 form-group">
							<label for="email">Name</label>
							<input class="form-control" type="text" />
						</div>
						<div class="col-xs-12 form-group">
							<label for="email">Company Name</label>
							<input class="form-control" type="text" />
						</div>
						<div class="col-xs-12 form-group">
							<label for="email">Telephone</label>
							<input class="form-control" type="text" />
						</div>
						<div class="col-xs-12 form-group">
							<label for="email">Email</label>
							<input class="form-control" type="text" />
						</div>
						<div class="col-xs-12 form-group">
							<label for="email">Postcode</label>
							<input class="form-control" type="text" />
						</div>
						<div class="col-xs-12 form-group promo-enquire-submit">
							<a href="javascript:;">Enquire Now</a>
						</div>
					</div>
				</form>.
				-->
			</div>			
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="promo-page-bottom-space"></div>

<?php wp_footer(); ?> 

</body>
</html>

