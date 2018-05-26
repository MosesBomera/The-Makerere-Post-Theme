<?php
/*
 * Makerere Post The Cartoon Template
 * Displays the cartoon.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
if ( post_type_exists( 'cartoon' ) ) :
	$args = array( 'post_type' => 'cartoon', 'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		the_content();
	endwhile;
endif;