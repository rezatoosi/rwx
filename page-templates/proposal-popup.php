<!-- Send Message Popup -->
<div class="window-popup proposal-popup">
	<a href="javascript:void(0)" class="popup-close js-popup-close cd-nav-trigger">
		<?php itcorp_svg( 'utouch-icon-cancel-1' ); ?>
	</a>

	<div class="send-message-popup">
		<?php
			if ( is_active_sidebar( 'request-proposal-form' ) ) {
				dynamic_sidebar( 'request-proposal-form' );
			}
		?>
	</div>
</div>
<!-- Send Message Popup -->
