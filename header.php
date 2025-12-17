<?php
/**
 * Header Template
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

// Get content from plugin if available.
$header_booking = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_booking_url() : 'https://www.tebra.com/';
$header_phone   = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_phone() : '(888) 456-7890';
$header_phone_link = function_exists( 'wescarhealth_get' ) ? WescarHealth_Content_Helpers::get_phone_link() : '+18884567890';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-container">
	<a class="skip-link visually-hidden" href="#primary">
		<?php esc_html_e( 'Skip to content', 'wescarhealth' ); ?>
	</a>

	<header id="masthead" class="site-header">
		<div class="site-header__container">
			<div class="site-header__branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo-link" rel="home">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					if ( $custom_logo_id ) :
						$logo_image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
						if ( $logo_image ) :
							?>
							<img src="<?php echo esc_url( $logo_image[0] ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="site-header__logo-image">
						<?php endif; ?>
					<?php else : ?>
						<span class="site-header__logo-text">WesCarr Health</span>
					<?php endif; ?>
				</a>
			</div>

			<nav id="site-navigation" class="site-header__nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'wescarhealth' ); ?>">
				<?php
				wp_nav_menu(
					[
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'site-header__menu',
						'container'      => false,
						'fallback_cb'    => false,
					]
				);
				?>
			</nav>

			<div class="site-header__actions">
				<?php if ( $header_phone ) : ?>
					<a href="tel:<?php echo esc_attr( $header_phone_link ); ?>" class="site-header__phone">
						<span class="site-header__phone-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
						</span>
						<span><?php echo esc_html( $header_phone ); ?></span>
					</a>
				<?php endif; ?>

				<a href="<?php echo esc_url( $header_booking ); ?>" class="button button--primary" target="_blank" rel="noopener noreferrer">
					<span class="button__text"><?php esc_html_e( 'Book Now', 'wescarhealth' ); ?></span>
					<span class="button__arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</span>
				</a>

				<button 
					class="site-header__menu-toggle js-menu-toggle" 
					aria-controls="mobile-menu" 
					aria-expanded="false"
					aria-label="<?php esc_attr_e( 'Toggle Menu', 'wescarhealth' ); ?>"
				>
					<span class="site-header__menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>
			</div>
		</div>

		<!-- Mobile Menu -->
		<nav id="mobile-menu" class="site-header__mobile-menu" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'wescarhealth' ); ?>">
			<?php
			wp_nav_menu(
				[
					'theme_location' => 'mobile',
					'menu_class'     => 'site-header__mobile-menu-list',
					'container'      => false,
					'fallback_cb'    => function() {
						wp_nav_menu(
							[
								'theme_location' => 'primary',
								'menu_class'     => 'site-header__mobile-menu-list',
								'container'      => false,
								'fallback_cb'    => false,
							]
						);
					},
				]
			);
			?>
			<div class="site-header__mobile-cta">
				<a href="<?php echo esc_url( $header_booking ); ?>" class="button button--primary button--lg" target="_blank" rel="noopener noreferrer">
					<?php esc_html_e( 'Book Appointment', 'wescarhealth' ); ?>
				</a>
			</div>
		</nav>
	</header>
