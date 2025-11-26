<?php
/**
 * Theme Setup
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package    WescarHealth
 * @subpackage Includes
 */

declare(strict_types=1);

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 */
function wescarhealth_setup(): void {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'wescarhealth', WESCARHEALTH_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head.
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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set default thumbnail size.
	set_post_thumbnail_size( 1200, 675, true );

	// Add custom image sizes.
	add_image_size( 'wescarhealth-card', 600, 400, true );
	add_image_size( 'wescarhealth-hero', 1920, 800, true );
	add_image_size( 'wescarhealth-square', 600, 600, true );

	// Register navigation menus.
	register_nav_menus(
		[
			'primary'   => esc_html__( 'Primary Menu', 'wescarhealth' ),
			'footer'    => esc_html__( 'Footer Menu', 'wescarhealth' ),
			'mobile'    => esc_html__( 'Mobile Menu', 'wescarhealth' ),
			'social'    => esc_html__( 'Social Links', 'wescarhealth' ),
		]
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		]
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wescarhealth_custom_background_args',
			[
				'default-color' => 'ffffff',
				'default-image' => '',
			]
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      => 100,
			'width'       => 350,
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'assets/css/editor-style.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for appearance tools.
	add_theme_support( 'appearance-tools' );

	// Add support for border controls.
	add_theme_support( 'border' );

	// Add support for link color controls.
	add_theme_support( 'link-color' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'wescarhealth_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 * @return void
 */
function wescarhealth_content_width(): void {
	$GLOBALS['content_width'] = apply_filters( 'wescarhealth_content_width', 800 );
}
add_action( 'after_setup_theme', 'wescarhealth_content_width', 0 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @return void
 */
function wescarhealth_widgets_init(): void {
	register_sidebar(
		[
			'name'          => esc_html__( 'Sidebar', 'wescarhealth' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'wescarhealth' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__title">',
			'after_title'   => '</h2>',
		]
	);

	register_sidebar(
		[
			'name'          => esc_html__( 'Footer Column 1', 'wescarhealth' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 1.', 'wescarhealth' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget__title">',
			'after_title'   => '</h3>',
		]
	);

	register_sidebar(
		[
			'name'          => esc_html__( 'Footer Column 2', 'wescarhealth' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 2.', 'wescarhealth' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget__title">',
			'after_title'   => '</h3>',
		]
	);

	register_sidebar(
		[
			'name'          => esc_html__( 'Footer Column 3', 'wescarhealth' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 3.', 'wescarhealth' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget__title">',
			'after_title'   => '</h3>',
		]
	);

	register_sidebar(
		[
			'name'          => esc_html__( 'Footer Column 4', 'wescarhealth' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here to appear in footer column 4.', 'wescarhealth' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="footer-widget__title">',
			'after_title'   => '</h3>',
		]
	);
}
add_action( 'widgets_init', 'wescarhealth_widgets_init' );

/**
 * Add custom image sizes to media library.
 *
 * @param array $sizes Existing image sizes.
 * @return array Modified image sizes.
 */
function wescarhealth_custom_image_sizes( array $sizes ): array {
	return array_merge(
		$sizes,
		[
			'wescarhealth-card'   => esc_html__( 'Card Image', 'wescarhealth' ),
			'wescarhealth-hero'   => esc_html__( 'Hero Image', 'wescarhealth' ),
			'wescarhealth-square' => esc_html__( 'Square Image', 'wescarhealth' ),
		]
	);
}
add_filter( 'image_size_names_choose', 'wescarhealth_custom_image_sizes' );
