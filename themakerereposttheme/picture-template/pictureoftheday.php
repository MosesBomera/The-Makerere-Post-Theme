<?php
/*
 * Makerere Post Picture of the Day Template
 * Displays the Picture of the Day.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
if ( post_type_exists( 'picture-of-the-day' ) ) :
	$args = array( 'post_type' => 'picture-of-the-day', 'posts_per_page' => 1 );
	$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			the_content();
		endwhile;
endif;