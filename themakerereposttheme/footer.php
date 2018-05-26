<?php 
/*
 * Makerere Post Footer Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>
</div> <!-- #end of page-wrapper -->
	<footer id="the-post-footer" role="footer">
		<div class="header-footer-wrapper">
			<p class="makerere-post-copyright"><?php echo date( 'Y' ); ?> &copy;The Makerere Post, Inc. </p>
			<nav id="footer-navigation" role="navigation">
				<ul id="footer-navigation-content">
					<li class=""><a href="<?php echo esc_url( home_url('/about')); ?>">About</a></li>
					<!-- <li class=""><a href="<?php //echo esc_url( home_url('/board')); ?>">Board</a></li> -->
					<li class=""><a href="<?php echo esc_url( home_url('/the-archives')); ?>">Archives</a></li>
					<li class=""><a href="<?php echo esc_url( home_url('/contact-us')); ?>">Contact Us</a></li>
					<li class=""><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
					<!-- <li class=""><a href="localhost/podcast">PodCast</a></li> -->
				</ul>
			</nav>
		</div>
	</footer>
</div><!-- .the-makerere-post -->
<?php wp_footer(); ?>
</body>
</html>