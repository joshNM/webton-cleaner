<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Add Testimonial CPT
 */
add_action( 'init', __NAMESPACE__ . '\\create_post_type_testimonial', 0);
function create_post_type_testimonial() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clipboard',
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/**
 * Add Projects CPT
 */
add_action( 'init', __NAMESPACE__ . '\\create_post_type_project', 0);
function create_post_type_project() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

