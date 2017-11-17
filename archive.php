<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 10:58 AM
 */

?>


<?php get_header(); ?>
       

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left">
		
		<h1 class="archive-page-title"><?php wp_title(''); ?></h1>
		
		<?php 
		
		/*
			// the query to set the posts per page to 3
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('posts_per_page' => 5, 'paged' => $paged );
			query_posts($args); 
			
			if ( have_posts() ):
				while ( have_posts() ):
					the_post();
					*/
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$query_args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'paged' => $paged
			);
			$the_query = new WP_Query($query_args);
			if ($the_query->have_posts()):
			while ($the_query->have_posts()) : $the_query->the_post();
		
		?>

            <div class="archive-page-content-wrap">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>	
				<div class="clear"></div>
				<?php
					$content = get_the_content();
					$content = preg_replace("/<img[^>]+\>/i", " ", $content);          
					$content = apply_filters('the_content', $content);
					$content = str_replace(']]>', ']]>', $content);
				?>
                <div class="archive-post-content"><p><?php custom_echo($content, 250); ?><span class="read-more"><a href="<?php the_permalink(); ?>"> Read more...</a></span></p></div>
				<div class="clear"></div>
            </div>
			
		<?php
				endwhile; // end while
		?>
		<div class="news-pegination">
			<!-- pagination -->
			<?php next_posts_link(); ?>
			<?php previous_posts_link(); ?>
			<?php //else : ?>
			<!-- No posts found -->
		</div>
		<div class="clear"></div>
		<?php
				
			endif; // end if
		?>

        </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding-right">
			<?php if ( is_active_sidebar( 'news-sidebar' ) ) : ?>
				<div id="single-post-sidebar" class="single-post-sidebar-wrapper widget-area" role="complementary">
					<?php dynamic_sidebar( 'news-sidebar' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</div>
    </div>
</div>

<div class="clear"></div>



<!--

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
                                <img class="sp-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-src="<?php the_sub_field('inner_page_top_slider_images'); ?>"
                                     data-retina="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
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
                                    <img class="sp-thumbnail-image" src="<?php the_sub_field('inner_page_top_slider_images'); ?>"/>
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
                    <h3>Call us for a <span>FREE</span> quote on <a href="tel:<?php echo $teacrate_theme_options['contact_number']; ?>"><?php echo $teacrate_theme_options['contact_number']; ?></a> or <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact Us</a></h3>
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
                <h2><?php the_title(); ?></h2>
                <div class="content"><?php the_content(); ?></div>
            </div>
            <?php
                } // end while
            } // end if
            ?>
        </div>
        <div class="col-xs-12 col-sm-4">
		
            
			
        </div>
    </div>
</div>

<div class="clear"></div>

-->


<?php get_footer(); ?>

