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
  <div class="container navbar">
    <div class="brand">
      <h1><?php bloginfo('name'); ?></h1>
      <span><?php bloginfo('description'); ?></span>
    </div>
    <div class="nav-actions">
      <button class="toggle" type="button" data-theme-toggle>
        <span>🌗</span>
        <span>Dark / Light</span>
      </button>
      <a class="button" href="#contact">Book Now</a>
    </div>
  </div>
</header>
