<?php
define( 'LILDOMAIN', 'lil-post-types' );
define( 'LILPATH', get_stylesheet_directory() . '/lil-post-types/' );

require_once( LILPATH . '/post-types/register.php' );
add_action( 'init', 'lil_register_business_type' );
add_action( 'init', 'lil_register_event_type' );

require_once( LILPATH . '/taxonomies/register.php' );
add_action( 'init', 'lil_register_size_taxonomy' );
add_action( 'init', 'lil_register_location_taxonomy' );