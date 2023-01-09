<?php 

function lil_register_size_taxonomy() {
    $labels = array(
        'name' => __( 'Sizes', LILDOMAIN ),
        'singular_name' => __( 'Size', LILDOMAIN ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
    );

    $post_types = array( 'business' );

    register_taxonomy( 'size', $post_types, $args );
}