<?php 

// Register Custom Post Type
function ideaCustomPostType() {

	$labels = array(
		'name'                  => _x( 'Ideas', 'Post Type General Name', 'AnythingMachine' ),
		'singular_name'         => _x( 'Idea', 'Post Type Singular Name', 'AnythingMachine' ),
		'menu_name'             => __( 'Ideas', 'AnythingMachine' ),
		'name_admin_bar'        => __( 'Idea', 'AnythingMachine' ),
		'archives'              => __( 'Idea Archives', 'AnythingMachine' ),
		'attributes'            => __( 'Idea Attributes', 'AnythingMachine' ),
		'parent_item_colon'     => __( 'Parent Idea:', 'AnythingMachine' ),
		'all_items'             => __( 'All Ideas', 'AnythingMachine' ),
		'add_new_item'          => __( 'Add New Idea', 'AnythingMachine' ),
		'add_new'               => __( 'Add New', 'AnythingMachine' ),
		'new_item'              => __( 'New Idea', 'AnythingMachine' ),
		'edit_item'             => __( 'Edit Idea', 'AnythingMachine' ),
		'update_item'           => __( 'Update Idea', 'AnythingMachine' ),
		'view_item'             => __( 'View Idea', 'AnythingMachine' ),
		'view_items'            => __( 'View Ideas', 'AnythingMachine' ),
		'search_items'          => __( 'Search Idea', 'AnythingMachine' ),
		'not_found'             => __( 'Not found', 'AnythingMachine' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'AnythingMachine' ),
		'featured_image'        => __( 'Featured Image', 'AnythingMachine' ),
		'set_featured_image'    => __( 'Set featured image', 'AnythingMachine' ),
		'remove_featured_image' => __( 'Remove featured image', 'AnythingMachine' ),
		'use_featured_image'    => __( 'Use as featured image', 'AnythingMachine' ),
		'insert_into_item'      => __( 'Insert into item', 'AnythingMachine' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'AnythingMachine' ),
		'items_list'            => __( 'Items list', 'AnythingMachine' ),
		'items_list_navigation' => __( 'Items list navigation', 'AnythingMachine' ),
		'filter_items_list'     => __( 'Filter items list', 'AnythingMachine' ),
	);
	$args = array(
		'label'                 => __( 'Idea', 'AnythingMachine' ),
		'description'           => __( 'An expedition into the future', 'AnythingMachine' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'idea', $args );

}
add_action( 'init', 'ideaCustomPostType', 0 );