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
define( 'DB_NAME', 'wordpressFood' );

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
define( 'AUTH_KEY',         '`XF;*F_fZIv_(Y1O#!8w2Jazo<w6@`/5U9X S7]g.<x.U+BcM0CQoMMmafe-JVmT' );
define( 'SECURE_AUTH_KEY',  'Z.Uv|S:CNYmb,WDY%YAyJo;XDSORP+i9LDaHR2XXmk?>3swXo~6}eZjm*/f2K}{J' );
define( 'LOGGED_IN_KEY',    '#L8>Tt$ -`R])(l-p5M+KAR!0hFb|eQry~TT?OG1^)n=w5=6Sc.h~[W>BGbe}6bh' );
define( 'NONCE_KEY',        'HCMW6qm^*&vid.MnTm..v5)CWJgd$}:BkBk3k.v-8{&Z Hi4g?4&_!WhAtT~[b@}' );
define( 'AUTH_SALT',        'wJ@iQ1NuPamuT;(ZGC5{spn_dAtGSf,!XHdutWaYZyfW=?v?l{+]<GB+6tS0,GJn' );
define( 'SECURE_AUTH_SALT', 'LRQDKfU)uc,.Tt1$ Mi8] *(uK-[xGrc-YoRkb0LnrH4HAp{)M9R e{5Im-<D:P1' );
define( 'LOGGED_IN_SALT',   'MjB zLu^[[jvG]<`]l_n/!i(nZgWRRywhvN,YKT1o<Z,W5:*K`Q+9@LaS`!&W_?j' );
define( 'NONCE_SALT',       'xXl$4]gonv#)BZ1{~a&gk&:IoDgY2DG}5r>]X];<QF^&J:-@@e* 95cDCVcBQ<A>' );

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
