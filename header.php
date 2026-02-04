<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="top-marquee">
    <div class="marquee-track">
      <span>Luxury Chauffeur Tours • Airport Transfers • Custom Itineraries • Premium Fleet • 24/7 Concierge</span>
      <span>Luxury Chauffeur Tours • Airport Transfers • Custom Itineraries • Premium Fleet • 24/7 Concierge</span>
    </div>
  </div>
  <div class="container navbar">
    <div class="brand">
      <h1><?php bloginfo('name'); ?></h1>
      <span><?php bloginfo('description'); ?></span>
    </div>
    <nav class="main-nav" aria-label="Primary">
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'nav-list',
              'fallback_cb' => 'wp_page_menu',
          )
      );
      ?>
    </nav>
    <div class="nav-actions">
      <button class="toggle" type="button" data-theme-toggle>
        <span>🌗</span>
        <span>Dark / Light</span>
      </button>
      <a class="button" href="#contact">Book Now</a>
    </div>
  </div>
</header>
