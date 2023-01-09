<?php

function lil_register_business_type() {
    $labels = array( 
        'name' => __( 'Businesses', LILDOMAIN ),
        'singular_name' => __( 'Business', LILDOMAIN ),
        'featured_image' => __( 'Business Logo', LILDOMAIN ),
        'set_feature_image' => __( 'Set Business Logo', LILDOMAIN ),
        'remove_feature_image' => __( 'Remove Logo', LILDOMAIN ),
        'use_feature_image' => __( 'Use Logo', LILDOMAIN ),
        'archives' => __( 'Business Directory', LILDOMAIN ),
        'add_new' => __( 'Add New Business', LILDOMAIN ),
        'add_new_item' => __( 'Add New Business', LILDOMAIN ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
    );

    register_post_type( 'business', $args );
}