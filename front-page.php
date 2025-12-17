<?php
/**
 * Front Page Template - WesCarr Health Hub
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">

	<!-- Hero Section -->
	<section class="hero">
		<div class="hero__container">
			<div class="hero__content">
				<span class="hero__badge">
					<?php esc_html_e( 'Telehealth Made Simple', 'wescarhealth' ); ?>
				</span>
				<h1 class="hero__title">
					<?php esc_html_e( 'Your Trusted Partner in', 'wescarhealth' ); ?>
					<em><?php esc_html_e( 'Modern Telehealth', 'wescarhealth' ); ?></em>
					<?php esc_html_e( 'Care', 'wescarhealth' ); ?>
				</h1>
				<p class="hero__description">
					<?php esc_html_e( 'Expert surgical clearance, hormone therapy, urgent care, and preventive health — all from the comfort of your home.', 'wescarhealth' ); ?>
				</p>
				<div class="hero__actions">
					<a href="https://www.tebra.com/" class="button button--primary button--lg" target="_blank" rel="noopener noreferrer">
						<span class="button__text"><?php esc_html_e( 'Schedule Your Appointment', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
					<a href="#services" class="button button--secondary">
						<?php esc_html_e( 'View Our Services', 'wescarhealth' ); ?>
					</a>
				</div>
				<div class="hero__trust">
					<div class="hero__trust-avatars">
						<img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=80&h=80&fit=crop&crop=face" alt="" class="hero__trust-avatar">
						<img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=80&h=80&fit=crop&crop=face" alt="" class="hero__trust-avatar">
						<img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=80&h=80&fit=crop&crop=face" alt="" class="hero__trust-avatar">
					</div>
					<div class="hero__trust-content">
						<div class="hero__trust-rating">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
							<span>5.0</span>
						</div>
						<span class="hero__trust-text"><?php esc_html_e( 'Trusted by', 'wescarhealth' ); ?> <strong><?php esc_html_e( '500+ patients', 'wescarhealth' ); ?></strong></span>
					</div>
				</div>
			</div>
			<div class="hero__media">
				<div class="hero__image-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-image.png' ); ?>" alt="<?php esc_attr_e( 'Healthcare professional providing telehealth consultation', 'wescarhealth' ); ?>" class="hero__image">
				</div>
				<div class="hero__floating-card hero__floating-card--phone">
					<div class="hero__floating-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					</div>
					<div class="hero__floating-content">
						<span class="hero__floating-label"><?php esc_html_e( 'Call Us', 'wescarhealth' ); ?></span>
						<span class="hero__floating-value">(888) 456-7890</span>
					</div>
				</div>
				<div class="hero__floating-card hero__floating-card--hours">
					<div class="hero__floating-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					</div>
					<div class="hero__floating-content">
						<span class="hero__floating-label"><?php esc_html_e( 'Available', 'wescarhealth' ); ?></span>
						<span class="hero__floating-value"><?php esc_html_e( '6am - Midnight', 'wescarhealth' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Section -->
	<section class="section" id="about">
		<div class="container">
			<div class="about">
				<div class="about__image-wrapper animate-on-scroll">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-team.jpg' ); ?>" alt="<?php esc_attr_e( 'WesCarr Health team providing care', 'wescarhealth' ); ?>" class="about__image">
				</div>
				<div class="about__content animate-on-scroll" data-delay="200">
					<span class="section__badge"><?php esc_html_e( 'About Us', 'wescarhealth' ); ?></span>
					<h2 class="about__title"><?php esc_html_e( 'Delivering Medical Excellence With A Personal Touch', 'wescarhealth' ); ?></h2>
					<p class="about__description">
						<?php esc_html_e( 'WesCarr Health Hub is a veteran-led, board-certified telehealth practice dedicated to making healthcare accessible, reliable, and patient-centered. Our providers bring decades of combined experience in clinical practice, surgical support, and wellness care.', 'wescarhealth' ); ?>
					</p>
					<ul class="about__list">
						<li class="about__list-item">
							<span class="about__list-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="about__list-text"><?php esc_html_e( 'Seamless online scheduling', 'wescarhealth' ); ?></span>
						</li>
						<li class="about__list-item">
							<span class="about__list-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="about__list-text"><?php esc_html_e( 'Same-day surgical clearance turnaround', 'wescarhealth' ); ?></span>
						</li>
						<li class="about__list-item">
							<span class="about__list-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="about__list-text"><?php esc_html_e( 'Compassionate, confidential care', 'wescarhealth' ); ?></span>
						</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="button button--primary">
						<span class="button__text"><?php esc_html_e( 'Learn More About Us', 'wescarhealth' ); ?></span>
						<span class="button__arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="section section--gray" id="services">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Our Services', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Complete Healthcare For Every Stage Of Life', 'wescarhealth' ); ?></h2>
				<p class="section__description"><?php esc_html_e( 'From pre-surgical clearance to ongoing wellness care, we provide comprehensive telehealth services tailored to your needs.', 'wescarhealth' ); ?></p>
			</div>

			<div class="services-grid">
				<!-- Surgical Clearance -->
				<div class="service-category animate-on-scroll" data-delay="100">
					<div class="service-category__header">
						<div class="service-category__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
						</div>
						<h3 class="service-category__title"><?php esc_html_e( 'Surgical Clearance', 'wescarhealth' ); ?></h3>
					</div>
					<ul class="service-category__list">
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Cosmetic Surgery Clearance', 'wescarhealth' ); ?></span>
						</li>
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Bariatric Surgery Clearance', 'wescarhealth' ); ?></span>
						</li>
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Dental Surgery Clearance', 'wescarhealth' ); ?></span>
						</li>
					</ul>
				</div>

				<!-- Hormone & Wellness -->
				<div class="service-category animate-on-scroll" data-delay="200">
					<div class="service-category__header">
						<div class="service-category__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
						</div>
						<h3 class="service-category__title"><?php esc_html_e( 'Hormone & Wellness', 'wescarhealth' ); ?></h3>
					</div>
					<ul class="service-category__list">
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Hormone Replacement Therapy (HRT)', 'wescarhealth' ); ?></span>
						</li>
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Menopause & Perimenopause Management', 'wescarhealth' ); ?></span>
						</li>
					</ul>
				</div>

				<!-- Urgent Care -->
				<div class="service-category animate-on-scroll" data-delay="300">
					<div class="service-category__header">
						<div class="service-category__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
						</div>
						<h3 class="service-category__title"><?php esc_html_e( 'Urgent Care', 'wescarhealth' ); ?></h3>
					</div>
					<ul class="service-category__list">
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Minor Illness Treatment', 'wescarhealth' ); ?></span>
						</li>
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'Prescription Refills & Follow-up', 'wescarhealth' ); ?></span>
						</li>
					</ul>
				</div>

				<!-- Preventive & Sexual Health -->
				<div class="service-category animate-on-scroll" data-delay="400">
					<div class="service-category__header">
						<div class="service-category__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
						</div>
						<h3 class="service-category__title"><?php esc_html_e( 'Preventive & Sexual Health', 'wescarhealth' ); ?></h3>
					</div>
					<ul class="service-category__list">
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'STD Testing & Management', 'wescarhealth' ); ?></span>
						</li>
						<li class="service-category__item">
							<span class="service-category__item-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
							</span>
							<span class="service-category__item-text"><?php esc_html_e( 'PrEP Care & Monitoring', 'wescarhealth' ); ?></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Stats Section -->
	<section class="section section--primary">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Our Impact', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Trusted Care, Proven Results', 'wescarhealth' ); ?></h2>
			</div>
			<div class="stats">
				<div class="stat animate-on-scroll" data-delay="100">
					<div class="stat__number" data-counter="500" data-suffix="+">0</div>
					<div class="stat__label"><?php esc_html_e( 'Patients Served', 'wescarhealth' ); ?></div>
				</div>
				<div class="stat animate-on-scroll" data-delay="200">
					<div class="stat__number" data-counter="98" data-suffix="%">0</div>
					<div class="stat__label"><?php esc_html_e( 'Satisfaction Rate', 'wescarhealth' ); ?></div>
				</div>
				<div class="stat animate-on-scroll" data-delay="300">
					<div class="stat__number" data-counter="24" data-suffix="/7">0</div>
					<div class="stat__label"><?php esc_html_e( 'Availability', 'wescarhealth' ); ?></div>
				</div>
				<div class="stat animate-on-scroll" data-delay="400">
					<div class="stat__number" data-counter="15" data-suffix="+">0</div>
					<div class="stat__label"><?php esc_html_e( 'Years Experience', 'wescarhealth' ); ?></div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Choose Us Section -->
	<section class="section" id="why-us">
		<div class="container">
			<div class="section__header animate-on-scroll">
				<span class="section__badge"><?php esc_html_e( 'Why Choose Us', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'Building Health With Care, Experience, And Innovation', 'wescarhealth' ); ?></h2>
			</div>
			<div class="features-grid">
				<div class="feature-card animate-on-scroll" data-delay="100">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Specialized in Clearances', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Fast, reliable pre-op evaluation for your surgeon with same-day turnaround available.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="200">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Accessible Care', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Virtual visits that fit your schedule. Available 6am to Midnight, 7 days a week.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="300">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Expert Providers', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Led by board-certified clinicians with decades of frontline experience.', 'wescarhealth' ); ?></p>
					</div>
				</div>
				<div class="feature-card animate-on-scroll" data-delay="400">
					<div class="feature-card__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
					</div>
					<div class="feature-card__content">
						<h3 class="feature-card__title"><?php esc_html_e( 'Confidential & Compassionate', 'wescarhealth' ); ?></h3>
						<p class="feature-card__description"><?php esc_html_e( 'Your health, handled with discretion and respect. HIPAA-compliant platform.', 'wescarhealth' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials Section (Hidden) -->
	<section class="section section--gray testimonials" id="testimonials">
		<div class="container">
			<div class="section__header">
				<span class="section__badge"><?php esc_html_e( 'Testimonials', 'wescarhealth' ); ?></span>
				<h2 class="section__title"><?php esc_html_e( 'What Our Patients Say', 'wescarhealth' ); ?></h2>
			</div>
			<div class="testimonials-slider">
				<!-- Testimonials will be added here when available -->
			</div>
		</div>
	</section>

	<!-- CTA Section -->
	<section class="cta">
		<div class="cta__container">
			<h2 class="cta__title"><?php esc_html_e( 'Ready to Get Started?', 'wescarhealth' ); ?></h2>
			<p class="cta__description"><?php esc_html_e( 'Schedule your telehealth appointment today and experience healthcare on your terms.', 'wescarhealth' ); ?></p>
			<div class="cta__actions">
				<a href="https://www.tebra.com/" class="button button--accent button--lg" target="_blank" rel="noopener noreferrer">
					<span class="button__text"><?php esc_html_e( 'Book Your Appointment', 'wescarhealth' ); ?></span>
					<span class="button__arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</span>
				</a>
			</div>
			<div class="cta__contact">
				<div class="cta__contact-item">
					<div class="cta__contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					</div>
					<div class="cta__contact-text">
						<span class="cta__contact-label"><?php esc_html_e( 'Phone', 'wescarhealth' ); ?></span>
						<span class="cta__contact-value">(888) 456-7890</span>
					</div>
				</div>
				<div class="cta__contact-item">
					<div class="cta__contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
					</div>
					<div class="cta__contact-text">
						<span class="cta__contact-label"><?php esc_html_e( 'Email', 'wescarhealth' ); ?></span>
						<span class="cta__contact-value">info@wescarrhealth.com</span>
					</div>
				</div>
				<div class="cta__contact-item">
					<div class="cta__contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
					</div>
					<div class="cta__contact-text">
						<span class="cta__contact-label"><?php esc_html_e( 'Hours', 'wescarhealth' ); ?></span>
						<span class="cta__contact-value"><?php esc_html_e( '6am - Midnight', 'wescarhealth' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
