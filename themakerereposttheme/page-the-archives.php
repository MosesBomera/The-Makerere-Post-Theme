<?php
/*
 * Makerere Post Archive Template
 * Displays the content of the Makerere Post Archives.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>

	<div class="index-main">
		<section class="the-archives">
		<?php the_post(); ?>
			<h1 class="pages-title"><?php the_title(); ?></h1>
			<?php get_search_form(); ?>
			<ul class="the-archive-list"><?php wp_get_archives('type=weekly'); ?></ul>
		</section>
	</div>

<?php get_footer(); ?>