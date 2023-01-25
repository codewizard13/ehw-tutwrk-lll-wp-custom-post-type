<?php

function lil_register_business_type() {

  $labels = array(
    'name' => __( 'Businesses', LILDOMAIN),
    'singular_name' => __( 'Business', LILDOMAIN),
    'featured_image' => __( 'Business Logo', LILDOMAIN),
    'set_featured_image' => __( 'Set Business Logo', LILDOMAIN),
    'remove_featured_image' => __( 'Remove Logo', LILDOMAIN),
    'use_featured_image' => __( 'Use Logo', LILDOMAIN),
    'archives' => __( 'Business Directory', LILDOMAIN),
    'add_new' => __( 'Add New Business', LILDOMAIN),
    'add_new_item' => __( 'Add New Business', LILDOMAIN)
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => 'businesses',
    'rewrite' => array('has_front' => true),
    'menu_icon' => 'dashicons-building',
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'show_in_rest' => true // also makes gutenberg show up
  );

  register_post_type( 'business', $args);

}

function lil_register_event_type()
{

  $labels = array(
    'name' => __( 'Events', LILDOMAIN),
    'singular_name' => __( 'Event', LILDOMAIN),
    'archives' => __( 'Events List', LILDOMAIN),
    'add_new' => __( 'Add New Event', LILDOMAIN),
    'add_new_item' => __( 'Add New Event', LILDOMAIN)
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => 'events',
    'rewrite' => array('has_front' => true),
    'menu_icon' => 'dashicons-calendar',
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true
  );

  register_post_type('event', $args);
}

function lil_register_prophetic_word_type()
{

  $labels = array(
    'name' => __( 'Prophetic Words', LILDOMAIN),
    'singular_name' => __( 'Prophetic Word', LILDOMAIN),
    'archives' => __( 'Prophetic Words List', LILDOMAIN),
    'add_new' => __( 'Add New Prophetic Word', LILDOMAIN),
    'add_new_item' => __( 'Add New Prophetic Word', LILDOMAIN)
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => 'prophetic-word',
    'rewrite' => array('has_front' => true),
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true
  );

  register_post_type('prophetic-word', $args);
}