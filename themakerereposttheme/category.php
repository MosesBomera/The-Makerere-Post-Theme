<?php
/*
 * Makerere Post Category Template
 * Displays the content of the Makerere Post Categories.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
	
<section class="section-main">
	<div class="index-main">
	
	<header class="white-board">
	
		<h1>
			<span class="pages-title"><?php single_cat_title( "", true ); ?></span>
		</h1>
		
	</header><!-- .category-title -->

	<?php if ( have_posts() ) :	?>
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				
				get_template_part( 'default-parts/default' );

			endwhile;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'default-parts/default', 'none' );

		endif;
		?>
		<?php
			the_posts_pagination( array(
				'screen-reader-text'	=> __( '   ', 'makererepost' ),
				'prev_text'          => __( '&#8592;', 'makererepost' ),
				'next_text'          => __( '&#8594;', 'makererepost' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'makererepost' ) . ' </span>',
			) );
		?>
	</div><!-- .index-main -->
</section><!-- .section-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>