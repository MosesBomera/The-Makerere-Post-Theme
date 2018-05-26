<?php
/*
 * Makerere Post Default Template
 * Displays the articles from all queries apart from the main query.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	
		<?php the_title( sprintf( '<h2 class="entry-title"><a color="red" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
	</header>
	
	<div>
		<p class="meta-line">
		
			<?php if ( is_author() ) : ?>
			<?php else : ?>
			
				<span class="by">By <?php the_author_posts_link(); ?></span>
				
			<?php endif; ?>
			
			<?php mpt_date(); ?>
			
			<?php if ( is_category() ) : ?>
			<?php else : ?>
			
				<span class="category-link"><?php the_category(', '); ?></span>
				
			<?php endif; ?>
			</p>
			
			<?php mpt_post_thumbnail(); ?>
			
		<p>
		
			<?php the_excerpt(); ?>
			
		</p>
	</div>
</article> <!-- .body_class() -->