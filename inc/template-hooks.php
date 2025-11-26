<?php
/**
 * Template Hooks
 *
 * Action and filter hooks for templates.
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
 * Add custom body classes.
 *
 * @param array $classes Existing body classes.
 * @return array Modified body classes.
 */
function wescarhealth_body_classes( array $classes ): array {
	// Add a class if there is a custom header.
	if ( has_header_image() ) {
		$classes[] = 'has-header-image';
	}

	// Add a class if there is a custom logo.
	if ( has_custom_logo() ) {
		$classes[] = 'has-custom-logo';
	}

	// Add a class if sidebar is active.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page_template( 'templates/full-width.php' ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}

	// Add a class for singular pages.
	if ( is_singular() ) {
		$classes[] = 'is-singular';
	}

	// Add a class for the front page.
	if ( is_front_page() && ! is_home() ) {
		$classes[] = 'is-front-page';
	}

	// Add a class for blog page.
	if ( is_home() && ! is_front_page() ) {
		$classes[] = 'is-blog';
	}

	// Add post type class.
	if ( is_singular() ) {
		$classes[] = 'post-type-' . get_post_type();
	}

	return $classes;
}
add_filter( 'body_class', 'wescarhealth_body_classes' );

/**
 * Add custom post classes.
 *
 * @param array $classes Existing post classes.
 * @return array Modified post classes.
 */
function wescarhealth_post_classes( array $classes ): array {
	// Add BEM class.
	$classes[] = 'entry';

	// Add class if post has thumbnail.
	if ( has_post_thumbnail() ) {
		$classes[] = 'entry--has-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'wescarhealth_post_classes' );

/**
 * Modify excerpt length.
 *
 * @param int $length Default excerpt length.
 * @return int Modified excerpt length.
 */
function wescarhealth_excerpt_length( int $length ): int {
	if ( is_admin() ) {
		return $length;
	}

	return 25;
}
add_filter( 'excerpt_length', 'wescarhealth_excerpt_length' );

/**
 * Modify excerpt more string.
 *
 * @param string $more Default more string.
 * @return string Modified more string.
 */
function wescarhealth_excerpt_more( string $more ): string {
	if ( is_admin() ) {
		return $more;
	}

	return '&hellip;';
}
add_filter( 'excerpt_more', 'wescarhealth_excerpt_more' );

/**
 * Add custom pingback header.
 *
 * @return void
 */
function wescarhealth_pingback_header(): void {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'wescarhealth_pingback_header' );

/**
 * Add skip link to the beginning of the page.
 *
 * @return void
 */
function wescarhealth_skip_link(): void {
	echo '<a class="skip-link" href="#primary">' . esc_html__( 'Skip to content', 'wescarhealth' ) . '</a>';
}
add_action( 'wp_body_open', 'wescarhealth_skip_link', 5 );

/**
 * Wrap oEmbed content in responsive container.
 *
 * @param string $html    The embed HTML.
 * @param string $url     The URL being embedded.
 * @param array  $attr    Embed attributes.
 * @param int    $post_id Post ID.
 * @return string Modified embed HTML.
 */
function wescarhealth_responsive_embed( string $html, string $url, array $attr, int $post_id ): string {
	// Only wrap video embeds.
	$video_providers = [ 'youtube', 'vimeo', 'dailymotion', 'videopress' ];
	$is_video        = false;

	foreach ( $video_providers as $provider ) {
		if ( strpos( $url, $provider ) !== false ) {
			$is_video = true;
			break;
		}
	}

	if ( $is_video ) {
		return '<div class="responsive-embed">' . $html . '</div>';
	}

	return $html;
}
add_filter( 'embed_oembed_html', 'wescarhealth_responsive_embed', 10, 4 );

/**
 * Add loading="lazy" to content images.
 *
 * @param string $content Post content.
 * @return string Modified content.
 */
function wescarhealth_lazy_load_images( string $content ): string {
	// WordPress 5.5+ handles this natively, but we can add additional attributes.
	return $content;
}
add_filter( 'the_content', 'wescarhealth_lazy_load_images' );

/**
 * Modify archive title.
 *
 * @param string $title Archive title.
 * @return string Modified title.
 */
function wescarhealth_archive_title( string $title ): string {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = get_the_author();
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'wescarhealth_archive_title' );

/**
 * Add custom allowed HTML for wp_kses.
 *
 * @return array Allowed HTML tags and attributes.
 */
function wescarhealth_allowed_html(): array {
	return array_merge(
		wp_kses_allowed_html( 'post' ),
		[
			'svg'  => [
				'class'           => true,
				'aria-hidden'     => true,
				'aria-labelledby' => true,
				'role'            => true,
				'xmlns'           => true,
				'width'           => true,
				'height'          => true,
				'viewbox'         => true,
				'fill'            => true,
			],
			'path' => [
				'd'               => true,
				'fill'            => true,
				'stroke'          => true,
				'stroke-width'    => true,
				'stroke-linecap'  => true,
				'stroke-linejoin' => true,
			],
			'use'  => [
				'href'       => true,
				'xlink:href' => true,
			],
		]
	);
}

/**
 * Register custom query vars.
 *
 * @param array $vars Existing query vars.
 * @return array Modified query vars.
 */
function wescarhealth_query_vars( array $vars ): array {
	$vars[] = 'wescarhealth_filter';
	return $vars;
}
add_filter( 'query_vars', 'wescarhealth_query_vars' );

/**
 * Modify main query on archive pages.
 *
 * @param WP_Query $query The main query.
 * @return void
 */
function wescarhealth_pre_get_posts( WP_Query $query ): void {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	// Modify posts per page on search.
	if ( $query->is_search() ) {
		$query->set( 'posts_per_page', 12 );
	}
}
add_action( 'pre_get_posts', 'wescarhealth_pre_get_posts' );
