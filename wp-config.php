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
define( 'DB_NAME', 'mosque' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5|Z.(O6!{JlY/,xpiw]mb289. N;6OxZWAgD.(c;?K>qAIYie?|.qosfrF6wuY(=' );
define( 'SECURE_AUTH_KEY',  '1fvEq~TAf^I%q|7ziL=tF->gz%$7J9T*xK#5ZONO5NX3R}{3CTxGD5NGi.*X{BL:' );
define( 'LOGGED_IN_KEY',    '=7P{_@QD]vh%N^a:FFL+<>mD^KPG?Yon.u}.39JNyCWYva;ka9(m1b2a:QMj#l[s' );
define( 'NONCE_KEY',        '.R#FN]13%)lC7cgNfP{#fP:SeDUn3/78~j:{U7X#WdxV2XW]0<F(v(`8ug<(#q,x' );
define( 'AUTH_SALT',        '+|;YNnhGM9t!2x+>%.dQ/L,QplbuUM$Y>)[E.~}k-rpZ0lt X T1FyxHwR^IHazE' );
define( 'SECURE_AUTH_SALT', 'G-:C432?.#g8dJ>,yER$];DbGbW6-LA[YLp&GPt0PmfP [(vWTJC#6aIi0/QDl)1' );
define( 'LOGGED_IN_SALT',   'B{!IJ]IPu9>E4f>P7ggK`T>AW7*+PqnGhh/-[0MML7_IO%gKfJpy-QLJj =aQvK<' );
define( 'NONCE_SALT',       'yJnj<vY$^OF!eB2l1;97]M2R%Vg!R)V[8.5o+EF^5z1%BerP>ROlwmY:dDvpT#w;' );

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
