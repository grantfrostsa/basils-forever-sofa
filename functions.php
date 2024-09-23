<?php

function basils_forever_sofa_files() {
  wp_enqueue_script('main-js', get_theme_file_uri('scripts.js'), NULL ,'1.0', true);
  wp_enqueue_style('main_styles', get_stylesheet_uri());
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  wp_enqueue_style('box-icons', '//unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
}

add_action('wp_enqueue_scripts','basils_forever_sofa_files');

function basils_forever_sofa_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('dog-landscape', 400 , 260, true);
  add_image_size('dog-portrait', 480 , 650, true);
  add_image_size('page-banner', 1500 , 350, true);
  register_nav_menu('headerMenuLocation','Header Menu Location');
  register_nav_menu('footerQuickLinksMenuLocation','Footer Quick Links Menu Location');
}

add_action('after_setup_theme', 'basils_forever_sofa_features');

?>