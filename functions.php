<?php

// ACF

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Sidebar',
		'menu_title'	=> 'Blog',
		'parent_slug'	=> 'theme-general-settings',
	));	
}

// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyD4vlOj_3G-ErfM6ey5qeGcTjjoE58cH4w';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

require get_template_directory() . '/inc/theme-enqueue.php';
require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/comments.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/cpt.php';