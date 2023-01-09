<?php

function ehw_register_event_type()
{

  $labels = array(
    'name' => __( 'Events', EHWDOMAIN),
    'singular_name' => __( 'Event', EHWDOMAIN),
    'featured_image' => __( 'Event Image', EHWDOMAIN),
    'set_featured_image' => __('Set Event Image', EHWDOMAIN),
    'remove_featured_image' => __( 'Remove Event Image', EHWDOMAIN),
    'use_featured_image' => __( 'Use Event Image', EHWDOMAIN),
    'archives' => __( 'Events List', EHWDOMAIN),
    'add_new' => __( 'Add New Event', EHWDOMAIN),
    'add_new_item' => __( 'Add New Event', EHWDOMAIN)
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
