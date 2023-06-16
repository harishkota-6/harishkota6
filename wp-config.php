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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'zyrT2VnSDB0RBIF15sNQDWzIP3iCsR/bSBQ/YuxXCXX/k0DgGxj+8FmSevRhE4eE1IF0kclIEGTC4k19rIesaQ==');
define('SECURE_AUTH_KEY',  'P6LKmIIFIFqUH3GkZLcTTAbu1avrKwG4viyqmCJUvn2tN1NbTYh2QkuEJoWtu/Ggcj4JObpa7fc/qwz7OdhQXA==');
define('LOGGED_IN_KEY',    'jM5zOaYb/zFh/mifXWaYJDN17ZhSTOH1ssDFoVBr0H93aM/dICnsS8q++milPbAK6OtvIZ0N4EqMikDuNobmDg==');
define('NONCE_KEY',        '3zFmyWU+wROE+FB6VJis55KtfhV30ae1HPWqr+7+jGeAGStAmEurq109XfWoFF7J8PCElpV1a29YLMXvu7YXQw==');
define('AUTH_SALT',        '2mSIEgkoAGvY8j/iUfsnNIdeohRRN/PxlvGLhenSfGW5lmTGydjethvktt6WJZVFI3rGk9QL0fPH6eH++dSAoQ==');
define('SECURE_AUTH_SALT', 'i7Qkbg1EhTe9lpMmqP6LB5/lRDyrbFvvZgJREfN6FvcudH7Y7aYuNhgjryoMYIIyuGIwBmw8dm9gMftfX2MKaQ==');
define('LOGGED_IN_SALT',   '0HJo/Jml1qyh4Zc/vc5qC0ftGZ2jVqfzWI8CuxrSS0l5JpuVJfgDqjBQN/D+5DmCpIPPxvtoCGUJxrsZXn7xig==');
define('NONCE_SALT',       'DV/lknrJS3bTamvmGY0kmMq9MtU30+Eygizj9ayOLsg10blme0KkrvbxhvKjwYoWHL+A3w3TiS3LDRuVjk8t3w==');