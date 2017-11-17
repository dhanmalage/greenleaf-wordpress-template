<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/15/2016
 * Time: 11:44 AM
 */
?>

<?php get_header();?>


<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding-left no-padding-right">

            <div id="inner-page-top-slider" class="slider-pro">
                <div class="sp-slides">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                    ?>                        
						<div class="sp-slide">
						<?php $image = get_sub_field('inner_page_top_slider_images'); ?>
                            <img class="sp-image img-responsive" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"
                                 data-src="<?php echo $image['url']; ?>"
                                 data-retina="<?php echo $image['url']; ?>"/>
                        </div>
                    <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="sp-thumbnails">
                    <?php
                    if( have_rows('inner_page_top_slider') ):
                        while ( have_rows('inner_page_top_slider') ) : the_row();
                    ?>
                        <div class="sp-thumbnail">
                            <div class="sp-thumbnail-image-container">
							<?php $image = get_sub_field('inner_page_top_slider_images'); ?>
                                <img class="sp-thumbnail-image" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"/>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 no-padding-right">
                <div class="inner-page-checklist-wrapper">
                    <div class="inner-page-checklist">
                        <ul>
                            <?php
								if( have_rows('bullet_points') ):
									while ( have_rows('bullet_points') ) : the_row();
										?>
										<li><?php the_sub_field('bullets'); ?></li>
										<?php
									endwhile;
								else :
								endif;
							?>
                        </ul>
                    </div>

                    <div class="buttons">
                        <a href="javascript:;" class="enquire-now" data-toggle="modal" data-target="#enquire">Enquire now</a>
                        <a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-indoor' ) ); ?>" class="download-brochure">Download brochure</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid planting-services">
        <div class="col-xs-12 col-sm-8 disigner-range-experience-wrap-left">
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
            ?>
            <div class="content-read-more">
                <h1><?php if($greenleaf_theme_options['page_title_prefix_switch'] == true): echo $greenleaf_theme_options['page_title_prefix_text']; endif; ?> <?php the_title(); ?></h1>
                <p class="excerpt"><?php custom_echo(get_the_content(), 300); ?><br> <a href="" class="read">Read More</a></p>
                <div class="content"><?php the_content(); ?><a href="" class="read-less">Read Less</a></div>
            </div>
            <?php
                } // end while
            } // end if
            ?>
        </div>
        <div class="col-xs-12 col-sm-4">
            <p class="experiance-title">Expertise</p>
            <div class="disigner-range-experience disigner-range-experience-section-1">
				<p><?php echo get_field('experience_point1'); ?></p> 
			</div>
			<p class="experiance-title">Quality</p>
            <div class="disigner-range-experience disigner-range-experience-section-2">
				<p><?php echo get_field('experience_point2'); ?></p>
            </div>
			<p class="experiance-title">Service</p>
            <div class="disigner-range-experience disigner-range-experience-section-3">
				<p><?php echo get_field('experience_point3'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <div class="contact-banner-wrapper">
                <div class="contact-banner">
                    <h3>Call us for a <span>FREE</span> quote on <a href="tel:<?php echo $greenleaf_theme_options['header_contact_no']; ?>"><?php echo $greenleaf_theme_options['header_contact_no']; ?></a> or <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div class="clear"></div>


<div class="container">
    <div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<div class="plants-banner">
				<h3>Choose your plant displays</h3>
			</div>
		</div>
    </div>	
</div>
	
<div class="clear"></div>

<div class="container category-page-product-container">
    <div class="row-fluid">
		<?php //echo do_shortcode(get_field('product_category_shortcode')); ?>		
		<div class="woocommerce columns-4">
			<ul class="products">
				<?php
				global $paged;

					$paged= (get_query_var('paged' )) ? get_query_var('paged'):1;
					$args = array(
						'post_type' => 'product',
						'paged' => $paged,
						'posts_per_page' => 8,
						'product_cat' => 'designer-range'						
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							woocommerce_get_template_part( 'content', 'product' );
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

<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-bottom-product-colors-wrapper">
				<!--
                <h4>Available in a range of colours (Matt or in Gloss)</h4>
                <ul>
                    <li class="red"></li>
                    <li class="blue"></li>
                    <li class="ash"></li>
                    <li class="white"></li>
                    <li class="black"></li>
                </ul>
				-->
                <div class="category-page-pegination">
                    <?php previous_posts_link( '&laquo; PREV', $loop->max_num_pages) ?>
                    <?php next_posts_link( 'NEXT &raquo;', $loop->max_num_pages) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>


