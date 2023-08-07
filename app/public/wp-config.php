<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'm0AK7Z0aPbMBBCOfI2oG2khAy6t6MJMK+RhHZlA7sjjL4uXHHwf9J/1k75oHcBBfot1Hy3kg3sFdq/9cN3W+FQ==');
define('SECURE_AUTH_KEY',  'i9PPEanVxwcvmHAhMU+SyWfaOgvKbrpQynU60qfJPeNgYg9hH6uqm6v/despOTJ1k0E6+SE2Fj5jTxTrNITB+g==');
define('LOGGED_IN_KEY',    'hqBM5Y4WtQOjtkk4UUJHmItIU/P0VzPF78wsu/rQBX/LpY1gmdWXBf+EolRJoe/MgBimpKja4YJ0Y5shQM3c3Q==');
define('NONCE_KEY',        'W7YUYptoSTLYIQtc7gm3h7mmw40RLzSOuUrjb+2K9MZHCyjbSmpsuRNpIeagc6gyVLRk2GNFdwBPapWbWbVbzA==');
define('AUTH_SALT',        'rQFz+2edMdymACyF5cMB/HP7sI0kwln8xzX1lQBcfw2rYIsa2VYrVum+zUL3nftoQuJpmTlM7LzmFV2wVBhsXA==');
define('SECURE_AUTH_SALT', '1yC2O3kDpGQpI7lMs0q0RhDdXMiNg+tBN4UiHvsl/jzB2VC+CeQyb8kwOPsQ5EXJHWJ/zHIC+Ga1Ds8aHbvuDQ==');
define('LOGGED_IN_SALT',   'as+/YJHJD97qf6h91vTQrb/fHTjjyD5WF72e7og9ni5C3JX5ddvkqpo36u+W2saaocZTBkBGd0qVkJGSuyhobA==');
define('NONCE_SALT',       'X/d9y7mm7l1HeH+ZT4OwhvF7RDNYOFtJI3du1LFu7wQTt2aq0SadTjankGARYgTT3hi27+lSIfqZ+dHI0nVBnw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
