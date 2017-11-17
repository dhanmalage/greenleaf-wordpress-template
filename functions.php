<?php

function green_setup() {

	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	// This theme supports a variety of post formats.
	add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
	
	// Register Navigation
	register_nav_menus(array('primary' => 'Primary Navigation'));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support('post-thumbnails');

	// Add HTML5 markup structure
	add_theme_support( 'html5' );
}
add_action('after_setup_theme', 'green_setup');

function green_scripts() {
	wp_enqueue_style('main-font-ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('slider-pro', get_template_directory_uri().'/css/slider-pro.min.css');
	wp_enqueue_style('unslider-dots', get_template_directory_uri().'/css/unslider-dots.css');
	wp_enqueue_style('unslider', get_template_directory_uri().'/css/unslider.css');
	wp_enqueue_style('owl-css', get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style('stylesheet', get_template_directory_uri().'/css/stylesheet.css');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());

	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '', false);
	wp_enqueue_script('html5', get_template_directory_uri().'/js/html5.js', array(), '', false);
	wp_enqueue_script('smoothscroll', get_template_directory_uri().'/js/smoothscroll.js', array('jquery'), '', true);
	wp_enqueue_script('match-height', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', array(), '0.7.0', false);
	wp_enqueue_script('tubular', get_template_directory_uri().'/js/jquery.tubular.1.0.js', array('jquery'), '1.0', false);
	//wp_enqueue_script('youtubebackground', get_template_directory_uri().'/js/jquery.youtubebackground.js', array('jquery'), '', true);
	//wp_enqueue_script('YTPlayer', get_template_directory_uri().'/js/jquery.mb.YTPlayer.js', array('jquery'), '', true);
	wp_enqueue_script('bxslider', get_template_directory_uri().'/js/jquery.bxslider.min.js', array('jquery'), '', false);
	wp_enqueue_script('sliderPro', get_template_directory_uri().'/js/jquery.sliderPro.min.js', array('jquery'), '', false);
	wp_enqueue_script('unslider-min', get_template_directory_uri().'/js/unslider-min.js', '', '', false);
	wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', '', '', false);
	//wp_enqueue_script('fabric-require', get_template_directory_uri().'/js/fabric.require.js', array('jquery'), '', true);
	wp_enqueue_script('fabric', get_template_directory_uri().'/js/fabric.js', array('jquery'), '', false);
	//wp_enqueue_script('html2canvas', get_template_directory_uri().'/js/html2canvas.min.js', '', '', true);
	wp_enqueue_script('visualizer', get_template_directory_uri().'/js/visualizer.js', array('jquery'), '', true);
	//wp_enqueue_script('visualizerload', get_template_directory_uri().'/js/visualizer.load.js', array('jquery'), '', true);
	
	wp_enqueue_script('cookieconsent', get_template_directory_uri().'/js/cookieconsent.js', '', '', false);
	wp_enqueue_script('owl-js', get_template_directory_uri().'/js/owl.carousel.min.js', '', '', false);
	
	wp_enqueue_script('function', get_template_directory_uri().'/js/functions.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', 'green_scripts');

// Add post expert for all pages
// use for read more text
add_action( 'init', 'green_add_excerpts_to_pages' );
function green_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


// Disable frontend top admin bar
add_filter('show_admin_bar', '__return_false');

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

// WooCommerce Functions
include('inc/woocommerce_functions.php');

// Theme options
include('inc/greenleaf_config.php');

// Custom Posttype Register
include('inc/ctp.php');


// Footer widgets
register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );
register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );
register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );

/*
register_sidebar( array(
		'name' => 'Footer Sidebar 4',
		'id' => 'footer-sidebar-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
) );
*/

// fix for ajaxurl variable not found on frontend
add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() {
	?>
	<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	</script>
	<?php
}


// localize ajaxurl variable to use on frontend
add_action( 'wp_enqueue_scripts', 'add_frontend_ajax_javascript_file' );
function add_frontend_ajax_javascript_file()
{
	wp_localize_script( 'frontend-ajax', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_script( 'ajax_custom_script', WP_PLUGIN_URL . '/ajax-javascript.js', array('jquery') );
}


// get post by id ajax method
add_action( 'wp_ajax_get_post_information', 'ajax_get_post_information' );
add_action( 'wp_ajax_nopriv_get_post_information', 'ajax_get_post_information' );

function ajax_get_post_information()
{
	if(!empty($_POST['post_id']))
	{
		global $woocommerce;
		$woocommerce->cart->add_to_cart($_POST['post_id']);

		$post = get_post( $_POST['post_id'] );

		echo json_encode( $post );
	}

	die();
}

// remove item from car ajax
add_action( 'remove_item_from_cart', 'remove_item_from_cart' );
add_action( 'wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart' );

function remove_item_from_cart()
{
	if(!empty($_POST['post_id']))
	{
		$cart = WC()->instance()->cart;
		$id = $_POST['post_id'];
		$cart_id = $cart->generate_cart_id($id);
		$cart_item_id = $cart->find_product_in_cart($cart_id);

		if($cart_item_id){
			$cart->set_quantity($cart_item_id,0);
			echo json_encode('removed');
		}
	}

	die();
}








// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
		<a class="cart-contents hide" href="<?php echo WC()->cart->get_cart_url(); ?>">
			<?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?>			
		</a>
	<!--
	<a class="cart-contents" href="<?php //echo WC()->cart->get_cart_url(); ?>"><?php //echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php //echo WC()->cart->get_cart_total(); ?></a>
	-->
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}


// Ajax login function

function ajax_login_init(){

	wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax-login-script.js', array('jquery') );
	wp_enqueue_script('ajax-login-script');

	wp_localize_script( 'ajax-login-script', 'ajax_login_object', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'redirecturl' => home_url(),
			'visualizerload' => get_permalink( get_page_by_path( 'visualizer-load' ) ),
			'loadingmessage' => __('Sending user info, please wait...')
	));

	// Enable the user with no privileges to run ajax_login() in AJAX
	add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
	add_action( 'wp_ajax_nopriv_ajaxloginload', 'ajaxloginload' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
	add_action('init', 'ajax_login_init');
}




function ajax_login(){

	// First check the nonce, if it fails the function will break
	check_ajax_referer( 'ajax-login-nonce', 'security' );

	// Nonce is checked, get the POST data and sign user on
	$info = array();
	$info['user_login'] = $_POST['username'];
	$info['user_password'] = $_POST['password'];
	$info['remember'] = true;

	$user_signon = wp_signon( $info, false );
	wp_set_current_user($user_signon->ID); //Here is where we update the global user variables
	global $current_user,$user_ID;

/*
	if(!empty($_POST['canvas_obj'])){
		$old_data = get_user_meta($user_ID,  'visualizer_save', true);
		if($old_data == ''){
			// will return false if the previous value is the same as $new_value
			add_user_meta( $user_ID, 'visualizer_save', $_POST['canvas_obj'], false );
		}else{
			// will return false if the previous value is the same as $new_value
			update_user_meta( $user_ID, 'visualizer_save', $_POST['canvas_obj'] );
		}
	}
*/
	if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
	} else {
		echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful!')));
	}

	die();
}


function ajaxloginload(){
	// First check the nonce, if it fails the function will break
	check_ajax_referer( 'ajax-login-nonce', 'security' );

	// Nonce is checked, get the POST data and sign user on
	$info = array();
	$info['user_login'] = $_POST['username'];
	$info['user_password'] = $_POST['password'];
	$info['remember'] = true;

	$user_signon = wp_signon( $info, false );
	wp_set_current_user($user_signon->ID); //Here is where we update the global user variables
	global $current_user,$user_ID;

	if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
	} else {
		echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful!')));
	}

	die();
}


// save canvas by user id

add_action( 'wp_ajax_visualizersave', 'visualizersave' );
add_action( 'wp_ajax_nopriv_visualizersave', 'visualizersave' );

function visualizersave()
{
	//echo json_encode('not loged in');

	if(!empty($_POST['canvas_obj']))
	{
		$user_id = get_current_user_id();

		if ($user_id == 0) {
			echo json_encode(array('save'=>false, 'message'=>__('save fail!')));
		} else {

			if(!empty($_POST['canvas_obj'])){
				$old_data = get_user_meta($user_id,  'visualizer_save', true);
				if($old_data == ''){
					// will return false if the previous value is the same as $new_value
					add_user_meta( $user_id, 'visualizer_save', $_POST['canvas_obj'], false );
					echo json_encode(array('save'=>true, 'message'=>__('save successful!')));
				}else{
					// will return false if the previous value is the same as $new_value
					update_user_meta( $user_id, 'visualizer_save', $_POST['canvas_obj'] );
					echo json_encode(array('save'=>true, 'message'=>__('save successful!')));
				}
			}


		}
	}

	die();

}



// Load canvas data

add_action( 'wp_ajax_visualizerload', 'visualizerload' );
add_action( 'wp_ajax_nopriv_visualizerload', 'visualizerload' );

function visualizerload()
{
	$user_id = get_current_user_id();

	if ($user_id == 0) {
		echo json_encode('not loged in');
	} else {
		$saved_data = get_user_meta($user_id,  'visualizer_save', true);
		
		echo json_encode($saved_data);
	}

	die();

}



// change default from email and name

add_filter('wp_mail_from','yoursite_wp_mail_from');
function yoursite_wp_mail_from($content_type) {
  return 'info@phsgreenleaf.co.uk';
}
add_filter('wp_mail_from_name','yoursite_wp_mail_from_name');
function yoursite_wp_mail_from_name($name) {
  return 'PHS Greenleaf';
}

// single product enquire
add_action( 'wp_ajax_product_enquire', 'product_enquire' );
add_action( 'wp_ajax_nopriv_product_enquire', 'product_enquire' );

function product_enquire()
{
		
	$to = array(get_bloginfo('admin_email'), 'saraEdwards@phs.co.uk', 'greenleafenquiries@phs.co.uk');
	$subject = 'PHS Greenleaf Enquiry';
	$body = '<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>
				<body>

					<p><strong>Product Name:</strong> '.get_the_title( $_POST['product'] ).'</p> 
					<p><strong>Name:</strong> '.$_POST['name'].'</p> 
					<p><strong>Email:</strong> '.$_POST['email'].'</p> 
					<p><strong>Contact:</strong> '.$_POST['contact'].'</p> 
					<p><strong>Message:</strong> '.$_POST['message'].'</p> 

				</body>
			</html>';
	//$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'Bcc: conradswailes@hotmail.com ' . "\r\n";
	 
	wp_mail( $to, $subject, $body, $headers );
	echo json_encode('success');
	
	die();

}

// vizualiser product enquire
add_action( 'wp_ajax_viz_product_enquire', 'viz_product_enquire' );
add_action( 'wp_ajax_nopriv_viz_product_enquire', 'viz_product_enquire' );

function viz_product_enquire()
{
	
	global $woocommerce; 

	$items = $woocommerce->cart->get_cart();
	
	$to = array(get_bloginfo('admin_email'), 'saraEdwards@phs.co.uk', 'greenleafenquiries@phs.co.uk');
	$subject = 'PHS Greenleaf Enquiry';
	$body = '<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>				
				<body>';
				
				
				foreach($items as $item => $values) { 
        
					$_product = $values['data']->post; 
					$body .= '<p><strong>Product Name:</strong>'.$_product->post_title.'</p>';
				}
									
			$body .= '<p><strong>Name:</strong> '.$_POST['name'].'</p> 
					<p><strong>Email:</strong> '.$_POST['email'].'</p> 
					<p><strong>Contact:</strong> '.$_POST['contact'].'</p> 
					<p><strong>Message:</strong> '.$_POST['message'].'</p> 

				</body>
			</html>';
	//$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	$headers[] = 'Bcc: conradswailes@hotmail.com' . "\r\n";
	 
	wp_mail( $to, $subject, $body, $headers );
	echo json_encode('success');
	
	die();

}



// ajax buy now temp function

function ajax_buy_now(){
	
	// Nonce is checked, get the POST data and sign user on
	echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful!')));

/*
	if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
	} else {
		echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful!')));
	}
*/
	die();
}


// limit number of characters to displayed
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}


/* ****************** enquire form product data *********************** */

// single product enquire
add_action( 'wp_ajax_get_product_enquire', 'get_product_enquire' );
add_action( 'wp_ajax_nopriv_get_product_enquire', 'get_product_enquire' );

function get_product_enquire()
{
		
	$product_id = $_POST['product'];
	 
	$title = get_the_title($product_id);
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
	$id = 42;
	$term_list = wp_get_post_terms($product_id,'product_cat',array('fields'=>'ids'));
	$cat_id = (int)$term_list[0];
    $imageUrl = $image[0];
	$variable = array( 'title' => $title, 
                       'image' => $imageUrl,
					   'cat' => $cat_id
					   );
	echo json_encode($variable);
	
	die();

}


/* custom menu items */

function add_search_box_to_menu( $items, $args ) {
	
// Global theme options
global $greenleaf_theme_options; 

	if( $args->theme_location == 'primary' ){	
						
						if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
							$count = WC()->cart->cart_contents_count;
						}
												
						$items .= '<li><a href="'.get_permalink( get_page_by_path( "about-us" ) ).'" class="navbar-logo-alternative"><img src="'.$greenleaf_theme_options["logo_header_small"]["url"].'" alt="logo" class="img-responsive" ></a></li>'
							.'<li class="header-tel"><a href="tel:'.$greenleaf_theme_options["header_contact_no"].'"><i class="fa fa-phone" aria-hidden="true"></i> '.$greenleaf_theme_options["header_contact_no"].'</a></li>'
							.'<li><a href="javascript:;" id="menu-search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>'
							.'<li id="header-cart-button">'					
								.'<a class="header-cart-icon" href="' . WC()->cart->get_cart_url() . '"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>'
								.'<a class="cart-contents hide" href="' . WC()->cart->get_cart_url() . '"><span class="cart-contents-count">' . esc_html( $count ) . '</span></a>'
							.'</li>';
						
					}
					return $items;	
	
}
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);


/*
function add_to_cart_header_button() {
 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
    $count = WC()->cart->cart_contents_count;
    ?>
	<a class="cart-contents" id="header-cart-button" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
	<?php 
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php
    }
        ?>
		<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
	<?php
 
	}
} 
*/


/* ******************** promotions page options ********************* */

/*
add_action( 'admin_menu', 'promotions_admin_menu' );

function promotions_admin_menu() {
	add_menu_page( 'Promotions Backend', 'Promotions', 'manage_options', 'inc/promostions-settings-page.php', 'promotions_admin_page', 'dashicons-tickets', 6  );
}

function promotions_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To Promotions Plugin</h2>
	</div>
	<?php
}
*/

/* ****************** promo page download submit *********************** */

/*
// single product enquire
add_action( 'wp_ajax_promo_submit', 'promo_submit' );
add_action( 'wp_ajax_nopriv_promo_submit', 'promo_submit' );

function promo_submit()
{
		
	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	 
	//$to = array(get_bloginfo('admin_email'), 'saraEdwards@phs.co.uk', 'conradswailes@voqs.eu', 'greenleafenquiries@phs.co.uk');
	$to = array('dileepa.ruwan@gmail.com');
	$subject = 'PHS Greenleaf Promotion';
	$body = '<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>				
				<body>';
				
									
			$body = '<p><strong>Name:</strong> '.$name.'</p> 
					<p><strong>Telephone:</strong> '.$telephone.'</p> 
					<p><strong>Email:</strong> '.$email.'</p> 

				</body>
			</html>';
	//$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	//$headers[] = 'Bcc: conradswailes@hotmail.com' . "\r\n";
	 
	wp_mail( $to, $subject, $body, $headers );
				
	echo json_encode('success');
	
	die();

}

*/

/*******************Done By :Ruwan on 10th jan 2017*************************/

function wpb_widgets_init() {

	register_sidebar( array(
		'name' =>__( 'Front page sidebar', 'wpb'),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
  'name' => 'News Sidebar',
  'id' => 'news-sidebar',
  'description' => 'Appears in the individual news pages',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h4 class="news-widget-title">',
  'after_title' => '</h4>',
) );

	}

add_action( 'widgets_init', 'wpb_widgets_init' );



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}


/* *********** end ************* */


/* ******* Breadcrumbs start here *********** */
// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}
/* ******* Breadcrumbs end here *********** */

/* *********** direct debit click event ************ */
// single product enquire
add_action( 'wp_ajax_direct_debit', 'direct_debit' );
add_action( 'wp_ajax_nopriv_direct_debit', 'direct_debit' );

function direct_debit(){	
	
	global $greenleaf_theme_options;
	$email = $greenleaf_theme_options['direct_debit_notification'];
	$to = array($email);
	$subject = 'PHS Greenleaf Direct Debit';
	$body = '<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				</head>
				<body>
					<p><strong>Message:</strong> Someone has accessed the Direct Debit url</p> 

				</body>
			</html>';
	//$headers = array('Content-Type: text/html; charset=UTF-8');
	$headers[] = 'Content-Type: text/html; charset=UTF-8';
	//$headers[] = 'Bcc: ruwan@suxiid.com' . "\r\n";
	 
	wp_mail( $to, $subject, $body, $headers );
	
	echo json_encode('success');	
	die();
}





 // first remove the filter to run new price filter.
   function themeprefix_custom_price_message( $price ) { 
 
 global $post;
 
 $product_id = $post->ID;
 $my_product_array = array( 2163,2160,2157,2145,2111,2104,2094 );//add in product IDs
 if ( in_array( $product_id, $my_product_array )) {
 $textafter = ' per annum'; //add your text
 return $price . '<span class="variation-before-add-to-crt-text">' . $textafter . '</span>';
 }
 
 else { 
 return $price; 
 } 
}
add_filter( 'woocommerce_get_price_html', 'themeprefix_custom_price_message' );