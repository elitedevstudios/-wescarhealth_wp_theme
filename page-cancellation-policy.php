<?php
/**
 * Template Name: Cancellation Policy Page
 * 
 * Cancellation policy page template for WesCar Health
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">

	<!-- Page Hero -->
	<section class="page-hero">
		<div class="container">
			<div class="page-hero__content">
				<span class="section__badge"><?php esc_html_e( 'Legal', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Cancellation', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Policy', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'Our policy regarding appointment and subscription cancellations.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Cancellation Policy Content -->
	<section class="section legal-content">
		<div class="container container--narrow">
			
			<div class="legal-content__meta animate-on-scroll">
				<p class="legal-content__updated"><?php esc_html_e( 'Effective Date: January 1, 2026', 'wescarhealth' ); ?></p>
			</div>

			<!-- Introduction -->
			<div class="legal-content__section animate-on-scroll">
				<p><?php esc_html_e( 'At WesCar Health, we understand that circumstances can change, and flexibility is essential. Our cancellation policy is designed to be fair to both our clients and our service providers. We kindly ask you to read and understand our policy regarding appointment and subscription cancellations.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Subscription Cancellation -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Subscription Cancellation', 'wescarhealth' ); ?></h2>
				<ul class="legal-content__list">
					<li><strong><?php esc_html_e( 'Notice Period:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Subscribers are required to give a notice of at least 7 days prior to their next billing cycle for cancellation of their subscription. This can be done through our contact form or automatically through the patient portal.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Method of Cancellation:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Subscribers can cancel their subscription through their account dashboard on our website or by contacting our customer support team.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Refunds:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'No refunds will be issued for cancellations made within 7 days of the next billing cycle. For cancellations made with more than 7 days\' notice, a prorated refund will be provided based on the remaining days in the current billing cycle.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Effect of Cancellation:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Upon cancellation, subscribers will continue to have access to WesCar Health services until the end of their current billing cycle.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Telehealth Fee:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Your initial telehealth fee will not be refunded if your medical profile has been reviewed by a doctor. Medical reviews take your provider a significant amount of time and as such we cannot initiate a refund for a visit that has been completed.', 'wescarhealth' ); ?></li>
				</ul>
			</div>

			<!-- Product Cancellation -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Product Cancellation', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'Due to the sensitive nature of medical products and the paramount importance of maintaining their sterility, we are unable to accept returns of any medical products once they have been shipped. This policy is in place to protect our customers and ensure that all products received are safe, sterile, and have not been compromised in any way.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Appointment Cancellation -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Appointment Cancellation', 'wescarhealth' ); ?></h2>
				<ul class="legal-content__list">
					<li><strong><?php esc_html_e( 'Rescheduling:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'If you need to reschedule an appointment, please do so at least 24 hours in advance.', 'wescarhealth' ); ?></li>
					<li><strong><?php esc_html_e( 'Late Cancellations and No-Shows:', 'wescarhealth' ); ?></strong> <?php esc_html_e( 'Appointments canceled less than 24 hours before the scheduled time or missed appointments without notice will incur a fee of $25 per visit charged to the card on file.', 'wescarhealth' ); ?></li>
				</ul>
			</div>

			<!-- Exceptions -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Exceptions', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'We understand that emergencies happen. If you need to cancel due to an emergency, please contact our customer support team to discuss your specific situation.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Changes to Policy -->
			<div class="legal-content__section animate-on-scroll">
				<h2 class="legal-content__heading"><?php esc_html_e( 'Changes to Policy', 'wescarhealth' ); ?></h2>
				<p><?php esc_html_e( 'WesCar Health reserves the right to modify this cancellation policy at any time. Changes will be effective immediately upon posting on our website.', 'wescarhealth' ); ?></p>
			</div>

			<!-- Contact -->
			<div class="legal-content__section legal-content__section--highlight animate-on-scroll">
				<h3 class="legal-content__subheading"><?php esc_html_e( 'Questions?', 'wescarhealth' ); ?></h3>
				<p><?php esc_html_e( 'For any questions or assistance regarding this policy, please contact our customer support.', 'wescarhealth' ); ?></p>
			</div>

		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Need to Make Changes?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Contact our support team if you need to cancel or reschedule.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button button--accent button--lg">
					<span class="button__text"><?php esc_html_e( 'Contact Support', 'wescarhealth' ); ?></span>
					<span class="button__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></span>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
