<?php
/*
 * Makerere Post Columns Template
 * Displays Columns Randomnly
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */

$args 		= array(
	'post_type'	=> 'columns',
	'tax_query'	=> array (
		'taxonomy'	=> 'column',
		'field'		=> 'slug'
	)
);

$column_articles = new WP_Query( $args );

// Start the loop
if ( $column_articles->have_posts() ) : 

while ( $column_articles->have_posts() ) : $column_articles->the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<span class="column-entry"><?php echo the_terms( $column_articles->ID, 'column' ); ?></span>
		<header>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header>
		<div>
			<p class="meta-line">
				<span class="by">
					By <?php the_author_posts_link(); ?>
				</span>
				<?php mpt_date(); ?>
			</p>
			<?php mpt_post_thumbnail(); ?>
			<p><?php the_excerpt(); ?></p>
		</div>
</article>	

<?php
	endwhile;
	else :
?>

<?php 
	
	get_template_part( 'default-parts/default', 'none' ); 
	
endif;
?>

