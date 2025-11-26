<?php
/**
 * Template part for displaying page content
 *
 * @package    WescarHealth
 * @subpackage Template Parts
 */

declare(strict_types=1);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--page' ); ?>>
	<?php wescarhealth_post_thumbnail(); ?>

	<header class="entry__header">
		<?php the_title( '<h1 class="entry__title">', '</h1>' ); ?>
	</header>

	<div class="entry__content">
		<?php
		the_content();

		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wescarhealth' ),
				'after'  => '</div>',
			]
		);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry__footer">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. */
					esc_html__( 'Edit %s', 'wescarhealth' ),
					'<span class="visually-hidden">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer>
	<?php endif; ?>
</article>
