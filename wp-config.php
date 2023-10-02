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


define('AUTH_KEY',         'MsY3++EYyxWuY8D8Aup48pRWmJF2P52v2W+tt8BKaTIr+sZGCMo6kj/0Ajmr5dMHPF7F3fZ508+4LL3qJ/ACgw==');
define('SECURE_AUTH_KEY',  'ukcXrghdf1U9zwEarPG6Qi1TO0Wr6xQD+0ALrUMU0QsEUROMQomn8QYtHY7CwoJsNUL6CZYpkOml5SERNJhktg==');
define('LOGGED_IN_KEY',    'PMseg2rN1fJqotk8wgN2wQN860jSkUBm/a7G/xU3SidhRnoQJVw6mN1spjXz4lYxGcc+OnrrkS5hbaO/6F9X4Q==');
define('NONCE_KEY',        'c0I3DWAxXR1SOi38PPlmKihFAI39OH79f+Yn8U0k7YaCHidmdtX3w/RzhCYC49LwSBce9/py8PspurlIKfo/Cg==');
define('AUTH_SALT',        'xJGzxdshzI1rJSENT464RVed8uIYODhci4ArD/ftBxQtpP8aktse6wqYltiWdsOxgAg3yMExGP4WGwbCCK8ktQ==');
define('SECURE_AUTH_SALT', 'CMmxRuNeGSQeah4hs4AfL2AZ/5GjIAhYq7cb2/ulwK7HnsXnU2pGwOWDy4jtc9vUEWItT7Jr6m6cjufYMVFqTg==');
define('LOGGED_IN_SALT',   'TIbjSne86fU1ct//qFRm+DEOLrWtpouI7UGoUZXlmbc911d3pLtqAmD/4dkMIaIRRBnBatSl2yomdKc/RKWJMQ==');
define('NONCE_SALT',       'Qkrh3VHCxqJU5EwEo8BnhHqDmOBt3k4WivTmzhKKwCgC8VToM6D8eNwmJEi+cewEDlNKNNjaMyAyYXiz4rOVGA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
