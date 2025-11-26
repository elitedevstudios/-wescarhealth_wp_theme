<?php
/**
 * Enqueue Scripts and Styles
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
 * Enqueue scripts and styles for the front end.
 *
 * @return void
 */
function wescarhealth_scripts(): void {
	// Get theme version for cache busting.
	$version = WESCARHEALTH_VERSION;

	// Main stylesheet.
	wp_enqueue_style(
		'wescarhealth-style',
		get_stylesheet_uri(),
		[],
		$version
	);

	// Additional main CSS (compiled).
	if ( file_exists( WESCARHEALTH_DIR . '/assets/css/main.css' ) ) {
		wp_enqueue_style(
			'wescarhealth-main',
			WESCARHEALTH_URI . '/assets/css/main.css',
			[ 'wescarhealth-style' ],
			$version
		);
	}

	// Main JavaScript.
	if ( file_exists( WESCARHEALTH_DIR . '/assets/js/main.js' ) ) {
		wp_enqueue_script(
			'wescarhealth-main',
			WESCARHEALTH_URI . '/assets/js/main.js',
			[],
			$version,
			[
				'in_footer' => true,
				'strategy'  => 'defer',
			]
		);

		// Localize script with data.
		wp_localize_script(
			'wescarhealth-main',
			'wescarHealthData',
			[
				'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
				'restUrl'   => rest_url(),
				'nonce'     => wp_create_nonce( 'wescarhealth_nonce' ),
				'siteUrl'   => home_url(),
				'themePath' => WESCARHEALTH_URI,
				'i18n'      => [
					'loading'     => esc_html__( 'Loading...', 'wescarhealth' ),
					'error'       => esc_html__( 'An error occurred.', 'wescarhealth' ),
					'menuOpen'    => esc_html__( 'Open menu', 'wescarhealth' ),
					'menuClose'   => esc_html__( 'Close menu', 'wescarhealth' ),
					'searchOpen'  => esc_html__( 'Open search', 'wescarhealth' ),
					'searchClose' => esc_html__( 'Close search', 'wescarhealth' ),
				],
			]
		);
	}

	// Comment reply script.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wescarhealth_scripts' );

/**
 * Enqueue block editor assets.
 *
 * @return void
 */
function wescarhealth_block_editor_assets(): void {
	$version = WESCARHEALTH_VERSION;

	// Editor styles.
	if ( file_exists( WESCARHEALTH_DIR . '/assets/css/editor-style.css' ) ) {
		wp_enqueue_style(
			'wescarhealth-editor-style',
			WESCARHEALTH_URI . '/assets/css/editor-style.css',
			[],
			$version
		);
	}

	// Editor scripts.
	if ( file_exists( WESCARHEALTH_DIR . '/assets/js/editor.js' ) ) {
		wp_enqueue_script(
			'wescarhealth-editor-script',
			WESCARHEALTH_URI . '/assets/js/editor.js',
			[ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ],
			$version,
			true
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'wescarhealth_block_editor_assets' );

/**
 * Add preconnect for Google Fonts (if used).
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array Modified URLs.
 */
function wescarhealth_resource_hints( array $urls, string $relation_type ): array {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = [
			'href' => 'https://fonts.googleapis.com',
			'crossorigin',
		];
		$urls[] = [
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		];
	}

	return $urls;
}
// Uncomment if using Google Fonts.
// add_filter( 'wp_resource_hints', 'wescarhealth_resource_hints', 10, 2 );

/**
 * Add async/defer attributes to scripts.
 *
 * @param string $tag    The script tag.
 * @param string $handle The script handle.
 * @param string $src    The script source.
 * @return string Modified script tag.
 */
function wescarhealth_script_loader_tag( string $tag, string $handle, string $src ): string {
	// Scripts to defer.
	$defer_scripts = [
		'wescarhealth-main',
	];

	// Scripts to async.
	$async_scripts = [];

	if ( in_array( $handle, $defer_scripts, true ) ) {
		$tag = str_replace( ' src', ' defer src', $tag );
	}

	if ( in_array( $handle, $async_scripts, true ) ) {
		$tag = str_replace( ' src', ' async src', $tag );
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'wescarhealth_script_loader_tag', 10, 3 );

/**
 * Remove unnecessary scripts and styles.
 *
 * @return void
 */
function wescarhealth_dequeue_unnecessary(): void {
	// Remove block library CSS if not using blocks on front end.
	// wp_dequeue_style( 'wp-block-library' );

	// Remove Gutenberg default styles (uncomment if needed).
	// wp_dequeue_style( 'wp-block-library-theme' );

	// Remove global styles (uncomment if needed).
	// wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wescarhealth_dequeue_unnecessary', 100 );

/**
 * Add preload for critical assets.
 *
 * @return void
 */
function wescarhealth_preload_assets(): void {
	// Preload main CSS.
	echo '<link rel="preload" href="' . esc_url( get_stylesheet_uri() ) . '" as="style">' . "\n";

	// Preload main font (if using custom fonts).
	// echo '<link rel="preload" href="' . esc_url( WESCARHEALTH_URI . '/assets/fonts/font.woff2' ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
}
add_action( 'wp_head', 'wescarhealth_preload_assets', 1 );
