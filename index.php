<?php
/**
 * Main Template File
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 *
 * @package    WescarHealth
 * @author     WesCar Health Development Team
 * @copyright  2024 WesCar Health
 * @license    GPL-2.0-or-later
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header class="page-header">
					<h1 class="page-header__title"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

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
