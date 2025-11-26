<?php
/**
 * Search Results Template
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-header__title">
					<?php
					printf(
						/* translators: %s: search query. */
						esc_html__( 'Search Results for: %s', 'wescarhealth' ),
						'<span>' . get_search_query() . '</span>'
					);
					?>
				</h1>
			</header>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'search' );
			endwhile;

			the_posts_pagination(
				[
					'prev_text'          => sprintf(
						'<span class="visually-hidden">%s</span><span aria-hidden="true">&larr;</span>',
						esc_html__( 'Previous page', 'wescarhealth' )
					),
					'next_text'          => sprintf(
						'<span class="visually-hidden">%s</span><span aria-hidden="true">&rarr;</span>',
						esc_html__( 'Next page', 'wescarhealth' )
					),
					'before_page_number' => '<span class="visually-hidden">' . esc_html__( 'Page', 'wescarhealth' ) . ' </span>',
				]
			);

		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
	</div>
</main>

<?php
get_footer();
