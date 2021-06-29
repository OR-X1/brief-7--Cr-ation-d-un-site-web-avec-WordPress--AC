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
define( 'DB_NAME', 'breif_7_wordpress' );

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
define( 'AUTH_KEY',         'Y[bZ7umov:Nq+_x6.9{GwSfZA`TDw>T&BSnira[;|R37<bBqA!J}^BO2R;xD,$z1' );
define( 'SECURE_AUTH_KEY',  'g+3N7p_[#H8qknMzl>g2hTt RbGw!<69]X>R8$79`Un$2u`SOdWhb6Kq@1B@IPZ6' );
define( 'LOGGED_IN_KEY',    'nCQQ*f)KqK~V F/T?&MF:1 n*g`{~+JED&bxpLm.=km[Pr(*+cWul`&ge&O])#6C' );
define( 'NONCE_KEY',        'Uj,QW~Pc^`~Nq^vs}XnaSU<!{J41WLN/hx{vaY?%AX!{?##~vU9I?.hGxi^$n8f0' );
define( 'AUTH_SALT',        '91c@7]|vO)5hJ!6,|wJ>:FEe<;k80>}!z1,dSxn;{k5Vz[%RC8&}:;MmI5O8,^EP' );
define( 'SECURE_AUTH_SALT', '{?_j-,B`BfXoY9NUg]2}gm=v)Fs4rH%=YZmxc-5`SL/Is5u+4a[iF6J!51dE?CUX' );
define( 'LOGGED_IN_SALT',   'S,q%vm-y4]E6JVe+o(P,*Z/9:3+e]gT[in):J0pZZr//1RN-bf*I/E{$j=R^SH7f' );
define( 'NONCE_SALT',       '.mz|gk3y*yRZ<}K1_PfzOMgd(qq?q$6M~f4lhoy.5lj$@>MG}QZgJ !ge^-7Wx00' );

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
