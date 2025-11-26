<?php
/**
 * Template part for displaying posts
 *
 * @package    WescarHealth
 * @subpackage Template Parts
 */

declare(strict_types=1);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<?php wescarhealth_post_thumbnail(); ?>

	<header class="entry__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry__title">', '</h1>' );
		else :
			the_title( '<h2 class="entry__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry__meta">
				<?php
				wescarhealth_posted_on();
				wescarhealth_posted_by();
				wescarhealth_display_reading_time();
				?>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry__content">
		<?php
		if ( is_singular() ) :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. */
						__( 'Continue reading<span class="visually-hidden"> "%s"</span>', 'wescarhealth' ),
						[
							'span' => [
								'class' => [],
							],
						]
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				[
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wescarhealth' ),
					'after'  => '</div>',
				]
			);
		else :
			?>
			<p class="entry__excerpt"><?php echo esc_html( wescarhealth_excerpt( 25 ) ); ?></p>
			<a href="<?php the_permalink(); ?>" class="entry__read-more">
				<?php esc_html_e( 'Read More', 'wescarhealth' ); ?>
				<span class="visually-hidden"><?php echo esc_html( get_the_title() ); ?></span>
			</a>
			<?php
		endif;
		?>
	</div>

	<?php if ( is_singular() ) : ?>
		<footer class="entry__footer">
			<?php wescarhealth_entry_footer(); ?>
		</footer>
	<?php endif; ?>
</article>
