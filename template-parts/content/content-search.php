<?php
/**
 * Template part for displaying results in search pages
 *
 * @package    WescarHealth
 * @subpackage Template Parts
 */

declare(strict_types=1);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--search' ); ?>>
	<header class="entry__header">
		<?php the_title( sprintf( '<h2 class="entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry__meta">
				<?php
				wescarhealth_posted_on();
				wescarhealth_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry__footer">
		<?php wescarhealth_entry_footer(); ?>
	</footer>
</article>
