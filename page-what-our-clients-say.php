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

	<div class="row-fluid">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="well page-content-full">

                <?php

					if ( have_posts() ) {

						while ( have_posts() ) {

							the_post();

				?>

					<h1 class="clients-page-title"><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php

						} // end while

					} // end if

				?>

            </div>

        </div>

	</div>

	<div class="row-fluid">

		

			<?php

				$args = array( 'post_type' => 'clients', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();				  
				  ?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="panel-group">
							<div class="panel panel-default">
							  <div class="panel-heading client-small-title"><h4><?php the_title(); ?></h4></div>
							  <div class="panel-body">
							  
								<div class="media">
								<div class="media-left">
									<a href="<?php the_permalink(); ?>">
										<img alt="<?php the_title(); ?>" class="media-object client-small-logo" src="<?php the_post_thumbnail_url(); ?>">
									</a>
								</div>
								<div class="media-body">
									<p><?php custom_echo(get_the_content(), 200); ?></p>
									<p><a href="<?php the_permalink(); ?>">Read more...</a></p>
								</div>
								</div>
								
							  </div>
							</div>
						</div>
					</div>
				  <?php
				endwhile;
			
			?>

		

	</div>

</div>

<?php get_footer(); ?>

