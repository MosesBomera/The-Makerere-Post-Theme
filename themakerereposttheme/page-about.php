<?php
/*
 * Makerere Post About-Us Template
 * Displays the About Us page.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
get_header(); ?>
	<div class="index-main"  >
		<?php the_post(); ?>
		<section id="about-us" itemscope itemtype="http://microformats.org/profile/hcard">
			<h1 class="pages-title"><?php the_title(); ?></h1>
			<div itemprop="org" itemscope>
				<h1 itemprop="organization-name" class="the-makerere-post"><em><?php bloginfo( 'name' ); ?></em></h1>
				<br />
				<div class="about">
					<p><em>The Makerere Post</em> is an online independent newspaper started on 19th September, 2016 as an expressive platform for students and Makerere University affiliates.</p>
					<br />
					<p><em>The Makerere Post</em> features student columnists, opinions from students and affiliates of the university among others. Operating as a not-for profit entity and wholly run by undergraduate students, <em>The Makerere Post's</em> mission is to improve the information literacy of the students and through that build on their aspirations and motivations.</p>
					<br />
					
					<p class="tmp">Ujinga Hubeba Mzigo,</p>
					<p class="tmp"><em>The Makerere Post.</em></p>
					<p class="tmp">September, 2016</p>
				</div>
			</div>
		</section>
	</div>
<?php get_footer(); ?>