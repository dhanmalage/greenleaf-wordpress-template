<?php
/**
 * Template for displaying artificial plant categories
 *
 * @package WordPress
 * @subpackage GreenLeaf
 * @since GreenLeaf 1.0
 */
 ?>
 
<?php get_header(); ?>

<?php
	$queried_object = get_queried_object(); 
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id; 
?>

<div class="row-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
		<div class="artificial-carousel owl-carousel owl-theme">									
			<?php
			if( have_rows('slider', $queried_object) ):
				while ( have_rows('slider', $queried_object) ) : the_row();
			?>
			<div class="item">
				<?php $image = get_sub_field('image', $queried_object); ?>
				<div class="artificial-slider-image" style="background-image: url(<?php echo $image['url']; ?>);">
					<div class="artificial-slider-content">
					<?php if(get_sub_field('text_over_image', $queried_object)): ?>
						<div class="artificial-slider-content-inner">
							<h2 style="color: <?php echo get_sub_field('text_color', $queried_object); ?>; background-color: <?php echo hex2rgba(get_sub_field('background_color', $queried_object), 0.7); ?>;"><?php echo get_sub_field('text_over_image', $queried_object); ?></h2>
						</div>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php				
				endwhile;
			endif;
			?>			
		</div>
	</div>
</div>

<div class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="artificial-main-title">
				<h1><?php echo get_field('main_title_text', $queried_object); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-12 cold-md-12">
			<h2 class="artificial-product-title"><?php echo get_field('second_title_text', $queried_object); ?></h2>
		</div>
	</div>
</div>
	
<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section1 health-right-margin">
				<?php
				if( have_rows('column_1', $queried_object) ):
					while ( have_rows('column_1', $queried_object) ) : the_row();
				?>
				<h2><?php echo get_sub_field('column_1_title', $queried_object); ?></h2>
				<div class="description"><?php echo nl2br(get_sub_field('column_1_content', $queried_object)); ?></div>
				<?php
					endwhile;
				endif;
				?>				
			</div>
        </div>
		
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section3">
				<h2><?php echo get_field('column_2_title', $queried_object); ?></h2>
				<div class="description">
					<ul>
						<?php
						if( have_rows('column_2_list', $queried_object) ):
							while ( have_rows('column_2_list', $queried_object) ) : the_row();
						?>
						<li><?php echo get_sub_field('list_item', $queried_object); ?></li>
						<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container category-page-product-container">
    <div class="row-fluid">
		<?php //echo do_shortcode(get_field('product_category_shortcode')); ?>	
		<div class="woocommerce columns-1">
			<ul class="products">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) : the_post(); global $post; $product; $woocommerce;
							woocommerce_get_template_part( 'content', 'artificial' );								
						endwhile;
					} else {
						echo __( 'No products found' );
					}					
					wp_reset_postdata();
				?>								
			</ul><!--/.products-->			
		</div>
    </div>
</div>

<div class="clear"></div>

<?php get_footer(); ?>