<?php
/*
 * Makerere Post Board Template
 * Displays the Board of the Makerere Post.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
<section class="main">
	<div class="index-main">
		<?php the_post(); ?>
			<h1 class="pages-title"><?php the_title(); ?></h1>
	</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>