<?php

function lil_register_business_type() {
    $labels = array( 
        'name' => __( 'Businesses', LILDOMAIN ),
        'singular_name' => __( 'Business', LILDOMAIN ),
        'featured_image' => __( 'Business Logo', LILDOMAIN ),
        'set_featured_image' => __( 'Set Business Logo', LILDOMAIN ),
        'remove_featured_image' => __( 'Remove Logo', LILDOMAIN ),
        'use_featured_image' => __( 'Use Logo', LILDOMAIN ),
        'archives' => __( 'Business Directory', LILDOMAIN ),
        'add_new' => __( 'Add New Business', LILDOMAIN ),
        'add_new_item' => __( 'Add New Business', LILDOMAIN ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'businesses',
        'rewrite' => array( 'has_front' => true ),
        'menu_icon' => 'dashicons-building',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'business', $args );
}