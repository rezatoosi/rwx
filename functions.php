<?php
/**
 * ITCORP functions and definitions
 */
/**
 * Table of contents:
 * Theme supports
 * Register styles
 * Reqired files
 */

 function itcorp_theme_support() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'custom-logo' );
 }
add_action( 'after_setup_theme', 'itcorp_theme_support' );

function itcorp_register_nav() {

  register_nav_menu(
    'primary',
    __( 'Primary Menu', 'itcorp' )
  );

  register_nav_menu(
    'footer_nav',
    __( 'Footer Menu', 'itcorp' )
  );

}
add_action( 'after_setup_theme', 'itcorp_register_nav' );

// Register sidebars
require get_template_directory() . '/inc/register-sidebars.php';

/**
 * Include Required files
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/svg-icons.php';
require get_template_directory() . '/inc/customizer/customizer.php';


// Register styles & scripts
require get_template_directory() . '/inc/register-styles.php';
require get_template_directory() . '/inc/register-scripts.php';
