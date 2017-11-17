<?php get_header(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="col-md-12">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
			?>
				<div class="single-page-container">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			<?php
				} // end while
			} // end if
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>