<?php
/**
 * Makerere Post Opinion display.
 * Displays opinion articles
 *
 * @version        1.0
 * @since          Makerere Post Theme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	
	<div>
		<p class="meta-line">
			<span class="by"> By
				<?php 	// get the writer of the opinion from the meta
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
		
		<?php mpt_post_thumbnail(); ?>
		
		<p><?php the_excerpt(); ?></p>
		
	</div>
</article>	