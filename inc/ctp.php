<?php

add_action( 'init', 'codex_clients_init' );
/**
 * Register a clients post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_clients_init() {
	$labels = array(
		'name'               => _x( 'Clients', 'post type general name', 'clients-postype' ),
		'singular_name'      => _x( 'Client', 'post type singular name', 'clients-postype' ),
		'menu_name'          => _x( 'Clients', 'admin menu', 'clients-postype' ),
		'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'clients-postype' ),
		'add_new'            => _x( 'Add New', 'client', 'clients-postype' ),
		'add_new_item'       => __( 'Add New Client', 'clients-postype' ),
		'new_item'           => __( 'New Client', 'clients-postype' ),
		'edit_item'          => __( 'Edit Client', 'clients-postype' ),
		'view_item'          => __( 'View Client', 'clients-postype' ),
		'all_items'          => __( 'All Clients', 'clients-postype' ),
		'search_items'       => __( 'Search Clients', 'clients-postype' ),
		'parent_item_colon'  => __( 'Parent Clients:', 'clients-postype' ),
		'not_found'          => __( 'No Clients found.', 'clients-postype' ),
		'not_found_in_trash' => __( 'No Clients found in Trash.', 'clients-postype' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clients-postype' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'clients', $args );
}


add_action( 'init', 'phs_quotes_init' );
/**
 * Register a quotes post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function phs_quotes_init() {
	$labels = array(
		'name'               => _x( 'Quotes', 'post type general name', 'quotes-postype' ),
		'singular_name'      => _x( 'Quote', 'post type singular name', 'quotes-postype' ),
		'menu_name'          => _x( 'Quotes', 'admin menu', 'quotes-postype' ),
		'name_admin_bar'     => _x( 'Quotes', 'add new on admin bar', 'quotes-postype' ),
		'add_new'            => _x( 'Add New', 'Quote', 'quotes-postype' ),
		'add_new_item'       => __( 'Add New Quote', 'quotes-postype' ),
		'new_item'           => __( 'New Quote', 'quotes-postype' ),
		'edit_item'          => __( 'Edit Quote', 'quotes-postype' ),
		'view_item'          => __( 'View Quote', 'quotes-postype' ),
		'all_items'          => __( 'All Quotes', 'quotes-postype' ),
		'search_items'       => __( 'Search Quotes', 'quotes-postype' ),
		'parent_item_colon'  => __( 'Parent Quotes:', 'quotes-postype' ),
		'not_found'          => __( 'No Quotes found.', 'quotes-postype' ),
		'not_found_in_trash' => __( 'No Quotes found in Trash.', 'quotes-postype' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'quotes-postype' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'excerpt' )
	);

	register_post_type( 'quotes', $args );
}


// hook into the init action and call create_quote_taxonomies when it fires
add_action( 'init', 'create_quote_taxonomies', 0 );

// create taxonomy, page type for the post type "quotes"
function create_quote_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Pages', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Page', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Pages', 'textdomain' ),
		'all_items'         => __( 'All Pages', 'textdomain' ),
		'parent_item'       => __( 'Parent Page', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Page:', 'textdomain' ),
		'edit_item'         => __( 'Edit Page', 'textdomain' ),
		'update_item'       => __( 'Update Page', 'textdomain' ),
		'add_new_item'      => __( 'Add New Page', 'textdomain' ),
		'new_item_name'     => __( 'New Page Name', 'textdomain' ),
		'menu_name'         => __( 'Pages', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		/*'rewrite'           => array( 'slug' => 'Page' ),*/
	);

	register_taxonomy( 'pages', array( 'quotes' ), $args );
}

