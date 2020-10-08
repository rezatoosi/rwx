<?php
$sections_prefix = 'itcorp_section_';

$section_settings = $sections_prefix . 'settings';
$wp_customize->add_panel(
  $section_settings,
  array(
    'title'          =>  __( 'Theme Settings', 'itcorp' ),
    'description'    =>  __( 'Change Theme Settings', 'itcorp' ),
    'priority'       =>  '100',
    'capability'     =>  'edit_theme_options'
  )
);

require get_template_directory() . '/inc/customizer/sections/settings/section-settings-header.php';
require get_template_directory() . '/inc/customizer/sections/settings/section-settings-social.php';
