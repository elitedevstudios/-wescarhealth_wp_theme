<?php
/**
 * Template Name: Pricing Page
 * 
 * Pricing page template for WesCarr Health Hub
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
				<span class="section__badge"><?php esc_html_e( 'Transparent Pricing', 'wescarhealth' ); ?></span>
				<h1 class="page-hero__title"><?php esc_html_e( 'Simple, Affordable', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Telehealth Care', 'wescarhealth' ); ?></em></h1>
				<p class="page-hero__description"><?php esc_html_e( 'No hidden fees. No insurance hassles. Just quality healthcare at prices you can understand.', 'wescarhealth' ); ?></p>
				<div class="page-hero__notice">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
					<span><?php esc_html_e( 'Currently Self-Pay Only — We do not accept insurance at this time.', 'wescarhealth' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- Surgical Clearance Pricing -->
	<section class="section" id="surgical-clearance">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Surgical Clearance', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Pre-Operative Evaluations', 'wescarhealth' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'Fast, reliable clearance documentation for your upcoming surgery. Same-day turnaround available.', 'wescarhealth' ); ?></p>
			</div>

			<div class="pricing-grid">
				<!-- Cosmetic Surgery -->
				<div class="pricing-card animate-on-scroll" data-delay="100">
					<div class="pricing-card__header">
						<div class="pricing-card__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Cosmetic Surgery Clearance', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Plastic & Aesthetic Procedures', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">149</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Comprehensive health evaluation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Lab & diagnostic coordination', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Clearance documentation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Direct surgeon communication', 'wescarhealth' ); ?>
						</li>
					</ul>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>

				<!-- Bariatric Surgery -->
				<div class="pricing-card pricing-card--featured animate-on-scroll" data-delay="200">
					<div class="pricing-card__badge"><?php esc_html_e( 'Most Popular', 'wescarhealth' ); ?></div>
					<div class="pricing-card__header">
						<div class="pricing-card__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Bariatric Surgery Clearance', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Weight Loss Surgery', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">199</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Comprehensive health evaluation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Cardiac & metabolic screening', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Lab & diagnostic coordination', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Clearance documentation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Direct surgeon communication', 'wescarhealth' ); ?>
						</li>
					</ul>
					<a href="https://www.tebra.com/" class="button button--accent" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>

				<!-- Dental Surgery -->
				<div class="pricing-card animate-on-scroll" data-delay="300">
					<div class="pricing-card__header">
						<div class="pricing-card__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Dental Surgery Clearance', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Oral & Maxillofacial Procedures', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">129</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Comprehensive health evaluation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Medication review', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Clearance documentation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Direct dentist communication', 'wescarhealth' ); ?>
						</li>
					</ul>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Hormone & Wellness Pricing -->
	<section class="section section--gray" id="hormone-wellness">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Hormone & Wellness', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Hormone Therapy & Wellness Care', 'wescarhealth' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'Evidence-based hormone optimization and wellness management for men and women.', 'wescarhealth' ); ?></p>
			</div>

			<div class="pricing-grid pricing-grid--2col">
				<!-- HRT -->
				<div class="pricing-card animate-on-scroll" data-delay="100">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--accent">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Hormone Replacement Therapy', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Initial Consultation', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">249</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Comprehensive hormone assessment', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Lab work review & ordering', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Personalized treatment plan', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Prescription management', 'wescarhealth' ); ?>
						</li>
					</ul>
					<div class="pricing-card__note">
						<strong><?php esc_html_e( 'Follow-up visits:', 'wescarhealth' ); ?></strong> $149
					</div>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>

				<!-- Menopause Management -->
				<div class="pricing-card animate-on-scroll" data-delay="200">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--accent">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Menopause & Perimenopause', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Management & Support', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">199</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Symptom evaluation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Hormone level testing', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Treatment options discussion', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Lifestyle recommendations', 'wescarhealth' ); ?>
						</li>
					</ul>
					<div class="pricing-card__note">
						<strong><?php esc_html_e( 'Follow-up visits:', 'wescarhealth' ); ?></strong> $99
					</div>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Urgent Care Pricing -->
	<section class="section" id="urgent-care">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Urgent Care', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'On-Demand Telehealth Visits', 'wescarhealth' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'Same-day virtual visits for non-emergent conditions with e-prescribing available.', 'wescarhealth' ); ?></p>
			</div>

			<div class="pricing-grid pricing-grid--2col">
				<!-- Minor Illness -->
				<div class="pricing-card animate-on-scroll" data-delay="100">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--warning">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Minor Illness Treatment', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Cold, Flu, Infections, Allergies', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">75</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Same-day virtual visit', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Symptom evaluation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Treatment recommendations', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'E-prescriptions when appropriate', 'wescarhealth' ); ?>
						</li>
					</ul>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>

				<!-- Prescription Refills -->
				<div class="pricing-card animate-on-scroll" data-delay="200">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--warning">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'Prescription Refills', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Medication Management & Follow-up', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">49</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Medication review', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Refill authorization', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Side effect assessment', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'E-prescriptions sent to pharmacy', 'wescarhealth' ); ?>
						</li>
					</ul>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Preventive & Sexual Health Pricing -->
	<section class="section section--gray" id="preventive-health">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Preventive & Sexual Health', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Confidential Health Services', 'wescarhealth' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'Discreet, professional care for your sexual health needs.', 'wescarhealth' ); ?></p>
			</div>

			<div class="pricing-grid pricing-grid--2col">
				<!-- STD Testing -->
				<div class="pricing-card animate-on-scroll" data-delay="100">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--success">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'STD Testing & Management', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'Guidance & Treatment', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">89</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Confidential consultation', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Lab test ordering', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Results review', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Treatment if needed', 'wescarhealth' ); ?>
						</li>
					</ul>
					<div class="pricing-card__note">
						<?php esc_html_e( 'Lab fees not included', 'wescarhealth' ); ?>
					</div>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>

				<!-- PrEP -->
				<div class="pricing-card animate-on-scroll" data-delay="200">
					<div class="pricing-card__header">
						<div class="pricing-card__icon pricing-card__icon--success">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
						</div>
						<h3 class="pricing-card__title"><?php esc_html_e( 'PrEP Care & Monitoring', 'wescarhealth' ); ?></h3>
						<p class="pricing-card__subtitle"><?php esc_html_e( 'HIV Pre-Exposure Prophylaxis', 'wescarhealth' ); ?></p>
					</div>
					<div class="pricing-card__price">
						<span class="pricing-card__currency">$</span>
						<span class="pricing-card__amount">149</span>
					</div>
					<ul class="pricing-card__features">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'PrEP eligibility assessment', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Required lab work coordination', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Prescription management', 'wescarhealth' ); ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							<?php esc_html_e( 'Ongoing monitoring visits', 'wescarhealth' ); ?>
						</li>
					</ul>
					<div class="pricing-card__note">
						<strong><?php esc_html_e( 'Follow-up visits:', 'wescarhealth' ); ?></strong> $79
					</div>
					<a href="https://www.tebra.com/" class="button button--primary" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Book Consultation', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ Section -->
	<section class="section" id="pricing-faq">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Questions', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Pricing FAQs', 'wescarhealth' ); ?></h2>
			</div>

			<div class="faq-list">
				<details class="faq-item animate-on-scroll" data-delay="100">
					<summary class="faq-item__question">
						<?php esc_html_e( 'Do you accept insurance?', 'wescarhealth' ); ?>
						<span class="faq-item__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
						</span>
					</summary>
					<div class="faq-item__answer">
						<?php esc_html_e( 'We are currently a self-pay practice and do not accept insurance. However, we provide detailed receipts that you may submit to your insurance company for potential reimbursement depending on your plan\'s out-of-network benefits.', 'wescarhealth' ); ?>
					</div>
				</details>

				<details class="faq-item animate-on-scroll" data-delay="200">
					<summary class="faq-item__question">
						<?php esc_html_e( 'What payment methods do you accept?', 'wescarhealth' ); ?>
						<span class="faq-item__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
						</span>
					</summary>
					<div class="faq-item__answer">
						<?php esc_html_e( 'We accept all major credit cards (Visa, MasterCard, American Express, Discover), debit cards, and HSA/FSA cards. Payment is collected at the time of booking.', 'wescarhealth' ); ?>
					</div>
				</details>

				<details class="faq-item animate-on-scroll" data-delay="300">
					<summary class="faq-item__question">
						<?php esc_html_e( 'Are lab fees included in the pricing?', 'wescarhealth' ); ?>
						<span class="faq-item__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
						</span>
					</summary>
					<div class="faq-item__answer">
						<?php esc_html_e( 'Lab fees are separate from our consultation fees. We work with major lab networks and can help you find affordable testing options. Many labs offer self-pay discounts.', 'wescarhealth' ); ?>
					</div>
				</details>

				<details class="faq-item animate-on-scroll" data-delay="400">
					<summary class="faq-item__question">
						<?php esc_html_e( 'What is your cancellation policy?', 'wescarhealth' ); ?>
						<span class="faq-item__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
						</span>
					</summary>
					<div class="faq-item__answer">
						<?php esc_html_e( 'We require 24 hours notice for cancellations. Appointments cancelled with less than 24 hours notice may be subject to a cancellation fee. No-shows may be charged the full appointment fee.', 'wescarhealth' ); ?>
					</div>
				</details>
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Ready to Get Started?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Book your telehealth appointment today. No insurance needed, no hidden fees.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="https://www.tebra.com/" class="button button--accent button--lg" target="_blank" rel="noopener noreferrer">
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
