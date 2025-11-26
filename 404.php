<?php
/**
 * 404 Template
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<section class="error-404 not-found">
			<header class="error-404__header">
				<h1 class="error-404__title"><?php esc_html_e( 'Page Not Found', 'wescarhealth' ); ?></h1>
			</header>

			<div class="error-404__content">
				<p class="error-404__message">
					<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search or one of the links below?', 'wescarhealth' ); ?>
				</p>

				<?php get_search_form(); ?>

				<div class="error-404__widgets">
					<?php
					the_widget(
						'WP_Widget_Recent_Posts',
						[
							'title'  => esc_html__( 'Recent Posts', 'wescarhealth' ),
							'number' => 5,
						],
						[
							'before_widget' => '<div class="widget widget_recent_posts">',
							'after_widget'  => '</div>',
							'before_title'  => '<h2 class="widget__title">',
							'after_title'   => '</h2>',
						]
					);
					?>

					<div class="widget widget_categories">
						<h2 class="widget__title"><?php esc_html_e( 'Categories', 'wescarhealth' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								[
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => true,
									'title_li'   => '',
									'number'     => 10,
								]
							);
							?>
						</ul>
					</div>
				</div>

				<div class="error-404__actions">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--primary">
						<?php esc_html_e( 'Return to Homepage', 'wescarhealth' ); ?>
					</a>
				</div>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
