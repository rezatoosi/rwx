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
        <div class="swiper-slide main-slider-bg-light bg-001">
          <div class="container table">
						<div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 table-cell">
                <div class="slider-content align-both">
									<h2 class="slider-content-title" data-swiper-parallax="-100">
                    We Are
										<span class="c-primary">IT Professionals </span>
										And Provide High-Quality Serivces
									</h2>
									<h6 class="slider-content-text hidden-md hidden-sm hidden-xs hidden-xxs" data-swiper-parallax="-200">
                    We've been Designing Websites and Developing Web Applications for many years. We guarantee what we do to have your
                    <span class="c-primary">Trust</span>
									</h6>

                  <div class="row" data-swiper-parallax="-300">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
                          <?php itcorp_svg( 'utouch-icon-checked' ); ?>
													<h6 class="info-box-title">Quality Guarantee</h6>
												</div>
                        <p class="info-box-text hidden-sm hidden-xs hidden-xxs">
                          We guarantee your satisfaction about our works quality
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="crumina-module crumina-info-box info-box--standard">
												<div class="info-box-image display-flex">
													<?php itcorp_svg( 'utouch-icon-checked' ); ?>
													<h6 class="info-box-title">Money-back Guarantee</h6>
												</div>
                        <p class="info-box-text hidden-sm hidden-xs hidden-xxs">
                          You can get your money back in 30 days
												</p>
											</div>
										</div>
									</div>

                  <div class="main-slider-btn-wrap mt30 hidden-xxs" data-swiper-parallax="-400">
										<a href="/contact" class="btn btn-border btn--with-shadow c-primary">
											Get Started Now
										</a>
									</div>

								</div>
              </div>
              <div class="col-lg-6 hidden-md hidden-sm hidden-xs hidden-xxs table-cell">
                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iconic/webdesign-guarantee.png" alt="slider">
								</div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide main-slider-bg-light bg-00">
          <div class="container table">
						<div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 table-cell">
                <div class="slider-content align-both">
									<h2 class="slider-content-title" data-swiper-parallax="-100">
                    We Provide Wide Range Of
										<span class="c-green">Top Rated Services </span>
										You Need To Grow Your Business
									</h2>
									<h6 class="slider-content-text hidden-md hidden-sm hidden-xs hidden-xxs" data-swiper-parallax="-200">
                    We merge imagination and technology to help brands grow in an age of digital transformation
									</h6>

                  <div class="row" data-swiper-parallax="-300">
										<div class="col-lg-6 col-md-6 col-sm-12">
                      <ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Website Design</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Web Development</a>
												</li>
											</ul>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                      <ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Digital Marketing</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">SEO</a>
												</li>
											</ul>
										</div>
									</div>

                  <div class="main-slider-btn-wrap mt30 hidden-xxs" data-swiper-parallax="-400">
										<a href="/contact" class="btn btn-border btn--with-shadow c-green">
											Visit Our Services
										</a>
									</div>

								</div>
              </div>
              <div class="col-lg-6 hidden-md hidden-sm hidden-xs hidden-xxs table-cell">
                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iconic/03.png" alt="slider">
								</div>
              </div>
            </div>
          </div>
        </div>

			<!--Prev next buttons-->
			<div class="btn-prev with-bg">
        <?php itcorp_svg( 'utouch-icon-arrow-left-1', 'utouch-icon icon-hover utouch-icon-arrow-left-1' ); ?>
        <?php itcorp_svg( 'utouch-icon-arrow-left1' ); ?>
			</div>
			<div class="btn-next with-bg">
        <?php itcorp_svg( 'utouch-icon-arrow-right-1', 'utouch-icon icon-hover utouch-icon-arrow-right-1' ); ?>
        <?php itcorp_svg( 'utouch-icon-arrow-right1' ); ?>
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
						</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-info-box info-box--numbers">
						<h5 class="order-number">02.</h5>
						<h3 class="h5 info-box-title">What We Do</h3>
						<p class="info-box-text">
              our sole objective is to help our clients create exceptional digital assets that attract and engage.
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
	<?php require get_template_directory() . '/page-templates/services.php'; ?>
	<!-- ... end Services -->

  <!-- Slider with vertical tabs -->
	<section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

		<div class="swiper-container" data-show-items="1">
			<div class="swiper-wrapper">
				<div class="swiper-slide bg-primary-color bg-5" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iphone.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">3 WAYS WE HELP YOU GROW FASTER: 01</h6>
									<h2 class="heading-title">AdWords & Facebook Ads</h2>
									<div class="heading-text">
                    With over 2,500 AdWords and Facebook audits under our belts, we’ve learned what it takes for you to become an industry leader. Get your free 32-point audit to identify exactly what is and is not working in your campaigns today.
									</div>
								</div>

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

				<div class="swiper-slide bg-orange-light bg-6" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iphone2.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">3 WAYS WE HELP YOU GROW FASTER: 02</h6>
									<h2 class="heading-title">Site Experience Testing</h2>
									<div class="heading-text">
                    After testing over 100 million visitors, we’ve learned how to give your audience the experience they need in order to convert. On average, we improve conversion rates by over 50% for our clients in the first 6 months.
									</div>
								</div>

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

				<div class="swiper-slide bg-red bg-7" data-mh="slide">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="slider-tabs-vertical-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/img/iphone3.png" alt="iphone">
								</div>
							</div>
							<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading custom-color c-white">
									<h6 class="heading-sup-title">3 WAYS WE HELP YOU GROW FASTER: 03</h6>
									<h2 class="heading-title">Analytics Reporting</h2>
									<div class="heading-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
										diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
										Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
										litterarum formas humanitatis per.
									</div>
								</div>

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

			<div class="slider-slides slider-slides--vertical-line">
				<a href="#" class="slides-item">
					<span class="round primary"></span>01.
				</a>

				<a href="#" class="slides-item">
					<span class="round orange"></span>02.
				</a>

				<a href="#" class="slides-item">
					<span class="round red"></span>03.
				</a>

			</div>

		</div>

	</section>
	<!-- ... Slider with vertical tabs -->

	<!-- FAQS Slider -->
	<section class="crumina-module crumina-module-slider pt100">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 mb30">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">FAQ</h6>
						<h2 class="heading-title">Six important questions on our services</h2>
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

						</div>
						<div class="swiper-wrapper">
							<div class="swiper-slide">


								<div class="col-lg-12 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">What is your web design and development process?</h5>

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>
                        Process plays a major role in the design and development of a website and process can vary greatly from agency to agency. Every digital agency has developed their own internal process that guides their projects and some are better than others.
											</p>
											<p>Knowing what the process is, how it gets implemented and how it will ultimately impact you and your project is helpful to understand.</p>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<p>It’s also important to know who will be involved in the project and what each person’s role will be.</p>
											<ul class="list list--standard">
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Discovery</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Design</a>
												</li>
												<li>
													<svg class="utouch-icon utouch-icon-correct-symbol-1">
														<use xlink:href="#utouch-icon-correct-symbol-1"></use>
													</svg>
													<a href="#">Developme</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

                <!-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="<?php echo get_template_directory_uri(); ?>/svg-icons/dial.svg" alt="image">
									</div>
								</div> -->
							</div>
							<div class="swiper-slide">
								<!-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/fingerprint.svg" alt="image">
									</div>
								</div> -->

								<div class="col-lg-12 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">How long will the project take?</h5>
									<p>
                    The length of a website project varies greatly depending on scope, complexity, schedule and both the client and web design partner’s ability to hit deadlines. Based on an understanding of your project needs, a potential web partner should be able to give you an estimate of how long a project like yours typically takes and provide a basic schedule for key project milestones.
									</p>
                  <p>
                    They should also help you understand what factors can affect the schedule and where issues typically arise.
                  </p>

									<!-- <div class="row">
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
									</div> -->
								</div>
							</div>
							<div class="swiper-slide">
								<!-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/devices.svg" alt="image">
									</div>
								</div> -->

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" data-swiper-parallax="-100">
  									<h5 class="slider-faqs-title">How much will my new web design cost?</h5>

                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p>
                          Finally, one of the most important questions to ask your web designer: cost. The answer to this question will always vary. The cost of a website design usually depends on a number of factors, including:
      									</p>
                        <ul class="list list--standard">
                          <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1">
                              <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                            </svg>
                            <a href="#">The designer’s experience</a>
                          </li>
                          <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1">
                              <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                            </svg>
                            <a href="#">The size of the site being designed</a>
                          </li>
                          <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1">
                              <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                            </svg>
                            <a href="#">The site’s functionality</a>
                          </li>
                          <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1">
                              <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                            </svg>
                            <a href="#">The type of design (modern, high-end, simple, responsive, etc.)</a>
                          </li>
                          <li>
                            <svg class="utouch-icon utouch-icon-correct-symbol-1">
                              <use xlink:href="#utouch-icon-correct-symbol-1"></use>
                            </svg>
                            <a href="#">How many people are involved in the process</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p>
                          Since many web design firms do not publish their pricing online, it is hard to shop around and know if you are getting a good deal. The only way to really be sure is to compare the pricing you are quoted against a site that does publish its pricing, or to trust your gut.
                        </p>
                        <p>
                          You know better than anyone what you can and can’t afford, as far as a website design is concerned. So don’t be afraid to say “no,” or to ask for a lower price. You can even walk away if you don’t like the quote you’re given. But remember one thing: you get what you pay for, and a cheap website often has many downsides.
                        </p>
                      </div>
                    </div>
  								</div>
                </div>


							</div>
							<div class="swiper-slide">
								<!-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/payment-method.svg" alt="image">
									</div>
								</div> -->

								<div class="col-lg-12 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Can I contact you for future updates to my design?</h5>
									<p class="weight-bold">
                    Finally, you should always check with the designer you want to work with to see if they would be willing to work with you in the future. If you want to update a page, add a new visual element, or even redesign your website, will they be able to help you?
									</p>
									<p>
                    Most designers and web design companies have hourly pricing or contracts that allow you to establish long-term relationships at a lower cost. Consider signing up for one of these plans to save a little money while keeping a reliable designer on hand.
									</p>
									<a href="#" class="btn btn-border btn--with-shadow c-secondary">
										Learn More
									</a>
								</div>
							</div>
              <div class="swiper-slide">
								<!-- <div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
									<div class="slider-faqs-thumb">
										<img class="utouch-icon" src="svg-icons/payment-method.svg" alt="image">
									</div>
								</div> -->

								<div class="col-lg-12 col-md-12 col-sm-12" data-swiper-parallax="-300">
									<h5 class="slider-faqs-title">Ask good questions, hire the right agency</h5>
									<p>
                    Determining who is best equipped to build your website, as well as choosing who you want to partner with on the project goes far beyond their mere capabilities and expertise. That’s where asking great questions and listening for great answers is key to the selection process.
									</p>
									<p class="weight-bold">
                    If you still have questions please send us message
									</p>
									<a href="#" class="btn btn-border btn--with-shadow c-secondary">
										Contact Us
									</a>
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

  <!-- Testimonials Slider -->
	<section class="crumina-module crumina-module-slider navigation-center-both-sides medium-padding80 bg-blue-lighteen">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="swiper-container" data-show-items="3">
						<div class="swiper-wrapper">

							<div class="swiper-slide">

								<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
										<div class="author-info-wrap">
											<div class="testimonial-img-author">
												<img src="img/author2.png" alt="author">
											</div>
											<div class="author-info">
												<a href="#" class="h6 author-name">Chris Miller</a>
												<div class="author-company">Student, 23 years old</div>
											</div>
										</div>

										<h6 class="testimonial-text">
											Qest etiam processus dynamicus, qui sequitur mutationem.
										</h6>

										<ul class="rait-stars">
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
												</a>
											</li>
										</ul>

									</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
										<div class="author-info-wrap">
											<div class="testimonial-img-author">
												<img src="img/author3.png" alt="author">
											</div>
											<div class="author-info">
												<a href="#" class="h6 author-name">Susan Meyer</a>
												<div class="author-company">Student, 20 years old</div>
											</div>
										</div>

										<h6 class="testimonial-text">
											Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius
											per seacula quarta decima decima.
										</h6>

										<ul class="rait-stars">
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
										</ul>

									</div>
							</div>

							<div class="swiper-slide">
								<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
										<div class="author-info-wrap">
											<div class="testimonial-img-author">
												<img src="img/author4.png" alt="author">
											</div>
											<div class="author-info">
												<a href="#" class="h6 author-name">Doe Simpson</a>
												<div class="author-company">Student, 23 years old</div>
											</div>
										</div>

										<h6 class="testimonial-text">
											Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.
										</h6>

										<ul class="rait-stars">
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star"><use xlink:href="#utouch-icon-star"></use></svg>
												</a>
											</li>
											<li>
												<a href="#">
													<svg class="utouch-icon utouch-icon-star-half-empty"><use xlink:href="#utouch-icon-star-half-empty"></use></svg>
												</a>
											</li>
										</ul>

									</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Prev next buttons-->

		<div class="btn-prev">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
		</div>

		<div class="btn-next">
			<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
			<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
		</div>
	</section>
	<!-- ... end Testimonials Slider -->

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
