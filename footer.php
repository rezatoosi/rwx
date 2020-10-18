</div>

<!-- CTA -->
<section class="bg-blue-lighteen medium-padding40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2>Ready to move forward?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<p>
					Our clients get the best results when they have our team dedicated to their business for extended periods of time. This is why we are looking for ongoing collaboration where our professionals are like your team members who just happen to be remote. Ready to move forward?
				</p>
			</div>
			<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-12 col-xs-12 align-right">
				<a href="#" class="btn btn--green js-message-popup cd-nav-trigger">
					Send a Message
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End CTA -->

<!-- Footer -->
<footer class="footer" id="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="widget w-info">
					<?php itcorp_footer_logo() ?>
				</div>
				<div class="widget w-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
				</div>

			</div>

			<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-sm-offset-0 col-xs-12">
				<div class="widget w-contacts">

					<div class="contact-item display-flex">
						<a href="<?php echo get_theme_mod( 'footer_btn_link' ); ?>">
							<span class="info"><?php echo get_theme_mod( 'footer_btn_text' ); ?></span>
						</a>
					</div>

				</div>

				<div class="widget w-follow">
					<?php itcorp_social_buttons(); ?>
				</div>
			</div>
		</div>

	</div>

	<div class="sub-footer">
		<a class="back-to-top" href="#">
			<?php itcorp_svg( 'utouch-icon-arrow-top' ); ?>
		</a>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span>
										<?php echo get_theme_mod( 'footer_copyright' ); ?>
                </span>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- End Footer -->

<!-- Send Message Popup -->
<div class="window-popup message-popup">
	<a href="#" class="popup-close js-popup-close cd-nav-trigger">
		<?php itcorp_svg( 'utouch-icon-cancel-1' ); ?>
	</a>

	<div class="send-message-popup">
		<?php
			if ( is_active_sidebar( 'footer-contact-form' ) ) {
				dynamic_sidebar( 'footer-contact-form' );
			}
		?>
		<?php
		// HTML Form
		//
		// <h5>Send a message</h5>
		// <p>sub-title-here</p>
		//
		// <form class="form-validate contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// 				<div class="with-icon">
		// 					<input name="name" placeholder="Your Name" type="text" required>
		// 					<?php itcorp_svg( 'utouch-icon-user' ); ?<
		// 				</div>
		// 			</div>
		// 			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// 				<div class="with-icon">
		// 					<input name="email" placeholder="Email Adress" type="text" required>
		// 					<?php itcorp_svg( 'utouch-icon-message-closed-envelope-1' ); ?<
		// 				</div>
		// 			</div>
		// 		</div>
		// 		<div class="row">
		// 			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// 				<div class="with-icon">
		// 					<input class="with-icon" name="phone" placeholder="Phone Number" type="tel" required>
		// 					<?php itcorp_svg( 'utouch-icon-telephone-keypad-with-ten-keys' ); ?<
		// 				</div>
		// 			</div>
		// 			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// 				<div class="with-icon">
		// 					<input class="with-icon" name="subject" placeholder="Subject" type="text" required>
		// 					<?php itcorp_svg( 'utouch-icon-icon-1' ); ?<
		// 				</div>
		// 			</div>
		// 		</div>
		// 		<div class="row">
		// 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		// 				<div class="with-icon">
		// 					<textarea name="message" required placeholder="Your Message" rows="5"></textarea>
		// 					<?php itcorp_svg( 'utouch-icon-edit' ); ?<
		// 				</div>
		// 			</div>
		// 		</div>
		// 		<div class="row">
		// 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		// 				<button class="btn btn--green btn--with-shadow full-width">
		// 					Send Message
		// 				</button>
		// 			</div>
		// 		</div>
		// 	</div>
		// </form>
		?>

		<?php
		// Contact form 7
		//
		// <div class="container">
		//
		// <div class="row">
		//
		// <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// <div class="with-icon">
		// [text* your-name class:with-icon placeholder "Your Name"]
		// <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="utouch-icon utouch-icon-user"><path d="m325 193c0 37-30 68-68 68-37 0-68-31-68-68 0-38 31-69 68-69 38 0 68 31 68 69z m-69-193c-141 0-256 115-256 256 0 141 115 256 256 256 141 0 256-115 256-256 0-141-115-256-256-256z m117 423c-8-69-36-139-116-139-80 0-108 71-116 140-54-36-89-98-89-168 0-113 91-204 204-204 113 0 204 91 204 204 0 69-34 130-87 167z"></path></svg>
		// </div>
		// </div>
		//
		// <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// <div class="with-icon">
		// [email* your-email class:with-icon placeholder "Email Address"]
		// <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="utouch-icon utouch-icon-message-closed-envelope-1"><path d="m451 62l-390 0c-34 0-61 26-61 58l0 272c0 32 27 58 61 58l390 0c34 0 61-26 61-58l0-272c0-32-27-58-61-58z m0 337l-390 0c-5 0-9-3-9-7l0-236 176 149c4 3 8 5 13 5l30 0c5 0 9-2 13-5l176-149 0 236c0 4-4 7-9 7z m-195-140l-172-146 344 0z"></path></svg>
		// </div>
		// </div>
		//
		// </div>
		//
		// <div class="row">
		// <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// <div class="with-icon">
		// [tel your-phone class:with-icon placeholder "Phone Number"]
		// <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><path d="m256 419c-26 0-47 21-47 46 0 26 21 47 47 47 26 0 47-21 47-47 0-25-21-46-47-46z m-140-419c-25 0-46 21-46 47 0 25 21 46 46 46 26 0 47-21 47-46 0-26-21-47-47-47z m0 140c-25 0-46 21-46 46 0 26 21 47 46 47 26 0 47-21 47-47 0-25-21-46-47-46z m0 139c-25 0-46 21-46 47 0 25 21 46 46 46 26 0 47-21 47-46 0-26-21-47-47-47z m280-186c25 0 46-21 46-46 0-26-21-47-46-47-26 0-47 21-47 47 0 25 21 46 47 46z m-140 186c-26 0-47 21-47 47 0 25 21 46 47 46 26 0 47-21 47-46 0-26-21-47-47-47z m140 0c-26 0-47 21-47 47 0 25 21 46 47 46 25 0 46-21 46-46 0-26-21-47-46-47z m0-139c-26 0-47 21-47 46 0 26 21 47 47 47 25 0 46-21 46-47 0-25-21-46-46-46z m-140 0c-26 0-47 21-47 46 0 26 21 47 47 47 26 0 47-21 47-47 0-25-21-46-47-46z m0-140c-26 0-47 21-47 47 0 25 21 46 47 46 26 0 47-21 47-46 0-26-21-47-47-47z"></path></svg>
		// </div>
		// </div>
		// <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		// <div class="with-icon">
		// [text your-subject class:with-icon placeholder "Subject"]
		// <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="utouch-icon utouch-icon-icon-1"><path d="m510 347c5 9 0 21-10 26l-216 98c-3 1-6 2-8 2-2 0-4 0-6-1l-256-79c-10-3-16-14-13-24 3-11 14-17 25-13l248 76 210-95c10-5 22 0 26 10z m-236 6l-248-76c-11-3-22 2-25 13-3 10 3 21 13 24l256 79c2 1 4 1 6 1 2 0 5-1 8-2l216-98c10-5 15-16 10-26-4-10-16-15-26-10z m-274-135c0-8 4-16 12-19l144-61c28-12 42-27 42-79 0-6 2-12 7-16 5-3 11-5 17-3l255 63c9 2 15 10 15 19l0 3c0 58 0 96-72 126-47 21-135 62-136 62-3 2-5 2-8 2-2 0-4 0-6-1l-256-78c-8-3-14-10-14-18z m77-4l197 61c22-11 90-43 131-60 44-18 47-32 47-78l-216-53c-4 40-19 71-65 90z"></path></svg>
		// </div>
		// </div>
		// </div>
		//
		// <div class="row">
		// <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		// <div class="with-icon">
		// [textarea* your-message class:with-icon rows:3 placeholder "Your Message"]
		// <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="utouch-icon utouch-icon-edit"><path d="m482 64l-34-34c-62-56-126-20-146 0l-279 280c-9 6-9 17-9 19l-14 160c2 24 23 23 23 23l165-12c6-1 10-3 13-7l281-283c40-40 40-106 0-146z m-290 378c-11-20-24-38-37-53l210-213 46 46z m99-339l44 43-211 212c-20-16-38-28-53-36z m-237 258c28 16 71 47 99 98l-108 9z m398-179l-11 11-120-121 11-11c12-11 52-34 86 0l34 34c23 25 23 63 0 87z"></path></svg>
		// </div>
		// </div>
		// </div>
		//
		// <div class="row">
		// <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		// [submit class:btn class:btn--green class:btn--with-shadow class:full-width "Submit Message"]
		// </div>
		// </div>
		//
		// </div>
		?>

	</div>
</div>
<!-- Send Message Popup -->

<!-- Search Popup -->
<div class="search-popup search--dark">
	<a href="#" class="popup-close js-popup-close cd-nav-trigger">
		<svg class="utouch-icon utouch-icon-cancel-1">
			<use xlink:href="#utouch-icon-cancel-1"></use>
		</svg>
	</a>

	<div class="search-full-screen">

		<div class="search-standard">

			<form id="search-header-1" name="form-search-header" method="post">
				<div class="typeahead__container">
					<div class="typeahead__field">

						<span class="typeahead__query">
							<input class="js-typeahead" name="utouch_posts[query]" placeholder="What are you looking for?" autocomplete="off" type="search" autofocus>
						</span>
						<button type="submit" class="form-icon">
							<svg class="utouch-icon utouch-icon-search">
								<use xlink:href="#utouch-icon-search"></use>
							</svg>
						</button>
						<span class="close js-popup-clear-input form-icon">
							<svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
						</span>

					</div>
				</div>
			</form>
		</div>

	</div>

</div>
<!-- ... end Search Popup -->


<?php wp_footer(); ?>
</body>
</html>
