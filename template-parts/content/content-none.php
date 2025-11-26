<?php
/**
 * Template part for displaying a message when no posts are found
 *
 * @package    WescarHealth
 * @subpackage Template Parts
 */

declare(strict_types=1);

?>

<section class="no-results not-found">
	<header class="no-results__header">
		<h1 class="no-results__title"><?php esc_html_e( 'Nothing Found', 'wescarhealth' ); ?></h1>
	</header>

	<div class="no-results__content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>%s</p>',
				sprintf(
					wp_kses(
						/* translators: 1: Link to new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wescarhealth' ),
						[
							'a' => [
								'href' => [],
							],
						]
					),
					esc_url( admin_url( 'post-new.php' ) )
				)
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wescarhealth' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wescarhealth' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div>
</section>
