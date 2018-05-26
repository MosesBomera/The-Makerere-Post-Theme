<?php
/*
 * Makerere Post Single Column Article Template
 * Displays the Single Column Article permalink.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header();?>

<div id="single-article" role="main">

	<?php 
		// Start the loop.
		while ( have_posts() ) : the_post();
	?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<span class="column-entry"><?php echo the_terms( get_the_ID(), 'column' ); ?></span>
		
		<header>
			<?php the_title( '<h1 class="single-column-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
			
		<p class="meta-line">
			<span class="by">By <?php the_author_posts_link(); ?></span>
			
				<?php mpt_date(); ?>
				
			</p>
			
			<div class="article-body">
			
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
				<?php //comments_template( '', true ); ?>
				
				<div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
				
			</div><!-- .article-body -->
	</article><!-- .post_class(); -->
	
	<?php	
			endwhile;
		?>
	
</div><!-- #single-article -->
<section class="single-columns-sidebar">
	
		<?php get_template_part( 'default-parts/columns', 'navigation' ); ?>
		<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
		
			<aside id="primary-sidebar" class="columns-container sidebar" role="complementary">
				<div class="transparent-effect">
				
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
					
				</div>
			</aside>
		<?php endif; ?>
		
	</section><!-- .columns-sidebar -->

<?php get_footer(); ?>