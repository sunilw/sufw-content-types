<?php

/**
* Define the content types
*/

/**
* Content type: essay
*/
if ( ! function_exists('sufw_essays') ) {


function sufw_essays() {

	$labels = array(
		'name'                  => _x( 'Essays', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'sufw_essay', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'SUFW Essays', 'text_domain' ),
		'name_admin_bar'        => __( 'SUFW Essays', 'text_domain' ),
		'archives'              => __( 'Essays Archives', 'text_domain' ),
		'attributes'            => __( 'Essay Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Essays', 'text_domain' ),
		'add_new_item'          => __( 'Add New Essay', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Essay', 'text_domain' ),
		'edit_item'             => __( 'Edit Essay', 'text_domain' ),
		'update_item'           => __( 'Update Essay', 'text_domain' ),
		'view_item'             => __( 'View Essay', 'text_domain' ),
		'view_items'            => __( 'View Essays', 'text_domain' ),
		'search_items'          => __( 'Search Essay', 'text_domain' ),
		'not_found'             => __( 'No Essay Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'sufw_essay', 'text_domain' ),
		'description'           => __( 'Essays Fro m Speak Up For Women', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sufw_essays', $args );

}
add_action( 'init', 'sufw_essays', 0 );

}

/**
*  Press Releaseses
*/

if ( ! function_exists('sufw_press_release') ) {

function sufw_press_release() {

	$labels = array(
		'name'                  => _x( 'Press Releases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'sufw_press_release', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Press Releases', 'text_domain' ),
		'name_admin_bar'        => __( 'Press Releases', 'text_domain' ),
		'archives'              => __( 'Press Release Archives', 'text_domain' ),
		'attributes'            => __( 'Release Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Press Release', 'text_domain' ),
		'add_new'               => __( 'Add New Release', 'text_domain' ),
		'new_item'              => __( 'New Release', 'text_domain' ),
		'edit_item'             => __( 'Edit Press Release', 'text_domain' ),
		'update_item'           => __( 'Update Press Release', 'text_domain' ),
		'view_item'             => __( 'View Press Release', 'text_domain' ),
		'view_items'            => __( 'View Releases', 'text_domain' ),
		'search_items'          => __( 'Search Essay', 'text_domain' ),
		'not_found'             => __( 'No Release Found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'sufw_press_release', 'text_domain' ),
		'description'           => __( 'SUFW Press Releases', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sufw_press_release', $args );

}
add_action( 'init', 'sufw_press_release', 0 );

}
