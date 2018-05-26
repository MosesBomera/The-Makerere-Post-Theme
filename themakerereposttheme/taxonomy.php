<?php
/**
 * Makerere Post Taxonomy Page
 *
 * Displays the blog section of the Makerere Post.
 *
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
<div class="columns-main">
	<header class="taxonomy-header">
				<h1 class="taxonomy-title">
					<?php single_cat_title( "", true ); ?>
					
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
				</h1>
	</header><!-- .page-header -->
	<section class="single-taxonomy">
	<?php if ( have_posts() ) : ?>

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'default-parts/column' );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
				'screen-reader-text'	=> __( '   ', 'makererepost' ),
				'prev_text'          => __( '&#8592;', 'makererepost' ),
				'next_text'          => __( '&#8594;', 'makererepost' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'makererepost' ) . ' </span>',
			) );

			// If no content, include the "No posts found" template.
			else :
			?>
			
			<?php
				get_template_part( 'default-parts/default', 'none' );

			endif;
			?>
		</section>
		<section class="taxonomy-columns-sidebar">
		
			<?php get_template_part( 'default-parts/columns', 'navigation' ); ?>
			<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
			
				<aside id="primary-sidebar-4" class="columns-container sidebar" role="complementary">
					
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
						
				</aside>
			<?php endif; ?>
			
		</section><!-- .columns-sidebar -->
</div><!-- .columns-main -->

<?php get_footer(); ?>