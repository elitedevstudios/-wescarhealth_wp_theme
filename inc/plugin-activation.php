<?php
/**
 * Plugin Activation Notice
 *
 * Displays admin notice to install/activate the bundled plugin.
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
 * Check if the WesCarr Health Content Manager plugin is active.
 *
 * @return bool
 */
function wescarhealth_is_content_plugin_active(): bool {
	return class_exists( 'WescarHealth_Content_Helpers' );
}

/**
 * Display admin notice if plugin is not active.
 */
function wescarhealth_plugin_activation_notice(): void {
	// Only show to users who can install plugins.
	if ( ! current_user_can( 'install_plugins' ) ) {
		return;
	}

	// Check if plugin is already active.
	if ( wescarhealth_is_content_plugin_active() ) {
		return;
	}

	// Check if notice was dismissed.
	if ( get_user_meta( get_current_user_id(), 'wescarhealth_plugin_notice_dismissed', true ) ) {
		return;
	}

	$plugin_file = 'wescarhealth-content/wescarhealth-content.php';
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_file;

	// Check if plugin is installed but not active.
	if ( file_exists( $plugin_path ) ) {
		$activate_url = wp_nonce_url(
			admin_url( 'plugins.php?action=activate&plugin=' . urlencode( $plugin_file ) ),
			'activate-plugin_' . $plugin_file
		);
		$message = sprintf(
			/* translators: 1: Plugin name, 2: Activate link */
			__( 'The %1$s plugin is installed but not active. %2$s to enable content management features.', 'wescarhealth' ),
			'<strong>WesCarr Health Content Manager</strong>',
			'<a href="' . esc_url( $activate_url ) . '">' . __( 'Activate it now', 'wescarhealth' ) . '</a>'
		);
	} else {
		// Plugin not installed - provide install link.
		$install_url = admin_url( 'themes.php?page=wescarhealth-install-plugin' );
		$message = sprintf(
			/* translators: 1: Plugin name, 2: Install link */
			__( 'This theme recommends the %1$s plugin for easy content management. %2$s', 'wescarhealth' ),
			'<strong>WesCarr Health Content Manager</strong>',
			'<a href="' . esc_url( $install_url ) . '" class="button button-primary">' . __( 'Install Plugin', 'wescarhealth' ) . '</a>'
		);
	}

	$dismiss_url = wp_nonce_url(
		add_query_arg( 'wescarhealth-dismiss-notice', '1' ),
		'wescarhealth_dismiss_notice'
	);

	?>
	<div class="notice notice-warning is-dismissible wescarhealth-plugin-notice">
		<p><?php echo wp_kses_post( $message ); ?></p>
		<p><a href="<?php echo esc_url( $dismiss_url ); ?>" class="dismiss-permanently"><?php esc_html_e( 'Dismiss this notice', 'wescarhealth' ); ?></a></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'wescarhealth_plugin_activation_notice' );

/**
 * Handle notice dismissal.
 */
function wescarhealth_dismiss_plugin_notice(): void {
	if ( isset( $_GET['wescarhealth-dismiss-notice'] ) && check_admin_referer( 'wescarhealth_dismiss_notice' ) ) {
		update_user_meta( get_current_user_id(), 'wescarhealth_plugin_notice_dismissed', true );
		wp_safe_redirect( remove_query_arg( array( 'wescarhealth-dismiss-notice', '_wpnonce' ) ) );
		exit;
	}
}
add_action( 'admin_init', 'wescarhealth_dismiss_plugin_notice' );

/**
 * Add plugin installation page.
 */
function wescarhealth_add_plugin_install_page(): void {
	add_theme_page(
		__( 'Install Required Plugin', 'wescarhealth' ),
		__( 'Install Plugin', 'wescarhealth' ),
		'install_plugins',
		'wescarhealth-install-plugin',
		'wescarhealth_render_plugin_install_page'
	);
}
add_action( 'admin_menu', 'wescarhealth_add_plugin_install_page' );

/**
 * Render the plugin installation page.
 */
function wescarhealth_render_plugin_install_page(): void {
	// Check if plugin is already installed.
	$plugin_file = 'wescarhealth-content/wescarhealth-content.php';
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_file;

	if ( file_exists( $plugin_path ) ) {
		$activate_url = wp_nonce_url(
			admin_url( 'plugins.php?action=activate&plugin=' . urlencode( $plugin_file ) ),
			'activate-plugin_' . $plugin_file
		);
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'WesCarr Health Content Manager', 'wescarhealth' ); ?></h1>
			<p><?php esc_html_e( 'The plugin is already installed. Click the button below to activate it.', 'wescarhealth' ); ?></p>
			<p><a href="<?php echo esc_url( $activate_url ); ?>" class="button button-primary"><?php esc_html_e( 'Activate Plugin', 'wescarhealth' ); ?></a></p>
		</div>
		<?php
		return;
	}

	// Handle installation.
	if ( isset( $_POST['wescarhealth_install_plugin'] ) && check_admin_referer( 'wescarhealth_install_plugin' ) ) {
		wescarhealth_install_bundled_plugin();
		return;
	}

	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Install WesCarr Health Content Manager', 'wescarhealth' ); ?></h1>
		<div class="card" style="max-width: 600px; padding: 20px;">
			<h2><?php esc_html_e( 'WesCarr Health Content Manager', 'wescarhealth' ); ?></h2>
			<p><?php esc_html_e( 'This plugin allows you to easily edit website content without touching code:', 'wescarhealth' ); ?></p>
			<ul style="list-style: disc; margin-left: 20px;">
				<li><?php esc_html_e( 'Contact information (phone, email, hours)', 'wescarhealth' ); ?></li>
				<li><?php esc_html_e( 'Social media links', 'wescarhealth' ); ?></li>
				<li><?php esc_html_e( 'Home page content (hero, about, stats, CTA)', 'wescarhealth' ); ?></li>
				<li><?php esc_html_e( 'Coming Soon page content', 'wescarhealth' ); ?></li>
			</ul>
			<form method="post">
				<?php wp_nonce_field( 'wescarhealth_install_plugin' ); ?>
				<p><button type="submit" name="wescarhealth_install_plugin" class="button button-primary button-hero"><?php esc_html_e( 'Install & Activate Plugin', 'wescarhealth' ); ?></button></p>
			</form>
		</div>
	</div>
	<?php
}

/**
 * Install the bundled plugin from theme directory.
 */
function wescarhealth_install_bundled_plugin(): void {
	$plugin_zip = get_template_directory() . '/bundled-plugins/wescarhealth-content.zip';

	if ( ! file_exists( $plugin_zip ) ) {
		wp_die( esc_html__( 'Plugin package not found.', 'wescarhealth' ) );
	}

	// Include required files.
	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/misc.php';

	// Set up the upgrader.
	$upgrader = new Plugin_Upgrader( new Plugin_Installer_Skin( array(
		'title' => __( 'Installing WesCarr Health Content Manager', 'wescarhealth' ),
	) ) );

	// Install the plugin.
	$result = $upgrader->install( $plugin_zip );

	if ( is_wp_error( $result ) ) {
		wp_die( esc_html( $result->get_error_message() ) );
	}

	// Activate the plugin.
	$plugin_file = 'wescarhealth-content/wescarhealth-content.php';
	$activate = activate_plugin( $plugin_file );

	if ( is_wp_error( $activate ) ) {
		echo '<p>' . esc_html__( 'Plugin installed but could not be activated automatically.', 'wescarhealth' ) . '</p>';
		echo '<p><a href="' . esc_url( admin_url( 'plugins.php' ) ) . '" class="button">' . esc_html__( 'Go to Plugins', 'wescarhealth' ) . '</a></p>';
	} else {
		echo '<p>' . esc_html__( 'Plugin installed and activated successfully!', 'wescarhealth' ) . '</p>';
		echo '<p><a href="' . esc_url( admin_url( 'admin.php?page=wescarhealth-content' ) ) . '" class="button button-primary">' . esc_html__( 'Go to Content Settings', 'wescarhealth' ) . '</a></p>';
	}
}

/**
 * Remove the install page from menu if plugin is active.
 */
function wescarhealth_maybe_remove_install_page(): void {
	if ( wescarhealth_is_content_plugin_active() ) {
		remove_submenu_page( 'themes.php', 'wescarhealth-install-plugin' );
	}
}
add_action( 'admin_menu', 'wescarhealth_maybe_remove_install_page', 999 );
