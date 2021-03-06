<?php // Register Custom Post Types

// Features
function cwc_cpt_feature() {
	$labels = array(
		'name'                  => _x( 'Features', 'Post Type General Name', 'cwc' ),
		'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'cwc' ),
		'menu_name'             => __( 'Features', 'cwc' ),
		'name_admin_bar'        => __( 'Feature', 'cwc' ),
		'archives'              => __( 'Item Archives', 'cwc' ),
		'attributes'            => __( 'Item Attributes', 'cwc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cwc' ),
		'all_items'             => __( 'All Items', 'cwc' ),
		'add_new_item'          => __( 'Add New Item', 'cwc' ),
		'add_new'               => __( 'Add New', 'cwc' ),
		'new_item'              => __( 'New Item', 'cwc' ),
		'edit_item'             => __( 'Edit Item', 'cwc' ),
		'update_item'           => __( 'Update Item', 'cwc' ),
		'view_item'             => __( 'View Item', 'cwc' ),
		'view_items'            => __( 'View Items', 'cwc' ),
		'search_items'          => __( 'Search Item', 'cwc' ),
		'not_found'             => __( 'Not found', 'cwc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cwc' ),
		'featured_image'        => __( 'Featured Image', 'cwc' ),
		'set_featured_image'    => __( 'Set featured image', 'cwc' ),
		'remove_featured_image' => __( 'Remove featured image', 'cwc' ),
		'use_featured_image'    => __( 'Use as featured image', 'cwc' ),
		'insert_into_item'      => __( 'Insert into item', 'cwc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cwc' ),
		'items_list'            => __( 'Items list', 'cwc' ),
		'items_list_navigation' => __( 'Items list navigation', 'cwc' ),
		'filter_items_list'     => __( 'Filter items list', 'cwc' ),
	);
	$rewrite = array(
		'slug'                  => 'features',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Feature', 'cwc' ),
		'description'           => __( 'Features.', 'cwc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'feature', $args );
}
add_action( 'init', 'cwc_cpt_feature', 0 );

// Services
function cwc_cpt_service() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'cwc' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'cwc' ),
		'menu_name'             => __( 'Services', 'cwc' ),
		'name_admin_bar'        => __( 'Service', 'cwc' ),
		'archives'              => __( 'Item Archives', 'cwc' ),
		'attributes'            => __( 'Item Attributes', 'cwc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cwc' ),
		'all_items'             => __( 'All Items', 'cwc' ),
		'add_new_item'          => __( 'Add New Item', 'cwc' ),
		'add_new'               => __( 'Add New', 'cwc' ),
		'new_item'              => __( 'New Item', 'cwc' ),
		'edit_item'             => __( 'Edit Item', 'cwc' ),
		'update_item'           => __( 'Update Item', 'cwc' ),
		'view_item'             => __( 'View Item', 'cwc' ),
		'view_items'            => __( 'View Items', 'cwc' ),
		'search_items'          => __( 'Search Item', 'cwc' ),
		'not_found'             => __( 'Not found', 'cwc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cwc' ),
		'featured_image'        => __( 'Featured Image', 'cwc' ),
		'set_featured_image'    => __( 'Set featured image', 'cwc' ),
		'remove_featured_image' => __( 'Remove featured image', 'cwc' ),
		'use_featured_image'    => __( 'Use as featured image', 'cwc' ),
		'insert_into_item'      => __( 'Insert into item', 'cwc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cwc' ),
		'items_list'            => __( 'Items list', 'cwc' ),
		'items_list_navigation' => __( 'Items list navigation', 'cwc' ),
		'filter_items_list'     => __( 'Filter items list', 'cwc' ),
	);
	$rewrite = array(
		'slug'                  => 'service',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Service', 'cwc' ),
		'description'           => __( 'Services.', 'cwc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'service', $args );
}
add_action( 'init', 'cwc_cpt_service', 0 );

// Team Members
function cwc_cpt_member() {
	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'cwc' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'cwc' ),
		'menu_name'             => __( 'Team', 'cwc' ),
		'name_admin_bar'        => __( 'Team Member', 'cwc' ),
		'archives'              => __( 'Item Archives', 'cwc' ),
		'attributes'            => __( 'Item Attributes', 'cwc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cwc' ),
		'all_items'             => __( 'All Items', 'cwc' ),
		'add_new_item'          => __( 'Add New Item', 'cwc' ),
		'add_new'               => __( 'Add New', 'cwc' ),
		'new_item'              => __( 'New Item', 'cwc' ),
		'edit_item'             => __( 'Edit Item', 'cwc' ),
		'update_item'           => __( 'Update Item', 'cwc' ),
		'view_item'             => __( 'View Item', 'cwc' ),
		'view_items'            => __( 'View Items', 'cwc' ),
		'search_items'          => __( 'Search Item', 'cwc' ),
		'not_found'             => __( 'Not found', 'cwc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cwc' ),
		'featured_image'        => __( 'Featured Image', 'cwc' ),
		'set_featured_image'    => __( 'Set featured image', 'cwc' ),
		'remove_featured_image' => __( 'Remove featured image', 'cwc' ),
		'use_featured_image'    => __( 'Use as featured image', 'cwc' ),
		'insert_into_item'      => __( 'Insert into item', 'cwc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cwc' ),
		'items_list'            => __( 'Items list', 'cwc' ),
		'items_list_navigation' => __( 'Items list navigation', 'cwc' ),
		'filter_items_list'     => __( 'Filter items list', 'cwc' ),
	);
	$rewrite = array(
		'slug'                  => 'team',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Team Member', 'cwc' ),
		'description'           => __( 'Team Members.', 'cwc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'member', $args );
}
add_action( 'init', 'cwc_cpt_member', 0 );

// Insurances
function cwc_cpt_insurance() {
	$labels = array(
		'name'                  => _x( 'Insurances', 'Post Type General Name', 'cwc' ),
		'singular_name'         => _x( 'Insurance', 'Post Type Singular Name', 'cwc' ),
		'menu_name'             => __( 'Insurances', 'cwc' ),
		'name_admin_bar'        => __( 'Insurance', 'cwc' ),
		'archives'              => __( 'Item Archives', 'cwc' ),
		'attributes'            => __( 'Item Attributes', 'cwc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cwc' ),
		'all_items'             => __( 'All Items', 'cwc' ),
		'add_new_item'          => __( 'Add New Item', 'cwc' ),
		'add_new'               => __( 'Add New', 'cwc' ),
		'new_item'              => __( 'New Item', 'cwc' ),
		'edit_item'             => __( 'Edit Item', 'cwc' ),
		'update_item'           => __( 'Update Item', 'cwc' ),
		'view_item'             => __( 'View Item', 'cwc' ),
		'view_items'            => __( 'View Items', 'cwc' ),
		'search_items'          => __( 'Search Item', 'cwc' ),
		'not_found'             => __( 'Not found', 'cwc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cwc' ),
		'featured_image'        => __( 'Featured Image', 'cwc' ),
		'set_featured_image'    => __( 'Set featured image', 'cwc' ),
		'remove_featured_image' => __( 'Remove featured image', 'cwc' ),
		'use_featured_image'    => __( 'Use as featured image', 'cwc' ),
		'insert_into_item'      => __( 'Insert into item', 'cwc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cwc' ),
		'items_list'            => __( 'Items list', 'cwc' ),
		'items_list_navigation' => __( 'Items list navigation', 'cwc' ),
		'filter_items_list'     => __( 'Filter items list', 'cwc' ),
	);
	$rewrite = array(
		'slug'                  => 'insurance',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Insurance', 'cwc' ),
		'description'           => __( 'Insurances.', 'cwc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-money-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'insurance', $args );
}
add_action( 'init', 'cwc_cpt_insurance', 0 );

// Affiliations
function cwc_cpt_affiliation() {
	$labels = array(
		'name'                  => _x( 'Affiliations', 'Post Type General Name', 'cwc' ),
		'singular_name'         => _x( 'Affiliation', 'Post Type Singular Name', 'cwc' ),
		'menu_name'             => __( 'Affiliations', 'cwc' ),
		'name_admin_bar'        => __( 'Affiliation', 'cwc' ),
		'archives'              => __( 'Item Archives', 'cwc' ),
		'attributes'            => __( 'Item Attributes', 'cwc' ),
		'parent_item_colon'     => __( 'Parent Item:', 'cwc' ),
		'all_items'             => __( 'All Items', 'cwc' ),
		'add_new_item'          => __( 'Add New Item', 'cwc' ),
		'add_new'               => __( 'Add New', 'cwc' ),
		'new_item'              => __( 'New Item', 'cwc' ),
		'edit_item'             => __( 'Edit Item', 'cwc' ),
		'update_item'           => __( 'Update Item', 'cwc' ),
		'view_item'             => __( 'View Item', 'cwc' ),
		'view_items'            => __( 'View Items', 'cwc' ),
		'search_items'          => __( 'Search Item', 'cwc' ),
		'not_found'             => __( 'Not found', 'cwc' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'cwc' ),
		'featured_image'        => __( 'Featured Image', 'cwc' ),
		'set_featured_image'    => __( 'Set featured image', 'cwc' ),
		'remove_featured_image' => __( 'Remove featured image', 'cwc' ),
		'use_featured_image'    => __( 'Use as featured image', 'cwc' ),
		'insert_into_item'      => __( 'Insert into item', 'cwc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'cwc' ),
		'items_list'            => __( 'Items list', 'cwc' ),
		'items_list_navigation' => __( 'Items list navigation', 'cwc' ),
		'filter_items_list'     => __( 'Filter items list', 'cwc' ),
	);
	$rewrite = array(
		'slug'                  => 'affiliation',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Affiliation', 'cwc' ),
		'description'           => __( 'Affiliations.', 'cwc' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 9,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'affiliation', $args );
}
add_action( 'init', 'cwc_cpt_affiliation', 0 );