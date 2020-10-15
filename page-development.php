<?php
/**
 * Main template file
 */

 get_header();

 // itcorp_page_header_section();

?>


<?php
  itcorp_services_heading_section( [
    'link'      =>  '/services',
    'subtitle'  =>  'Top Rated Digital Services',
    'title'     =>  'Professional Mobile And Web Application Development Services',
    'text'      =>  'At RIOWEX we combine professional skills, art, powerful tools and latest technologies to create incredible marketing solutions.',
    'img'       =>  get_template_directory_uri() . '/img/iconic/webdesign-4.png',
    'img-alt'   =>  'web Application development satisfaction guarantee',
    ] );
?>
<?php require get_template_directory() . '/page-templates/services-guarantee.php'; ?>
<?php require get_template_directory() . '/page-templates/techs.php'; ?>

<?php
get_footer();
