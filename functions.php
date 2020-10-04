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


function itcorp_widgets_init() {
  register_sidebar( array(
    'name'          =>  __( 'Footer Contact Form', 'itcorp' ),
    'id'            =>  'footer-contact-form',
    'description'   =>  __( 'Add contact form here', 'itcorp' ),
    'before_widget' =>  '<div id="%1$s" class="%2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h5>',
    'after_title'   =>  '</h5>'
    ) );
}
add_action( 'widgets_init', 'itcorp_widgets_init' );

/**
 * Include Required files
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/svg-icons.php';

// Register styles & scripts
require get_template_directory() . '/inc/register-styles.php';
require get_template_directory() . '/inc/register-scripts.php';
