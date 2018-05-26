<?php
/**
 * Makerere Post Individual Columns Template
 * Displays the Posts from the Columns Section on the main page
 *
 * @version        1.0
 * @since          Makerere Post Theme 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="meta-line">
				<?php mpt_date(); ?>
			</p>
			
		<header>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header>
		<div>
			<?php mpt_post_thumbnail(); ?>
			<p><?php the_excerpt(); ?></p>
		</div>
</article>