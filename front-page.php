<?php
/**
 * Main template file
 */

 get_header();
?>
	<!-- Main Slider -->
	<div class="crumina-module crumina-module-slider container-full-width">
		<div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide bg-00 main-slider-bg-light">

					<div class="container">
						<div class="row table-cell">

							<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12">

								<div class="slider-content align-center">

									<h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
										We Create Exceptional Websites

                    <?php itcorp_svg( 'utouch-icon-arrow-left', 'first-decoration utouch-icon utouch-icon-arrow-left' ) ?>

                    <?php itcorp_svg( 'utouch-icon-arrow-left', 'second-decoration utouch-icon utouch-icon-arrow-left' ) ?>

									</h1>
									<h2 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit
										amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
										laoreet dolore magna aliquam erat volutpat.
									</h2>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="03_products.html" class="btn btn--yellow btn--with-shadow">
											Learn More
										</a>

										<a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
											Get Started Now
										</a>
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slides1.png" alt="slider">
								</div>
							</div> -->

						</div>
					</div>
				</div>

				<div class="swiper-slide bg-2 main-slider-bg-light">

					<div class="container table">
						<div class="row table-cell">

							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content align-both">
									<h2 class="slider-content-title" data-swiper-parallax="-100">
										<span class="c-primary">Utouch</span>
										is quality product that will make your life better
									</h2>
									<h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
										consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
										magna aliquam erat volutpat.
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="#" class="btn btn-market btn--with-shadow">
											<svg class="utouch-icon utouch-icon-apple-logotype-1">
												<use xlink:href="#utouch-icon-apple-logotype-1"></use>
											</svg>
											<div class="text">
												<span class="sup-title">Download on the</span>
												<span class="title">App Store</span>
											</div>
										</a>

										<a href="#" class="btn btn-market btn--with-shadow">
											<img class="utouch-icon" src="svg-icons/google-play.svg" alt="google">
											<div class="text">
												<span class="sup-title">Download on the</span>
												<span class="title">Google Play</span>
											</div>
										</a>

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

					<div class="container table full-height">
						<div class="row table-cell">
							<div class="col-lg-6 col-sm-12 table-cell">

								<div class="slider-content align-both">

									<h2 class="slider-content-title" data-swiper-parallax="-100">Rise Up With the Most Interesting App</h2>

									<h6 class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet,
										consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
										dolore magna aliquam erat volutpat.
									</h6>

									<div class="main-slider-btn-wrap" data-swiper-parallax="-300">

										<a href="02_company.html" class="btn btn--lime btn--with-shadow">
											Get Started Now
										</a>

									</div>

								</div>

							</div>

							<div class="col-lg-6 col-sm-12 table-cell">
								<div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="<?php echo get_template_directory_uri(); ?>/img/slides2.png" alt="slider">
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!--Prev next buttons-->

			<div class="btn-prev with-bg">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
					<use xlink:href="#utouch-icon-arrow-left-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-left1">
					<use xlink:href="#utouch-icon-arrow-left1"></use>
				</svg>
			</div>

			<div class="btn-next with-bg">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
					<use xlink:href="#utouch-icon-arrow-right-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-right1">
					<use xlink:href="#utouch-icon-arrow-right1"></use>
				</svg>
			</div>

		</div>
	</div>
	<!-- ... end Main Slider -->

  <!-- ... About -->
  <section class="medium-padding40 bg-primary-color bg-5">
    <div class="container">
      <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">01.</h5>
						<h3 class="h5 info-box-title">Who We Are</h3>
						<p class="info-box-text">
              We are RIOWEX, a full service digital agency based on istanbul - turkey.
              our sole objective is to help our clients create exceptional digital assets that attract and engage.
						</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">02.</h5>
						<h3 class="h5 info-box-title">What We Do</h3>
						<p class="info-box-text">
              We combine modern design and latest methods, and try to boost brands that differentiate you in the
              industry and help grow your business.
						</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">03.</h5>
						<h3 class="h5 info-box-title">How We Do It</h3>
						<p class="info-box-text">
              We combine modern design and latest methods, and try to boost brands that differentiate you in the
              industry and help grow your business.
						</p>
					</div>
				</div>
			</div>
    </div>
  </section>
  <!-- ... end About -->

  <!-- Services -->
	<section class="medium-padding120 crumina-services">
		<div class="container">
			<div class="row mb60">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12 align-center">
					<div class="crumina-module crumina-heading">
						<h2 class="heading-title">Our Services</h2>
            <h6 class="heading-sup-title">
              We provide wide range of services you need to crush your goals
            </h6>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="services-wrap">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">Web Design</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">Development</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">e-Commerce</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">Digital Marketing</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">SEO Marketing</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-service-item" data-mh="services">
							<div class="service-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/svg-icons/rocket.svg" alt="rocket" class="icon-img">
								<img class="cloud" src="<?php echo get_template_directory_uri(); ?>/img/clouds8.png" alt="cloud">
							</div>

							<div class="main-service-content">
								<a href="#" class="h5 service-title">Wordpress</a>

								<p class="service-description">Mirum est notare quam littera gothica, quam nunc putamus parum legere me lius.</p>

								<a href="#" class="more-arrow">
									<span>Learn More</span>
									<div class="btn-next">
                    <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
                    <?php itcorp_svg( 'utouch-icon-arrow-right1', 'utouch-icon utouch-icon-arrow-right1' ); ?>
									</div>
								</a>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ... end Services -->


	<!-- FAQS Slider -->
	<section class="crumina-module crumina-module-slider pt100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mb30">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">FAQ</h6>
						<h2 class="heading-title">Six important questions on application</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="swiper-container navigation-bottom" data-effect="fade">
						<div class="slider-slides">
							<a href="#" class="slides-item">
								1
							</a>

							<a href="#" class="slides-item">
								2
							</a>

							<a href="#" class="slides-item">
								3
							</a>

							<a href="#" class="slides-item">
								4
							</a>

							<a href="#" class="slides-item">
								5
							</a>

							<a href="#" class="slides-item">
								6
							</a>
						</div>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/dial.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">soluta eleifend congue?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
												notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
												humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/fingerprint.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Mirum quam gothica?</h5>
									<p>Ilaritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
										est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium
										lectorum.
									</p>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/devices.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">
									<h5 class="slider-faqs-title">Investigationes quod lectores?</h5>
									<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Claritas est
										etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare
										quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas
										humanitatis.
									</p>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
													<svg class="utouch-icon utouch-icon-checked">
														<use xlink:href="#utouch-icon-checked"></use>
													</svg>
													<h6 class="info-box-title">Quick Settings</h6>
												</div>
												<p class="info-box-text">Wisi enim ad minim veniam, quis nostrud exerci tation qui
													nunc nobis videntur parum clari.
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
													<svg class="utouch-icon utouch-icon-checked">
														<use xlink:href="#utouch-icon-checked"></use>
													</svg>
													<h6 class="info-box-title">Looks Perfect</h6>
												</div>
												<p class="info-box-text">Sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/payment-method.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Duis autem vel eum iriure?</h5>
									<p class="weight-bold">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur.
									</p>
									<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
										est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
										formas humanitatis. Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
									</p>
									<a href="03_products.html" class="btn btn-border btn--with-shadow c-secondary">
										Learn More
									</a>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/chat1.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">wisi minim veniam, quis nostrud?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
												lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
												anteposuerit litterarum formas humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<div class="play-with-title">
												<a href="https://www.youtube.com/watch?v=wnJ6LuUFpMo" class="video-control js-popup-iframe">
													<img src="img/play.png" alt="play">
												</a>
												<h6 class="play-title">Watch the video of instruction</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/tap.svg" alt="image">
									</div>
								</div>

								<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Eodem typi nunc videntur?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
												lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
												anteposuerit litterarum formas humanitatis.
											</p>
											<p>Gest etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Mirum est notare quam</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Zril delenit augue duis</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Gectores legere me lius quod</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>

						</div>

						<!--Prev next buttons-->

						<div class="btn-slider-wrap navigation-left-bottom">

							<div class="btn-prev">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
									<use xlink:href="#utouch-icon-arrow-left-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-left1">
									<use xlink:href="#utouch-icon-arrow-left1"></use>
								</svg>
							</div>

							<div class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ... end FAQS Slider -->

	<!-- Subscribe Form -->
	<section class="bg-primary-color background-contain bg-14 crumina-module crumina-module-subscribe-form">
		<div class="container">
			<div class="row">
				<div class="subscribe-form">
					<div class="subscribe-main-content">
						<img class="subscribe-img" src="<?php echo get_template_directory_uri(); ?>/img/subscribe-img.png" alt="image">

						<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-heading">
								<h2 class="heading-title">Love offers and discounts? Subscribe and save.</h2>
								<p class="heading-text">Claritas est etiam processus dynamicus, qui sequitur mutationem
									consuetudium lectorum putamus claram.
								</p>
							</div>

							<form class="form-validate form-inline crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
								<input name="email" placeholder="Enter your email address" type="email" required>
								<button class="btn btn--green-light">
									Subscribe
								</button>
							</form>
						</div>

					</div>
					<div class="subscribe-layer"></div>
				</div>
			</div>
		</div>
	</section>

	<!-- End Subscribe Form -->

<?php
get_footer();
