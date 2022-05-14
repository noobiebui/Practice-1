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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '1st-Wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'umYnFEsVeZU31NVpG4JB0tD3IcZ1ac6TmOBhPdiIEtq8JHF6MlRU0HLHYdsZnWl4' );
define( 'SECURE_AUTH_KEY',  'RlfUmHAnMed33eO3ADKuzPXcVhr6IPVipTtyKXE7erPmErzf8XgypUAXEP4HHP0H' );
define( 'LOGGED_IN_KEY',    '7Z90talZ8QWFYNLbGByUpFWWtPLQrF7ON3wL6WfZNZ0jU7XVIa5h2GEOkIaegQpP' );
define( 'NONCE_KEY',        'vNJKzRjEJKEgKrTr2B8aZTRWQ3ZuqvBWgBBypDNunj59gBKdZC8ocfaqfKnIgsB7' );
define( 'AUTH_SALT',        '5K4HFNvnCVjQocbPCCshitJe5W83GnsHMBGVH1jBXpBOGVU6XkpTWD8OoXG0GGIw' );
define( 'SECURE_AUTH_SALT', 'NQ51KYU9LnVpS3DktGzekrxO8watdfD6n2NSY6NizjJlc6rzChXKeQvYLk6xyxM5' );
define( 'LOGGED_IN_SALT',   'Np0WqXTNnK6kjQcrnpEwGgE6Fld8OWP1GOKtNC27bqy1s8R8HSkTJj7klA43ATji' );
define( 'NONCE_SALT',       '2MDnTuNWoH1q8boVrYBo5cSmo7KPA4HZS18GoJAJP32GDuqwmqemCjw0DRn5riyT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
