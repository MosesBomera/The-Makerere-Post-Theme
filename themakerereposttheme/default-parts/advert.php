<?php
/*
 * Makerere Index Main Advert Template
 * Displays the Advert.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-5') ) : ?>
	<aside id="primary-sidebar-5" class="advert-index" role="complementary">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</aside>
<?php endif; ?>