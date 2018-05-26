<?php
/*
 * Makerere Post Gallery Template
 * Displays the gallery.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>
<?php  	/** Gallery */
	$args	 = array('post_type' => 'gallery' );
	$gallery = new WP_Query( $args );
?>

<?php

if ( $wp_query->have_posts() ) :

	
	//Start the loop.
	while ( $gallery->have_posts() ) : $gallery->the_post();
?>
	<div id="gallery-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php mpt_post_thumbnail(); ?>
		
		<div class="gallery-meta">
			<header>
				<?php the_title( sprintf( '<h1 class="picture-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			</header>
			
			<p class="meta-line">
				<span class="by">
					<?php the_author_posts_link(); ?>
				</span>
					<?php mpt_date(); ?>
			</p>
		</div>
	</div>
<?php // End the loop
	endwhile;
	else:
?>

<?php	

	get_template_part( 'default-parts/default', 'none' );

endif;