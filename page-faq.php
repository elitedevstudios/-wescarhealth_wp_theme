<?php
/**
 * Template Name: FAQ Page
 * 
 * FAQ page template for WesCarr Health Hub
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
				<span class="section__badge"><?php esc_html_e( 'FAQs', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Frequently Asked', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Questions', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'Find answers to common questions about our telehealth services, pricing, and how we can help you.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- General Questions -->
	<section class="section">
		<div class="container">
			<div class="faq-category animate-on-scroll">
				<h2 class="faq-category__title"><?php esc_html_e( 'General Questions', 'wescarhealth' ); ?></h2>
				<div class="faq-list">
					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What is telehealth and how does it work?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'Telehealth allows you to have a medical consultation with a healthcare provider through video chat from the comfort of your home. You\'ll receive the same quality care as an in-person visit, including diagnosis, treatment recommendations, and prescriptions when appropriate.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What do I need for a telehealth visit?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'You\'ll need a smartphone, tablet, or computer with a camera and microphone, plus a stable internet connection. We recommend finding a quiet, private space for your appointment.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What are your hours of operation?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We are available from 6:00 AM to Midnight, 7 days a week. This allows us to accommodate various schedules and provide care when you need it most.', 'wescarhealth' ); ?>
						</div>
					</details>
				</div>
			</div>
		</div>
	</section>

	<!-- Surgical Clearance -->
	<section class="section section--gray">
		<div class="container">
			<div class="faq-category animate-on-scroll">
				<h2 class="faq-category__title"><?php esc_html_e( 'Surgical Clearance', 'wescarhealth' ); ?></h2>
				<div class="faq-list">
					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What is surgical clearance?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'Surgical clearance is a pre-operative medical evaluation to ensure you\'re healthy enough for surgery. We review your medical history, current medications, and may order lab tests to identify any potential risks.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'How quickly can I get cleared for surgery?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We offer same-day turnaround for most surgical clearances. Once your evaluation is complete and any required lab work is reviewed, we\'ll send documentation directly to your surgeon.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What types of surgery do you provide clearance for?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We provide clearance for cosmetic surgery (breast augmentation, liposuction, facelifts, tummy tucks), bariatric surgery (gastric bypass, sleeve gastrectomy), and dental surgery (wisdom teeth, implants, oral surgery).', 'wescarhealth' ); ?>
						</div>
					</details>
				</div>
			</div>
		</div>
	</section>

	<!-- Billing & Insurance -->
	<section class="section">
		<div class="container">
			<div class="faq-category animate-on-scroll">
				<h2 class="faq-category__title"><?php esc_html_e( 'Billing & Insurance', 'wescarhealth' ); ?></h2>
				<div class="faq-list">
					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'Do you accept insurance?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We are currently a self-pay practice and do not accept insurance. However, we provide detailed receipts that you may submit to your insurance for potential out-of-network reimbursement.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What payment methods do you accept?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We accept all major credit cards (Visa, MasterCard, American Express, Discover), debit cards, and HSA/FSA cards. Payment is collected at the time of booking.', 'wescarhealth' ); ?>
						</div>
					</details>

					<details class="faq-item">
						<summary class="faq-item__question">
							<?php esc_html_e( 'What is your cancellation policy?', 'wescarhealth' ); ?>
							<span class="faq-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
						</summary>
						<div class="faq-item__answer">
							<?php esc_html_e( 'We require 24 hours notice for cancellations. Appointments cancelled with less than 24 hours notice may be subject to a cancellation fee.', 'wescarhealth' ); ?>
						</div>
					</details>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Still Have Questions?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Our team is here to help. Contact us or book an appointment to speak with a provider.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="<?php echo esc_url( $booking ); ?>" class="button button--accent button--lg" target="_blank" rel="noopener noreferrer">
					<span class="button__text"><?php esc_html_e( 'Book Appointment', 'wescarhealth' ); ?></span>
					<span class="button__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
				</a>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--outline-light">
					<?php esc_html_e( 'Contact Us', 'wescarhealth' ); ?>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
