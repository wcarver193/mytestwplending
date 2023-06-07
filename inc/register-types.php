<?php
//создание типов данных
function ag_register_types() {
//welcome
register_post_type( 'ag_welcome', array(
'label'               => null,
'labels'              => array(
'name'               => 'Welcome',
'singular_name'      => 'welcome',
'add_new'            => 'Add welcome',
'add_new_item'       => 'Add welcome',
'edit_item'          => 'Edit welcome',
'new_item'           => 'New welcome',
'view_item'          => 'View welcome',
'search_items'       => 'Search welcome',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Welcome',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-universal-access',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//welcome end

	
//portfolio
register_post_type( 'ag_portfolio', array(
'label'               => null,
'labels'              => array(
'name'               => 'Portfolio',
'singular_name'      => 'portfolio',
'add_new'            => 'Add work',
'add_new_item'       => 'Add work',
'edit_item'          => 'Edit work',
'new_item'           => 'New work',
'view_item'          => 'View work',
'search_items'       => 'Search work',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Portfolio',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-format-gallery',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//portfolio end
//Choose Us
register_post_type( 'ag_chooseus', array(
'label'               => null,
'labels'              => array(
'name'               => 'Chooseus',
'singular_name'      => 'chooses',
'add_new'            => 'Add choose',
'add_new_item'       => 'Add choose',
'edit_item'          => 'Edit choose',
'new_item'           => 'New choose',
'view_item'          => 'View choose',
'search_items'       => 'Search choose',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Chooseus',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-heart',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//Choose Us end



//offers ( предложения )
register_post_type( 'ag_offers', array(
'label'               => null,
'labels'              => array(
'name'               => 'Offers',
'singular_name'      => 'offers',
'add_new'            => 'Add offer',
'add_new_item'       => 'Add offer',
'edit_item'          => 'Edit offer',
'new_item'           => 'New offer',
'view_item'          => 'View offer',
'search_items'       => 'Search offer',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Offers',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-tickets-alt',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//offers end 



//our progress
register_post_type( 'ag_our_progress', array(
'label'               => null,
'labels'              => array(
'name'               => 'Our progress',
'singular_name'      => 'our_progress',
'add_new'            => 'Add progress',
'add_new_item'       => 'Add progress',
'edit_item'          => 'Edit progress',
'new_item'           => 'New progress',
'view_item'          => 'View progress',
'search_items'       => 'Search progress',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Our progress',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-slides',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//our progress end


//Pricing_table
register_post_type( 'ag_pricing_table', array(
'label'               => null,
'labels'              => array(
'name'               => 'Pricing tables',
'singular_name'      => 'pricing_table',
'add_new'            => 'Add price',
'add_new_item'       => 'Add price',
'edit_item'          => 'Edit price',
'new_item'           => 'New price',
'view_item'          => 'View price',
'search_items'       => 'Search price',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Pricing tables',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-cart',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//Pricing_table end


//our diplomas
register_post_type( 'ag_ourdiplomas', array(
'label'               => null,
'labels'              => array(
'name'               => 'Ourdiplomas',
'singular_name'      => 'ourdiplomas',
'add_new'            => 'Add diploma',
'add_new_item'       => 'Add diploma',
'edit_item'          => 'Edit diploma',
'new_item'           => 'New diploma',
'view_item'          => 'View diploma',
'search_items'       => 'Search diploma',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Ourdiplomas',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-slides',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//our diplomas end


//Team	
register_post_type( 'ag_team', array(
'label'               => null,
'labels'              => array(
'name'               => 'Team',
'singular_name'      => 'Team',
'add_new'            => 'Add people',
'add_new_item'       => 'Add people',
'edit_item'          => 'Edit people',
'new_item'           => 'New people',
'view_item'          => 'View people',
'search_items'       => 'Search people',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Team',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-admin-users',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//Team end


//reviews ( отзывы   )
register_post_type( 'ag_reviews', array(
'label'               => null,
'labels'              => array(
'name'               => 'Reviews',
'singular_name'      => 'review',
'add_new'            => 'Add review',
'add_new_item'       => 'Add review',
'edit_item'          => 'Edit review',
'new_item'           => 'New review',
'view_item'          => 'View review',
'search_items'       => 'Search review',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Reviews',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-format-chat',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//reviews end ( отзывы   )


//slider
register_post_type( 'ag_about_slider', array(
'label'               => null,
'labels'              => array(
'name'               => 'About slider',
'singular_name'      => 'about_slider',
'add_new'            => 'Add slide',
'add_new_item'       => 'Add slide',
'edit_item'          => 'Edit slide',
'new_item'           => 'New slide',
'view_item'          => 'View slide',
'search_items'       => 'Search slide',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'About slider',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-slides',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//slider end
//reviews ( отзывы   )
register_post_type( 'ag_footr', array(
'label'               => null,
'labels'              => array(
'name'               => 'Footr',
'singular_name'      => 'footr',
'add_new'            => 'Add socicon',
'add_new_item'       => 'Add socicon',
'edit_item'          => 'Edit socicon',
'new_item'           => 'New socicon',
'view_item'          => 'View socicon',
'search_items'       => 'Search socicon',
'not_found'          => 'Not found',
'not_found_in_trash' => 'Not found in trash',
'parent_item_colon'  => '',
'menu_name'          => 'Footr',
),
'description'         => '',
'public'              => true,
'publicly_queryable'  => true,
'exclude_from_search' => false,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'show_in_nav_menus'   => false,
'show_in_rest'        => false,
'rest_base'           => false,
'menu_position'       => null,
'menu_icon'           => 'dashicons-editor-italic',
//'capability_type'   => 'post',
//'capabilities'      => 'post',
//'map_meta_cap'      => null,
'hierarchical'        => false,// false - нет иерархии, true - есть иерархия.
'supports'            => array( 'title', 'editor', 'thumbnail' ),
// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => array(),
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
//socicons end ( отзывы   )
}

add_action( 'init', 'ag_register_types' );
//создание типов данных
?>