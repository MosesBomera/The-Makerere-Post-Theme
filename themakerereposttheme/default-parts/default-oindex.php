<?php
/*
 * Makerere Post Index Opinion Template
 * Displays the featured Opinion on main page.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */

$args 		= array('category_name' => 'opinion', 'posts_per_page' => 2);
$wp_query 	= new WP_Query( $args );

// Start the loop.
while ( $wp_query->have_posts() ) : $wp_query->the_post();

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
<?php // End the loop
	endwhile;
?>