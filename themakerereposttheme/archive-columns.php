<?php
/**
 * The Makerere Post Column Articles Template
 * Displays the 'blog' of the Makerere Post
 *
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
<div class="columns-main">
	<section class="columns-section">
	
		<?php get_template_part( 'default-parts/default', 'columns' ); ?>
		
	</section><!-- .columns-section -->
	<section class="columns-sidebar">
	
		<?php get_template_part( 'default-parts/columns', 'navigation' ); ?>
		<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
		
			<aside id="primary-sidebar-4" class="columns-container sidebar" role="complementary">
				
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
					
			</aside>
		<?php endif; ?>
		
	</section><!-- .columns-sidebar -->
</div><!-- .columns-main -->

<?php get_footer(); ?>