<!DOCTYPE html>
<html lang="en">
<head>
	<meta <?php language_attributes(); ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <?php wp_head(); ?>
</head>


<body class="crumina-grid">

  <?php wp_body_open(); ?>

<!-- Preloader -->

<!-- <div id="hellopreloader" style="display: block; position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 100%;background: #66b5ff url(svg/preload.svg) center center no-repeat;background-size: 41px;opacity: 1;"></div> -->

<!-- ... end Preloader -->


<!-- Header -->

<header class="header header--small-lines header--menu-rounded nolines noshadow" id="site-header">

	<!-- <div class="header-lines-decoration">
		<span class="bg-secondary-color"></span>
		<span class="bg-blue"></span>
		<span class="bg-blue-light"></span>
		<span class="bg-orange-light"></span>
		<span class="bg-red"></span>
		<span class="bg-green"></span>
		<span class="bg-secondary-color"></span>
	</div> -->

	<div class="container">

		<a href="#" id="top-bar-js" class="top-bar-link">
      <?php itcorp_svg( 'utouch-icon-arrow-top', 'utouch-icon utouch-icon-arrow-top' ); ?>
		</a>
		<div class="header-content-wrapper">

			<?php
      itcorp_site_logo(
        array(
          'logo_title' => 'RIOWEX',
          'logo_sub_title' => 'web apps'
        )
      );
      ?>

			<nav id="primary-menu" class="primary-menu">

				<!-- menu-icon-wrapper -->

				<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
					<span class="mob-menu--title">Menu</span>
					<span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
				</a>

				<ul class="primary-menu-menu">
          <li class="menu-item-has-children">
						<a href="index.html">Webdesign</a>
					</li>
          <li class="menu-item-has-children">
						<a href="index.html">e-Commerce</a>
					</li>
          <li class="menu-item-has-children">
						<a href="index.html">Marketing</a>
					</li>
          <li class="menu-item-has-children">
						<a href="index.html">Development</a>
					</li>
					<!-- <li class="menu-item-has-mega-menu menu-item-has-children">
						<a href="#">Services</a>
						<div class="megamenu with-products">
							<div class="megamenu-row">

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class="square-colored bg-product-blue"></div>
											<img src="img/product-item1.jpg" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Duis autem dolor in hendrerit in vulputate</h6>
											<a href="05_case_details_ver_01.html" class="more-arrow">
												<span>View Case</span>
												<div class="btn-next">
													<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
														<use xlink:href="#utouch-icon-arrow-right-1"></use>
													</svg>
													<svg class="utouch-icon utouch-icon-arrow-right1">
														<use xlink:href="#utouch-icon-arrow-right1"></use>
													</svg>
												</div>
											</a>
										</div>
									</div>
								</div>

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class="square-colored bg-product-violet"></div>
											<img src="img/product-item2.jpg" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Investigationes lectores legere saepi</h6>
											<a href="06_case_details_ver_02.html" class="more-arrow">
												<span>View Case</span>
												<div class="btn-next">
													<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
														<use xlink:href="#utouch-icon-arrow-right-1"></use>
													</svg>
													<svg class="utouch-icon utouch-icon-arrow-right1">
														<use xlink:href="#utouch-icon-arrow-right1"></use>
													</svg>
												</div>
											</a>
										</div>
									</div>
								</div>

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class="square-colored bg-product-red"></div>
											<img src="img/product-item3.jpg" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Lorem ipsum dolor sit amet, consectetuer</h6>
											<a href="07_case_details_ver_03.html" class="more-arrow">
												<span>View Case</span>
												<div class="btn-next">
													<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
														<use xlink:href="#utouch-icon-arrow-right-1"></use>
													</svg>
													<svg class="utouch-icon utouch-icon-arrow-right1">
														<use xlink:href="#utouch-icon-arrow-right1"></use>
													</svg>
												</div>
											</a>
										</div>
									</div>
								</div>

								<div class="col4" data-mh="product-item">
									<div class="product-item">
										<div class="product-item-thumb">
											<div class="square-colored bg-product-blue-dark"></div>
											<img src="img/product-item4.jpg" alt="product">
										</div>
										<div class="product-item-content">
											<h6 class="title">Nam liber tempor cum soluta nobis</h6>
											<a href="05_case_details_ver_01.html" class="more-arrow">
												<span>View Case</span>
												<div class="btn-next">
													<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
														<use xlink:href="#utouch-icon-arrow-right-1"></use>
													</svg>
													<svg class="utouch-icon utouch-icon-arrow-right1">
														<use xlink:href="#utouch-icon-arrow-right1"></use>
													</svg>
												</div>
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</li> -->
				</ul>
        <ul class="nav-add">
					<li class="search search_main">
            <a href="tel:+989152271007" class="btn btn-small btn--green">
              CONTACT
  					</a>
					</li>
				</ul>
				<!-- <ul class="nav-add">
					<li class="search search_main">
						<a href="#" class="js-open-search-popup">
              <?php itcorp_svg( 'utouch-icon-search','utouch-icon utouch-icon-search cd-nav-trigger' ); ?>
						</a>
					</li>
				</ul>
				<div class="search-standard">
					<form id="search-header" name="form-search-header" method="post">
						<div class="typeahead__container">
							<div class="typeahead__field">

							<span class="typeahead__query">
								<input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
							</span>
								<button type="submit" class="form-icon">
                  <?php itcorp_svg( 'utouch-icon-search' ); ?>
								</button>
								<span class="close js-popup-clear-input form-icon">
                  <?php itcorp_svg( 'utouch-icon-cancel-1' ); ?>
							</span>

							</div>
						</div>
					</form>
				</div> -->
			</nav>

		</div>

	</div>

</header>

<!-- <div class="header-spacer"></div> -->

<!-- ... End Header -->

<div class="content-wrapper">
