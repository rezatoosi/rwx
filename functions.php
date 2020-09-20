<?php
/**
 * ITCORP functions and definitions
 */
/**
 * Table of contents:
 * Theme supports
 * Reqired files
 * Register styles
 * Register scripts
 */

 function itcorp_theme_support() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'custom-logo' );
 }
add_action( 'after_setup_theme', 'itcorp_theme_support' );

/**
 * Include Required files
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/svg-icons.php';

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


/**
 * Register and enqueue scripts
 */
 function itcorp_register_scripts() {

   $theme_version = wp_get_theme()->get( 'version' );

   // <script src="js/jquery-3.3.1.js"></script>
   // wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'itcorp-js-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-pagination', get_template_directory_uri() . '/js/js-plugins/ajax-pagination.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-countdown', get_template_directory_uri() . '/js/js-plugins/jquery.countdown.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-megamenu', get_template_directory_uri() . '/js/js-plugins/crum-mega-menu.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-swiper', get_template_directory_uri() . '/js/js-plugins/swiper.jquery.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-typeahead', get_template_directory_uri() . '/js/js-plugins/jquery.typeahead.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-velocity', get_template_directory_uri() . '/js/js-plugins/velocity.min.js', array(), $theme_version, true );

   wp_enqueue_script( 'itcorp-js-waypoints', get_template_directory_uri() . '/js/js-plugins/waypoints.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-countTo', get_template_directory_uri() . '/js/js-plugins/jquery-countTo.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-nice-select', get_template_directory_uri() . '/js/js-plugins/jquery.nice-select.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-imagesLoaded', get_template_directory_uri() . '/js/js-plugins/imagesLoaded.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-magnific-popup', get_template_directory_uri() . '/js/js-plugins/jquery.magnific-popup.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-matchHeight', get_template_directory_uri() . '/js/js-plugins/jquery.matchHeight.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-Headroom', get_template_directory_uri() . '/js/js-plugins/Headroom.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-smooth-scroll', get_template_directory_uri() . '/js/js-plugins/smooth-scroll.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-segment', get_template_directory_uri() . '/js/js-plugins/segment.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-bootstrap', get_template_directory_uri() . '/js/js-plugins/bootstrap.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/js-plugins/moment.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/js-plugins/moment-timezone.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-isotope', get_template_directory_uri() . '/js/js-plugins/isotope.pkgd.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-rangeSlider', get_template_directory_uri() . '/js/js-plugins/ion.rangeSlider.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-parsley', get_template_directory_uri() . '/js/js-plugins/parsley.min.js', array(), $theme_version, true );

   wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/main.js', array(), $theme_version, true );

   // jQuery-scripts for Modules (Send Message)
   wp_enqueue_script( 'itcorp-js-validate', get_template_directory_uri() . '/modules/forms/src/js/jquery.validate.min.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-sweetalert2', get_template_directory_uri() . '/modules/forms/src/js/sweetalert2.all.js', array(), $theme_version, true );
   wp_enqueue_script( 'itcorp-js-forms', get_template_directory_uri() . '/modules/forms/src/js/scripts.js', array(), $theme_version, true );

 }
 add_action( 'wp_enqueue_scripts', 'itcorp_register_scripts' );
