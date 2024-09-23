<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header__main-header">
    <div class="container">
      <div class="header__main-header--logo-box">
        <a href="<?php echo site_url(''); ?>" class="header__main-header--logo-link">
          <img src="<?php echo get_theme_file_uri('/assets/imgs/logo-no-text.png'); ?>" alt="Basil's Forever Sofa Logo" class="header__main-header--logo-image">
          <p class="header__main-header--logo-text">Basil's Forever Sofa</p>
        </a>
      </div>
      <nav class="header__main-header--main-nav">
      <?php
          wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          ));
        ?>
      </nav>
      <nav class="header__hamburger-off-screen-menu">
      <?php
          wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          ));
        ?> 
      </nav>
      <div class="header__hamburger-nav">
        <div class="header__hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
