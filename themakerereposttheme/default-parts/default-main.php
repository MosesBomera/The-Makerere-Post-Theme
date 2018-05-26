<?php
/*
 * Makerere Post Index-Main Template
 * Displays the latest Nine Articles from Sections: News / Sports / Feature/ Opinion.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
 
/* ------------------------- Custom Loop ------------------------------ */
$args 		= array('category_name' => 'feature,sports,news', 'posts_per_page' => 9);
$wp_query 	= new WP_Query( $args );

// Start the loop.
if ( $wp_query->have_posts() ) :

while ( $wp_query->have_posts() ) : $wp_query->the_post();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	
	<div>
		<p class="meta-line">
			<span class="by">
				By <?php the_author_posts_link(); ?>
			</span>
			<?php mpt_date(); ?>
			<span class="category-link"><?php the_category(', '); ?></span>
		</p> 
		<?php mpt_post_thumbnail(); ?>
		<p><?php the_excerpt(); ?></p>
	</div>
</article>	
<?php // End the loop
	endwhile;
	else:
?>

<?php	

	get_template_part( 'default-parts/default', 'none' );

endif;
?>

<?php // Pagination here not sensible ?>