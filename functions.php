<?php
function orchidstorechild_translation_setup()
{
  load_child_theme_textdomain('orchid-store', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'orchidstorechild_translation_setup');

function child_rtl_css()
{
  if (is_rtl()) {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/child-rtl.css', array(), '1.0');
  }
}
add_action('after_setup_theme', 'orchidstore_theme_setup', 10);
function orchidstore_theme_setup()
{
  add_action('wp_enqueue_scripts', 'child_rtl_css');
}

/**
 * Widget to display product categories and page slider.
 */
require_once('widget/widgets/banner-widget.php');