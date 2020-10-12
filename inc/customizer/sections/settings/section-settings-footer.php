<?php

// header settings
$section_settings_footer = $section_settings . '_footer';
$wp_customize->add_section(
  $section_settings_footer,
  array(
    'title'          => __( 'Footer Settings', 'itcorp' ),
    'description'    => __( 'Change Footer Settings', 'itcorp' ),
    'priority'       => '300',
    'panel'        => $section_settings
  )
);

$wp_customize->add_setting( 'footer_btn_text', [ 'default'  =>  'Phone: +90...' ] );
$wp_customize->add_control( 'footer_btn_text', [
    'label'        =>  __( 'Footer Button Text', 'itcorp' ),
    'section'      =>  $section_settings_footer
  ]
);

$wp_customize->add_setting( 'footer_btn_link', [ 'default'  =>  'tel:+90...' ] );
$wp_customize->add_control( 'footer_btn_link', [
    'label'        =>  __( 'Footer Button Link', 'itcorp' ),
    'section'      =>  $section_settings_footer
  ]
);

$wp_customize->add_setting( 'footer_copyright', [ 'default'  =>  'Copyright © 2020 ____. All rights reserved.' ] );
$wp_customize->add_control( 'footer_copyright', [
    'label'        =>  __( 'Footer Copyright', 'itcorp' ),
    'type'         => 'textarea',
    'section'      =>  $section_settings_footer
  ]
);
