<?php
/**
 * WesCar Health Theme Functions
 *
 * @package    WescarHealth
 * @author     WesCar Health Development Team
 * @copyright  2024 WesCar Health
 * @license    GPL-2.0-or-later
 * @version    1.0.0
 */

declare(strict_types=1);

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version constant.
 */
define( 'WESCARHEALTH_VERSION', '1.0.0' );

/**
 * Theme directory path.
 */
define( 'WESCARHEALTH_DIR', get_template_directory() );

/**
 * Theme directory URI.
 */
define( 'WESCARHEALTH_URI', get_template_directory_uri() );

/**
 * Minimum PHP version required.
 */
define( 'WESCARHEALTH_MIN_PHP', '8.1' );

/**
 * Minimum WordPress version required.
 */
define( 'WESCARHEALTH_MIN_WP', '6.4' );

/**
 * Check PHP and WordPress version requirements.
 *
 * @return bool True if requirements are met.
 */
function wescarhealth_check_requirements(): bool {
	$php_version_ok = version_compare( PHP_VERSION, WESCARHEALTH_MIN_PHP, '>=' );
	$wp_version_ok  = version_compare( get_bloginfo( 'version' ), WESCARHEALTH_MIN_WP, '>=' );

	return $php_version_ok && $wp_version_ok;
}

/**
 * Display admin notice for unmet requirements.
 *
 * @return void
 */
function wescarhealth_requirements_notice(): void {
	$message = sprintf(
		/* translators: 1: Required PHP version, 2: Required WordPress version, 3: Current PHP version, 4: Current WordPress version */
		esc_html__( 'WesCar Health theme requires PHP %1$s+ and WordPress %2$s+. You are running PHP %3$s and WordPress %4$s. Please upgrade.', 'wescarhealth' ),
		WESCARHEALTH_MIN_PHP,
		WESCARHEALTH_MIN_WP,
		PHP_VERSION,
		get_bloginfo( 'version' )
	);

	printf(
		'<div class="notice notice-error"><p>%s</p></div>',
		wp_kses_post( $message )
	);
}

// Check requirements before loading theme.
if ( ! wescarhealth_check_requirements() ) {
	add_action( 'admin_notices', 'wescarhealth_requirements_notice' );
	return;
}

/**
 * Load theme includes.
 */
$wescarhealth_includes = [
	'/inc/setup.php',           // Theme setup.
	'/inc/enqueue.php',         // Asset enqueueing.
	'/inc/security.php',        // Security hardening.
	'/inc/template-functions.php', // Template helper functions.
	'/inc/template-hooks.php',  // Action/filter hooks.
	'/inc/block-patterns.php',  // Block patterns.
	'/inc/customizer.php',      // Customizer settings.
	'/inc/plugin-activation.php', // Bundled plugin activation.
];

foreach ( $wescarhealth_includes as $file ) {
	$filepath = WESCARHEALTH_DIR . $file;
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}
