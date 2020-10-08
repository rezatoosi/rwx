<?php

// header settings
$section_settings_header = $section_settings . '_header';
$wp_customize->add_section(
  $section_settings_header,
  array(
    'title'          => __( 'Header Settings', 'itcorp' ),
    'description'    => __( 'Change Header Settings', 'itcorp' ),
    'priority'       => '100',
    'panel'        => $section_settings
  )
);

// Header Button
$wp_customize->add_setting( 'header_button_text', [ 'default'  =>  'Contact' ] );
$wp_customize->add_control( 'header_button_text', [
    'label'        =>  __( 'Header Button Text', 'itcorp' ),
    'section'      =>  $section_settings_header
  ]
);

$wp_customize->add_setting( 'header_button_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'header_button_link', [
    'label'        =>  __( 'Header Button Link', 'itcorp' ),
    'section'      =>  $section_settings_header
  ]
);

// Menu Fast Call Button
$wp_customize->add_setting( 'menu_button_text', [ 'default'  =>  'Call Now' ] );
$wp_customize->add_control( 'menu_button_text', [
    'label'        =>  __( 'Menu Button Text', 'itcorp' ),
    'section'      =>  $section_settings_header
  ]
);

$wp_customize->add_setting( 'menu_button_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'menu_button_link', [
    'label'        =>  __( 'Menu Button Link', 'itcorp' ),
    'section'      =>  $section_settings_header
  ]
);
