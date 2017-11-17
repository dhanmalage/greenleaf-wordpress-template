<?php
/**
 * Template Name: Promotions
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
 * Date: 7/22/2016
 * Time: 10:51 AM
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
			<div class="promo-main-content-template" style="background-image: url(<?php echo get_field('main_background_image'); ?>)">               
				<h1><?php the_title(); ?></h1>
				<h2><?php echo get_field('small_title'); ?></h2>			
				<img src="<?php echo get_field('middle_image'); ?>" alt="promotion" class="img-responsive">
				<div class="promo2-download-btn-wrap1">
					<?php // echo do_shortcode(get_field('download_button_contact_from_7_shortcode')); ?>
					<a href="http://www.phsgreenleaf.co.uk/wp-content/uploads/2017/03/Workplace_Plants_Guide.pdf" class="promo2-download-now" target="_blank">Download Now</a>
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
			<div class="promo-sub-content promo-sub-content2 promo-footer">               
				<h2><?php echo get_field('left_column_main_title'); ?></h2>	
				<p><?php echo get_field('left_column_main_content'); ?></p>
				<hr>
				<h4><?php echo get_field('left_column_list_title'); ?></h4>
				<div class="promo-list-wrap" style="background-image: url(<?php echo get_field('list_image'); ?>)">
					<ul>
						<?php
							// check if the repeater field has rows of data
							if( have_rows('left_column_list') ):

								// loop through the rows of data
								while ( have_rows('left_column_list') ) : the_row();
						?>
									<li><?php the_sub_field('left_column_list_items'); ?></li>
						<?php
								endwhile;

							else :

								// no rows found

							endif;
						?>
					</ul>
				</div>
				<hr>
				<h5><?php echo get_field('download_text'); ?></h5>
				<div class="promo2-download-btn-wrap2">
					<?php //echo do_shortcode(get_field('download_button_contact_from_7_shortcode')); ?>
					<a href="http://www.phsgreenleaf.co.uk/wp-content/uploads/2017/03/Workplace_Plants_Guide.pdf" class="promo2-download-now" target="_blank">Download Now</a>
				</div>
            </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="promo-enquire-content promo-enquire-content2 promo-footer">               
				<h2><?php echo get_field('enquire_title'); ?></h2>	
				<?php echo do_shortcode(get_field('enquire_shortcode')); ?>				
			</div>			
        </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 promotion-template-footer">
			<p><?php echo get_field('footer_text'); ?></p>
		</div>
		
    </div>
</div>

<div class="clear"></div>

<div class="promo-page-bottom-space"></div>

<?php wp_footer(); ?> 

</body>
</html>

