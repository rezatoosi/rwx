<?php

function itcorp_site_logo( $args = array(), $echo = true ) {
  $logo = ( has_custom_logo() ) ? get_custom_logo() : '';

  $defaults = array(
    'logo_title' => 'ITCORP',
    'logo_sub_title' => 'wp theme'
  );
  $args = wp_parse_args( $args, $defaults );

  $content = '
  <div class="site-logo">
    <a href="%1$s" class="full-block"></a>
    %2$s
    <div class="logo-text">
      <div class="logo-title">%3$s</div>
      <div class="logo-sub-title">%4$s</div>
    </div>
  </div>
  ';

  $html = sprintf(
    $content,
    esc_url( get_home_url( null, '/' ) ),
    $logo,
    $args['logo_title'],
    $args['logo_sub_title']
  );

  if ( !$echo ) {
    return $html;
  }

  echo $html;
}
