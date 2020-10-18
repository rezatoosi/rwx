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

<?php require get_template_directory() . '/page-templates/send-message-popup.php'; ?>

<?php wp_footer(); ?>
</body>
</html>
