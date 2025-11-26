<?php
/**
 * Template Functions
 *
 * Helper functions for templates.
 *
 * @package    WescarHealth
 * @subpackage Includes
 */

declare(strict_types=1);

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get custom logo or site title.
 *
 * @param bool $echo Whether to echo or return.
 * @return string|void Logo HTML or void if echoing.
 */
function wescarhealth_site_logo( bool $echo = true ) {
	$html = '';

	if ( has_custom_logo() ) {
		$html = get_custom_logo();
	} else {
		$html = sprintf(
			'<a href="%1$s" class="site-header__logo-link" rel="home">%2$s</a>',
			esc_url( home_url( '/' ) ),
			esc_html( get_bloginfo( 'name' ) )
		);
	}

	if ( $echo ) {
		echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above.
	} else {
		return $html;
	}
}

/**
 * Display posted on date.
 *
 * @return void
 */
function wescarhealth_posted_on(): void {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="entry-date updated visually-hidden" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( DATE_W3C ) ),
		esc_html( get_the_modified_date() )
	);

	printf(
		'<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
		esc_html__( 'Posted on', 'wescarhealth' ),
		esc_url( get_permalink() ),
		$time_string // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above.
	);
}

/**
 * Display posted by author.
 *
 * @return void
 */
function wescarhealth_posted_by(): void {
	printf(
		'<span class="posted-by">%1$s <a href="%2$s" class="author vcard">%3$s</a></span>',
		esc_html__( 'by', 'wescarhealth' ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);
}

/**
 * Display entry footer with categories, tags, and edit link.
 *
 * @return void
 */
function wescarhealth_entry_footer(): void {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		$categories_list = get_the_category_list( esc_html__( ', ', 'wescarhealth' ) );
		if ( $categories_list ) {
			printf(
				'<span class="cat-links">%1$s %2$s</span>',
				esc_html__( 'Posted in', 'wescarhealth' ),
				$categories_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Core function.
			);
		}

		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'wescarhealth' ) );
		if ( $tags_list ) {
			printf(
				'<span class="tags-links">%1$s %2$s</span>',
				esc_html__( 'Tagged', 'wescarhealth' ),
				$tags_list // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Core function.
			);
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Post title. */
			esc_html__( 'Edit %s', 'wescarhealth' ),
			'<span class="visually-hidden">' . get_the_title() . '</span>'
		),
		'<span class="edit-link">',
		'</span>'
	);
}

/**
 * Display post thumbnail with fallback.
 *
 * @param string $size Image size.
 * @return void
 */
function wescarhealth_post_thumbnail( string $size = 'post-thumbnail' ): void {
	if ( post_password_required() || is_attachment() ) {
		return;
	}

	if ( has_post_thumbnail() ) {
		?>
		<figure class="post-thumbnail">
			<?php if ( is_singular() ) : ?>
				<?php the_post_thumbnail( $size, [ 'class' => 'post-thumbnail__image' ] ); ?>
			<?php else : ?>
				<a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( $size, [ 'class' => 'post-thumbnail__image', 'alt' => the_title_attribute( [ 'echo' => false ] ) ] ); ?>
				</a>
			<?php endif; ?>
		</figure>
		<?php
	}
}

/**
 * Get reading time estimate.
 *
 * @param int|null $post_id Post ID.
 * @return int Reading time in minutes.
 */
function wescarhealth_reading_time( ?int $post_id = null ): int {
	$post_id = $post_id ?? get_the_ID();
	$content = get_post_field( 'post_content', $post_id );
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$reading_time = ceil( $word_count / 200 ); // Average reading speed.

	return max( 1, (int) $reading_time );
}

/**
 * Display reading time.
 *
 * @param int|null $post_id Post ID.
 * @return void
 */
function wescarhealth_display_reading_time( ?int $post_id = null ): void {
	$reading_time = wescarhealth_reading_time( $post_id );

	printf(
		'<span class="reading-time">%s</span>',
		sprintf(
			/* translators: %d: Reading time in minutes. */
			esc_html( _n( '%d min read', '%d min read', $reading_time, 'wescarhealth' ) ),
			absint( $reading_time )
		)
	);
}

/**
 * Get excerpt with custom length.
 *
 * @param int      $length  Excerpt length in words.
 * @param int|null $post_id Post ID.
 * @return string Trimmed excerpt.
 */
function wescarhealth_excerpt( int $length = 25, ?int $post_id = null ): string {
	$post_id = $post_id ?? get_the_ID();
	$excerpt = get_the_excerpt( $post_id );

	if ( empty( $excerpt ) ) {
		$excerpt = get_post_field( 'post_content', $post_id );
	}

	$excerpt = wp_strip_all_tags( $excerpt );
	$words   = explode( ' ', $excerpt );

	if ( count( $words ) > $length ) {
		$words   = array_slice( $words, 0, $length );
		$excerpt = implode( ' ', $words ) . '&hellip;';
	}

	return $excerpt;
}

/**
 * Render a BEM component.
 *
 * @param string $component Component name (file in template-parts/components/).
 * @param array  $args      Arguments to pass to the component.
 * @return void
 */
function wescarhealth_component( string $component, array $args = [] ): void {
	$template = WESCARHEALTH_DIR . '/template-parts/components/' . $component . '.php';

	if ( file_exists( $template ) ) {
		// Make args available in template.
		set_query_var( 'component_args', $args );
		load_template( $template, false, $args );
	}
}

/**
 * Get social sharing links.
 *
 * @param int|null $post_id Post ID.
 * @return array Social sharing URLs.
 */
function wescarhealth_social_share_links( ?int $post_id = null ): array {
	$post_id = $post_id ?? get_the_ID();
	$url     = rawurlencode( get_permalink( $post_id ) );
	$title   = rawurlencode( get_the_title( $post_id ) );

	return [
		'facebook'  => "https://www.facebook.com/sharer/sharer.php?u={$url}",
		'twitter'   => "https://twitter.com/intent/tweet?url={$url}&text={$title}",
		'linkedin'  => "https://www.linkedin.com/shareArticle?mini=true&url={$url}&title={$title}",
		'email'     => "mailto:?subject={$title}&body={$url}",
	];
}

/**
 * Get breadcrumbs.
 *
 * @return array Breadcrumb items.
 */
function wescarhealth_get_breadcrumbs(): array {
	$breadcrumbs = [];

	// Home.
	$breadcrumbs[] = [
		'title' => esc_html__( 'Home', 'wescarhealth' ),
		'url'   => home_url( '/' ),
	];

	if ( is_singular() ) {
		// Get post type.
		$post_type = get_post_type();

		if ( 'post' === $post_type ) {
			// Blog page.
			$blog_page_id = get_option( 'page_for_posts' );
			if ( $blog_page_id ) {
				$breadcrumbs[] = [
					'title' => get_the_title( $blog_page_id ),
					'url'   => get_permalink( $blog_page_id ),
				];
			}

			// Categories.
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				$breadcrumbs[] = [
					'title' => $categories[0]->name,
					'url'   => get_category_link( $categories[0]->term_id ),
				];
			}
		}

		// Current post.
		$breadcrumbs[] = [
			'title' => get_the_title(),
			'url'   => '',
		];
	} elseif ( is_archive() ) {
		$breadcrumbs[] = [
			'title' => get_the_archive_title(),
			'url'   => '',
		];
	} elseif ( is_search() ) {
		$breadcrumbs[] = [
			'title' => sprintf(
				/* translators: %s: Search query. */
				esc_html__( 'Search results for: %s', 'wescarhealth' ),
				get_search_query()
			),
			'url'   => '',
		];
	} elseif ( is_404() ) {
		$breadcrumbs[] = [
			'title' => esc_html__( 'Page not found', 'wescarhealth' ),
			'url'   => '',
		];
	}

	return $breadcrumbs;
}

/**
 * Display breadcrumbs.
 *
 * @return void
 */
function wescarhealth_breadcrumbs(): void {
	$breadcrumbs = wescarhealth_get_breadcrumbs();

	if ( count( $breadcrumbs ) < 2 ) {
		return;
	}

	echo '<nav class="breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'wescarhealth' ) . '">';
	echo '<ol class="breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">';

	$count = count( $breadcrumbs );
	foreach ( $breadcrumbs as $index => $crumb ) {
		$is_last = ( $index === $count - 1 );

		echo '<li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';

		if ( ! $is_last && ! empty( $crumb['url'] ) ) {
			printf(
				'<a href="%s" class="breadcrumbs__link" itemprop="item"><span itemprop="name">%s</span></a>',
				esc_url( $crumb['url'] ),
				esc_html( $crumb['title'] )
			);
		} else {
			printf(
				'<span class="breadcrumbs__current" itemprop="name" aria-current="page">%s</span>',
				esc_html( $crumb['title'] )
			);
		}

		echo '<meta itemprop="position" content="' . absint( $index + 1 ) . '">';
		echo '</li>';
	}

	echo '</ol>';
	echo '</nav>';
}
