<?php
/**
 * Template Name: About Page
 * 
 * About page template for WesCarr Health Hub
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();

// Get content from plugin if available.
$booking = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_booking_url() : 'https://www.tebra.com/';
?>

<main id="primary" class="site-main">

	<!-- Page Hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero__content">
				<span class="section__badge"><?php esc_html_e( 'About Us', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Veteran-Led,', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Patient-Centered', 'wescarhealth' ); ?></em> <?php esc_html_e( 'Care', 'wescarhealth' ); ?></h1>
				<p class="page-hero__description"><?php esc_html_e( 'WesCarr Health Hub is a board-certified telehealth practice dedicated to making healthcare accessible, reliable, and compassionate.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Mission Section -->
	<section class="section">
		<div class="container">
			<div class="about-grid">
				<div class="about-grid__image animate-on-scroll">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mission-team.jpg' ); ?>" alt="<?php esc_attr_e( 'Diverse medical team working together', 'wescarhealth' ); ?>">
				</div>
				<div class="about-grid__content animate-on-scroll" data-delay="200">
					<h2 class="about-grid__title"><?php esc_html_e( 'Our Mission', 'wescarhealth' ); ?></h2>
					<p><?php esc_html_e( 'At WesCarr Health Hub, we believe that quality healthcare should be accessible to everyone, regardless of location or schedule. Our mission is to provide expert medical care through convenient telehealth services, eliminating barriers and putting patients first.', 'wescarhealth' ); ?></p>
					<p><?php esc_html_e( 'Founded by healthcare professionals with decades of combined clinical experience, we understand the challenges patients face in accessing timely, affordable care. That\'s why we\'ve built a practice focused on efficiency, transparency, and compassion.', 'wescarhealth' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Values Section -->
	<section class="section section--gray">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Our Values', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'What We Stand For', 'wescarhealth' ); ?></h2>
			</div>
			<div class="values-grid">
				<div class="value-card animate-on-scroll" data-delay="100">
					<div class="value-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
					</div>
					<h3 class="value-card__title"><?php esc_html_e( 'Compassion', 'wescarhealth' ); ?></h3>
					<p class="value-card__description"><?php esc_html_e( 'Every patient deserves to be treated with kindness, respect, and understanding. We listen first and care always.', 'wescarhealth' ); ?></p>
				</div>
				<div class="value-card animate-on-scroll" data-delay="200">
					<div class="value-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
					</div>
					<h3 class="value-card__title"><?php esc_html_e( 'Integrity', 'wescarhealth' ); ?></h3>
					<p class="value-card__description"><?php esc_html_e( 'We practice transparent, honest medicine. No hidden fees, no unnecessary treatments — just quality care you can trust.', 'wescarhealth' ); ?></p>
				</div>
				<div class="value-card animate-on-scroll" data-delay="300">
					<div class="value-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					</div>
					<h3 class="value-card__title"><?php esc_html_e( 'Accessibility', 'wescarhealth' ); ?></h3>
					<p class="value-card__description"><?php esc_html_e( 'Healthcare on your schedule. We offer extended hours and virtual visits so you can get care when and where you need it.', 'wescarhealth' ); ?></p>
				</div>
				<div class="value-card animate-on-scroll" data-delay="400">
					<div class="value-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
					</div>
					<h3 class="value-card__title"><?php esc_html_e( 'Excellence', 'wescarhealth' ); ?></h3>
					<p class="value-card__description"><?php esc_html_e( 'Board-certified providers delivering evidence-based care. We stay current with medical advances to serve you better.', 'wescarhealth' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Choose Us -->
	<section class="section">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Why WesCarr Health', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'What Sets Us Apart', 'wescarhealth' ); ?></h2>
			</div>
			<div class="features-grid">
				<div class="feature-card animate-on-scroll" data-delay="100">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Same-Day Clearances', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Need surgical clearance fast? We offer same-day turnaround for pre-operative evaluations.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="200">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'HIPAA Compliant', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Your privacy matters. Our platform meets all federal security and privacy requirements.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="300">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Veteran-Led Practice', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Founded by healthcare professionals who served, bringing discipline and dedication to patient care.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="400">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Extended Hours', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Available 6am to Midnight, 7 days a week. Healthcare that fits your life, not the other way around.', 'wescarhealth' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Ready to Experience Better Healthcare?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Schedule your first telehealth appointment and see the WesCarr Health difference.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="<?php echo esc_url( $booking ); ?>" class="button button--accent button--lg" target="_blank" rel="noopener noreferrer">
					<span class="button__text"><?php esc_html_e( 'Book Your Appointment', 'wescarhealth' ); ?></span>
					<span class="button__arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</span>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
