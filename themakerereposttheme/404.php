<?php
/*
 * Makerere Post 404 error Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
		<div class="index-main error404-index">
			
			<div class="error404-content">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! We are lost as much as you!!', 'makerererpost' ); ?></h1>
				</header><!-- .page-header -->

				
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'makerererpost' ); ?></p>
				
				<?php get_search_form(); ?>
				
			</div><!-- .error404-content -->
				
		</div><!-- .index-main -->
<?php get_footer(); ?>