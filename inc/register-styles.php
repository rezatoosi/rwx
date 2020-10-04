<?php
/**
 * Register and enqueue styles
 */
function itcorp_register_styles() {

  $theme_version = wp_get_theme()->get( 'version' );

  wp_enqueue_style( 'itcorp-style', get_stylesheet_uri(), array(), $theme_version );
  wp_enqueue_style( 'itcorp-theme-styles', get_template_directory_uri() . '/css/theme-styles.css', array(), $theme_version, false );
  wp_enqueue_style( 'itcorp-blocks', get_template_directory_uri() . '/css/blocks.css', array(), $theme_version, false );
  wp_enqueue_style( 'itcorp-widgets', get_template_directory_uri() . '/css/widgets.css', array(), $theme_version, false );
  wp_enqueue_style( 'itcorp-rangeslider', get_template_directory_uri() . '/css/plugins/ion.rangeSlider.css', array(), $theme_version, false );

  // Google web fonts
  wp_enqueue_style( 'itcorp-font-nunito', 'https://fonts.googleapis.com/css?family=Nunito:300,400,700,900' );
  wp_enqueue_style( 'itcorp-font-baloo', 'https://fonts.googleapis.com/css?family=Baloo+Paaji' );


  // Styles for Plugins
  wp_enqueue_style( 'itcorp-swiper', get_template_directory_uri() . '/css/plugins/swiper.min.css', array(), $theme_version, false );

}
add_action( 'wp_enqueue_scripts', 'itcorp_register_styles' );
