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
	</div>
</div>
<!-- Send Message Popup -->
