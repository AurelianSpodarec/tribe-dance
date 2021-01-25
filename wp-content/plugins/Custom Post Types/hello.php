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

function services() {
    $args = array(
    'public'    => true,
    'label'     => __( 'Products'),
    'supports' => array( 'title', 'editor', 'thumbnail', ),
    'singular_name'       => __( 'Product', 'Post Type Singular Name', 'sage' ),
    'menu_icon' => 'dashicons-welcome-write-blog',
);
register_post_type( 'products', $args );
}
add_action( 'init', 'products' );