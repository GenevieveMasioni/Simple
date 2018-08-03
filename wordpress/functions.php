<?php

// Theme support
function simple_setup() {
  // Header navigation
  register_nav_menus(array(
    'primary'    => __('Primary menu')
  ));
  // Featured image for blog Posts
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_setup');

function init_widgets($id) {
  register_sidebar(array(
    'name'        => 'Sidebar',
    'id'          => 'sidebar',
    'before_widget'     => '<section class="widget">',
    'after_widget'     => '</section>',
    'before_title'     => '<h3 class="widget-title">',
    'after_widget'     => '</h3>'
  ));
}

add_action('widgets_init', 'init_widgets');
 ?>
