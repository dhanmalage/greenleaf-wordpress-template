<?php get_header(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="col-md-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
			?>
					<h1 class="brochure-page-title"><?php the_title(); ?></h1>
					<?php //the_content(); ?>
					<?php
				} // end while
			} // end if
			?>
					
					<div class="row">
					<?php

					// check if the repeater field has rows of data
					if( have_rows('download_brochures') ):

						// loop through the rows of data
						while ( have_rows('download_brochures') ) : the_row();
					?>
					
					<div class="col-sm-4">
						<div class="panel-group">

							<div class="panel panel-default">
							  <div class="panel-heading"><h5><?php the_sub_field('download_brochure_title'); ?></h5></div>
							  <div class="panel-body brochure-panel-body" style="background-image: url(<?php the_sub_field('download_brochure_image'); ?>);">	  
							  </div>	
								<div class="panel-footer">							  
								  <a href="<?php the_sub_field('download_brochure_file'); ?>" class="btn btn-block btn-brochure-download" target="_blank">Download</a>
								</div>
							</div>
							
						</div>
					</div>
					
					<?php
						endwhile;

					else :

						// no rows found

					endif;

					?>
					
					</div>
					
					
			
			
		</div>
	</div>
</div>

<?php get_footer(); ?>


