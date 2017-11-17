<?php
/**
 * Template Name: Artificial Plants
 *
 * @package WordPress
 * @subpackage GreenLeaf
 * @since GreenLeaf 1.0
 */
 ?>
 
<?php get_header(); ?>

<?php
	if ( have_posts() ):
		while ( have_posts() ):
			the_post(); global $post;
?>

<div class="row-fluid">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
		<div class="artificial-carousel owl-carousel owl-theme">									
			<?php
			if( have_rows('slider') ):
				while ( have_rows('slider') ) : the_row();
			?>
			<div class="item">
				<?php $image = get_sub_field('image'); ?>
				<div class="artificial-slider-image" style="background-image: url(<?php echo $image['url']; ?>);">
					<div class="artificial-slider-content">
					<?php if(get_sub_field('text_over_image')): ?>
						<div class="artificial-slider-content-inner">
							<h2 style="color: <?php echo get_sub_field('text_color'); ?>; background-color: <?php echo hex2rgba(get_sub_field('background_color'), 0.7); ?>;"><?php echo get_sub_field('text_over_image'); ?></h2>
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
				<h1><?php echo get_field('main_title_text'); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="container artificial-page-product-container">
    <div class="row-fluid">
		<?php					
			$term_id = 22;
			$taxonomy_name = 'product_cat';
			$termchildren = get_term_children( $term_id, $taxonomy_name );										
			foreach ( $termchildren as $child ) {
				$term = get_term_by( 'id', $child, $taxonomy_name );
				$thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
				$term_img = wp_get_attachment_url(  $thumb_id );
				?>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<a href="<?php echo get_term_link( $child, $taxonomy_name ); ?>">
							<img src="<?php echo $term_img; ?>" class="img-responsive">
							<span><?php echo $term->name; ?></span>
						</a>
					</div>
				<?php
			}
			
		/*
			global $paged;
			$paged= (get_query_var('paged' )) ? get_query_var('paged'):1;
			$args = array(
				'post_type' => 'product',
				'paged' => $paged,
				'posts_per_page' => 8,
				'product_cat' => 'artificial-plants'						
				);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
				while ( $loop->have_posts() ) : $loop->the_post(); global $post; $product; $woocommerce;
					woocommerce_get_template_part( 'content', 'artificial' );								
				endwhile;
			} else {
				echo __( 'No products found' );
			}
			
			wp_reset_postdata();
		*/
		?>		
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section1 health-right-margin artificial-health-margin">
				<?php
				if( have_rows('column_1') ):
					while ( have_rows('column_1') ) : the_row();
				?>
				<h2><?php echo get_sub_field('column_1_title'); ?></h2>
				<div class="description">
					<?php the_sub_field('column_1_content'); ?>
				</div>				
				<?php
					endwhile;
				endif;
				?>	
				<div class="inner-page-checklist-wrapper">
					<div class="buttons">
						<a href="javascript:;" class="enquire-now" data-toggle="modal" data-target="#enquire">Enquire now</a>
						<a href="<?php echo get_field('brochure_link'); ?>" class="download-brochure" target="_blank">Download brochure</a>
					</div>
				</div>
			</div>
        </div>
		
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-left no-padding-right">
            <div class="health-benifits health-benifits-section3 artificial-health-margin">
				<h2><?php echo get_field('column_2_title'); ?></h2>
				<div class="description">
					<ul>
						<?php
						if( have_rows('column_2_list') ):
							while ( have_rows('column_2_list') ) : the_row();
						?>
						<li><?php echo get_sub_field('list_item'); ?></li>
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

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-bottom-product-colors-wrapper">				
                <div class="category-page-pegination">
                    <?php previous_posts_link( '&laquo; PREV', $loop->max_num_pages) ?>
                    <?php next_posts_link( 'NEXT &raquo;', $loop->max_num_pages) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	endwhile;
	endif;
	wp_reset_query();
?>

<?php get_footer(); ?>