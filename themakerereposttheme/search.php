<?php
/*
 * Makerere Post Search Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>

		<div class="index-main">
			<header class="pages-title top-title">
						<h1 class="page-title"><?php printf( __( 'Search results for <span class="search-term">%s</span>', 'makererepost' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header>
			
			<section class="search-results">
			
				<?php if ( have_posts() ) : ?>
				
				<?php 
					// Start the loop
					while ( have_posts () ) : the_post();
						get_template_part( 'default-parts/default' );
					endwhile;
					
					else:
						get_template_part( 'default-parts/default', 'none' );
					endif;
				?>
				
			</section><!-- .search-results -->
			
			<?php 
			
				the_posts_pagination( array(
							'screen-reader-text'	=> __( '   ', 'makererepost' ),
							'prev_text'          => __( '&#8592;', 'makererepost' ),
							'next_text'          => __( '&#8594;', 'makererepost' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'makererepost' ) . ' </span>',
						) );
						
			?>
		</div><!-- .index-main -->
<?php get_footer(); ?>