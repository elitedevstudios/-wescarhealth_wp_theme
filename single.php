<?php
/**
 * Single Post Template
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php wescarhealth_breadcrumbs(); ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );

			// Post navigation.
			the_post_navigation(
				[
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wescarhealth' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wescarhealth' ) . '</span> <span class="nav-title">%title</span>',
				]
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		?>
	</div>
</main>

<?php
get_footer();
