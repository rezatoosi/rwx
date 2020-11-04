<?php

function itcorp_img_uri( $file, $echo = true ) {
  $img_folder = '/assets/dist/img/';
  if ( !$echo ) {
    return get_template_directory_uri() . $img_folder . $file;
  }
  else {
    echo get_template_directory_uri() . $img_folder . $file;
  }
}

function itcorp_site_logo( $args = array(), $echo = true ) {
  $logo = ( has_custom_logo() ) ? get_custom_logo() : '';

  $defaults = array(
    'logo_title' => get_theme_mod( 'logo_title' ),
    'logo_sub_title' => get_theme_mod( 'logo_subtitle' )
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

function itcorp_footer_logo( $args = array(), $echo = true ) {
  $defaults = array(
    'logo_title' => get_theme_mod( 'logo_title' ),
    'logo_sub_title' => get_theme_mod( 'logo_subtitle' )
  );
  $args = wp_parse_args( $args, $defaults );

  $content = '
  <div class="site-logo">
    <a href="%1$s" class="full-block"></a>
    <div class="logo-text">
      <div class="logo-title">%2$s</div>
      <div class="logo-sub-title">%3$s</div>
    </div>
  </div>
  ';

  $html = sprintf(
    $content,
    esc_url( get_home_url( null, '/' ) ),
    $args['logo_title'],
    $args['logo_sub_title']
  );

  if ( !$echo ) {
    return $html;
  }

  echo $html;
}

function itcorp_social_buttons() {
  $social_item = '<li><a href="%1$s" target="_blank">%2$s</a></li>';
  $html = sprintf( $social_item, get_theme_mod( 'social_instagram_link' ), itcorp_svg( 'social-instagram2', '', '0 0 24 24', false ) );
  $html .= sprintf( $social_item, get_theme_mod( 'social_facebook_link' ), itcorp_svg( 'social-facebook2', '', '0 0 24 24', false ) );
  $html .= sprintf( $social_item, get_theme_mod( 'social_linkedin_link' ), itcorp_svg( 'social-linkedin2', '', '0 0 24 24', false ) );
  $html .= sprintf( $social_item, get_theme_mod( 'social_whatsapp_link' ), itcorp_svg( 'social-whatsapp', '', '0 0 24 24', false ) );
  echo '<ul>' . $html . '</ul>';
}

function itcorp_page_header_section( $args = array() ) {
  $object_id = get_queried_object_id();
  $defaults = array(
    // 'section_class' => 'crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds',
    'section_class' => 'crumina-stunning-header bg-primary-color',
    'page_title' => get_the_title( $object_id ),
    'page_desc' => get_post_meta( $object_id, "post_desc", true),
    'page_header_image_src' => get_post_meta( $object_id, "post_header_image", true)
  );
  $args = wp_parse_args( $args, $defaults );

  if ( '' !== $args['page_desc'] ) {
    $args['page_desc'] = sprintf( '<p class="tagline">%s</p>', wp_strip_all_tags( $args['page_desc'] ) );
  }
  if ( '' !== $args['page_header_image_src'] && false !== $args['page_header_image_src'] ) {
    $args['page_header_image_src'] = sprintf( ' data-bg-img="%s"', $args['page_header_image_src'] );
    $args['section_class'] .= ' imagebg bg-highlight bg-highlight-lightblack';
  }

  $page_title = ( is_search() ) ? sprintf( /* Translators: %s: page title for search page */ __( 'Search results for "%s"', 'digicorpdomain' ), get_search_query() ) : esc_html( $args['page_title'] );

    echo '<div class="' . esc_attr( $args['section_class'] ) . '">';
    echo    '<div class="container">';
    echo      '<div class="stunning-header-content">';
    echo        '<div class="inline-items">';
    echo          '<h4 class="stunning-header-title">' . $page_title . '</h4>';
    echo        '</div>';
    echo     '</div>';
    echo   '</div>';
    echo '</div>';

  // echo '<section id="page-header" class="' . esc_attr( $args['section_class'] ) . '"' . $args['page_header_image_src'] . '>';
  // echo     '<div class="container">';
  // echo         '<div class="text-block">';
  // echo             '<div class="heading-holder">';
  // echo                 '<h1>' . $page_title . '</h1>';
  // echo             '</div>';
  // echo             $args['page_desc'];
  // echo         '</div>';
  // echo     '</div>';
  // echo '</section>';

  // TODO: implement breadcrumb
  // echo digicorp_breadcrumb();

}

function itcorp_services_heading_section( $args ) {
  $defaults = array(
    'back-link' =>  '/services',
    'subtitle'  =>  'Top Rated Digital Services',
    'title'     =>  'Service Title',
    'text'      =>  'Service Text',
    'img'       =>  '',
    'img-alt'   =>  '',
    'img-class' =>  ''
  );
  $args = wp_parse_args( $args, $defaults );

  $html = '
  <section class="bg-primary-color pt100 pb100">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="crumina-module crumina-heading custom-color c-white">
  					<h6 class="heading-sup-title">
              <a href="%1$s">%2$s</a>
            </h6>
  					<h2 class="h1 heading-title">
              %3$s
            </h2>
  					<div class="heading-text h5">
              %4$s
            </div>
            <div class="heading-buttons">
              <a href="%1$s" class="btn btn-border c-white">
                %8$s
              </a>
              <a href="javascript:void(0)" class="btn btn-border c-white js-proposal-popup cd-nav-trigger">
                Get a free proposal
              </a>
            </div>
  				</div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <img src="%5$s" alt="%6$s" class="%7$s">
        </div>
      </div>
    </div>
  </section>
  ';
  printf(
    $html,
    $args[ 'back-link' ],
    $args[ 'subtitle' ],
    $args[ 'title' ],
    $args[ 'text' ],
    $args[ 'img' ],
    $args[ 'img-alt' ],
    $args[ 'img-class' ],
    itcorp_svg( 'utouch-icon-arrow-left-1', '', '', false ) . 'Back to services'
  );
}
