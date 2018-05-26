<?php
/*
 * Makerere Post Page Template
 * Displays the pages of the Makerere Post.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
<div class="index-main">
		<?php 
		while ( have_posts() ) : the_post();
			get_template_part( 'default-parts/default', 'page');
		endwhile;
		?>
</div>
<?php get_footer(); ?>