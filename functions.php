<?php
require get_template_directory() . '/includes/customizers.php';


function site_files() {
  // stylsheets
  wp_enqueue_style('normalize_css', get_template_directory_uri(). '/assets/css/normalize.css');
  wp_enqueue_style('main_css', get_stylesheet_uri());

  // javascript
  wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/script.js'), NULL, '1.0', true);

}
add_action('wp_enqueue_scripts', 'site_files');


function theme_setup() {
  add_theme_support('title-tag');
}

add_action('after_theme_setup', 'theme_setup');

// customizers
add_action('customize_register', 'setup_customizers');
