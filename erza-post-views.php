<?php

/*
 
Plugin Name: Erza Register Post Types
 
Plugin URI: https://erza.com/
 
Description: Plugin to accompany tutsplus guide to creating plugins, registers a post type.
 
Version: 1.0
 
Author: Yusra Ahmed
 
Author URI: https://yusraahmed.com/
 
Text Domain: erza
 
*/
// Register Custom Post Type Movie
function create_movie_cpt() {

	$labels = array(
		'name' => _x( 'Movies', 'Post Type General Name', 'erza' ),
		'singular_name' => _x( 'Movie', 'Post Type Singular Name', 'erza' ),
		'menu_name' => _x( 'Movies', 'Admin Menu text', 'erza' ),
		'name_admin_bar' => _x( 'Movie', 'Add New on Toolbar', 'erza' ),
		'archives' => __( 'Movie Archives', 'erza' ),
		'attributes' => __( 'Movie Attributes', 'erza' ),
		'parent_item_colon' => __( 'Parent Movie:', 'erza' ),
		'all_items' => __( 'All Movies', 'erza' ),
		'add_new_item' => __( 'Add New Movie', 'erza' ),
		'add_new' => __( 'Add New', 'erza' ),
		'new_item' => __( 'New Movie', 'erza' ),
		'edit_item' => __( 'Edit Movie', 'erza' ),
		'update_item' => __( 'Update Movie', 'erza' ),
		'view_item' => __( 'View Movie', 'erza' ),
		'view_items' => __( 'View Movies', 'erza' ),
		'search_items' => __( 'Search Movie', 'erza' ),
		'not_found' => __( 'Not found', 'erza' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'erza' ),
		'featured_image' => __( 'Featured Image', 'erza' ),
		'set_featured_image' => __( 'Set featured image', 'erza' ),
		'remove_featured_image' => __( 'Remove featured image', 'erza' ),
		'use_featured_image' => __( 'Use as featured image', 'erza' ),
		'insert_into_item' => __( 'Insert into Movie', 'erza' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Movie', 'erza' ),
		'items_list' => __( 'Movies list', 'erza' ),
		'items_list_navigation' => __( 'Movies list navigation', 'erza' ),
		'filter_items_list' => __( 'Filter Movies list', 'erza' ),
	);
	$args = array(
		'label' => __( 'Movie', 'erza' ),
		'description' => __( 'Movie custom post type', 'erza' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'movie', $args );

}
add_action( 'init', 'create_movie_cpt', 0 );


?>