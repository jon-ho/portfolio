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


define('AUTH_KEY',         'VUuHQV/X62cYK9Po4sauqTjymiWsSdkrjp0nwce6NsMA8dVu21moEyH7E+piRcTtUfBApIKs3QX/QMaH8GA2xQ==');
define('SECURE_AUTH_KEY',  'buDcmP3Dw16qx5e45+RY9j/cqTQkVx0P75o98KF+owe6KvYrQLhQmloak8hu9B9JdOQ5+F8gHfMwEHPSdem+LQ==');
define('LOGGED_IN_KEY',    'U5P/Il4vYinsNgqGB6tlLYtPg/CTRNesLdcyWRl0AaxadhyvUN4N/7Tk4cwVbeInLJASfX8assw3O3E3fHRYcg==');
define('NONCE_KEY',        'drY6f0Zga1rHPmTT3WoH67SlEdcNlJyOTRKmEy7t4qRO/HU5m7CFloTA6gBqoxD91oj7r/dcUJEOOomXJluFPA==');
define('AUTH_SALT',        'e6tMKcj1INm12I9+pyI6evGq2+v11yhcp7nFSaHkE3SqIskBeizbZcdkiH7t6zYRArU5gfi3OXO4+vhrlSILwA==');
define('SECURE_AUTH_SALT', 'v8g9C68jPgNnm/kBbDCuJdE2BUT17FObPbQV7FfTW+rANImDZ60HmitYgauRq95tNOZLgnrj/Hl+HvvRmY2rhA==');
define('LOGGED_IN_SALT',   'wiMR2YpaeZirQyzCQbEct9/2DcpSsw5QdMHKKwZfaigQYa+vCaP1IcpC9PS2CcY4iK3fyHMBq3ZtLcYeDtCAEg==');
define('NONCE_SALT',       'R2MpcM5tco7Uzgh9WYSVfJOLONs/7NrN1QNBzRYJQIxiiCJRHiVykUTluXgQbtQbyevcw8wDlQBgGPi1X1y1nw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
