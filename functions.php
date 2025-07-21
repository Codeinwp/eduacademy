<?php
/**
 * Eduacademy functions file
 *
 * @author Themeisle
 * @package eduacademy
 * @since 1.0.0
 */

namespace Eduacademy;

/**
 * Bootstrap the theme.
 *
 * @return void
 */
function bootstrap() {
	global $_eduacademy_bootstrap_errors;

	$_eduacademy_bootstrap_errors = new \WP_Error();

	check_php();

	define_constants();

	check_build_files();

	maybe_add_notices();

	load_sdk();

	load_dependencies();

	run();
}

/**
 * Checks that the PHP version is correct.
 *
 * @return void
 */
function check_php() {
	global $_eduacademy_bootstrap_errors;

	if ( version_compare( PHP_VERSION, '7.0' ) > 0 ) {
		return;
	}

	$_eduacademy_bootstrap_errors->add(
		'php_version',
		sprintf(
		/* translators: %s message to upgrade PHP to the latest version */
			__( "Hey, we've noticed that you're running an outdated version of PHP which is no longer supported. Make sure your site is fast and secure, by %1\$s. Eduacademy's minimal requirement is PHP%2\$s.", 'eduacademy' ),
			sprintf(
			/* translators: %s message to upgrade PHP to the latest version */
				'<a href="https://wordpress.org/support/upgrade-php/">%s</a>',
				__( 'upgrading PHP to the latest version', 'eduacademy' )
			),
			'7.0'
		)
	);
}

/**
 * Define theme constants.
 *
 * @return void
 */
function define_constants() {
	define( 'EDUACADEMY_VERSION', '0.1' );
	define( 'EDUACADEMY_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
	define( 'EDUACADEMY_DIR', trailingslashit( get_template_directory() ) );
	define( 'EDUACADEMY_URL', trailingslashit( get_template_directory_uri() ) );
	define( 'EDUACADEMY_PRODUCT_SLUG', basename( EDUACADEMY_DIR ) );
}

/**
 * Checks that the build files are present.
 *
 * @return void
 */
function check_build_files() {
	if ( defined( 'EDUACADEMY_IGNORE_SOURCE_CHECK' ) ) {
		return;
	}

	$_files_to_check = array(
		EDUACADEMY_DIR . 'vendor/autoload.php',
		EDUACADEMY_DIR . 'assets/css/build/style.css',
		EDUACADEMY_DIR . 'assets/css/build/editor.css',
		EDUACADEMY_DIR . 'assets/css/build/style-rtl.css',
		EDUACADEMY_DIR . 'assets/css/build/editor-rtl.css',
	);

	foreach ( $_files_to_check as $file ) {
		if ( is_file( $file ) ) {
			continue;
		}

		global $_eduacademy_bootstrap_errors;

		$_eduacademy_bootstrap_errors->add(
			'build_missing',
			sprintf(
			/* translators: %s: commands to run the theme */
				__( 'You appear to be running the Eduacademy theme from source code. Please finish installation by running %s.', 'eduacademy' ),
				'<code>composer install --no-dev &amp;&amp; yarn install --frozen-lockfile &amp;&amp; yarn run build</code>'
			)
		);

		return;
	}
}

/**
 * Adds notices if something went wrong and activates the default theme.
 *
 * @return void
 */
function maybe_add_notices() {
	global $_eduacademy_bootstrap_errors;

	if ( ! $_eduacademy_bootstrap_errors->has_errors() ) {
		return;
	}

	add_filter( 'template_include', '__return_null', 99 );
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] ); // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	add_action(
		'admin_notices',
		function () {
			global $_eduacademy_bootstrap_errors;

			printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $_eduacademy_bootstrap_errors->get_error_message() ) );
		}
	);
}

/**
 * Load SDK.
 *
 * @return void
 */
function load_sdk() {
	add_filter(
		'themeisle_sdk_products',
		function ( $products ) {
			$products[] = EDUACADEMY_DIR . 'style.css';

			return $products;
		}
	);
}

/**
 * Load composer dependencies.
 *
 * @return void
 */
function load_dependencies() {
	$vendor_file = EDUACADEMY_DIR . '/vendor/autoload.php';
	if ( is_readable( $vendor_file ) ) {
		require_once $vendor_file;
	}
}

/**
 * Run theme core.
 *
 * @return void
 */
function run() {
	Core::get_instance();
}

bootstrap();
