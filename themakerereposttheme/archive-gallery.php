<?php
/**
 * Makerere Post Gallery Template
 * Displays the famous gallery of the Makerere Post.
 *
 * @version        1.0
 * @since          Makerere Post Theme 1.0
 */
get_header(); ?>
	<div class="gallery-home">
		<?php 
			get_template_part( 'picture-template/gallery' );
		?>
	</div>
	<div class="gallery-navigation">
		<?php
			the_posts_pagination( array(
				'screen-reader-text'	=> __( '   ', 'makererepost' ),
				'prev_text'          => __( '&#8592;', 'makererepost' ),
				'next_text'          => __( '&#8594;', 'makererepost' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'makererepost' ) . ' </span>',
			) );
		?>
	</div>
<?php get_footer(); ?>