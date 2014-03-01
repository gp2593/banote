<?php if ( ! wp_is_mobile() ) : ?>
<div class="adsense"><?php banote_adsense("side"); ?></div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>

