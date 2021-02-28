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
define( 'DB_NAME', 'chanceofoutdoors' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>0PsXQaMlV5=}:l4`ZMcan2Cxeg<]l,WtT.9k)S`>z~QAg__2JGb`l8_5fP@2k7.' );
define( 'SECURE_AUTH_KEY',  '}&.+IlY|?c2AbY{9I3s69 #.Z<1*wg[[oR~HqxwB>G gKI*_nl8ob<x3@T?J[ *A' );
define( 'LOGGED_IN_KEY',    'wy#O&iVQ+2-:k-/ysRXU(ZV#6J_8P45?R#_k&.WWs@#aI,R@nQ+n)ipS%mPUt0@*' );
define( 'NONCE_KEY',        'N[~~!a*wL6vM,@RJ9tCWY,:},60A{][yPwI~{a269uvUk+7WVO5jMwKJhLV>mtp)' );
define( 'AUTH_SALT',        ']:C~[dBd9Re/=Fv|0/xyg@QL4TS:Za!7(oRnEvcR|es[m H_sH_ ?9-+LA%[odc-' );
define( 'SECURE_AUTH_SALT', '&#+,lX(gi/!G5WA/OWaYoZ&K%ECn#.V<>wI]VQrk`Gts6yg}4`bb=P)wl`6W!h},' );
define( 'LOGGED_IN_SALT',   'Qu)iAT A1ckVPpBqPaX*lT=Ue/4%2/L~7WA+s_n4Y?<__~|3*-=xle(+Ts$M;Nr ' );
define( 'NONCE_SALT',       'Mh?la,IG088Y@f=J~JYt,xdV,/s=no!j?BHmdnO*X%PY3Av)P.&{(t-Ajn+JXe04' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
