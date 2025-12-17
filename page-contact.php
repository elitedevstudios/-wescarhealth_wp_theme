<?php
/**
 * Template Name: Contact Page
 * 
 * Contact page template for WesCarr Health Hub
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();

// Get content from plugin if available.
$booking = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_booking_url() : 'https://www.tebra.com/';
$phone   = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_phone() : '(888) 456-7890';
$phone_link = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_phone_link() : '+18884567890';
$email   = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_email() : 'info@wescarrhealth.com';
$hours   = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_hours() : '6:00 AM - Midnight, 7 Days a Week';
$socials = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_social_urls() : array();
?>

<main id="primary" class="site-main">

	<!-- Page Hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero__content">
				<span class="section__badge"><?php esc_html_e( 'Contact Us', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Get In', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Touch', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'Have questions? We\'re here to help. Reach out to our team and we\'ll get back to you as soon as possible.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="section">
		<div class="container">
			<div class="contact-grid">
				<!-- Contact Info -->
				<div class="contact-info animate-on-scroll">
					<h2 class="contact-info__title"><?php esc_html_e( 'Contact Information', 'wescarhealth' ); ?></h2>
					<p class="contact-info__description"><?php esc_html_e( 'Ready to schedule an appointment or have questions about our services? Here\'s how to reach us.', 'wescarhealth' ); ?></p>

					<div class="contact-info__items">
						<div class="contact-info__item">
							<div class="contact-info__icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
							</div>
							<div class="contact-info__content">
								<h3><?php esc_html_e( 'Phone', 'wescarhealth' ); ?></h3>
								<a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>
							</div>
						</div>

						<div class="contact-info__item">
							<div class="contact-info__icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
							</div>
							<div class="contact-info__content">
								<h3><?php esc_html_e( 'Email', 'wescarhealth' ); ?></h3>
								<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
							</div>
						</div>

						<div class="contact-info__item">
							<div class="contact-info__icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
							</div>
							<div class="contact-info__content">
								<h3><?php esc_html_e( 'Hours', 'wescarhealth' ); ?></h3>
								<p><?php echo esc_html( $hours ); ?></p>
							</div>
						</div>
					</div>

					<div class="contact-info__cta">
						<h3><?php esc_html_e( 'Ready to Book?', 'wescarhealth' ); ?></h3>
						<p><?php esc_html_e( 'Schedule your telehealth appointment online — it only takes a few minutes.', 'wescarhealth' ); ?></p>
						<a href="<?php echo esc_url( $booking ); ?>" class="button button--primary" target="_blank" rel="noopener noreferrer">
							<span class="button__text"><?php esc_html_e( 'Book Appointment', 'wescarhealth' ); ?></span>
							<span class="button__arrow">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
							</span>
						</a>
					</div>

					<div class="contact-info__social">
						<h3><?php esc_html_e( 'Follow Us', 'wescarhealth' ); ?></h3>
						<div class="contact-info__social-links">
							<a href="<?php echo esc_url( $socials['facebook'] ?? 'https://facebook.com' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
							</a>
							<a href="<?php echo esc_url( $socials['instagram'] ?? 'https://instagram.com' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
							</a>
							<a href="<?php echo esc_url( $socials['linkedin'] ?? 'https://linkedin.com' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
							</a>
						</div>
					</div>
				</div>

				<!-- Contact Image -->
				<div class="contact-image animate-on-scroll" data-delay="200">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/contact-doctor.jpg' ); ?>" alt="<?php esc_attr_e( 'Healthcare professional ready to help', 'wescarhealth' ); ?>">
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
