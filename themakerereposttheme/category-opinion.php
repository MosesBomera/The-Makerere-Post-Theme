<?php
/*
 * Makerere Post Opinion Template
 * Displays the content of the Makerere Post Opinion.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
	
		<div class="index-main">
		
		<h1 class="white-board">
	
			<span class="pages-title"><?php single_cat_title( "", true ); ?></span>
		
		</h1><!-- .pages-title .top-title -->
		
		<div class="opinion-index-main">
	
		<?php if ( have_posts() ) : ?>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			
					get_template_part( 'default-parts/default', 'opinion' );
				
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
			
		</div> <!-- .opinion-index-main -->
		
			<section class="contact">
				<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
					<aside id="primary-sidebar-7" role="complementary">
						<?php dynamic_sidebar( 'sidebar-7' ); ?>
					</aside>
				<?php endif; ?>
		</div><!-- .index-main -->

<div class="middle">
	<div class="the-post-cartoon">
		<header class="board-titles"><h2>The Cartoon</h2></header>
			<?php echo get_template_part( 'picture-template/cartoon' ); ?>
	</div>

<?php get_sidebar(); ?>
	
</div><!-- .middle -->

<?php get_footer(); ?>