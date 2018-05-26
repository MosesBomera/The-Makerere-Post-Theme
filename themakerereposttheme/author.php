<?php
/*
 * Makerere Post Author Template
 * Displays the selected Autthor's Posts.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
<section class="section-main">
	<?php // get the twitter handle
		$authorID = get_the_author_meta('ID');
		$twitter_handle = mpt_twitter_handle( $authorID );
	?>
		
	<header class="f6f6f6-board author-meta">
	
		<?php 
			mpt_avatar();
		?>
		
			<div id="<?php the_author_meta( 'ID' ); ?>" class="author-description" itemscope itemtype="http://microformats.org/profile/hcard">
			
				<?php printf( __( '<span itemprop="fn">%s</span>', 'makererepost' ),  get_the_author() ); ?>
				
				<?php if ( !empty( $twitter_handle ) ) : ?>
				<?php echo "$twitter_handle"; ?>
				<?php endif; ?>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				
					<p itemprop="description" class="author-bio"><?php the_author_meta( 'description' ); ?></p>
			
				<?php endif; ?>
			
			</div><!-- .author-description -->
			
	</header><!--. pages-title .top-title -->
	
	<div class="index-main">
		
		<?php if ( have_posts() ) :  the_post(); ?>
			
			<?php rewind_posts(); ?>  
			
			<?php while( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	
		<?php the_title( sprintf( '<h2 class="entry-title"><a color="red" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
	</header>
	
	<div>
		<p class="meta-line">
		
			<?php if ( is_author() ) : ?>
			<?php else : ?>
			
				<span class="by">By <?php the_author_posts_link(); ?></span>
				
			<?php endif; ?>
			
			<?php mpt_date(); ?>
			
			<?php if ( is_category() ) : ?>
			<?php else : ?>
			
				<span class="category-link"><?php the_category(', '); ?></span>
				
			<?php endif; ?>
			</p>
			
			<?php mpt_post_thumbnail(); ?>
			
		<p>
		
			<?php the_excerpt(); ?>
			
		</p>
	</div>
</article> <!-- .post_class() -->
			
			<?php 
			endwhile;
			endif;
 
			the_posts_pagination( array(
				'screen-reader-text'	=> __( '   ', 'makererepost' ),
				'prev_text'          => __( '&#8592;', 'makererepost' ),
				'next_text'          => __( '&#8594;', 'makererepost' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'makererepost' ) . ' </span>',
			) ); ?>
	</div> <!-- .index-main -->
</section> <!-- .section-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>