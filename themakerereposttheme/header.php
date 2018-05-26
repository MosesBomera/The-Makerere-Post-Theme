<?php
/*
 * Makerere Post Header Template
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="the-makerere-post">
	
		<header id="the-post-header" role="banner">
		
			<div class="the-post-banner">
				<div class="the-post-logo">
					<h1>
							<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img width="500px" class="banner-image" src="<?php echo get_template_directory_uri(); ?>/images/makerere-post-banner.png" />
							</a>
					</h1>
				</div>
							
					
					<nav id="the-post-main-navigation" class="dropdown">
						<!-- smaller screens -->
						<button onclick="ShowNavigation()" class="dropbtn" >Sections</button>
						
						<div id="navigation-content" class="dropdown-content">
						
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
							<a href="<?php echo esc_url( home_url('/category/news')); ?>">News</a>
							<a href="<?php echo esc_url( home_url('/category/opinion')); ?>">Opinion</a>
							<a href="<?php echo esc_url( home_url('/category/sports')); ?>">Sports</a>
							<a href="<?php echo esc_url( home_url('/category/feature')); ?>">Feature</a>
							<a href="<?php echo esc_url( home_url('/gallery')); ?>">Pictures</a>
							<a href="<?php echo esc_url( home_url('/columns')); ?>">Columns</a>
							<a href="<?php echo esc_url( home_url('/events')); ?>">Calender</a>
							
						</div><!-- #navigation-content -->
						
					</nav><!-- #the-post-main-navigation -->
					
			</div><!-- .the-post-banner -->
			
		</header><!-- #the-post-header -->
		
	<div id="page-wrapper" class="site">