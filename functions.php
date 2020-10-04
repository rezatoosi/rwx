<?php
/**
 * ITCORP functions and definitions
 */
/**
 * Table of contents:
 * Theme supports
 * Reqired files
 * Register styles
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

// Register styles & scripts
require get_template_directory() . '/inc/register-styles.php';
require get_template_directory() . '/inc/register-scripts.php';
