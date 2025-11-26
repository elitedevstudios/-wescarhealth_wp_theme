<?php
/**
 * Sidebar Template
 *
 * @package    WescarHealth
 * @subpackage Templates
 */

declare(strict_types=1);

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'wescarhealth' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
