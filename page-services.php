<?php
/**
 * Main template file
 */

 get_header();

 // itcorp_page_header_section();
?>
<section class="background-contain bg-17 pt100">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
				<div class="crumina-module crumina-heading align-center">
					<h6 class="heading-sup-title">Our Services</h6>
					<h2 class="heading-title">
						<span class="c-primary">RIOWEX</span>
            is a full-service agency that provides high quality digital services to grow your business and achieve your business targets
          </h2>
				</div>
			</div>
			<div class="col-lg-12 col-sm-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/product-img.png" alt="image" class="display-block">
			</div>
		</div>
	</div>
</section>
<!-- Services -->
<?php require get_template_directory() . '/page-templates/services.php'; ?>
<!-- ... end Services -->

<?php
get_footer();
