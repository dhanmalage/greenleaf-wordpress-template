<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 4:55 PM
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
            <div class="about-page-logos-wrapper">
                <h4>ACCREDITATIONS</h4>
				<?php
                    if( have_rows('about_us__logos') ):
                        while ( have_rows('about_us__logos') ) : the_row();
                            ?>
								<div class="media">
									<div class="media-left">
										<img alt="royal warrant logo" class="media-object royal-warrant-logo-home" src="<?php the_sub_field('logo_image'); ?>">					
									</div>
									<div class="media-body">
										<p><?php the_sub_field('logo_text'); ?></p>
									</div>
								</div>
                            <?php
                        endwhile;
                    else :
                    endif;
                ?>
				<div class="dropdown">
					<button class="download-brochure dropdown-toggle" type="button" data-toggle="dropdown">Download Brochures
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
					  <li><a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-indoor' ) ); ?>">Interior Planting</a></li>
					  <li><a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-outdoor' ) ); ?>">Exterior Services</a></li>
					  <li><a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-christmas' ) ); ?>">Christmas</a></li>
					</ul>
				</div>
            </div>
        </div>

    </div>
</div>


<div class="clear"></div>

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">

            <div class="well page-content-full about-main-content">
                <?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
				?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php
						} // end while
					} // end if
				?>
            </div>

        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container content-start-period">
    <div class="row-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
			<div class="about-page-clients">
			<h4>what out clients say</h4>
				<ul>
					<?php
						$args = array( 'post_type' => 'clients', 'posts_per_page' => 12 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();				  
					?>	
						<li>
							<a href="<?php the_permalink(); ?>">
								<img alt="<?php the_title(); ?>" class="media-object client-small-logo" src="<?php the_post_thumbnail_url(); ?>">
							</a>
						</li>	
					<?php
						endwhile;
						wp_reset_query();
					?>
				</ul>
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


<?php get_footer();?>