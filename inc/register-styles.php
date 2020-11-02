<?php
/**
 * Register and enqueue styles
 */
function itcorp_register_styles() {

  $theme_version = wp_get_theme()->get( 'version' );

  wp_enqueue_style( 'itcorp-style', get_stylesheet_uri(), array(), $theme_version );
  // wp_enqueue_style( 'itcorp-theme-styles', get_template_directory_uri() . '/css/theme-styles.css', array(), $theme_version, false );
  // wp_enqueue_style( 'itcorp-blocks', get_template_directory_uri() . '/css/blocks.css', array(), $theme_version, false );
  // wp_enqueue_style( 'itcorp-widgets', get_template_directory_uri() . '/css/widgets.css', array(), $theme_version, false );

  // Google web fonts
  wp_enqueue_style( 'itcorp-font-nunito', 'https://fonts.googleapis.com/css?family=Nunito:300,400,700,900' );
  wp_enqueue_style( 'itcorp-font-baloo', 'https://fonts.googleapis.com/css?family=Baloo+Paaji' );


  // Styles for Plugins
  // wp_enqueue_style( 'itcorp-swiper', get_template_directory_uri() . '/css/plugins/swiper.min.css', array(), $theme_version, false );
  // wp_enqueue_style( 'itcorp-rangeslider', get_template_directory_uri() . '/css/plugins/ion.rangeSlider.css', array(), $theme_version, false );

}
add_action( 'wp_enqueue_scripts', 'itcorp_register_styles' );

function itcorp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'itcorp_remove_wp_block_library_css', 100 );

function itcorp_dequque_js(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'itcorp_dequque_js' );

function itcorp_disable_emoji_feature() {

	// Prevent Emoji from loading on the front-end
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also
	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter( 'tiny_mce_plugins', 'itcorp_disable_emojis_tinymce' );

	/** Finally, prevent character conversion too
         ** without this, emojis still work
         ** if it is available on the user's device
	 */

	add_filter( 'option_use_smilies', '__return_false' );

}

function itcorp_disable_emojis_tinymce( $plugins ) {
	if( is_array($plugins) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}

add_action('init', 'itcorp_disable_emoji_feature');
