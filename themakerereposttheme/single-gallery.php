<?php
/*
 * Makerere Post Single Gallery Template
 * Displays the gallery permalink.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header();?>

<div class="gallery-entry" role="main">
		<?php 
			// Start the loop.
			while ( have_posts() ) : the_post();
		?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<hr>
			<header class="entry-header">
				<?php the_title( '<h1 class="single-gallery-title">', '</h1>' ); ?>
			
				<p class="meta-line">
					<span class="by"><?php the_author_posts_link(); ?>
					</span>
						<?php mpt_date(); ?>
				</p>
			
			</header><!-- .entry-header -->
			
			<div class="gallery-body">
				<?php the_content();?>
				<?php
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'makererepost' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'makererepost' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'makererepost' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'makererepost' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
				?>
				<?php comments_template( '', true ); ?>
			</div>
		</article>
	
		<?php	
				
			endwhile;
		?>
</div>
<?php /*get_sidebar();*/ //a different side-bar for all pages aside the index ?>
<?php get_footer(); ?>