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


define('AUTH_KEY',         'YOn2kpYqaKPWqBmIMT+93n4EVm4SrZDxHWWvi6nMqus7oqQx326wcTtrDbs1zxtamDDadep8aSDl/1WHPVnuhQ==');
define('SECURE_AUTH_KEY',  'Zj0L/k5+To/DWfy3Z85XhmA7QBJ//WiH5GYSFobQICmWrY+KXiORIqh4fW/DQeuWbJCo1OzGfh1d1QPCAsp5Fg==');
define('LOGGED_IN_KEY',    'GkeieXeiiV80zYnEPYRDkn5kngZ1zI7Rw8AlWT/39Vwl5WpQBUEeSs6p9qTeLO64rkxIpydc1cWGPrcZiIFsFw==');
define('NONCE_KEY',        'CUhGUmfU8IWno1cYGPsVvXVdtzmw47S4hBBub/4C7MYLuf0SiRX5QfC4HXN+g2pAD4YqBSvZpc0H/XXQdUAMwQ==');
define('AUTH_SALT',        'U1iUenZb6DlJhcN88uBMLapP9gVbNRSiYRDoNID8dYWZ68sVq4yBVmeDmXnRXZV6dWth8HcDulxkH9sbmbDn+w==');
define('SECURE_AUTH_SALT', 'ltHR2oFg4sNgY2kRBkydj2l3sXWufLqa4MKKq9Fm9scGFU9PiYzcpPeW/QP7WX07Q5gzPmImrNHU5OYoJu01RQ==');
define('LOGGED_IN_SALT',   'IutxXv6gkcZKJDzxqWPs/hH8dkzCFg2SC7e4EdnBNk5uEFaj1LUaDK3M9P/OMgVFPgjBNI4wN2xPr3z4biFxxA==');
define('NONCE_SALT',       '5exEalI8uQbeh94NYQAZUBWZ3V+KIcerV5vKtzWd2g7prtHk5ZezI3uJFNdpODD2kskDLXAtlnMGXsr9SECJkw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
