<?php
/**
 * Template Name: Coming Soon Page
 * 
 * Coming soon landing page template for WesCarr Health Hub
 * No header/footer - standalone page
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	<style>
		/* Coming Soon Page Styles - Matching Hero Section */
		.coming-soon {
			min-block-size: 100vh;
			display: flex;
			flex-direction: column;
			background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdfa 100%);
			position: relative;
			overflow: hidden;
		}

		.coming-soon__container {
			flex: 1;
			display: grid;
			grid-template-columns: 1fr;
			gap: 2rem;
			align-items: center;
			max-inline-size: 1280px;
			margin-inline: auto;
			padding-block: 3rem;
			padding-inline: 1.5rem;
		}

		@media (min-width: 64rem) {
			.coming-soon__container {
				grid-template-columns: 1fr 1fr;
				gap: 4rem;
				padding-block: 4rem;
			}
		}

		.coming-soon__content {
			text-align: start;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__content {
				text-align: center;
				order: 1;
			}
			.coming-soon__media {
				order: 2;
			}
		}

		.coming-soon__logo {
			margin-block-end: 1.5rem;
		}

		.coming-soon__logo-text {
			font-family: var(--font-family-heading, 'Playfair Display', serif);
			font-size: 1.75rem;
			font-weight: 700;
			color: var(--color-gray-800, #0f172a);
		}

		.coming-soon__badge {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			padding-block: 0.5rem;
			padding-inline: 1rem;
			background-color: rgba(13, 148, 136, 0.1);
			color: var(--color-accent, #0d9488);
			border-radius: 9999px;
			font-size: 0.875rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 0.05em;
			margin-block-end: 1.5rem;
		}

		.coming-soon__badge::before {
			content: "";
			display: block;
			inline-size: 8px;
			block-size: 8px;
			background-color: var(--color-accent, #0d9488);
			border-radius: 50%;
		}

		.coming-soon__title {
			font-family: var(--font-family-heading, 'Playfair Display', serif);
			font-size: clamp(2.5rem, 5vw + 1rem, 4rem);
			font-weight: 400;
			color: var(--color-gray-800, #0f172a);
			line-height: 1.1;
			margin-block-end: 1.5rem;
		}

		.coming-soon__title em {
			font-style: italic;
			color: var(--color-accent, #0d9488);
		}

		.coming-soon__description {
			font-size: 1.125rem;
			color: var(--color-gray-500, #475569);
			line-height: 1.7;
			margin-block-end: 2.5rem;
			max-inline-size: 500px;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__description {
				margin-inline: auto;
			}
		}

		/* Contact Card */
		.coming-soon__contact {
			background-color: white;
			border-radius: 1rem;
			padding: 1.5rem;
			box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
			margin-block-end: 2rem;
			max-inline-size: 500px;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__contact {
				margin-inline: auto;
			}
		}

		.coming-soon__contact-title {
			font-size: 1.125rem;
			font-weight: 600;
			color: var(--color-gray-800, #0f172a);
			margin-block-end: 1rem;
			text-align: start;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__contact-title {
				text-align: center;
			}

			.coming-soon__contact-items {
				align-items: center;
			}

			.coming-soon__contact-item {
				justify-content: center;
			}
		}

		.coming-soon__contact-items {
			display: flex;
			flex-direction: column;
			gap: 1rem;
		}

		@media (min-width: 480px) {
			.coming-soon__contact-items {
				flex-direction: row;
				flex-wrap: wrap;
				justify-content: center;
				gap: 1.5rem;
			}
		}

		.coming-soon__contact-item {
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.coming-soon__contact-icon {
			flex-shrink: 0;
			inline-size: 40px;
			block-size: 40px;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: var(--color-accent, #0d9488);
			border-radius: 0.5rem;
			color: white;
		}

		.coming-soon__contact-content h3 {
			font-size: 0.75rem;
			font-weight: 600;
			color: var(--color-gray-400, #64748b);
			text-transform: uppercase;
			letter-spacing: 0.05em;
			margin: 0 0 0.125rem 0;
		}

		.coming-soon__contact-content a,
		.coming-soon__contact-content p {
			font-size: 1rem;
			font-weight: 600;
			color: var(--color-gray-800, #0f172a);
			text-decoration: none;
			margin: 0;
		}

		.coming-soon__contact-content a:hover {
			color: var(--color-accent, #0d9488);
		}

		/* Social Links */
		.coming-soon__social {
			display: flex;
			gap: 1rem;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__social {
				justify-content: center;
			}
		}

		.coming-soon__social-link {
			inline-size: 44px;
			block-size: 44px;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: white;
			border-radius: 50%;
			color: var(--color-gray-500, #475569);
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
			transition: all 0.2s ease;
		}

		.coming-soon__social-link:hover {
			background-color: var(--color-accent, #0d9488);
			color: white;
			transform: translateY(-2px);
		}

		/* Media/Image Section */
		.coming-soon__media {
			position: relative;
		}

		.coming-soon__image-wrapper {
			position: relative;
			border-radius: 1.5rem;
			overflow: hidden;
			box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
		}

		.coming-soon__image {
			inline-size: 100%;
			block-size: auto;
			object-fit: cover;
			aspect-ratio: 4/3;
			display: block;
		}

		/* Floating Cards */
		.coming-soon__floating-card {
			position: absolute;
			display: flex;
			align-items: center;
			gap: 0.75rem;
			background-color: white;
			padding: 0.75rem 1rem;
			border-radius: 0.75rem;
			box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
			animation: float 3s ease-in-out infinite;
		}

		.coming-soon__floating-card--phone {
			inset-block-end: 15%;
			inset-inline-end: -5%;
		}

		.coming-soon__floating-card--hours {
			inset-block-start: 15%;
			inset-inline-start: -5%;
		}

		@media (max-width: 63.9375rem) {
			.coming-soon__floating-card--phone {
				inset-inline-end: 5%;
			}
			.coming-soon__floating-card--hours {
				inset-inline-start: 5%;
			}
		}

		.coming-soon__floating-icon {
			display: flex;
			align-items: center;
			justify-content: center;
			inline-size: 36px;
			block-size: 36px;
			background-color: var(--color-accent, #0d9488);
			border-radius: 0.5rem;
			color: white;
		}

		.coming-soon__floating-content {
			display: flex;
			flex-direction: column;
		}

		.coming-soon__floating-label {
			font-size: 0.75rem;
			color: var(--color-gray-400, #64748b);
			text-transform: uppercase;
			letter-spacing: 0.05em;
		}

		.coming-soon__floating-value {
			font-size: 1rem;
			font-weight: 600;
			color: var(--color-gray-800, #0f172a);
		}

		/* Footer */
		.coming-soon__footer {
			padding-block: 1.5rem;
			text-align: center;
			color: var(--color-gray-500, #475569);
			font-size: 0.875rem;
			background-color: rgba(255, 255, 255, 0.5);
		}

		/* Animations */
		@keyframes bounce {
			0%, 20%, 50%, 80%, 100% {
				transform: translateY(0);
			}
			40% {
				transform: translateY(-20px);
			}
			60% {
				transform: translateY(-10px);
			}
		}

		.coming-soon__image-wrapper {
			animation: bounce 2s ease infinite;
		}
	</style>
</head>
<body <?php body_class( 'coming-soon-page' ); ?>>

<div class="coming-soon">
	<div class="coming-soon__container">
		<!-- Content Side -->
		<div class="coming-soon__content">
			<!-- Logo -->
			<div class="coming-soon__logo">
				<span class="coming-soon__logo-text"><?php esc_html_e( 'WesCarr Health', 'wescarhealth' ); ?></span>
			</div>

			<!-- Badge -->
			<span class="coming-soon__badge"><?php esc_html_e( 'Coming Soon', 'wescarhealth' ); ?></span>

			<!-- Title -->
			<h1 class="coming-soon__title">
				<?php esc_html_e( 'Something', 'wescarhealth' ); ?> <em><?php esc_html_e( 'Amazing', 'wescarhealth' ); ?></em> <?php esc_html_e( 'Is On The Way', 'wescarhealth' ); ?>
			</h1>

			<!-- Description -->
			<p class="coming-soon__description">
				<?php esc_html_e( 'We\'re working hard to bring you expert telehealth services. Stay tuned for surgical clearance, hormone therapy, urgent care, and preventive health — all from the comfort of your home.', 'wescarhealth' ); ?>
			</p>

			<!-- Contact Card -->
			<div class="coming-soon__contact">
				<h2 class="coming-soon__contact-title"><?php esc_html_e( 'Get In Touch', 'wescarhealth' ); ?></h2>
				<div class="coming-soon__contact-items">
					<div class="coming-soon__contact-item">
						<div class="coming-soon__contact-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
						</div>
						<div class="coming-soon__contact-content">
							<h3><?php esc_html_e( 'Phone', 'wescarhealth' ); ?></h3>
							<a href="tel:+18884567890">(888) 456-7890</a>
						</div>
					</div>

					<div class="coming-soon__contact-item">
						<div class="coming-soon__contact-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
						</div>
						<div class="coming-soon__contact-content">
							<h3><?php esc_html_e( 'Email', 'wescarhealth' ); ?></h3>
							<a href="mailto:info@wescarrhealth.com">info@wescarrhealth.com</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Social Links -->
			<div class="coming-soon__social">
				<a href="https://facebook.com" class="coming-soon__social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
				</a>
				<a href="https://instagram.com" class="coming-soon__social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
				</a>
				<a href="https://linkedin.com" class="coming-soon__social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
				</a>
			</div>
		</div>

		<!-- Media Side -->
		<div class="coming-soon__media">
			<div class="coming-soon__image-wrapper">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-image.png' ); ?>" alt="<?php esc_attr_e( 'Healthcare professional ready to help', 'wescarhealth' ); ?>" class="coming-soon__image">
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="coming-soon__footer">
		<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php esc_html_e( 'WesCarr Health Hub. All rights reserved.', 'wescarhealth' ); ?></p>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
