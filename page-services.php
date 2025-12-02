<?php
/**
 * Template Name: Services Page
 * 
 * Services page template for WesCarr Health Hub
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
				<span class="section__badge"><?php esc_html_e( 'Our Services', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Comprehensive', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Telehealth Services', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'From surgical clearance to ongoing wellness care, we provide expert medical services from the comfort of your home.', 'wescarhealth' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Surgical Clearance -->
	<section class="section" id="surgical-clearance">
		<div class="container">
			<div class="service-detail">
				<div class="service-detail__content animate-on-scroll">
					<div class="service-detail__badge">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
						<span><?php esc_html_e( 'Surgical Clearance', 'wescarhealth' ); ?></span>
					</div>
					<h2 class="service-detail__title"><?php esc_html_e( 'Pre-Operative Medical Clearance', 'wescarhealth' ); ?></h2>
					<p class="service-detail__description"><?php esc_html_e( 'Get cleared for surgery quickly and conveniently. Our board-certified providers conduct thorough pre-operative evaluations and provide same-day documentation to your surgeon.', 'wescarhealth' ); ?></p>
					
					<div class="service-detail__services">
						<h3><?php esc_html_e( 'Services Include:', 'wescarhealth' ); ?></h3>
						<ul>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Cosmetic Surgery Clearance', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Breast augmentation, liposuction, facelifts, tummy tucks, and more', 'wescarhealth' ); ?></span>
								</div>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Bariatric Surgery Clearance', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Gastric bypass, sleeve gastrectomy, lap band procedures', 'wescarhealth' ); ?></span>
								</div>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Dental Surgery Clearance', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Wisdom teeth extraction, dental implants, oral surgery', 'wescarhealth' ); ?></span>
								</div>
							</li>
						</ul>
					</div>

					<div class="service-detail__features">
						<div class="service-detail__feature">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
							<span><?php esc_html_e( 'Same-day turnaround available', 'wescarhealth' ); ?></span>
						</div>
						<div class="service-detail__feature">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
							<span><?php esc_html_e( 'Direct communication with your surgeon', 'wescarhealth' ); ?></span>
						</div>
					</div>

					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Schedule Clearance', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
				<div class="service-detail__image animate-on-scroll" data-delay="200">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/surgical-clearance.jpg' ); ?>" alt="<?php esc_attr_e( 'Surgical clearance consultation', 'wescarhealth' ); ?>">
				</div>
			</div>
		</div>
	</section>

	<!-- Hormone & Wellness -->
	<section class="section section--gray" id="hormone-wellness">
		<div class="container">
			<div class="service-detail service-detail--reverse">
				<div class="service-detail__content animate-on-scroll">
					<div class="service-detail__badge service-detail__badge--accent">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
						<span><?php esc_html_e( 'Hormone & Wellness', 'wescarhealth' ); ?></span>
					</div>
					<h2 class="service-detail__title"><?php esc_html_e( 'Hormone Therapy & Wellness Care', 'wescarhealth' ); ?></h2>
					<p class="service-detail__description"><?php esc_html_e( 'Optimize your health with personalized hormone therapy and wellness management. Our providers specialize in helping you feel your best at every stage of life.', 'wescarhealth' ); ?></p>
					
					<div class="service-detail__services">
						<h3><?php esc_html_e( 'Services Include:', 'wescarhealth' ); ?></h3>
						<ul>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Hormone Replacement Therapy (HRT)', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Comprehensive hormone assessment and personalized treatment plans', 'wescarhealth' ); ?></span>
								</div>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Menopause & Perimenopause Management', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Relief from hot flashes, mood changes, sleep issues, and more', 'wescarhealth' ); ?></span>
								</div>
							</li>
						</ul>
					</div>

					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Schedule Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
				<div class="service-detail__image animate-on-scroll" data-delay="200">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hormone-therapy.jpg' ); ?>" alt="<?php esc_attr_e( 'Hormone therapy consultation', 'wescarhealth' ); ?>">
				</div>
			</div>
		</div>
	</section>

	<!-- Urgent Care -->
	<section class="section" id="urgent-care">
		<div class="container">
			<div class="service-detail">
				<div class="service-detail__content animate-on-scroll">
					<div class="service-detail__badge service-detail__badge--warning">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
						<span><?php esc_html_e( 'Urgent Care', 'wescarhealth' ); ?></span>
					</div>
					<h2 class="service-detail__title"><?php esc_html_e( 'On-Demand Telehealth Visits', 'wescarhealth' ); ?></h2>
					<p class="service-detail__description"><?php esc_html_e( 'Skip the waiting room. Get same-day virtual care for non-emergent conditions with e-prescribing available to your preferred pharmacy.', 'wescarhealth' ); ?></p>
					
					<div class="service-detail__services">
						<h3><?php esc_html_e( 'We Treat:', 'wescarhealth' ); ?></h3>
						<ul>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Minor Illness Treatment', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Cold, flu, sinus infections, allergies, UTIs, skin conditions', 'wescarhealth' ); ?></span>
								</div>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'Prescription Refills & Follow-up', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Medication management and ongoing care coordination', 'wescarhealth' ); ?></span>
								</div>
							</li>
						</ul>
					</div>

					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Get Care Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
				<div class="service-detail__image animate-on-scroll" data-delay="200">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/telehealth-visit.jpg' ); ?>" alt="<?php esc_attr_e( 'Urgent care telehealth visit', 'wescarhealth' ); ?>">
				</div>
			</div>
		</div>
	</section>

	<!-- Preventive & Sexual Health -->
	<section class="section section--gray" id="preventive-health">
		<div class="container">
			<div class="service-detail service-detail--reverse">
				<div class="service-detail__content animate-on-scroll">
					<div class="service-detail__badge service-detail__badge--success">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
						<span><?php esc_html_e( 'Preventive & Sexual Health', 'wescarhealth' ); ?></span>
					</div>
					<h2 class="service-detail__title"><?php esc_html_e( 'Confidential Health Services', 'wescarhealth' ); ?></h2>
					<p class="service-detail__description"><?php esc_html_e( 'Your sexual health matters. We provide discreet, professional care in a judgment-free environment. All consultations are completely confidential.', 'wescarhealth' ); ?></p>
					
					<div class="service-detail__services">
						<h3><?php esc_html_e( 'Services Include:', 'wescarhealth' ); ?></h3>
						<ul>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'STD Testing & Management', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'Confidential testing, results review, and treatment if needed', 'wescarhealth' ); ?></span>
								</div>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<div>
									<strong><?php esc_html_e( 'PrEP Care & Monitoring', 'wescarhealth' ); ?></strong>
									<span><?php esc_html_e( 'HIV pre-exposure prophylaxis eligibility, prescriptions, and ongoing monitoring', 'wescarhealth' ); ?></span>
								</div>
							</li>
						</ul>
					</div>

					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Schedule Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
				<div class="service-detail__image animate-on-scroll" data-delay="200">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/confidential-health-consultation.jpg' ); ?>" alt="<?php esc_attr_e( 'Confidential health consultation', 'wescarhealth' ); ?>">
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Ready to Get Started?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Book your telehealth appointment today and experience healthcare on your terms.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="https://www.tebra.com/" class="button button--accent button--lg" target="_blank" rel="noopener noreferrer">
					<span class="button__text"><?php esc_html_e( 'Book Your Appointment', 'wescarhealth' ); ?></span>
					<span class="button__arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</span>
				</a>
				<a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="button button--outline-light">
					<?php esc_html_e( 'View Pricing', 'wescarhealth' ); ?>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
