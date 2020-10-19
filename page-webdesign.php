<?php
/**
 * Main template file
 */

 get_header();

 // itcorp_page_header_section();

?>


<?php
  itcorp_services_heading_section( [
    'back-link' =>  '/services',
    'subtitle'  =>  'Top Rated Digital Services',
    'title'     =>  'Professional Web Design Services That Drive Results',
    'text'      =>  'At RIOWEX we combine professional skills, art, powerful tools and latest technologies to create incredible marketing solutions.',
    'img'       =>  get_template_directory_uri() . '/img/iconic/webdesign-4.png',
    // 'img'       =>  get_template_directory_uri() . '/img/real/design.jpg',
    'img-alt'   =>  'web design satisfaction guarantee'
    ] );
?>

<?php require get_template_directory() . '/page-templates/services-guarantee.php'; ?>

<section class="pt80 pb80">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading">
					<h3 class="heading-title">
            Professional Web Design Services That Increase Your Engagement
          </h3>
					<div class="heading-text">
            <p class="h6">Website is more than a online place representing your business. A professional website informs, sales, increases engagement rate and converts visitors to customers.</p>
            <p class="h6">With more than 10 years of exprience in web design and web development, we will design user-centered website for you that generates leads and drives results.</p>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading">
					<h3 class="heading-title h5">What Services Are Related To Web Design Services?</h3>
					<div class="heading-text">
            <ul class="list list--primary">
    					<li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						<a href="#">B2B Website Design</a>
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						<a href="#">e-Commerce Website Design</a>
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						<a href="#">SEO Services</a>
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						<a href="#">Wordpress Development</a>
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						<a href="#">Drupal Development</a>
    					</li>
            </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-blue-lighteen pt80 pb80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/iconic/webdesign-5.png" alt="custom web design">
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading">
					<h3 class="heading-title">Why Should I Invest In A Professional Web Design?</h3>
				</div>

				<ul class="list list--primary">
					<li>
						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
						Website Increase your customer engagements
					</li>
          <li>
						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
						Website is the first and important interaction consumers have with your business
					</li>
          <li>
						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
						Website is your online branch and it supposed to be a great automated salesman
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section class="pt80 pb80">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="crumina-module crumina-heading">
					<h2 class="heading-title">
            What Are Key Features Of Our Web Design Projects?
          </h2>
					<div class="heading-text">
            <ul class="list list--primary">
    					<li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Custom Design
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Using professionall styles
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Responsive (mobile-friendly)
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Optimized for search engines (SEO)
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Secure (HTTPS)
    					</li>
              <li>
    						<?php itcorp_svg( 'utouch-icon-correct-symbol-1' ); ?>
    						Future supports & customizing
    					</li>
    				</ul>
					</div>
				</div>
			</div>
      <div class="col-lg-6 col-lg-offset-0 col-md-6 col-sm-12 col-xs-12">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/product-img2.png" alt="image"> -->
        <img src="<?php echo get_template_directory_uri(); ?>/img/gif/responsive-design.gif" alt="responsive web design">
			</div>
		</div>
	</div>
</section>

<?php require get_template_directory() . '/page-templates/techs.php'; ?>

<?php
get_footer();
