<?php
/**
 * Created by PhpStorm.
 * User: dhana
 * Date: 7/24/2016
 * Time: 12:41 AM
 */


/**
* @snippet       WooCommerce Hide Prices on the Shop Page
* @how-to        Watch tutorial @ http://businessbloomer.com/?p=19055
* @sourcecode    http://businessbloomer.com/?p=406
* @author        Rodolfo Melogli
* @compatible    WooCommerce 2.4.7
*/

// get product category slug by ID
		
function get_product_category_by_id( $product_id ) {
	$term = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));
	return $term;
}

// Remove prices from shop pages

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );


/*STEP 1 - REMOVE ADD TO CART BUTTON ON PRODUCT ARCHIVE (SHOP,CATALOG) */

function remove_loop_button(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');



/*STEP 2 -ADD NEW BUTTON THAT LINKS TO PRODUCT PAGE FOR EACH PRODUCT */

add_action('woocommerce_after_shop_loop_item','replace_add_to_cart');
function replace_add_to_cart() {
	global $post, $product;	
		$link = $product->get_permalink();
				
		$product_category = get_product_category_by_id( $product->id );
		
		if( in_array('22', $product_category) ):
			echo do_shortcode('<a href="'.$link.'" class="button btn-order-now">Order Now</a>');
		else: 
			echo do_shortcode('<a href="javascript:;" data-toggle="modal" data-target="#product-enquire-now" productid="'.$product->id.'" class="button btn-order-now product-enq-btn">Enquire Now</a>');
		endif;
}




/* ************** adding custom fields for woocommerce ***************** */


/* ******** enable gallery ********* */
//add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


/* ************************** Product info data tab new code ************************** */



// Creates the admin panel tab
add_action( 'woocommerce_product_write_panel_tabs', 'product_write_panel_extra_tab' );

add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function product_write_panel_extra_tab() {
    echo '<li class="wdm_custom_product_tab show_if_wdm_custom_product wdm_custom_product_options hide_if_variable"><a href="#wdm_custom_product_data">'.__( 'Product Info' ).'</a></li>';
}

// Creates the panel for selecting product options
add_action( 'woocommerce_product_write_panels', 'product_write_panel_extra_tab_data' );

function product_write_panel_extra_tab_data() {

	global $woocommerce, $post;

	?>

	<div id="wdm_custom_product_data" class="wdm_custom_product panel panel woocommerce_options_panel wc-metaboxes-wrapper">

		<div class="options_group wdm_custom_product">
			<?php
			echo '<div class="options_group">';

			// Custom fields will be created here...

			// Vase Type Field
			woocommerce_wp_text_input(
					array(
							'id'          => '_vase_type',
							'label'       => __( 'Vase Type', 'woocommerce' ),
							'placeholder' => 'Ex: Ovation Tall Vase',
							'desc_tip'    => 'true',
							'description' => __( 'Enter the type of Vase.', 'woocommerce' )
					)
			);

			// Light Level Field
			woocommerce_wp_text_input(
					array(
							'id'          => '_light_level',
							'label'       => __( 'Light Level', 'woocommerce' ),
							'placeholder' => 'Ex: Hard Light',
							'desc_tip'    => 'true',
							'description' => __( 'Enter the Light Level.', 'woocommerce' )
					)
			);

			// Plant Width Multiply
			woocommerce_wp_text_input(
					array(
							'id'                => '_plant_width_multi',
							'label'             => __( 'Width', 'woocommerce' ),
							'placeholder'       => 'Width',
							'desc_tip'    		=> 'true',
							'description'       => __( 'Enter width in cm', 'woocommerce' ),
							'type'              => 'number',
							'custom_attributes' => array(
									'step' 	=> 'any',
									'min'	=> '0'
							)
					)
			);

			// Plant Height Multiply
			woocommerce_wp_text_input(
					array(
							'id'                => '_plant_height_multi',
							'label'             => __( 'Height ', 'woocommerce' ),
							'placeholder'       => 'Height',
							'desc_tip'    		=> 'true',
							'description'       => __( 'Enter height in cm', 'woocommerce' ),
							'type'              => 'number',
							'custom_attributes' => array(
									'step' 	=> 'any',
									'min'	=> '0'
							)
					)
			);

			// Plant Length Multiply
			woocommerce_wp_text_input(
					array(
							'id'                => '_plant_length_multi',
							'label'             => __( 'Length ', 'woocommerce' ),
							'placeholder'       => 'Length',
							'desc_tip'    		=> 'true',
							'description'       => __( 'Enter length in cm', 'woocommerce' ),
							'type'              => 'number',
							'custom_attributes' => array(
									'step' 	=> 'any',
									'min'	=> '0'
							)
					)
			);

			// Plant Height
			woocommerce_wp_text_input(
					array(
							'id'                => '_plant_height',
							'label'             => __( 'Plant Height', 'woocommerce' ),
							'placeholder'       => 'Plant Height',
							'desc_tip'    		=> 'true',
							'description'       => __( 'Enter the plant height in cm', 'woocommerce' )

					)
			);

			echo '</div>';
			?>
		</div> <!-- options group -->

	</div>

	<?php
}



// Display Fields
//add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Fields
//add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

/*
function woo_add_custom_general_fields() {

global $woocommerce, $post;

echo '<div class="options_group">';

    // Custom fields will be created here...

    // Vase Type Field
    woocommerce_wp_text_input(
        array(
            'id'          => '_vase_type',
            'label'       => __( 'Vase Type', 'woocommerce' ),
            'placeholder' => 'Ex: Ovation Tall Vase',
            'desc_tip'    => 'true',
            'description' => __( 'Enter the type of Vase.', 'woocommerce' )
        )
    );

    // Light Level Field
    woocommerce_wp_text_input(
        array(
            'id'          => '_light_level',
            'label'       => __( 'Light Level', 'woocommerce' ),
            'placeholder' => 'Ex: Hard Light',
            'desc_tip'    => 'true',
            'description' => __( 'Enter the Light Level.', 'woocommerce' )
        )
    );

    // Plant Width Multiply
    woocommerce_wp_text_input(
        array(
            'id'                => '_plant_width_multi',
            'label'             => __( 'Width', 'woocommerce' ),
            'placeholder'       => 'Width',
            'desc_tip'    		=> 'true',
            'description'       => __( 'Enter width in cm', 'woocommerce' ),
            'type'              => 'number',
            'custom_attributes' => array(
                'step' 	=> 'any',
                'min'	=> '0'
            )
        )
    );

    // Plant Height Multiply
    woocommerce_wp_text_input(
        array(
            'id'                => '_plant_height_multi',
            'label'             => __( 'Height ', 'woocommerce' ),
            'placeholder'       => 'Height',
            'desc_tip'    		=> 'true',
            'description'       => __( 'Enter height in cm', 'woocommerce' ),
            'type'              => 'number',
            'custom_attributes' => array(
                'step' 	=> 'any',
                'min'	=> '0'
            )
        )
    );
	
	// Plant Length Multiply
    woocommerce_wp_text_input(
        array(
            'id'                => '_plant_length_multi',
            'label'             => __( 'Length ', 'woocommerce' ),
            'placeholder'       => 'Length',
            'desc_tip'    		=> 'true',
            'description'       => __( 'Enter length in cm', 'woocommerce' ),
            'type'              => 'number',
            'custom_attributes' => array(
                'step' 	=> 'any',
                'min'	=> '0'
            )
        )
    );	

    // Plant Height
    woocommerce_wp_text_input(
        array(
            'id'                => '_plant_height',
            'label'             => __( 'Plant Height', 'woocommerce' ),
            'placeholder'       => 'Plant Height',
            'desc_tip'    		=> 'true',
            'description'       => __( 'Enter the plant height in cm', 'woocommerce' )
            
        )
    );

    }
*/

/* **************** save custom fields **************** */

    function woo_add_custom_general_fields_save( $post_id ){

    // Text Field
    $woocommerce_vase_type = $_POST['_vase_type'];
    if( !empty( $woocommerce_vase_type ) )
    update_post_meta( $post_id, '_vase_type', esc_attr( $woocommerce_vase_type ) );

    // Text Field
    $woocommerce_light_level = $_POST['_light_level'];
    if( !empty( $woocommerce_light_level ) )
    update_post_meta( $post_id, '_light_level', esc_attr( $woocommerce_light_level ) );

    // Number Field
    $woocommerce_plant_height_multi = $_POST['_plant_width_multi'];
    if( !empty( $woocommerce_plant_height_multi ) )
    update_post_meta( $post_id, '_plant_width_multi', esc_attr( $woocommerce_plant_height_multi ) );

    // Number Field
    $woocommerce_plant_height_multi = $_POST['_plant_height_multi'];
    if( !empty( $woocommerce_plant_height_multi ) )
    update_post_meta( $post_id, '_plant_height_multi', esc_attr( $woocommerce_plant_height_multi ) );

// Number Field
    $woocommerce_plant_length_multi = $_POST['_plant_length_multi'];
    if( !empty( $woocommerce_plant_length_multi ) )
    update_post_meta( $post_id, '_plant_length_multi', esc_attr( $woocommerce_plant_length_multi ) );

    // Number Field
    $woocommerce_plant_height = $_POST['_plant_height'];
    if( !empty( $woocommerce_plant_height ) )
    update_post_meta( $post_id, '_plant_height', esc_attr( $woocommerce_plant_height ) );

    }
	
/* ************************** Product info data tab new code ends ************************** */
	
/* ********************** inventory product data tab custom fields *************************************** */

// Display Fields
add_action( 'woocommerce_product_options_stock', 'woo_add_custom_inventory_fields' );

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_inventory_fields_save' );


function woo_add_custom_inventory_fields() {

	global $woocommerce, $post;

	echo '<div class="options_group">';

	// Select
	woocommerce_wp_select(
			array(
					'id'      => '_limited_stock_select',
					'label'   => __( 'Alternative stock status', 'woocommerce' ),
					'options' => array(
							'blank_stock'   => __( 'Select an option', 'woocommerce' ),
							'limited_stock'   => __( 'Limited Stock', 'woocommerce' ),
							'sold_out'   => __( 'Sold Out', 'woocommerce' )
					)
			)
	);

	echo '</div>';

}


function woo_add_custom_inventory_fields_save( $post_id ){

	// Select
	$woocommerce_select = $_POST['_limited_stock_select'];
	if( !empty( $woocommerce_select ) )
		update_post_meta( $post_id, '_limited_stock_select', esc_attr( $woocommerce_select ) );

}

/* ********************** inventory product data tab custom fields ends *************************************** */


    /**
    * Adds product SKUs above the "Add to Cart" buttons
    * Tutorial: http://www.skyverge.com/blog/add-information-to-woocommerce-shop-page/
    **/
    function green_shop_display_info() {

    echo '<div class="category-page-product-wrapper">';
        echo '<div class="row-fluid">';
            echo '<div class="col-xs-12 info-left no-padding-left no-padding-right">';
			echo '<p class="dimensions">Plant Height - <span>' . get_post_meta( get_the_ID(), '_plant_height', true ) . 'cm</span></p>';
			echo '<p class="dimensions">' . get_post_meta( get_the_ID(), '_vase_type', true ) . '</p>';
			
			$length = get_post_meta( get_the_ID(), '_plant_length_multi', true );
			if($length != null):
				echo '<p class="dimensions">Length x Width x Height - <span>'  . get_post_meta( get_the_ID(), '_plant_length_multi', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_width_multi', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi', true ) . 'cm</span></p>';
			else:
				echo '<p class="dimensions">Width x Height - <span>' . get_post_meta( get_the_ID(), '_plant_width_multi', true ) . ' x ' . get_post_meta( get_the_ID(), '_plant_height_multi', true ) . 'cm</span></p>';
			endif;
						
			echo '<p class="dimensions light-level"><span class="label label-default">' . get_post_meta( get_the_ID(), '_light_level', true ) . '</span></p>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
    echo '<div class="clear"></div>';

    }
    add_action( 'woocommerce_after_shop_loop_item', 'green_shop_display_info', 9 );


// upsells shortcode
add_shortcode( 'product_upsells', 'wc_upsells_shortcode' );
function wc_upsells_shortcode( $atts ) {
  extract( shortcode_atts( array(
		'posts_per_page' => '-1',
		'columns' => '2',
		'orderby' => 'rand'
	), $atts ) );
	woocommerce_get_template( 'single-product/up-sells.php', array(
		'posts_per_page'  => $posts_per_page,
		'orderby'    => $orderby,
		'columns'    => $columns
	) );
}


// single product page add to cart function
function cs_wc_loop_add_to_cart_scripts() {
    if ( is_shop() || is_product_category() || is_product_tag() || is_product() ) : ?>

<script>
    jQuery( document ).ready( function( $ ) {
        $( document ).on( 'change', '.quantity .qty', function() {
            $( this ).parent( '.quantity' ).next( '.add_to_cart_button' ).attr( 'data-quantity', $( this ).val() );
        });
    });
</script>

    <?php endif;
}
add_action( 'wp_footer', 'cs_wc_loop_add_to_cart_scripts' );


// remove return to shop button 
function change_empty_cart_button_url() {
	return get_site_url() . '/artificial-flowers/';
	//Can use any page instead, like return '/sample-page/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'change_empty_cart_button_url' );


/**
 * Add checkbox field to the checkout
 **/
add_action('woocommerce_review_order_before_submit', 'registed_company_add_checkout_tickbox', 9);
  
function registed_company_add_checkout_tickbox() {
 
?>
 
<p class="form-row terms wc-registed-company">
<input type="checkbox" class="input-checkbox" name="registed-company" id="registed-company" />
<label for="registed-company" class="checkbox">I confirm that I'm a registered company and not sole trader <span class="required">*</span></label>
</p>
 
<?php
}
 
// Show notice if customer does not tick
  
add_action('woocommerce_checkout_process', 'registed_company_not_approved');
 
function registed_company_not_approved() {
    if ( ! (int) isset( $_POST['registed-company'] ) ) {
        wc_add_notice( __( 'Please acknowledge the checkbox' ), 'error' );
    }
}



// remove additional information tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
 
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
}
// rename description tab
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Service Information' );		// Rename the description tab
	//$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	//$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

	return $tabs;

}
// adding a new tab
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['payment_options'] = array(
		'title' 	=> __( 'Payment Options', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	global $woocommerce, $product, $post;
	// The new tab content	
	echo '<h2>Rental process and payment options</h2>';
	echo '<div class="payment-options-content">' . $product->post->post_excerpt . '</div>';
	/*
	echo '<div class="woo-artificial-enquire inner-page-checklist-wrapper">
					<div class="buttons">
						<a href="javascript:;" class="enquire-now" data-toggle="modal" data-target="#enquireWoo">Enquire now</a>
					</div>
				</div>';
	*/
	
	
}
// re-ordering tabs
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {

	$tabs['payment_options']['priority'] = 5;	// Additional information third	
	$tabs['description']['priority'] = 10;			// Description second	
	$tabs['reviews']['priority'] = 15;			// Reviews first

	return $tabs;
}


// Cart to Basket rename

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( 'Add to basket', 'woocommerce' );
 
}

/*Proceed to Checkout*/

remove_action( 'woocommerce_proceed_to_checkout', 'woocommerce_button_proceed_to_checkout', 20 ); 
add_action('woocommerce_proceed_to_checkout', 'sm_woo_custom_checkout_button_text',20);

function sm_woo_custom_checkout_button_text() {
    $checkout_url = WC()->cart->get_checkout_url();
  ?>
       <a href="<?php echo get_permalink(get_page_by_path('artificial-flowers')); ?>" class="checkout-button button alt wc-forward"><?php  _e( 'Continue Shopping', 'woocommerce' ); ?></a> 
       <a href="<?php echo $checkout_url; ?>" class="checkout-button button alt wc-forward"><?php  _e( 'Proceed to Checkout', 'woocommerce' ); ?></a> 
  <?php
} 

// display price even if one variation available

add_filter('woocommerce_show_variation_price', function() { return TRUE;});

// redirect shop page
function custom_shop_page_redirect() {
    if( is_shop() ){
        wp_redirect( home_url( '/artificial-flowers/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'custom_shop_page_redirect' );


add_filter ( 'wc_add_to_cart_message', 'wc_add_to_cart_message_filter', 10, 2 );
function wc_add_to_cart_message_filter($message, $product_id = null) {
    $titles[] = get_the_title( $product_id );

    $titles = array_filter( $titles );
    $added_text = sprintf( _n( '%s has been added to your basket.', '%s have been added to your basket.', sizeof( $titles ), 'woocommerce' ), wc_format_list_of_items( $titles ) );

    $message = sprintf( '%s <a href="%s" class="button">%s</a>&nbsp;<a href="%s" class="button">%s</a>',
                    esc_html( $added_text ),					
                    esc_url( wc_get_page_permalink( 'checkout' ) ),
                    esc_html__( 'Checkout', 'woocommerce' ),					
                    esc_url( wc_get_page_permalink( 'cart' ) ),
                    esc_html__( 'View Basket', 'woocommerce' ));

    return $message;
}

/*
function my_content( $content ) {
                $content .= '<div class="custom_content">Custom content!</div>';
   return $content;
}

add_filter('woocommerce_short_description', 'my_content', 10, 2);
*/
