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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          '&#1XAo@m0X!?I%ZW_$ShvKnU.qU!,:QB)osCv!?iXtf=<41r);B^FYYK4Qx+>}HM' );
define( 'SECURE_AUTH_KEY',   '5OrE!I<x$P8U>veJ?S4)H|4<WI4W$a0 Mud,,jflQFgKV:Bw2B8kE4wsR{ z$Ez6' );
define( 'LOGGED_IN_KEY',     ',ROY5qk]?P).r7~XUZ#@n%&,fE]U knC0=rQ_ZaU>)>0z#nn3e+ xVQ3NG~6GL^m' );
define( 'NONCE_KEY',         '0wt~F; !)zVe|5NS*.Y(@:jSG14$mCs$mEcHdAgIP$&%3HkeJHi}S`&!(W1$<@AW' );
define( 'AUTH_SALT',         '>=8ng*%vyE(-(<7<IL$okWzaJpMu87B:R-yjN|qIH2[$PhF97!rbq0LWa*E?z0b8' );
define( 'SECURE_AUTH_SALT',  '}vWM[L|c_)IH_$^;PSoFm#f{hP&y%>[>zscPX[`N.iN%EkbX,Js67)e[VfW19Ofn' );
define( 'LOGGED_IN_SALT',    'rCTG]1 ^/h$ECX((.= [y J|L{ybmP^CixJth=3Ewu[oR&2B<J%I(]mJr<2I)[9y' );
define( 'NONCE_SALT',        'Ziy%]GU9myO<VeLaC?FkWE3{,`xz`pluv^-FrB5!+tuVS{=pN];?use`$8qF1pf^' );
define( 'WP_CACHE_KEY_SALT', 'L6f%VM)U|C9a:3gRe#+UlWRehLM;)<bgp7~?DvF/&^ckhUz<*:hMv|1cM[KCR7Fr' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
