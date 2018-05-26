<?php
/*
 * Makerere Post Single-Post Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>

<div id="single-article" role="main">
		<?php 
			// Start the loop.
			while ( have_posts() ) : the_post();
			
				get_template_part( 'default-parts/default', 'single' );
				
			endwhile;
		?>
</div><!-- #single-article -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>