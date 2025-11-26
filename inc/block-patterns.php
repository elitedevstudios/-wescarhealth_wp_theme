<?php
/**
 * Block Patterns
 *
 * Register custom block patterns for the theme.
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
 * Register block pattern categories.
 *
 * @return void
 */
function wescarhealth_register_block_pattern_categories(): void {
	register_block_pattern_category(
		'wescarhealth-hero',
		[
			'label'       => esc_html__( 'Hero Sections', 'wescarhealth' ),
			'description' => esc_html__( 'Hero sections for page headers.', 'wescarhealth' ),
		]
	);

	register_block_pattern_category(
		'wescarhealth-features',
		[
			'label'       => esc_html__( 'Features', 'wescarhealth' ),
			'description' => esc_html__( 'Feature and service sections.', 'wescarhealth' ),
		]
	);

	register_block_pattern_category(
		'wescarhealth-cta',
		[
			'label'       => esc_html__( 'Call to Action', 'wescarhealth' ),
			'description' => esc_html__( 'Call to action sections.', 'wescarhealth' ),
		]
	);

	register_block_pattern_category(
		'wescarhealth-testimonials',
		[
			'label'       => esc_html__( 'Testimonials', 'wescarhealth' ),
			'description' => esc_html__( 'Testimonial and review sections.', 'wescarhealth' ),
		]
	);

	register_block_pattern_category(
		'wescarhealth-team',
		[
			'label'       => esc_html__( 'Team', 'wescarhealth' ),
			'description' => esc_html__( 'Team member sections.', 'wescarhealth' ),
		]
	);

	register_block_pattern_category(
		'wescarhealth-contact',
		[
			'label'       => esc_html__( 'Contact', 'wescarhealth' ),
			'description' => esc_html__( 'Contact information sections.', 'wescarhealth' ),
		]
	);
}
add_action( 'init', 'wescarhealth_register_block_pattern_categories' );

/**
 * Register block patterns.
 *
 * @return void
 */
function wescarhealth_register_block_patterns(): void {
	// Hero Section Pattern.
	register_block_pattern(
		'wescarhealth/hero-section',
		[
			'title'       => esc_html__( 'Hero Section', 'wescarhealth' ),
			'description' => esc_html__( 'A hero section with heading, text, and call-to-action buttons.', 'wescarhealth' ),
			'categories'  => [ 'wescarhealth-hero', 'featured' ],
			'keywords'    => [ 'hero', 'header', 'banner', 'cta' ],
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"4xl"} -->
<h1 class="wp-block-heading has-text-align-center has-4-xl-font-size">' . esc_html__( 'Your Health, Our Priority', 'wescarhealth' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"lg"} -->
<p class="has-text-align-center has-lg-font-size">' . esc_html__( 'Providing compassionate, comprehensive healthcare services for you and your family. Schedule your appointment today.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--8)">
<!-- wp:button {"backgroundColor":"white","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button">' . esc_html__( 'Book Appointment', 'wescarhealth' ) . '</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-link-color wp-element-button" style="color:var(--wp--preset--color--white)">' . esc_html__( 'Learn More', 'wescarhealth' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
		]
	);

	// Services Grid Pattern.
	register_block_pattern(
		'wescarhealth/services-grid',
		[
			'title'       => esc_html__( 'Services Grid', 'wescarhealth' ),
			'description' => esc_html__( 'A grid of healthcare services.', 'wescarhealth' ),
			'categories'  => [ 'wescarhealth-features' ],
			'keywords'    => [ 'services', 'features', 'grid', 'cards' ],
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-50-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size">' . esc_html__( 'Our Services', 'wescarhealth' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--10)">' . esc_html__( 'Comprehensive healthcare services tailored to your needs.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"8px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">' . esc_html__( 'Primary Care', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Comprehensive primary care services for patients of all ages, including preventive care and chronic disease management.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"8px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">' . esc_html__( 'Specialty Care', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Access to specialized medical services and expert consultations for complex health conditions.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"8px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">' . esc_html__( 'Urgent Care', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Walk-in urgent care services for non-emergency medical needs with minimal wait times.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
		]
	);

	// CTA Section Pattern.
	register_block_pattern(
		'wescarhealth/cta-section',
		[
			'title'       => esc_html__( 'Call to Action', 'wescarhealth' ),
			'description' => esc_html__( 'A call-to-action section with background color.', 'wescarhealth' ),
			'categories'  => [ 'wescarhealth-cta' ],
			'keywords'    => [ 'cta', 'call to action', 'button' ],
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"backgroundColor":"accent","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--12);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"textAlign":"center","fontSize":"2xl"} -->
<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size">' . esc_html__( 'Ready to Take Control of Your Health?', 'wescarhealth' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Schedule your appointment today and take the first step towards better health.', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">
<!-- wp:button {"backgroundColor":"white","textColor":"accent"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-white-background-color has-text-color has-background wp-element-button">' . esc_html__( 'Schedule Now', 'wescarhealth' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
		]
	);

	// Contact Info Pattern.
	register_block_pattern(
		'wescarhealth/contact-info',
		[
			'title'       => esc_html__( 'Contact Information', 'wescarhealth' ),
			'description' => esc_html__( 'Contact information with address, phone, and hours.', 'wescarhealth' ),
			'categories'  => [ 'wescarhealth-contact' ],
			'keywords'    => [ 'contact', 'address', 'phone', 'hours' ],
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--16);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"textAlign":"center","fontSize":"3xl"} -->
<h2 class="wp-block-heading has-text-align-center has-3-xl-font-size">' . esc_html__( 'Contact Us', 'wescarhealth' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"},"blockGap":{"left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--10)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">' . esc_html__( 'Address', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>123 Healthcare Drive<br>Medical City, MC 12345</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">' . esc_html__( 'Phone', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Main:', 'wescarhealth' ) . ' (555) 123-4567<br>' . esc_html__( 'Fax:', 'wescarhealth' ) . ' (555) 123-4568</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">' . esc_html__( 'Hours', 'wescarhealth' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Mon-Fri: 8am - 6pm', 'wescarhealth' ) . '<br>' . esc_html__( 'Sat: 9am - 1pm', 'wescarhealth' ) . '<br>' . esc_html__( 'Sun: Closed', 'wescarhealth' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
		]
	);
}
add_action( 'init', 'wescarhealth_register_block_patterns' );
