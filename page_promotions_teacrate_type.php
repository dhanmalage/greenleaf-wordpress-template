<?php
/**
 * Template Name: Promotions Teacrate Type
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

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
			
			<a class="promo-header-logo" href="<?php bloginfo('url'); ?>"><img src="<?php echo $greenleaf_theme_options['logo_header']['url']; ?>" alt="logo" class="img-responsive" ></a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right">
			<div class="promo-header">
				<?php if(get_field('header_title') != null){
				?>
					<p style="text-transform: initial;"><?php echo get_field('header_title'); ?></p>
				<?php
				} else{
				?>
					<p>call us today on <span><?php echo $greenleaf_theme_options['header_contact_no']; ?></span></p>
				<?php
				}
				?>				
			</div>
		</div>		
    </div>
</div>

<div class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-left no-padding-right promoimageheight mobile-add-padding">
			<div class="tea-promotion-main-title">
				<h1><?php echo get_field('main_title'); ?></h1>
				<h2><?php echo get_field('small_title'); ?></h2>
			</div>
		</div>	
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left no-padding-right promoimage">
			<div class="tea-promotion-main-image promoimageheight" style="background-image: url(<?php echo the_post_thumbnail_url( 'full' ); ?>)"></div>
		</div>
	</div>
</div>

<div class="clear"></div>

<div class="main-content-outer">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="tea-promotion-main-content-left">
					<?php the_content(); ?>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding-left no-padding-right mobile-add-padding">
				<div class="tea-promotion-main-content-right tea-promo-enquire-content">
				<?php if( get_field('contact_form_title') ): ?>
					<h2><?php echo get_field('contact_form_title'); ?></h2>
				<?php endif; ?>
					<p><?php echo get_field('contact_form_text'); ?></p>
					<?php echo do_shortcode(get_field('promotion_contact_form')); ?>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 promotion-template-footer">
				<p style="color: #46565c; font-weight: normal;"><?php echo get_field('promotion_footer_text'); ?></p>
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

<div class="promo-page-bottom-space"></div>

<?php
		} // end while
	} // end if
?>

<?php wp_footer(); ?> 

<?php echo $greenleaf_theme_options['analytics_script']; ?>

</body>
</html>

