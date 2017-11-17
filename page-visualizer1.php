<?php
/**
 * Created by PhpStorm.
 * User: Dananjaya
 * Date: 7/22/2016
 * Time: 12:29 PM
 */

?>

<?php get_header();?>


<div  class="container">
	<div class="row-fluid">
		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 visualiser-sidebar-wrapper no-padding-left" id="visualiser-sidebar-wrap">
			<div class="visualiser-sidebar">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-small.png">
				<!-- <img class="visualiser-menu-btn" src="<?php // echo get_template_directory_uri(); ?>/images/menu-button.png"> -->		
				<div class="visualizer-info-btn" data-toggle="modal" data-target="#myModal"><button class="btn btn-xs visualiser-info-btn" title="How to use visualiser" data-toggle="tooltip">instructions</button></div>
				
				<div class="dropdown visualizer-backgrounds" title="Choose your background" data-toggle="tooltip">
					<div class="dropdown-toggle"><i class="fa fa-picture-o" aria-hidden="true" data-toggle="dropdown"></i></div>		
					  <ul class="dropdown-menu viz-dropdown"> 
						<li><div class="visualizer-background-btn" dataurl="<?php echo $greenleaf_theme_options['page_visualizer_background1']['url']; ?>">Office</div></li>
						<li><div class="visualizer-background-btn" dataurl="<?php echo $greenleaf_theme_options['page_visualizer_background2']['url']; ?>">Hotel Reception</div></li>
						<li><div class="visualizer-background-btn" dataurl="<?php echo $greenleaf_theme_options['page_visualizer_background3']['url']; ?>">Pub</div></li>
					  </ul>
				</div>
				
				<a class="hide" id="visualizer-default-background" dataimgurl="<?php echo $greenleaf_theme_options['page_visualizer_background4']['url']; ?>"></a>
				<div class="visualizer-custom-image-btn" id="visualizer-custom-background"><i class="fa fa-camera" aria-hidden="true" title="Upload own image size < 500KB" data-toggle="tooltip" ></i></div>
				<div class="visualizer-file-uploader">
				   <input type='file' id='bgimg' />
				</div>

				<?php
				if ( is_user_logged_in() ) {
					echo '<div class="visualizer-custom-image-btn" id="visualizer-save" data-toggle="modal" data-target="#save-dialog"><a href="javascript:;" title="Save your work" data-toggle="tooltip"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></div>';
					echo '<div class="visualizer-custom-image-btn" id="visualizer-load" data-toggle="modal" data-target="#load-dialog"><a href="javascript:;" title="Load last saved file" data-toggle="tooltip"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></div>';
				} else {
					echo '<div class="visualizer-custom-image-btn" id="visualizer-save-btn" data-toggle="modal" data-target="#login"><a href="javascript:;" title="Save your work" data-toggle="tooltip"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></div>';
					echo '<div class="visualizer-custom-image-btn" id="visualizer-load-btn" data-toggle="modal" data-target="#login-load"><a href="javascript:;" title="Load last saved file" data-toggle="tooltip"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></div>';
				}
				?>
				<div id="after-ajax-btn"></div>

				<!-- this is commented temporary because hiding cart and checkout 
				<div class="visualizer-custom-image-btn"><a href="<?php //echo $woocommerce->cart->get_cart_url(); ?>" title="Buy Now" data-toggle="tooltip"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
				-->
				<div class="visualizer-custom-image-btn" data-toggle="modal" data-target="#buy-now-form" id="viz-buy-btn"><a href="javascript:;" title="Buy Now" data-toggle="tooltip"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
				
				<div class="visualizer-custom-image-btn"><a href="javascript:;" title="Download" data-toggle="tooltip" id="canvas-download"><i class="fa fa-download" aria-hidden="true"></i></a></div>
				
				
				<div class="dropdown visualizer-backgrounds" title="Choose the range" data-toggle="tooltip">
					<div class="dropdown-toggle"><i class="fa fa-leaf" aria-hidden="true"></i></div>		
					  <ul class="dropdown-menu viz-dropdown">
						<li><div class="visualizer-custom-image-btn visualizer-cat-icon-first"><a href="javascript:;" class="link-tab active" data-tab="tab-1">Collection Range</a></div></li>
						<li><div class="visualizer-custom-image-btn"><a href="javascript:;" class="link-tab" data-tab="tab-2">Designer Range</a></div></li>
						<li><div class="visualizer-custom-image-btn"><a href="javascript:;" class="link-tab" data-tab="tab-3">Christmas</a></div></li>
						<li><div class="visualizer-custom-image-btn"><a href="javascript:;" class="link-tab" data-tab="tab-4" >Hanging Baskets</a></div></li>
					  </ul>
				</div>

			</div>
		</div>
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 visualiser-main-wrapper" id="visualiser-main-wrap">
			<div class="visualiser-titlebar">
				<h4>Visualiser <div id="mobilel-sidebar-btn" class="mobile-sidebar-btn"><i class="fa fa-cogs" aria-hidden="true"></i></div></h4>				
				
				
				
				
				<!--
				<img src="<?php // echo get_template_directory_uri(); ?>/images/visualiser-profile.png">
				<img src="<?php // echo get_template_directory_uri(); ?>/images/visualiser-cart.png">
				-->
				
				<!--				
				<div id="cart_container">
					<a class="cart-contents" href="<?php //echo WC()->cart->get_cart_url(); ?>" title="<?php //_e( 'View your shopping cart' ); ?>">
						<?php //echo WC()->cart->get_cart_total(); ?>
					</a>
				</div>
				
				<?php //if ( is_user_logged_in() ) { ?>
					<a href="<?php //echo wp_logout_url( $redirect ); ?>">Logout</a>
				<?php //} ?>								-->
				
			</div>                
				<div class="visualiser-product-cat-title-wrapper">
					<a id="link-tab" href="javascript:;" class="link-tab active" data-tab="tab-1">Collection Range</a>
					<a id="link-tab" href="javascript:;" class="link-tab" data-tab="tab-2">Designer Range</a>
					<a id="link-tab" href="javascript:;" class="link-tab" data-tab="tab-3">Christmas</a>
					<a id="link-tab" href="javascript:;" class="link-tab" data-tab="tab-4">Hanging Baskets</a>
				</div>
							
				<div id="myDiv" class="wrapper">
					<div class="main" id="canvas-bgimg">
						<canvas id="canvas"></canvas>
					</div>
				</div>
								
				<div class="visualiser-product-categories" id="visualizer-scrollbar">
						 					
					<div id="content-tab-1" class="visualiser-product-category content-tab active">
						<ul>
						<?php
							$args = array( 'post_type' => 'product', 'posts_per_page' => 50, 'product_cat' => 'collection-range', 'orderby' => 'rand' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
							
								<li>
									<img src="<?php echo get_field('visualizer_image'); ?>" class="visualizer-product-img" alt="Placeholder" data-quantity="1" data-product_id="<?php echo $product->id; ?>">									
									<div class="visualizer-product-content">
										<div><?php the_title(); ?></div>
										<div class="visualizer-product-height">Height - <?php echo get_post_meta( get_the_ID(), '_plant_height_multi', true ); ?> cm</div>
									</div>
								</li>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						</ul>
					</div>
					<div id="content-tab-2" class="visualiser-product-category content-tab">	
					
						<ul id="parent">
						<?php
							$args = array( 'post_type' => 'product', 'posts_per_page' => 50, 'product_cat' => 'designer-range', 'orderby' => 'rand' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

								<li class="contentBlock">
									<img src="<?php echo get_field('visualizer_image'); ?>" class="visualizer-product-img" alt="Placeholder" data-quantity="1" data-product_id="<?php echo $product->id; ?>">									
									<div class="visualizer-product-content">
										<div><?php the_title(); ?></div>
										<div class="visualizer-product-height">Height - <?php echo get_post_meta( get_the_ID(), '_plant_height_multi', true ); ?> cm</div>
									</div>
								</li>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						</ul>
					</div>
					<div id="content-tab-3" class="visualiser-product-category content-tab">
						<ul>
						<?php
							$args = array( 'post_type' => 'product', 'posts_per_page' => 20, 'product_cat' => 'chrsitmas-trees', 'orderby' => 'asc' );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
							
								<li>
									<img src="<?php echo get_field('visualizer_image'); ?>" class="visualizer-product-img" alt="Placeholder" data-quantity="1" data-product_id="<?php echo $product->id; ?>">									
									<div class="visualizer-product-content">
										<div><?php the_title(); ?></div>
										<div class="visualizer-product-height">Height : 2 - 3.6m  </div>
									</div>
								</li>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						</ul>
					</div>
					<div id="content-tab-4" class="visualiser-product-category content-tab">
						<ul>
						<?php
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 50,
								'orderby' => 'asc',
								'tax_query' => array(
									'relation' => 'OR',
									array(
										'taxonomy' => 'product_cat',
										'field' => 'slug',
										'terms' => 'summer-hanging-baskets'
									),
									array(
										'taxonomy' => 'product_cat',
										'field' => 'slug',
										'terms' => 'winter-hanging-baskets'
									)
								),
							);

							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
							
								<li>
									<img src="<?php echo get_field('visualizer_image'); ?>" class="visualizer-product-img" alt="Placeholder" data-quantity="1" data-product_id="<?php echo $product->id; ?>">									
									<div class="visualizer-product-content">
										<div><?php the_title(); ?></div>
										<!-- <div class="visualizer-product-height">Height - <?php // echo get_post_meta( get_the_ID(), '_plant_height_multi', true ); ?> cm</div> -->
									</div>
								</li>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						</ul>
					</div>
				</div>
		</div>
		<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
</div>


<!-- Modal User Guide -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="visualizer-info-modal modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Visualiser user guide</h4>
      </div>
		<div class="modal-body">
			<p>Size guide disclaimer - actual heights are marked on each potted plant. The images can be adjusted to match the proportional measurements of the room.</p>
			<hr>

			<h4>Step By Step Guide to use the Visualiser</h4>
			<ol>
				<li>Select the Plant Range you want to choose from.</li>
				<li>Select the background you want from the three default images given or upload your own image of your room.</li>
				<li>Click on a plant to place on your chosen background.</li>
				<li>Resize and move the plant then place in your chosen room image.</li>
				<li>Save image for later, download or add to basket to order now.</li>
			</ol>
		</div>
      <div class="modal-footer">
        <button type="button" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="visualizer-info-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">

				<form id="login" class="form-horizontal" role="form">
					<p class="status"></p>
					<div class="form-group">
						<label class="control-label col-sm-2" for="username">Username:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="password">Password:</label>
						<div class="col-sm-10">
							<input id="password" class="form-control" type="password" name="password" placeholder="Enter password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="visualizer-info-modal-btn btn btn-secondary" type="submit" value="Login" name="submit">Login</button>
						</div>
					</div>
					<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
				</form>

				<p class="visualiser-register-link">Don't have an account? <a href="" target="_blank">Register here</a></p>

			</div>
			<div class="modal-footer">
				<button type="button" id="visualizer-save-login-close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<!-- Modal Login for load saved data -->
<div class="modal fade" id="login-load" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="visualizer-info-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">

				<form id="loginload" class="form-horizontal" role="form">
					<p class="status"></p>
					<div class="form-group">
						<label class="control-label col-sm-2" for="username">Username:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="password">Password:</label>
						<div class="col-sm-10">
							<input id="password" class="form-control" type="password" name="password" placeholder="Enter password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="visualizer-info-modal-btn btn btn-secondary" type="submit" value="Login" name="submit">Login</button>
						</div>
					</div>
					<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" id="visualizer-load-login-close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal saved data dialog -->
<div class="modal fade" id="save-dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="visualizer-info-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Save your work</h4>
			</div>
			<div class="modal-body">

				<div id="visualizer-save-status"></div>

				<p class="visualiser-register-link"><strong>*Important: </strong> Saving this session will overwrite your previous designs if you had any.</p>

				<button type="button" id="visualizer-save-dialog-btn" class="visualizer-info-modal-btn btn btn-secondary">Save</button>

			</div>
			<div class="modal-footer">
				<button type="button" id="visualizer-login-close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal load data dialog -->
<div class="modal fade" id="load-dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="visualizer-info-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Load saved files</h4>
			</div>
			<div class="modal-body">

				<div id="visualizer-save-status"></div>

				<p class="visualiser-register-link"><strong>*Important: </strong> This will load your last saved design and replace your current work.</p>

				<button type="button" id="visualizer-load-dialog-btn" class="visualizer-info-modal-btn btn btn-secondary">Load</button>

			</div>
			<div class="modal-footer">
				<button type="button" id="visualizer-load-dialog-close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal submit cart mail -->
<div class="modal fade" id="buy-now-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="visualizer-info-modal modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Request</h4>
			</div>
			<div class="modal-body">
				
				<p class="viz-enq-status"></p>

				<p class="visualiser-register-link"><strong>*Important: </strong> This will send your request data to phs green leaf.</p>
				
				<form id="viz-buy-form">
				  <div class="form-group">
					<label for="name">Your Name:</label>
					<input required type="text" class="form-control" id="name">
				  </div>
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input required type="email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					<label for="name">Contact No:</label>
					<input required type="text" class="form-control" id="contact">
				  </div>
				  <div class="form-group">
					<label for="name">Message:</label>
					<textarea class="form-control" id="message"></textarea>
				  </div>
				  
				  <button type="submit" id="visualizer-enq" class="visualizer-info-modal-btn btn btn-secondary">Send</button>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" id="visualizer-load-dialog-close" class="visualizer-info-modal-btn btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<p style="text-align: center;font-size: 12px;">Size guide disclaimer - actual heights are marked on each potted plant. The images can be adjusted to match the proportional measurements of the room.</p>
<?php get_footer();?>

