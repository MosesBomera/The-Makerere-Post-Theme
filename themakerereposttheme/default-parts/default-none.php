<?php
/**
 * Makerere Post Index-None Template
 * Displays the no result page
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>

<section class="no-articles not-found">
	<header class="page-header">
		<h2><?php _e( 'No Articles Today.', 'makererepost' ); ?></h2>
	</header> <!-- .page-header -->
	<div class="page-content">
		<?php if  ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Got an article to add? <a href="%1$s">Get started here</a>. ', 'makererepost'), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif (is_search() ) : ?>
			<p><?php _e( 'Oops! Sorry, but nothing matched your search terms. You could try with a different term. ', 'makererepost' ); ?></p>
			<?php get_search_form(); ?>
		<?php else: ?>
			<p><?php _e( 'Hello, we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching could help.', 'makererepost' ); ?></p>
			<div id="search-form">
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-articles -->