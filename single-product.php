<?php
/**
 * Created by PhpStorm.
 * User: dhana
 * Date: 7/31/2016
 * Time: 10:05 PM
 */

?>


<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
get_header( 'shop' ); global $post, $woocommerce, $product, $greenleaf_theme_options; ?>


<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		
			<?php 
				do_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
				do_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );
			?>
		
			<?php while ( have_posts() ) : the_post(); ?>
						
				<div class="row">
				
					<?php 
						$terms = wp_get_post_terms( $post->ID, 'product_cat' );
						foreach ( $terms as $term ) $categories[] = $term->slug;

						if ( in_array( 'chrsitmas-trees', $categories ) ) {
						  // this is christmas single product layout
					?>
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
						<div class="single-product-content">
							<h1 itemprop="name" class="christmas-product-title single-product-title"><?php the_title(); ?></h1>
						</div>
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
							
								<?php 								
									$alt_stock_status = get_post_meta( $post->ID, '_limited_stock_select', true );
									if($alt_stock_status == 'limited_stock'):
								?>
									<a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', '#'/*get_permalink( $product->id )*/ ); ?>" class="enquire-now product-page-add-to-cart product-enq-btn" productid="<?php echo $product->id; ?>" data-toggle="modal" data-target="#product-enquire-now"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Limited Stock', 'woocommerce' ) ); ?></a>
								<?php 
									elseif($alt_stock_status == 'sold_out'):
								?>
									<a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', '#'/*get_permalink( $product->id )*/ ); ?>" class="enquire-now product-page-add-to-cart product-enq-btn" productid="<?php echo $product->id; ?>" data-toggle="modal" data-target="#product-enquire-now"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Sold Out', 'woocommerce' ) ); ?></a>
								<?php
									else:
								?>
								
								
								<?php if ( ! $product->is_in_stock() ) : ?>

									<a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', '#'/*get_permalink( $product->id )*/ ); ?>" class="enquire-now product-page-add-to-cart product-enq-btn" productid="<?php echo $product->id; ?>" data-toggle="modal" data-target="#product-enquire-now"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Sold Out', 'woocommerce' ) ); ?></a>

								<?php else : ?>

										<?php
											$link = array(
												'url'   => '',
												'label' => '',
												'class' => ''
											);
											switch ( $product->product_type ) {
												case "variable" :
													$link['url']    = apply_filters( 'variable_add_to_cart_url', get_permalink( $product->id ) );
													$link['label']  = apply_filters( 'variable_add_to_cart_text', __( 'Select options', 'woocommerce' ) );
												break;
												case "grouped" :
													$link['url']    = apply_filters( 'grouped_add_to_cart_url', get_permalink( $product->id ) );
													$link['label']  = apply_filters( 'grouped_add_to_cart_text', __( 'View options', 'woocommerce' ) );
												break;
												case "external" :
													$link['url']    = apply_filters( 'external_add_to_cart_url', get_permalink( $product->id ) );
													$link['label']  = apply_filters( 'external_add_to_cart_text', __( 'Read More', 'woocommerce' ) );
												break;
												default :
													if ( $product->is_purchasable() ) {
														$link['url']    = apply_filters( 'add_to_cart_url', esc_url( $product->add_to_cart_url() ) );
														$link['label']  = apply_filters( 'add_to_cart_text', __( 'Add to cart', 'woocommerce' ) );
														$link['class']  = apply_filters( 'add_to_cart_class', 'add_to_cart_button' );
													} else {
														$link['url']    = apply_filters( 'not_purchasable_url', get_permalink( $product->id ) );
														$link['label']  = apply_filters( 'not_purchasable_text', __( 'Read More', 'woocommerce' ) );
													}
												break;
											}
											// If there is a simple product.
											if ( $product->product_type == 'simple' ) {
												?>
												<!--
												<form action="<?php //echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype="multipart/form-data">
													<?php
														// Displays the quantity box.
														//woocommerce_quantity_input();
														// Display the submit button.
														//echo sprintf( '<button type="submit" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="%s button product_type_simple">%s</button>', esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_html( $link['label'] ) );
													?>
												</form>
												-->
												<?php echo sprintf( '<button class="enquire-now product-page-add-to-cart product-enq-btn" productid="'.$product->id.'" data-toggle="modal" data-target="#product-enquire-now">Enquire Now</button>' ); ?>
												
												<?php
											} else {
												echo sprintf( '<button class="product-page-add-to-cart product-enq-btn" productid="'.$product->id.'" data-toggle="modal" data-target="#product-enquire-now">Enquire Now</button>' );
											  //echo apply_filters( 'woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s button product_type_%s">%s</a>', esc_url( $link['url'] ), esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_attr( $product->product_type ), esc_html( $link['label'] ) ), $product, $link );
											}
										?>
									<?php endif; ?>
								
								<?php endif; ?>
								
								<a href="<?php echo get_permalink( get_page_by_path( 'download-brochure-christmas' ) ); ?>" class="download-brochure">Download brochure</a>
							</div>

						</div>						
														
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 no-padding-right">
						<div class="single-product-content">
							<div class="tabs-section">
									
								<?php $tabs = apply_filters( 'woocommerce_product_tabs', array() ); if ( ! empty( $tabs ) ) : ?>

									<div class="woocommerce-tabs">
										<ul class="tabs">
											<?php foreach ( $tabs as $key => $tab ) : ?>

												<li class="<?php echo $key ?>_tab">
													<a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
												</li>

											<?php endforeach; ?>
										</ul>
										<?php foreach ( $tabs as $key => $tab ) : ?>

											<div class="panel entry-content" id="tab-<?php echo $key ?>">
												<?php call_user_func( $tab['callback'], $key, $tab ) ?>
											</div>

										<?php endforeach; ?>
									</div>

								<?php endif; ?>
								
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-4 planting-services chrsitmas-trees-experience">
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
						
						
					<?php 
						}
						
						else {
					?>
						<div class="col-xs-12 col-md-4 col-lg-4">
					
							<div class="single-product-images images">

									<?php
										if ( has_post_thumbnail() ) {

											$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
											$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
											$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'large' ), array(
												'title' => $image_title
												) );

											$attachment_count = count( $product->get_gallery_attachment_ids() );

											if ( $attachment_count > 0 ) {
												$gallery = '[product-gallery]';
											} else {
												$gallery = '';
											}

											echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_title, $image ), $post->ID );

										} else {

											echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="Placeholder" />', wc_placeholder_img_src() ), $post->ID );

										}
									?>
									<div class="single-product-gallery">
										<?php do_action( 'woocommerce_product_thumbnails' ); ?>
									</div>
								
								<?php echo do_shortcode("[product_upsells]"); ?>
								
							</div>
							
						</div>
						
						<div class="col-xs-12 col-md-8 col-lg-8">
					
							<div class="single-product-content">
							
								<h1 itemprop="name" class="single-product-title"><?php the_title(); ?></h1>
								<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">						
								<p class="single-product-price"><?php //echo $product->get_price_html(); ?></p>
									<?php //this code display the product variations if only product have child                             
											if( $product->has_child() ) { 
												woocommerce_template_single_add_to_cart();
											}
									  ?>
									<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
									<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
									<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
								</div>
								
								<div class="single-add-to-cart-button">
																										
										<?php if ( ! $product->is_in_stock() ) : ?>

											<a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', get_permalink( $product->id ) ); ?>" class="button"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Read More', 'woocommerce' ) ); ?></a>

										<?php else : ?>

											<?php
												$link = array(
													'url'   => '',
													'label' => '',
													'class' => ''
												);
												switch ( $product->product_type ) {
													case "variable" :
														$link['url']    = apply_filters( 'variable_add_to_cart_url', get_permalink( $product->id ) );
														$link['label']  = apply_filters( 'variable_add_to_cart_text', __( 'Select options', 'woocommerce' ) );
													break;
													case "grouped" :
														$link['url']    = apply_filters( 'grouped_add_to_cart_url', get_permalink( $product->id ) );
														$link['label']  = apply_filters( 'grouped_add_to_cart_text', __( 'View options', 'woocommerce' ) );
													break;
													case "external" :
														$link['url']    = apply_filters( 'external_add_to_cart_url', get_permalink( $product->id ) );
														$link['label']  = apply_filters( 'external_add_to_cart_text', __( 'Read More', 'woocommerce' ) );
													break;
													default :
														if ( $product->is_purchasable() ) {
															$link['url']    = apply_filters( 'add_to_cart_url', esc_url( $product->add_to_cart_url() ) );
															$link['label']  = apply_filters( 'add_to_cart_text', __( 'Add to cart', 'woocommerce' ) );
															$link['class']  = apply_filters( 'add_to_cart_class', 'add_to_cart_button' );
														} else {
															$link['url']    = apply_filters( 'not_purchasable_url', get_permalink( $product->id ) );
															$link['label']  = apply_filters( 'not_purchasable_text', __( 'Read More', 'woocommerce' ) );
														}
													break;
												}
												// If there is a simple product.
												if ( $product->product_type == 'simple' ) {
													?>
													<!--
													<form action="<?php //echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype="multipart/form-data">
														<?php
															// Displays the quantity box.
															//woocommerce_quantity_input();
															// Display the submit button.
															//echo sprintf( '<button type="submit" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="%s button product_type_simple">%s</button>', esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_html( $link['label'] ) );
														?>
													</form>
													-->
													<?php echo sprintf( '<button class="product-page-add-to-cart product-enq-btn" productid="'.$product->id.'" data-toggle="modal" data-target="#product-enquire-now">Enquire Now</button>' ); ?>
													
													<?php
												} else {
													//echo sprintf( '<button class="product-page-add-to-cart product-enq-btn" productid="'.$product->id.'" data-toggle="modal" data-target="#product-enquire-now">Enquire Now</button>' );
												  //echo apply_filters( 'woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s button product_type_%s">%s</a>', esc_url( $link['url'] ), esc_attr( $product->id ), esc_attr( $product->get_sku() ), esc_attr( $link['class'] ), esc_attr( $product->product_type ), esc_html( $link['label'] ) ), $product, $link );
												}
											?>
										<?php endif; ?>
										
									
									
								</div>
								
																
								<div class="meta-section">
									<?php do_action( 'woocommerce_product_meta_start' ); ?>
									<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '.</span>' ); ?>

									<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '.</span>' ); ?>

									<?php do_action( 'woocommerce_product_meta_end' ); ?>
								</div>
								
								<div class="tabs-section">
								
									<?php $tabs = apply_filters( 'woocommerce_product_tabs', array() ); if ( ! empty( $tabs ) ) : ?>

										<div class="woocommerce-tabs">
											<ul class="tabs">
												<?php foreach ( $tabs as $key => $tab ) : ?>

													<li class="<?php echo $key ?>_tab">
														<a href="#tab-<?php echo $key ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?></a>
													</li>

												<?php endforeach; ?>
											</ul>
											<?php foreach ( $tabs as $key => $tab ) : ?>

												<div class="panel entry-content" id="tab-<?php echo $key ?>">
													<?php call_user_func( $tab['callback'], $key, $tab ) ?>
												</div>

											<?php endforeach; ?>
										</div>

									<?php endif; ?>
									
								</div>
							
							</div>
							
						</div>
					
					<?php
						}
					?>
								
				</div>
						
			<?php endwhile; // end of the loop. ?>
			
        </div>
    </div>
</div>


<?php get_footer( 'shop' ); ?>
