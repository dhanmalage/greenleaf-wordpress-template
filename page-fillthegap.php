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

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); global $post; ?>  

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

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<img src="<?php echo get_field('main_image_banner'); ?>" alt="promotion" class="img-responsive">            
        </div>
    </div>
</div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<img src="<?php echo get_field('second_image'); ?>" alt="promotion" class="img-responsive">            
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="promo-content-left promo-footer"> 
				  
					<?php the_content(); ?>
					
						
				<div class="fill-promo-download">
					<?php echo do_shortcode('[contact-form-7 id="1209" title="Fill the gap promotion download"]'); ?>
				</div>				
				<hr>
				<div class="fill-promo-video">
					<?php echo get_field('video_code'); ?>
				</div>
					
            </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="fill-promo-enquire-content promo-footer">   
				<?php echo do_shortcode('[contact-form-7 id="1210" title="Fill the gap promo Enquire"]'); ?>				
			</div>			
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php endif; ?>	

<div class="clear"></div>

<div class="promo-page-bottom-space"></div>

<?php wp_footer(); ?> 

</body>
</html>

