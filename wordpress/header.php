<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
  <header>
    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => false,
        'menu_class'       => 'menu desktop-menu'
      ));
       ?>
      <i class="fa fa-bars mobile-menu"></i>
    </nav>
    <i class="fa fa-search"></i>
  </header>
  <main>
