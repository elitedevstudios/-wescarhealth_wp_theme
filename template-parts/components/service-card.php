<?php
/**
 * Service Card Component
 *
 * A reusable BEM component for displaying service information.
 *
 * @package    WescarHealth
 * @subpackage Template Parts/Components
 *
 * @param array $args {
 *     Component arguments.
 *
 *     @type string $title   Card title.
 *     @type string $content Card content/description.
 *     @type string $icon    Icon identifier or SVG.
 *     @type string $url     Link URL.
 *     @type string $class   Additional CSS classes.
 * }
 */

declare(strict_types=1);

$defaults = [
	'title'   => '',
	'content' => '',
	'icon'    => '',
	'url'     => '',
	'class'   => '',
];

$args = wp_parse_args( $args ?? [], $defaults );

$card_classes = 'service-card';
if ( ! empty( $args['class'] ) ) {
	$card_classes .= ' ' . sanitize_html_class( $args['class'] );
}
?>

<article class="<?php echo esc_attr( $card_classes ); ?>">
	<?php if ( ! empty( $args['icon'] ) ) : ?>
		<div class="service-card__icon" aria-hidden="true">
			<?php echo wp_kses( $args['icon'], wescarhealth_allowed_html() ); ?>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $args['title'] ) ) : ?>
		<h3 class="service-card__title">
			<?php echo esc_html( $args['title'] ); ?>
		</h3>
	<?php endif; ?>

	<?php if ( ! empty( $args['content'] ) ) : ?>
		<div class="service-card__content">
			<?php echo wp_kses_post( $args['content'] ); ?>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $args['url'] ) ) : ?>
		<a href="<?php echo esc_url( $args['url'] ); ?>" class="service-card__link">
			<?php esc_html_e( 'Learn More', 'wescarhealth' ); ?>
			<span class="visually-hidden">
				<?php
				printf(
					/* translators: %s: Service title */
					esc_html__( 'about %s', 'wescarhealth' ),
					esc_html( $args['title'] )
				);
				?>
			</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
				<path d="M5 12h14"></path>
				<path d="m12 5 7 7-7 7"></path>
			</svg>
		</a>
	<?php endif; ?>
</article>
