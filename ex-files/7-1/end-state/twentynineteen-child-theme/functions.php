<?php
function lil_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style') );    
}

add_action( 'wp_enqueue_scripts', 'lil_child_enqueue_styles' );

function lil_add_business_to_query( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'business' ) );
    }
}

add_action( 'pre_get_posts', 'lil_add_business_to_query' );
