<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M+XSyJVwsPa+1E4iys2dm3USitbdkoUmEE32drls51vpMx7eDr/yfj+I+4p7wugZIcbUHBRKQr57b0n0Di9byA==');
define('SECURE_AUTH_KEY',  'tCk8WOt8GkSWkMMxUq9p7654o7CV0hmfS5CwWpPhpItEUEJ6WUO7pRMNUYt6Hk13kD1AHZX51FE0JeEYm49W0Q==');
define('LOGGED_IN_KEY',    'PyRgMq4YHmESwXAa2JxFl76hNDDPGDJVxmMnja8c8670q4EZU085bUKoTJq9h1TmsrzlfEkkODgWqTgYxzGskw==');
define('NONCE_KEY',        'LvFWqGev3HSm/WPKK8psvWdfO2BwyaHTkf57hCJiCm5U5SVyKon8lUqUla09wkJ/5HTyTsfljDf0+4QONiE+bg==');
define('AUTH_SALT',        '4+GgWFZlJi6AhTHHPIbZKnKgedu6I0J6enpErKrHEmbXnS4HzckZr99RvkpE11oekPEjoYWZXQtP4j6F7LW72w==');
define('SECURE_AUTH_SALT', 'YMr3Nf5ckRpsFjznf5MVeMN6HBpsW59m57w9gfF7hKuyOFFdJUfO3TiF22X19Q4iT2ooFahMvxCWd7L7PWU9zQ==');
define('LOGGED_IN_SALT',   '/9qTehhY5T3Vnn1hXswPHyqiltQRXQLeRkaAQc3CmmtZZN0ZIYbod4TUOhUIXh0o2eHKXZaTsh9hE6OC8jzSIw==');
define('NONCE_SALT',       'aeAcEygAtY2QJfhB6AMgaKZIkUAfAVjluuAvnRzlwHXeNvqYOLFESganypMMHS+GrYd7KYnN7lu8G3m+13McLw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
