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
    'title'     =>  'Professional e-Commerce Services',
    'text'      =>  'At RIOWEX we combine professional skills, art, powerful tools and latest technologies to create incredible marketing solutions.',
    'img'       =>  get_template_directory_uri() . '/img/iconic/webdesign-4.png',
    'img-alt'   =>  'e-commerce and online store design and development satisfaction guarantee',
    ] );
?>
<?php require get_template_directory() . '/page-templates/services-guarantee.php'; ?>

<?php
get_footer();
