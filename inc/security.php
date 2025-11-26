<?php
/**
 * Security Hardening
 *
 * Implements security best practices for the theme.
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
 * Remove WordPress version from head and feeds.
 *
 * @return string Empty string.
 */
function wescarhealth_remove_version(): string {
	return '';
}
add_filter( 'the_generator', 'wescarhealth_remove_version' );

/**
 * Remove version query strings from scripts and styles.
 *
 * @param string $src The source URL.
 * @return string Modified URL without version.
 */
function wescarhealth_remove_version_scripts_styles( string $src ): string {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
// Uncomment to enable (may affect caching).
// add_filter( 'style_loader_src', 'wescarhealth_remove_version_scripts_styles', 9999 );
// add_filter( 'script_loader_src', 'wescarhealth_remove_version_scripts_styles', 9999 );

/**
 * Disable XML-RPC.
 *
 * @return bool False to disable.
 */
function wescarhealth_disable_xmlrpc(): bool {
	return false;
}
add_filter( 'xmlrpc_enabled', 'wescarhealth_disable_xmlrpc' );

/**
 * Remove XML-RPC methods.
 *
 * @param array $methods Available methods.
 * @return array Empty array.
 */
function wescarhealth_remove_xmlrpc_methods( array $methods ): array {
	return [];
}
add_filter( 'xmlrpc_methods', 'wescarhealth_remove_xmlrpc_methods' );

/**
 * Remove RSD link from head.
 *
 * @return void
 */
function wescarhealth_remove_rsd_link(): void {
	remove_action( 'wp_head', 'rsd_link' );
}
add_action( 'init', 'wescarhealth_remove_rsd_link' );

/**
 * Remove Windows Live Writer manifest link.
 *
 * @return void
 */
function wescarhealth_remove_wlwmanifest_link(): void {
	remove_action( 'wp_head', 'wlwmanifest_link' );
}
add_action( 'init', 'wescarhealth_remove_wlwmanifest_link' );

/**
 * Remove shortlink from head.
 *
 * @return void
 */
function wescarhealth_remove_shortlink(): void {
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
}
add_action( 'init', 'wescarhealth_remove_shortlink' );

/**
 * Disable REST API for non-authenticated users (optional - uncomment if needed).
 *
 * @param WP_Error|null|true $result Current result.
 * @return WP_Error|null|true Modified result.
 */
function wescarhealth_restrict_rest_api( $result ) {
	if ( is_user_logged_in() ) {
		return $result;
	}

	// Allow specific REST routes for non-authenticated users.
	$allowed_routes = [
		'/wp/v2/posts',
		'/wp/v2/pages',
		'/wp/v2/categories',
		'/wp/v2/tags',
	];

	$current_route = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';

	foreach ( $allowed_routes as $route ) {
		if ( strpos( $current_route, $route ) !== false ) {
			return $result;
		}
	}

	// Uncomment to restrict REST API.
	// return new WP_Error( 'rest_forbidden', esc_html__( 'REST API restricted.', 'wescarhealth' ), [ 'status' => 401 ] );

	return $result;
}
// add_filter( 'rest_authentication_errors', 'wescarhealth_restrict_rest_api' );

/**
 * Add security headers.
 *
 * @return void
 */
function wescarhealth_security_headers(): void {
	if ( headers_sent() ) {
		return;
	}

	// X-Content-Type-Options.
	header( 'X-Content-Type-Options: nosniff' );

	// X-Frame-Options.
	header( 'X-Frame-Options: SAMEORIGIN' );

	// X-XSS-Protection.
	header( 'X-XSS-Protection: 1; mode=block' );

	// Referrer-Policy.
	header( 'Referrer-Policy: strict-origin-when-cross-origin' );

	// Permissions-Policy (formerly Feature-Policy).
	header( "Permissions-Policy: geolocation=(), microphone=(), camera=()" );
}
add_action( 'send_headers', 'wescarhealth_security_headers' );

/**
 * Disable file editing in admin.
 *
 * @return void
 */
function wescarhealth_disable_file_edit(): void {
	if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
		define( 'DISALLOW_FILE_EDIT', true );
	}
}
add_action( 'init', 'wescarhealth_disable_file_edit' );

/**
 * Sanitize file uploads.
 *
 * @param array $file File data.
 * @return array Modified file data.
 */
function wescarhealth_sanitize_file_upload( array $file ): array {
	// Sanitize filename.
	$file['name'] = sanitize_file_name( $file['name'] );

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'wescarhealth_sanitize_file_upload' );

/**
 * Limit login attempts message (works with plugins like Limit Login Attempts).
 *
 * @param string $error Error message.
 * @return string Modified error message.
 */
function wescarhealth_login_error_message( string $error ): string {
	// Generic error message to prevent username enumeration.
	return esc_html__( 'Invalid login credentials. Please try again.', 'wescarhealth' );
}
// Uncomment to enable generic login errors.
// add_filter( 'login_errors', 'wescarhealth_login_error_message' );

/**
 * Add nonce to forms.
 *
 * @param string $action Nonce action.
 * @param string $name   Nonce name.
 * @return void
 */
function wescarhealth_add_nonce_field( string $action = 'wescarhealth_action', string $name = 'wescarhealth_nonce' ): void {
	wp_nonce_field( $action, $name );
}

/**
 * Verify nonce from form submission.
 *
 * @param string $action Nonce action.
 * @param string $name   Nonce name.
 * @return bool True if valid.
 */
function wescarhealth_verify_nonce( string $action = 'wescarhealth_action', string $name = 'wescarhealth_nonce' ): bool {
	if ( ! isset( $_POST[ $name ] ) ) {
		return false;
	}

	$nonce = sanitize_text_field( wp_unslash( $_POST[ $name ] ) );

	return (bool) wp_verify_nonce( $nonce, $action );
}

/**
 * Escape output helper with allowed HTML.
 *
 * @param string $content Content to escape.
 * @param string $context Context: 'post', 'data', or 'strip'.
 * @return string Escaped content.
 */
function wescarhealth_escape_output( string $content, string $context = 'post' ): string {
	switch ( $context ) {
		case 'post':
			return wp_kses_post( $content );
		case 'data':
			return wp_kses_data( $content );
		case 'strip':
			return wp_strip_all_tags( $content );
		default:
			return esc_html( $content );
	}
}

/**
 * Sanitize input helper.
 *
 * @param mixed  $input Input to sanitize.
 * @param string $type  Type: 'text', 'email', 'url', 'int', 'html'.
 * @return mixed Sanitized input.
 */
function wescarhealth_sanitize_input( $input, string $type = 'text' ) {
	switch ( $type ) {
		case 'text':
			return sanitize_text_field( $input );
		case 'email':
			return sanitize_email( $input );
		case 'url':
			return esc_url_raw( $input );
		case 'int':
			return absint( $input );
		case 'html':
			return wp_kses_post( $input );
		case 'textarea':
			return sanitize_textarea_field( $input );
		default:
			return sanitize_text_field( $input );
	}
}
