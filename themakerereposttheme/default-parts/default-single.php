<?php
/*
 * Makerere Post Single-Post-Content Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<span class="pages-title"><?php the_category(', '); ?></span>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<p class="meta-line">
		<span class="by">By 
		
		<?php	
			//get the writer of the opinion from the meta
				$writer = get_post_custom_values( 'Writer' );
				$writer =  $writer[0];
		?>
		<?php if ( !empty( $writer ) ) : ?>
			<?php	echo "$writer"; ?>
		<?php else : ?>
			<?php the_author_posts_link(); ?>
		<?php endif; ?>
		</span>
			<?php mpt_date(); ?>
	</p>
	<div class="article-body">
		<?php the_content();?>
		
		<div class="writer-bio">
			<?php 
				//get the writer biography.
				$writer_bio = get_post_custom_values( 'Writer Bio');
				$writer_bio = $writer_bio[0];
			?>
			<?php if ( !empty( $writer_bio ) ) : ?>
				<?php echo "<blockquote><p>$writer_bio</p></blockquote>"; ?>
			<?php endif; ?>
			<?php echo get_the_tag_list('<p id="tags">Tags&nbsp;','&nbsp;','</p>'); ?>
		</div>
		
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
		
		<?php if ( is_active_sidebar( 'sidebar-3' )  ) : ?>
			<aside id="primary-sidebar-3" class="in-article-advert sidebar" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside>
		<?php endif; ?>
		
		<div class="fb-comments" data-href="" data-width="100%" data-numposts="5"></div>
	</div>
</article>