<?php

/**

 * Created by PhpStorm.

 * User: dhana

 * Date: 7/23/2016

 * Time: 10:08 PM

 */



?>



<?php get_header(); ?>



<div class="container">
    

        <?php

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();
		?>

	<div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="page-content-full client-title-single">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
		
	<div class="row-fluid">
	<div class="col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div id="inner-page-top-slider" class="slider-pro">
                <div class="sp-slides">
                    <?php
                    if( have_rows('clients_work') ):
                        while ( have_rows('clients_work') ) : the_row();
                            ?>
							<div class="sp-slide">
							<?php $image = get_sub_field('clients_work_images'); ?>
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
                    if( have_rows('clients_work') ):
                        while ( have_rows('clients_work') ) : the_row();
                            ?>
                            <div class="sp-thumbnail">
                                <div class="sp-thumbnail-image-container">
                                    <?php $image = get_sub_field('clients_work_images'); ?>
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
			<div class="col-md-2 col-lg-2"></div>
	</div>
	
	<div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="client-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

		<?php

				} // end while

			} // end if

        ?>

		
</div>



<?php get_footer(); ?>

