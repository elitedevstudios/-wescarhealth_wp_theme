<?php
/**
 * Archive Template
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
				<?php
				the_archive_title( '<h1 class="page-header__title">', '</h1>' );
				the_archive_description( '<div class="page-header__description">', '</div>' );
				?>
			</header>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', get_post_type() );
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
