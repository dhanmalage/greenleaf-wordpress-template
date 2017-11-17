<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/21/2016
 * Time: 5:14 PM
 */

?>

<?php get_header(); ?>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>
            
            

<div class="container content-start-period">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding-left">

            <div class="blog-page-banner">
                <h1><?php the_title(); ?></h1>
				<div class="blog-image">
					<img src="<?php the_post_thumbnail_url( 'large' ); ?>" class="img-responsive">
				</div>
				<br>
				<div class="clear"></div>
                <div class="blog-post-content"><?php the_content(); ?></div>
            </div>

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

<?php
		} // end while
	} // end if
?>

<?php get_footer(); ?>

