<?php

/*
 
Plugin Name: Erza Register Post Types
 
Plugin URI: https://erza.com/
 
Description: Plugin that records post views and display  posts by popularity.
 
Version: 1.0
 
Author: Yusra Ahmed
 
Author URI: https://yusraahmed.com/
 
Text Domain: erza
 
*/
// Register Custom Post Type Movie

function erza_add_view() {
	if(is_single()) {
	   global $post;
	   $current_views = get_post_meta($post->ID, "erza_views", true);
	   if(!isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ) {
		  $current_views = 0;
	   }
	   $new_views = $current_views + 1;
	   update_post_meta($post->ID, "erza_views", $new_views);
	   return $new_views;
	}
 }
 add_action("wp_head", "erza_add_view");

 function erza_get_view_count() {
	global $post;
	$current_views = get_post_meta($post->ID, "erza_views", true);
	if(!isset($current_views) OR empty($current_views) OR !is_numeric($current_views) ) {
	   $current_views = 0;
	}
 
	return $current_views;
 }

?>