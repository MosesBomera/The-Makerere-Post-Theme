<?php
/**
 * Makerere Post Archive Template
 * Displays the selected archive.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */

get_header(); ?>

	<section class="section-main">
	<div class="index-main">
		<?php if ( have_posts() ) : ?>
		
			<header class="white-board">
				<?php
					the_archive_title( '<h1><span class="pages-title">', '</span></h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'default-parts/default' );

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
		</div><!-- .index-main -->
	</section><!-- .section-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
