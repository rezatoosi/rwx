<?php
function itcorp_widgets_init() {
  register_sidebar( array(
    'name'          =>  __( 'Footer Contact Form', 'itcorp' ),
    'id'            =>  'footer-contact-form',
    'description'   =>  __( 'Add contact form here', 'itcorp' ),
    'before_widget' =>  '<div id="%1$s" class="%2$s">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h5>',
    'after_title'   =>  '</h5>'
    ) );
}
add_action( 'widgets_init', 'itcorp_widgets_init' );
