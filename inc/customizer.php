<?php
/**
 * Theme Customizer
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
 * Register customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function wescarhealth_customize_register( WP_Customize_Manager $wp_customize ): void {
	// Add selective refresh for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			[
				'selector'        => '.site-header__title a',
				'render_callback' => 'wescarhealth_customize_partial_blogname',
			]
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			[
				'selector'        => '.site-header__description',
				'render_callback' => 'wescarhealth_customize_partial_blogdescription',
			]
		);
	}

	/*
	 * WesCar Health Settings Panel
	 */
	$wp_customize->add_panel(
		'wescarhealth_settings',
		[
			'title'       => esc_html__( 'WesCar Health Settings', 'wescarhealth' ),
			'description' => esc_html__( 'Customize theme-specific settings.', 'wescarhealth' ),
			'priority'    => 30,
		]
	);

	/*
	 * Header Settings Section
	 */
	$wp_customize->add_section(
		'wescarhealth_header_settings',
		[
			'title'    => esc_html__( 'Header Settings', 'wescarhealth' ),
			'panel'    => 'wescarhealth_settings',
			'priority' => 10,
		]
	);

	// Sticky Header.
	$wp_customize->add_setting(
		'wescarhealth_sticky_header',
		[
			'default'           => true,
			'sanitize_callback' => 'wescarhealth_sanitize_checkbox',
			'transport'         => 'refresh',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_sticky_header',
		[
			'label'   => esc_html__( 'Enable Sticky Header', 'wescarhealth' ),
			'section' => 'wescarhealth_header_settings',
			'type'    => 'checkbox',
		]
	);

	// Header CTA Button Text.
	$wp_customize->add_setting(
		'wescarhealth_header_cta_text',
		[
			'default'           => esc_html__( 'Book Appointment', 'wescarhealth' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_header_cta_text',
		[
			'label'   => esc_html__( 'Header CTA Button Text', 'wescarhealth' ),
			'section' => 'wescarhealth_header_settings',
			'type'    => 'text',
		]
	);

	// Header CTA Button URL.
	$wp_customize->add_setting(
		'wescarhealth_header_cta_url',
		[
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_header_cta_url',
		[
			'label'   => esc_html__( 'Header CTA Button URL', 'wescarhealth' ),
			'section' => 'wescarhealth_header_settings',
			'type'    => 'url',
		]
	);

	/*
	 * Footer Settings Section
	 */
	$wp_customize->add_section(
		'wescarhealth_footer_settings',
		[
			'title'    => esc_html__( 'Footer Settings', 'wescarhealth' ),
			'panel'    => 'wescarhealth_settings',
			'priority' => 20,
		]
	);

	// Footer Copyright Text.
	$wp_customize->add_setting(
		'wescarhealth_footer_copyright',
		[
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_footer_copyright',
		[
			'label'       => esc_html__( 'Copyright Text', 'wescarhealth' ),
			'description' => esc_html__( 'Use {year} for current year, {site} for site name.', 'wescarhealth' ),
			'section'     => 'wescarhealth_footer_settings',
			'type'        => 'textarea',
		]
	);

	/*
	 * Contact Information Section
	 */
	$wp_customize->add_section(
		'wescarhealth_contact_settings',
		[
			'title'    => esc_html__( 'Contact Information', 'wescarhealth' ),
			'panel'    => 'wescarhealth_settings',
			'priority' => 30,
		]
	);

	// Phone Number.
	$wp_customize->add_setting(
		'wescarhealth_phone',
		[
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_phone',
		[
			'label'   => esc_html__( 'Phone Number', 'wescarhealth' ),
			'section' => 'wescarhealth_contact_settings',
			'type'    => 'tel',
		]
	);

	// Email Address.
	$wp_customize->add_setting(
		'wescarhealth_email',
		[
			'default'           => '',
			'sanitize_callback' => 'sanitize_email',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_email',
		[
			'label'   => esc_html__( 'Email Address', 'wescarhealth' ),
			'section' => 'wescarhealth_contact_settings',
			'type'    => 'email',
		]
	);

	// Address.
	$wp_customize->add_setting(
		'wescarhealth_address',
		[
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		]
	);

	$wp_customize->add_control(
		'wescarhealth_address',
		[
			'label'   => esc_html__( 'Address', 'wescarhealth' ),
			'section' => 'wescarhealth_contact_settings',
			'type'    => 'textarea',
		]
	);

	/*
	 * Social Media Section
	 */
	$wp_customize->add_section(
		'wescarhealth_social_settings',
		[
			'title'    => esc_html__( 'Social Media', 'wescarhealth' ),
			'panel'    => 'wescarhealth_settings',
			'priority' => 40,
		]
	);

	$social_networks = [
		'facebook'  => esc_html__( 'Facebook URL', 'wescarhealth' ),
		'twitter'   => esc_html__( 'Twitter/X URL', 'wescarhealth' ),
		'instagram' => esc_html__( 'Instagram URL', 'wescarhealth' ),
		'linkedin'  => esc_html__( 'LinkedIn URL', 'wescarhealth' ),
		'youtube'   => esc_html__( 'YouTube URL', 'wescarhealth' ),
	];

	foreach ( $social_networks as $network => $label ) {
		$wp_customize->add_setting(
			"wescarhealth_social_{$network}",
			[
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'         => 'postMessage',
			]
		);

		$wp_customize->add_control(
			"wescarhealth_social_{$network}",
			[
				'label'   => $label,
				'section' => 'wescarhealth_social_settings',
				'type'    => 'url',
			]
		);
	}
}
add_action( 'customize_register', 'wescarhealth_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wescarhealth_customize_partial_blogname(): void {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wescarhealth_customize_partial_blogdescription(): void {
	bloginfo( 'description' );
}

/**
 * Sanitize checkbox values.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Sanitized value.
 */
function wescarhealth_sanitize_checkbox( $checked ): bool {
	return (bool) $checked;
}

/**
 * Enqueue customizer preview scripts.
 *
 * @return void
 */
function wescarhealth_customize_preview_js(): void {
	wp_enqueue_script(
		'wescarhealth-customizer',
		WESCARHEALTH_URI . '/assets/js/customizer.js',
		[ 'customize-preview' ],
		WESCARHEALTH_VERSION,
		true
	);
}
add_action( 'customize_preview_init', 'wescarhealth_customize_preview_js' );

/**
 * Get customizer setting with default fallback.
 *
 * @param string $setting Setting name.
 * @param mixed  $default Default value.
 * @return mixed Setting value.
 */
function wescarhealth_get_option( string $setting, $default = '' ) {
	return get_theme_mod( $setting, $default );
}

/**
 * Get footer copyright text with replacements.
 *
 * @return string Copyright text.
 */
function wescarhealth_get_copyright(): string {
	$copyright = wescarhealth_get_option( 'wescarhealth_footer_copyright' );

	if ( empty( $copyright ) ) {
		$copyright = sprintf(
			/* translators: 1: Current year, 2: Site name */
			esc_html__( '© %1$s %2$s. All rights reserved.', 'wescarhealth' ),
			date_i18n( 'Y' ),
			get_bloginfo( 'name' )
		);
	} else {
		$copyright = str_replace( '{year}', date_i18n( 'Y' ), $copyright );
		$copyright = str_replace( '{site}', get_bloginfo( 'name' ), $copyright );
	}

	return wp_kses_post( $copyright );
}

/**
 * Get social media links.
 *
 * @return array Social media links.
 */
function wescarhealth_get_social_links(): array {
	$networks = [ 'facebook', 'twitter', 'instagram', 'linkedin', 'youtube' ];
	$links    = [];

	foreach ( $networks as $network ) {
		$url = wescarhealth_get_option( "wescarhealth_social_{$network}" );
		if ( ! empty( $url ) ) {
			$links[ $network ] = esc_url( $url );
		}
	}

	return $links;
}
