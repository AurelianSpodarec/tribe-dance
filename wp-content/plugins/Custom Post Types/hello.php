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


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('General Settings'),
            'menu_title'    => __('General Settings'),
            'menu_slug'     => 'general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

///////////////////////////////////////////////
//
// SERVICES CUSTOM POST TYPE
//
///////////////////////////////////////////////

function register_themepost() {
    $labels = array(
        'name' => _x( 'products','sage' ),
        'singular_name' => _x( 'Product', 'sage' ),
        'add_new' => _x( 'Add New', 'sage' ),
        'add_new_item' => _x( 'Add New Product Post', 'sage' ),
        'edit_item' => _x( 'Edit Product Post', 'sage' ),
        'new_item' => _x( 'New Product Post', 'sage' ),
        'view_item' => _x( 'View Product Post', 'sage' ),
        'search_items' => _x( 'Search Product Posts', 'sage' ),
        'not_found' => _x( 'No ProductPosts found', 'sage' ),
        'not_found_in_trash' => _x( 'No Product Posts found in Trash', 'sage' ),
        'parent_item_colon' => _x( 'Parent Product Post:', 'sage' ),
        'menu_name' => _x( 'Products', 'sage' ),
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
        // 'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
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


