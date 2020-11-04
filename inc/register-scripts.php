<?php
/**
 * Register and enqueue scripts
 */
  if (!is_admin()) add_action("wp_enqueue_scripts", "itcorp_jquery_enqueue", 11);
  function itcorp_jquery_enqueue() {
    wp_deregister_script('jquery');
    // wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
    // wp_enqueue_script('jquery');
  }

 function itcorp_register_scripts() {

   $theme_version = wp_get_theme()->get( 'version' );

   // wp_enqueue_script( 'itcorp-js-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-pagination', get_template_directory_uri() . '/js/js-plugins/ajax-pagination.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-countdown', get_template_directory_uri() . '/js/js-plugins/jquery.countdown.min.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-megamenu', get_template_directory_uri() . '/js/js-plugins/crum-mega-menu.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js-swiper', get_template_directory_uri() . '/js/js-plugins/swiper.jquery.min.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-typeahead', get_template_directory_uri() . '/js/js-plugins/jquery.typeahead.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-velocity', get_template_directory_uri() . '/js/js-plugins/velocity.min.js', array(), $theme_version, true );
   //
   // // wp_enqueue_script( 'itcorp-js-waypoints', get_template_directory_uri() . '/js/js-plugins/waypoints.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-countTo', get_template_directory_uri() . '/js/js-plugins/jquery-countTo.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-nice-select', get_template_directory_uri() . '/js/js-plugins/jquery.nice-select.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-imagesLoaded', get_template_directory_uri() . '/js/js-plugins/imagesLoaded.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-magnific-popup', get_template_directory_uri() . '/js/js-plugins/jquery.magnific-popup.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js-matchHeight', get_template_directory_uri() . '/js/js-plugins/jquery.matchHeight.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-Headroom', get_template_directory_uri() . '/js/js-plugins/Headroom.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js-smooth-scroll', get_template_directory_uri() . '/js/js-plugins/smooth-scroll.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js-segment', get_template_directory_uri() . '/js/js-plugins/segment.js', array(), $theme_version, true );
   // wp_enqueue_script( 'itcorp-js-bootstrap', get_template_directory_uri() . '/js/js-plugins/bootstrap.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/js-plugins/moment.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/js-plugins/moment-timezone.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-isotope', get_template_directory_uri() . '/js/js-plugins/isotope.pkgd.min.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-rangeSlider', get_template_directory_uri() . '/js/js-plugins/ion.rangeSlider.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-parsley', get_template_directory_uri() . '/js/js-plugins/parsley.min.js', array(), $theme_version, true );
   //
   // wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/js/main.js', array(), $theme_version, true );
   //
   // // // jQuery-scripts for Modules (Send Message)
   // // wp_enqueue_script( 'itcorp-js-validate', get_template_directory_uri() . '/modules/forms/src/js/jquery.validate.min.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-sweetalert2', get_template_directory_uri() . '/modules/forms/src/js/sweetalert2.all.js', array(), $theme_version, true );
   // // wp_enqueue_script( 'itcorp-js-forms', get_template_directory_uri() . '/modules/forms/src/js/scripts.js', array(), $theme_version, true );


   wp_enqueue_script( 'itcorp-js', get_template_directory_uri() . '/assets/dist/js/scripts.js', array(), $theme_version, true );

 }
 add_action( 'wp_enqueue_scripts', 'itcorp_register_scripts' );
