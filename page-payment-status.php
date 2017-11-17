<?php get_header(); ?>

<div class="container">
	<div class="row-fluid">
		<div class="col-md-12">
		
		
		<div class="single-page-container">
			<?php
			/*
				print_r($_POST);
				
				foreach ($_POST as $key => $value) {
				  echo '<p>'.$key.'</p>';
					  foreach($value as $k => $v)
					  {
						  echo '<p>'.$k.'</p>';
						  echo '<p>'.$v.'</p>';						  
						  echo '<hr />';
						  foreach ($v as $i => $j){
							echo '<p>'.$i.'</p>';						  
							echo '<p>'.$j.'</p>';						  
							echo '<hr />';
						  }
					  }

				} 
			*/
			?>
		</div>
		
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