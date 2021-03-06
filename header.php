<!DOCTYPE html>
<html lang="en">
<head>
	<meta <?php language_attributes(); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'crumina-grid' ); ?>>
  <?php wp_body_open(); ?>

<!-- Preloader -->
<!-- <div id="hellopreloader" style="display: block; position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 100%;background: #66b5ff url(svg/preload.svg) center center no-repeat;background-size: 41px;opacity: 1;"></div> -->
<!-- ... end Preloader -->


<!-- Header -->
<header class="header nolines" id="site-header">
	<div class="container-fluid">
		<div class="header-content-wrapper">

			<?php
      	itcorp_site_logo();
      ?>

      <div class="nav-wrapper">
        <ul>
					<li class="nav-contact-button">
            <a href="<?php echo get_theme_mod( 'header_button_link' ); ?>" class="btn btn-small btn--green">
              <?php echo get_theme_mod( 'header_button_text' ); ?>
  					</a>
					</li>
          <li>
            <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
              <span class="mob-menu--title sr-only">
								<?php _e( 'Menu', 'itcorp' ); ?>
							</span>
              <span id="menu-icon-wrapper" class="menu-icon-wrapper">
                <svg width="1000px" height="1000px">
                  <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                  <path id="pathE" d="M 300 500 L 700 500"></path>
                  <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                </svg>
              </span>
            </a>
          </li>
				</ul>
      </div>

      <div class="main-menu-wrapper">
        <nav class="main-menu-nav">
          <div class="container">
            <div class="main-menu-top">
							<?php
							wp_nav_menu( array(
								'theme_location'	=>	'primary',
								'menu_class' 			=>	'main-menu'
							) );
							?>
							<div class="fast-call">
								<a href="<?php echo get_theme_mod( 'menu_button_link' ); ?>" class="btn btn-border btn-small c-secondary btn--with-icon">
									<?php echo get_theme_mod( 'menu_button_text' ); ?>
								</a>
							</div>
						</div>
            <div class="social-buttons">
              <?php itcorp_social_buttons(); ?>
            </div>
          </div>
        </nav>
      </div>
		</div>
	</div>
</header>

<!-- ... End Header -->

<div class="content-wrapper">
