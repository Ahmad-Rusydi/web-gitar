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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PTgitarindonesia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '<<M[v0Gx}z0R9E_(y!Qmb|-=9[>EN0Xi;fnXX29*?Yrg4z W?tP`=;+{[t,OJNyY' );
define( 'SECURE_AUTH_KEY',  'TbFRq!ElV~C]PKN/{LFjPE-O]Y!Z9WSYLz40jY]V.h<Aw!9E#uL$ EWEeHjHfmRe' );
define( 'LOGGED_IN_KEY',    'K8KRI:rx,3*P/W.p[k$0&w;e`r;}$l=tX-<TT[^% QOz5N<c@{U|@<4ByxV) e^Q' );
define( 'NONCE_KEY',        '}ve%f:K&/5/0*Vfx3{d;|Sx((<AV}~%`FvPeqA9hj(#;tpfqe$)UgkUhY$S)g{k~' );
define( 'AUTH_SALT',        'b@&njcB/bpyf>Sm.%iN<|=-mcG%`O=!,Q`3>Ox~{)/N/4@f1XR?H#;e]Us)#YG(n' );
define( 'SECURE_AUTH_SALT', '07ErIzN2|y] _s`wn6a&$|v*jeFQT>cm)$@Jo#7wl3f5)%?^A4#y,oZCX?%1`h]H' );
define( 'LOGGED_IN_SALT',   '>Vep`DD0zuT*L$2$h]5PQcK{wb92`i`j@< +U>+ $)z(7Wb^B-7*v.<uv/o`;qI*' );
define( 'NONCE_SALT',       'XSNv. iG~q-HI9By>W{RLZ4=Lq1iHOy=khNLS$Es$Vt1-*.}EL-%hHO&sVN9s,iD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
