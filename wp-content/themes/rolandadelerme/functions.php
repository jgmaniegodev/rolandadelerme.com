<?php

if ( ! isset( $content_width ) ) {
	
	$content_width = 960;
	
}


if ( ! function_exists( 'rolandadelerme_setup' ) ) :

/*
 * Theme setup
 */

function rolandadelerme_setup() {
	
	
	/*
     * Add translation support to the theme.
     */
	
	load_theme_textdomain( 'rolandadelerme', get_template_directory() . '/languages' );
	
	
	
	/*
     * Add Wordpres customization support.
     */
	
	// 	Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	
	
	add_theme_support( 'title-tag' );
	
	
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	
	set_post_thumbnail_size( 825, 510, true );
	
	
	// 	This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'rolandadelerme' ),
	'social'  => __( 'Social Links Menu', 'rolandadelerme' ),
	) );
	
	
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	
	add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	
	
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	
	add_theme_support( 'post-formats', array(
	'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	
	
	
	/*
	 * Enable support for custom logo.
	 */
	
	add_theme_support( 'custom-logo', array(
	'height'      => 248,
	'width'       => 248,
	'flex-height' => true,
	) );
	
	
	// 	Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background' );
	
	
	// 	Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	
	// 	Custom header
	$args = array(
	'flex-width'    => true,
	'width'         => 1000,
	'flex-height'    => true,
	'height'        => 800,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
	
	add_theme_support( 'custom-header', $args );
	
}

endif;
// rolandadelerme_setup
add_action( 'after_setup_theme', 'rolandadelerme_setup' );


function rolandadelerme_scripts() {
	
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_script( 'google-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script( 'js-sparkle', get_template_directory_uri() . '/js/jquery-canvas-sparkles.min.js', array('jquery'));
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/themescripts.js', array('jquery') );
	
}

add_action( 'wp_enqueue_scripts', 'rolandadelerme_scripts' );

function get_wppage($slug){
	// query for the about page
    $page_query = new WP_Query( "pagename=$slug" );
    // "loop" through query (even though it's just one page) 
    while ( $page_query->have_posts() ) : $page_query->the_post();
		?>
<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
}
