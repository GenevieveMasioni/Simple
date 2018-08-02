<?php

// Theme support
function simple_setup() {
  // Header navigation
  register_nav_menus(array(
    'primary'    => __('Primary menu')
  ));
}

add_action('after_setup_theme', 'simple_setup');

 ?>
