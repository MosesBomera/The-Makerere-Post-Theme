<?php
/*
 * Makerere Post Contact Us Template
 * Displays the Contact Us page.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>

	<div class="index-main">
		<?php the_post(); ?>
			<h1 class="pages-title"><?php the_title(); ?></h1>
			
			<p class="contact-content"><b>For any kind of error in our content:</b> Please notify us at 
			<a class="maillink" href="mailto:corrections@makererepost.com">corrections@makererepost.com</a></p>
			
			<br />
			
			<p class="contact-content"><b>For opinions and commentary:</b> Email us at <a class="maillink" href="mailto:opinion@makererepost.com">
			opinion@makererepost.com</a></p>
			
			<br />
			
			<p class="contact-content"><b>For adverstising inquiries:</b> Contact us at <a class="maillink" href="mailto:advertising@makererepost.com">
			advertising@makererepost.com</a></p>
			<br />
			
			<p class="contact-content"><b>To feature your event(s) on our <a target="_blank" href="<?php echo esc_url( home_url('/events')); ?>">Calender page:</a></b> Email your event to <a class="maillink" href="mailto:events@makererepost.com">
			events@makererepost.com</a></p>
			</br />
			
			<p class="contact-content"><b>For tips:</b> Send the tip to <a class="maillink" href="mailto:tips@makererepost.com">
			tips@makererepost.com</a></p>
			
			<br />
			
			<p class="contact-content"><b>Send us feedback and general information</b> at <a class="maillink" href="mailto:info@makererepost.com">
			info@makererepost.com</a></p>
			
			<br />
			
			<h1 class="pages-title">Social</h1>
			
			<p class="contact-content"><b>Follow us on Twitter:</b> <a target="_blank" href="https://twitter.com/TheMakererePost">@TheMakererePost</a></p>
			<br />
			<p class="contact-content"><b>Like us on Facebook:</b> <a target="_blank" href="https://facebook.com/TheMakererePost">The Makerere Post</a></p>
	</div>
<?php get_footer(); ?>