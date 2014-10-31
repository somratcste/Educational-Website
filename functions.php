<?php

//  For enable Comments:


function comment_scripts(){

   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'comment_scripts' );

/* Dynamic menu*/

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// For registering sidebar (Widget):



function  asif_widget_areas() {
	register_sidebar( array(
		'name' => __( 'Footer Menu', 'asif' ),
		'id' => 'left_footer',
		'before_widget' => '<div class="about_us fix  floatleft">',
		'after_widget' => '</div>',
	    'before_title' => '<div class="header_3_footer fix"><h3>',
	    'after_title' => '</h3></div>',
	) );
}
add_action('widgets_init', 'asif_widget_areas');



/* This code for enable Featured Image Support of wordpress */

add_theme_support('post-thumbnails', array('post','slider','sponser') );

/* For enable Crop feature */

set_post_thumbnail_size( 200, 200, true );
add_image_size( 'post-image', 150, 150, true );
add_image_size( 'content-image', 50, 50, true );
add_image_size( 'event_image', 50, 50, true );


add_image_size( 'slider_image', 980, 450, true );


//for slider 
add_action( 'init', 'create_post_type' );
            function create_post_type() {
                    register_post_type( 'slider',
                            array(
                                    'labels' => array(
                                            'name' => __( 'Slider' ),
                                            'singular_name' => __( 'Slide' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Image' ),
                                            'edit_item' => __( 'Edit Slider' ),
                                            'new_item' => __( 'New Image' ),
                                            'view_item' => __( 'View Slider' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the slider you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => false,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => false,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'slider' ),
                            'supports' => array( 'title', 'thumbnail' ) // which part need in WP
                            )
                    );
					
					
            }
			
			
			
add_image_size( 'sponser_image', 220, 55, true );


//for sponser 
add_action( 'init', 'create_post_type1' );
            function create_post_type1() {
                    register_post_type( 'sponser',
                            array(
                                    'labels' => array(
                                            'name' => __( 'Sponser' ),
                                            'singular_name' => __( 'sponSer' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Image' ),
                                            'edit_item' => __( 'Edit Slider' ),
                                            'new_item' => __( 'New Image' ),
                                            'view_item' => __( 'View Slider' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the slider you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => false,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => false,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'sponser' ),
                            'supports' => array( 'title', 'thumbnail' ) // which part need in WP
                            )
                    );
					
					
            }


?>