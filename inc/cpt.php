<?php 

function cptui_register_my_cpts_portfolio() {

	/**
	 * Post Type: Items.
	 */

	$labels = [
		"name" => esc_html__( "Items", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Item", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Portfolio", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Items", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-view-site",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );


function cptui_register_my_taxes_project_category() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => esc_html__( "Categories", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Category", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "Categories", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'project_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "project_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "project_category", [ "portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_project_category' );

