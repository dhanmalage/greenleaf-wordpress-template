<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
<?php
	/*
	echo '<div class="row-fluid">';
		echo '<div class="col-xs-12 col-sm-12 cold-md-12">';
			echo '<h2 class="artificial-product-title">'.get_the_title().'</h2>';
		echo '</div>';
	echo '</div>';
	
	echo '<div class="clear"></div>';
	*/
	echo '<div class="row-fluid">';
	
		//plant 1
		echo '<div class="col-xs-12 col-sm-3 cold-md-3 info-left">';
		echo '<a href="' . get_permalink() . '">';
		echo '<img width="450" height="450" src="' . get_post_meta( get_the_ID(), '_plant_1_image', true ) . '" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="' . get_post_meta( get_the_ID(), '_plant_name_artificial_1', true ) . '" sizes="(max-width: 450px) 100vw, 450px">';
		echo '<h3>' . get_post_meta( get_the_ID(), '_plant_name_artificial_1', true ) . '</h3>';
		echo '</a>';
		echo '<div class="category-page-product-wrapper">';		
		echo '<div class="info-left">';	
		$plant_height = get_post_meta( get_the_ID(), '_plant_height_artificial_1', true );
		if($plant_height != null):
		echo '<p class="dimensions">Plant Height - <span>' . get_post_meta( get_the_ID(), '_plant_height_artificial_1', true ) . 'cm</span></p>';
		endif;		
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_flowers_artificial_1', true ) . '</p>';				
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_vase_type_artificial_1', true ) . '</p>';
		$width = get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true );
		$height = get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true );
		$length = get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true );
		if($width != "" && $height != ""):
			if($length != null):
				echo '<p class="dimensions">Length x Width x Height - <span>'  . get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			else:
				echo '<p class="dimensions">Width x Height - <span>' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			endif;
		endif;		
		echo '<p class="dimensions light-level"><span class="label label-default">' . get_post_meta( get_the_ID(), '_light_level_artificial_1', true ) . '</span></p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		//plant 2
		echo '<div class="col-xs-12 col-sm-3 cold-md-3 info-left">';
		echo '<a href="' . get_permalink() . '">';
		echo '<img width="450" height="450" src="' . get_post_meta( get_the_ID(), '_plant_2_image', true ) . '" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="' . get_post_meta( get_the_ID(), '_plant_name_artificial_2', true ) . '" sizes="(max-width: 450px) 100vw, 450px">';
		echo '<h3>' . get_post_meta( get_the_ID(), '_plant_name_artificial_2', true ) . '</h3>';
		echo '</a>';
		echo '<div class="category-page-product-wrapper">';
		echo '<div class="info-left">';	
		$plant_height = get_post_meta( get_the_ID(), '_plant_height_artificial_2', true );
		if($plant_height != null):
		echo '<p class="dimensions">Plant Height - <span>' . get_post_meta( get_the_ID(), '_plant_height_artificial_2', true ) . 'cm</span></p>';
		endif;
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_flowers_artificial_2', true ) . '</p>';		
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_vase_type_artificial_2', true ) . '</p>';		
		$width = get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true );
		$height = get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true );
		$length = get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true );
		if($width != "" && $height != ""):
			if($length != null):
				echo '<p class="dimensions">Length x Width x Height - <span>'  . get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			else:
				echo '<p class="dimensions">Width x Height - <span>' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			endif;
		endif;								
		echo '<p class="dimensions light-level"><span class="label label-default">' . get_post_meta( get_the_ID(), '_light_level_artificial_2', true ) . '</span></p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		//plant 3
		echo '<div class="col-xs-12 col-sm-3 cold-md-3 info-left">';
		echo '<a href="' . get_permalink() . '">';
		echo '<img width="450" height="450" src="' . get_post_meta( get_the_ID(), '_plant_3_image', true ) . '" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="' . get_post_meta( get_the_ID(), '_plant_name_artificial_3', true ) . '" sizes="(max-width: 450px) 100vw, 450px">';
		echo '<h3>' . get_post_meta( get_the_ID(), '_plant_name_artificial_3', true ) . '</h3>';
		echo '</a>';
		echo '<div class="category-page-product-wrapper">';
		echo '<div class="info-left">';	
		$plant_height = get_post_meta( get_the_ID(), '_plant_height_artificial_3', true );
		if($plant_height != null):
		echo '<p class="dimensions">Plant Height - <span>' . get_post_meta( get_the_ID(), '_plant_height_artificial_3', true ) . 'cm</span></p>';
		endif;	
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_flowers_artificial_3', true ) . '</p>';				
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_vase_type_artificial_3', true ) . '</p>';				
		$width = get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true );
		$height = get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true );
		$length = get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true );
		if($width != "" && $height != ""):
			if($length != null):
				echo '<p class="dimensions">Length x Width x Height - <span>'  . get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			else:
				echo '<p class="dimensions">Width x Height - <span>' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			endif;
		endif;							
		echo '<p class="dimensions light-level"><span class="label label-default">' . get_post_meta( get_the_ID(), '_light_level_artificial_3', true ) . '</span></p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
		//plant 4
		echo '<div class="col-xs-12 col-sm-3 cold-md-3">';
		echo '<a href="' . get_permalink() . '">';
		echo '<img width="450" height="450" src="' . get_post_meta( get_the_ID(), '_plant_4_image', true ) . '" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="' . get_post_meta( get_the_ID(), '_plant_name_artificial_4', true ) . '" sizes="(max-width: 450px) 100vw, 450px">';
		echo '<h3>' . get_post_meta( get_the_ID(), '_plant_name_artificial_4', true ) . '</h3>';
		echo '</a>';
		echo '<div class="category-page-product-wrapper">';		
		echo '<div class="info-left">';		
		$plant_height = get_post_meta( get_the_ID(), '_plant_height_artificial_4', true );
		if($plant_height != null):
		echo '<p class="dimensions">Plant Height - <span>' . get_post_meta( get_the_ID(), '_plant_height_artificial_4', true ) . 'cm</span></p>';
		endif;	
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_flowers_artificial_4', true ) . '</p>';				
		echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_vase_type_artificial_4', true ) . '</p>';				
		$width = get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true );
		$height = get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true );
		$length = get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true );
		if($width != "" && $height != ""):
			if($length != null):
				echo '<p class="dimensions">Length x Width x Height - <span>'  . get_post_meta( get_the_ID(), '_plant_length_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			else:
				echo '<p class="dimensions">Width x Height - <span>' . get_post_meta( get_the_ID(), '_plant_width_multi_artificial_1', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi_artificial_1', true ) . 'cm</span></p>';
			endif;
		endif;							
		echo '<p class="dimensions light-level"><span class="label label-default">' . get_post_meta( get_the_ID(), '_light_level_artificial_4', true ) . '</span></p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
	echo '</div>';
	echo '<div class="clear"></div>';
	
	echo '<div class="row-fluid">';
		echo '<div class="col-xs-12 col-sm-12 cold-md-12 info-left">';
			echo '<a href="' . get_permalink() . '" class="button btn-order-now">Order Now</a>';
		echo '</div>';
	echo '</div>';
?>
</li>