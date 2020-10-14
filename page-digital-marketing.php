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
    'title'     =>  'Professional Digital Marketing Services',
    'text'      =>  '...',
    'img'       =>  get_template_directory_uri() . '/img/iconic/digital-marketing.png',
    'img-alt'   =>  'digital marketing satisfaction guarantee',
    ] );
?>
<?php require get_template_directory() . '/page-templates/services-guarantee.php'; ?>


<?php
get_footer();
