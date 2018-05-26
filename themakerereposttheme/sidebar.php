<?php
/*
 * Makerere Post Sidebar Template
 * Displays the Notices / Advert / Trending.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="primary-sidebar-1" class="primary-sidebar cat-resp sidebar" role="complementary">
		<div class="transparent-effect">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</aside>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
	<aside id="primary-sidebar-2" class="big-advert cat-resp sidebar" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
<?php endif; ?>