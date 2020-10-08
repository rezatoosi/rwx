<?php

// Social Buttons settings
$section_settings_socials = $section_settings . '_socials';
$wp_customize->add_section(
  $section_settings_socials,
  array(
    'title'          => __( 'Social Buttons', 'itcorp' ),
    'description'    => __( 'Change Social Buttons link', 'itcorp' ),
    'priority'       => '200',
    'panel'        => $section_settings
  )
);

$wp_customize->add_setting( 'social_instagram_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'social_instagram_link', [
    'label'        =>  __( 'Instagram Link', 'itcorp' ),
    'section'      =>  $section_settings_socials
  ]
);

$wp_customize->add_setting( 'social_facebook_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'social_facebook_link', [
    'label'        =>  __( 'Facebook Link', 'itcorp' ),
    'section'      =>  $section_settings_socials
  ]
);

$wp_customize->add_setting( 'social_linkedin_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'social_linkedin_link', [
    'label'        =>  __( 'LinkedIn Link', 'itcorp' ),
    'section'      =>  $section_settings_socials
  ]
);

$wp_customize->add_setting( 'social_whatsapp_link', [ 'default'  =>  '#' ] );
$wp_customize->add_control( 'social_whatsapp_link', [
    'label'        =>  __( 'WhatsApp Link', 'itcorp' ),
    'section'      =>  $section_settings_socials
  ]
);
