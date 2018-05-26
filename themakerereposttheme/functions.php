<?php
/**
 * Makerere Post Theme Function File
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
/**
 * To add automatic title rendering.
 * This theme is heavily influenced by the twentysixteen default theme.
 */


if ( ! function_exists( 'mpt_setup' ) ) :
/**
 * Sets up the theme framework
 */
function mpt_setup() {
	// Load theme for translation, to be implemented later
	// load_theme_textdomain();
	
	//Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	//Wordpress manages the document title.
	add_theme_support( 'title-tag' );
	
	// support for featured images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 500 );
	
	// Dynamic menus to be added later.
	
	// Support for HTNL5 Markup
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/**
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'standard',
	) );
	
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
}
endif;
add_action( 'after_setup_theme', 'mpt_setup' );

/**
 *
 * Registration of widgets
 */
function mpt_widgets() {
	register_sidebar( array(
		'name' 			=> __( 'Advert-sidebar' ),
		'id'   			=> 'sidebar-1',
		'description'	=> __( 'Appears in the sidebar section of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'BigAdvert-sidebar' ),
		'id'   			=> 'sidebar-2',
		'description'	=> __( 'Appears in the sidebar section of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'InArticle-sidebar' ),
		'id'   			=> 'sidebar-3',
		'description'	=> __( 'Appears in the single article of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'Columns-sidebar' ),
		'id'   			=> 'sidebar-4',
		'description'	=> __( 'Appears in the Columns sidebar section of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'Advert-index' ),
		'id'   			=> 'sidebar-5',
		'description'	=> __( 'Appears in the index section of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'Calender-Sidebar' ),
		'id'   			=> 'sidebar-6',
		'description'	=> __( 'Appears in the Single Event section of the theme'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
	
	register_sidebar( array(
		'name' 			=> __( 'Opinion-Contact' ),
		'id'   			=> 'sidebar-7',
		'description'	=> __( 'Appears at the bottom of the Opinion section.'),
		'before_widget'	=> '<section id="%1$s" class="widget %2%s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
}
add_action( 'widgets_init', 'mpt_widgets' );

/* Function to add the Read More link
 */
function mpt_readmore( $more ) {
	/*return '<a class="readmore" href="'.get_permalink().'" rel="nofollow">&nbsp;More</a>';*/
	return '';
}
add_filter( 'excerpt_more', 'mpt_readmore' );


// Awesome date generator
function mpt_date() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	
	$time_string = sprintf( $time_string, esc_attr( get_the_date( 'c' ) ), get_the_date(), esc_attr( get_the_modified_date( 'c' ) ), get_the_modified_date());
	printf( '<span class="posted-on">%s</span>',
		$time_string
	);
}


// Add a favicon to the page

add_action( 'wp_head', 'mpt_favicon' );

function mpt_favicon() {
	$template_dir = get_template_directory_uri();
?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $template_dir; ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $template_dir; ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $template_dir; ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $template_dir; ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $template_dir; ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $template_dir; ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $template_dir; ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $template_dir; ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $template_dir; ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $template_dir; ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $template_dir; ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $template_dir; ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $template_dir; ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $template_dir; ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $template_dir; ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
<?php
}


// Fonts by Google if Georgia ain't good enough.

/**
 * Handles JavaScript.
 *
 * Change html className from no-js to js, to show javascript support support.
 */
function mpt_javascript_detect() {
?>
	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<?php
}
add_action( 'wp_head', 'mpt_javascript_detect', 0);

/**
 * Enqueues styles and styles
 */
function mpt_scripts() {
	// Add theme style sheet.
	wp_enqueue_style('mpt-style', get_stylesheet_uri());
	
	// Add fonts
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,700i', false );
	
	// Add theme JavaScript Files
	wp_enqueue_script( 'mpt-js', get_template_directory_uri() . '/js/mpt.js', array(), '20160914', true );
	
	// Add Genericons, used in the main stylesheet.
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

}
add_action( 'wp_enqueue_scripts', 'mpt_scripts' );

function mpt_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

?>
	<div class="div-post-thumbnail">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</a>
    </div>
<?php 
}

/**
 * Gets the author twitter handle
 * 
 * @params int 
 */
function mpt_twitter_handle( $authorID ) {
	$twitter_handle = get_the_author_meta( 'twitter', $authorID );
	if ( empty( $twitter_handle ) ) {
		return "";
	} else {
		$twitter_link	= '<a itemprop="twitter" class="author-twitter" href="https://twitter.com/' . $twitter_handle . '">' . '&#64;' . $twitter_handle . '</a>';
		return $twitter_link;
	}
}


/** 
 * Adds author avatar to their posts.
 *
 * @params none
 */
function mpt_avatar() {
	if ( 'post' === get_post_type() ) {
		$author_avatar_size = apply_filters( 'mpt_author_avatar_size', 90 );
		printf( '<span class="author vcard">%1$s</span>',
			get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size )
		);
	}
}

/**
 * Add custom post types to the main query.
 *
 * @params $query
 */
function mpt_custom_posts( $query ) {
	if ( is_author() ) : 
		$query->set('post_type', ['post', 'columns'] );
	endif;
	return $query;
}

add_action( 'pre_get_posts', 'mpt_custom_posts' );

function mpt_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
			box-shadow: 1px 1px 1px #9AA8A2;
			border-radius: 50%;
        }
		
		.wp-core-ui .button-primary {
			background-color: #075324 !important;
			background: #075324 !important;
			text-shadow: 0 -1px 1px #075324,1px 0 1px #075324,0 1px 1px #075324,-1px 0 1px #075324 !important;
			box-shadow: 0 1px 0 #075324 !important;
			border-color: #075324 !important;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'mpt_login_logo' );


function mpt_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'mpt_login_logo_url' );

function mpt_login_logo_url_title() {
    return 'Moments, Pictures and Stories from the Makerere University Community.';
}
add_filter( 'login_headertitle', 'mpt_login_logo_url_title' );