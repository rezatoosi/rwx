<?php
/**
 * ITCORP Theme Customizer
 *
 * @package ITCORP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

 function itcorp_customize_register( $wp_customize ) {

   require get_template_directory() . '/inc/customizer/sections/settings/section-settings.php';

 }
 add_action( 'customize_register', 'itcorp_customize_register' );
