<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/22/2016
 * Time: 12:07 PM
 */

?>

<?php get_header();?>


<div class="container content-start-period">
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
                    <a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-christmas' ) ); ?>" class="download-brochure">Download brochure</a>
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
            <div class="disigner-range-experience xmas-experience-section-1">
			<p><?php echo get_field('experience_point1'); ?></p>
            </div>
			<p class="experiance-title">Quality</p>
            <div class="disigner-range-experience xmas-experience-section-2">
			<p><?php echo get_field('experience_point2'); ?></p>
            </div>
			<p class="experiance-title">Service</p>
            <div class="disigner-range-experience xmas-experience-section-3">
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
            <div id="inner-page-bottom-slider" class="slider-pro">
                <div class="sp-slides">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('inner_page_bottom_slider') ):

                        // loop through the rows of data
                        while ( have_rows('inner_page_bottom_slider') ) : the_row();
                            ?>
                            <div class="sp-slide">
							<?php $image = get_sub_field('bottom_slider_images'); ?>
								<img class="sp-image img-responsive" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>"
									 data-src="<?php echo $image['url']; ?>"
									 data-retina="<?php echo $image['url']; ?>"/>
							</div>
                            <?php
                        endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </div>
				
				<div class="gallery-title">
                    <h3>Gallery</h3>
                </div>
				
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
