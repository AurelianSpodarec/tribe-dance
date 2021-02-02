<?php
/**
* Plugin Name: Custom Post Types
* Plugin URI:
* Description: Custom Post Types for the website
* Version: 0.1.0
* Author: Aurelian Spodarec
* Author URI: aurelianspodarec.co.uk
*
* @package Meakid
*/

///////////////////////////////////////////////
//
// SERVICES CUSTOM POST TYPE
//
///////////////////////////////////////////////

function register_themepost() {
    $labels = array(
        'name' => _x( 'products', 'my_custom_post','custom' ),
        'singular_name' => _x( 'Product', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New Product Post', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit Product Post', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New Product Post', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View Product Post', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search Product Posts', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No ProductPosts found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No Product Posts found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent Product Post:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'Products', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Product Posts',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'post_tag','products_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'products','with_front' => FALSE),
        'public' => true,
        'has_archive' => 'products',
        'capability_type' => 'post'
    );
    register_post_type( 'products', $args );
}

add_action( 'init', 'register_themepost', 20 );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}