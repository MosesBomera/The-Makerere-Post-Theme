<?php /* Opening tag by Asiimwe Joshua 6.16.2016 12:41pm */
/**
 * Makerere Post Index Template File
 * 
 * @file           index.php
 * @package        Makerere Post Theme
 * @author         Makerere Post Code Authors (Moses Bomera)
 * @copyright      Makerere Post Code Authors
 * @license        license.txt
 * @version        1.0
 * @since          Makerere Post Theme 1.0
 */

get_header(); ?>
	
	
		<div class="index-main">
				
			<?php 
				get_template_part( 'default-parts/default', 'main');
			?>
			
			<?php 
				get_template_part( 'default-parts/advert' );
			?>
				 
		</div> <!-- .index-main -->
		
	<div class="middle" role="complementary">
	
		<div id="" class="picture-of-the-day">
			<header>
				<h2 class="board-titles">Picture of the day.</h2>
			</header>
				
				<?php echo get_template_part( 'picture-template/pictureoftheday' ); ?>
					
		</div><!-- #picture-of-the-day .the-post-picture-of-the-day -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- .middle -->
	
	<div class="opinion-index">
		<header>
			<h1 class="opinion-title">
					<a href="<?php echo esc_url( home_url('/category/opinion')); ?>">Opinion</a>
			</h1>
		</header>
		
			<?php 
				get_template_part( 'default-parts/default', 'oindex' ); 
			?>
			
	</div><!-- .opinion-index -->
	
	<!-- Columns on index page -->
	<div class="columns-index">
			
			<div class="column-articles">
			
				<?php 
					get_template_part( 'default-parts/default', 'cindex' );
				?>
				
			</div><!-- .column-articles -->
			
			<header>
				<h1 class="columns-title">from the 
							<a href="<?php echo esc_url( home_url('/columns')); ?>">Columns</a>
				</h1>
			</header>
			
	</div><!-- .columns-index -->
 
<?php get_footer(); ?>