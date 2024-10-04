<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tasteio' );

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
define( 'AUTH_KEY',         'xs^2s`9,]l1~CDit+^FV54uU1Ti6k4%Cx)N/ot*Z/ ;hxb;LJ?._5<-bDXywHq&7' );
define( 'SECURE_AUTH_KEY',  '(Ld`@6&vplt(?17t5l,0w7%WSGj0#FLAp68*CP:8]<MKC@:g(r1W;`:]stmx[q6<' );
define( 'LOGGED_IN_KEY',    'i+1:9[X}x~Y]OqjM)@GZGI-q5d]{7:<0::$2&a(UKX)xHB>LUiaI2v:1-9JYtl=D' );
define( 'NONCE_KEY',        'kE:xp9eCVr%eO,0o &W[Ul2rXvPJvqIYSAM$5@-EX)F)O7K-/XI.#a=(Y^DADt=J' );
define( 'AUTH_SALT',        'pZ.nfLtqq/>>#_,?yr_~)p}0vPQ0gB;hIOq%Q-LW-kIA)r>1-?aA?h/tBUTM/XO[' );
define( 'SECURE_AUTH_SALT', 'wnP)IG!F pv&Rp xkzCup ^7x Pn*:#ZR.w=h|+?B5Y|dGdek$|SRwsw1HUu/~^.' );
define( 'LOGGED_IN_SALT',   'aj-xy@@BQ2hW(l0FLxw~1#bI0(4ok%0/qZ4MG|foZVO>cDG6OSLnE@iDp$KUf~Ji' );
define( 'NONCE_SALT',       '#+]2F~/[eBfAF5`o9YaMFX@)I19RC~|igoWVSMXe9!;t&Ob1PyTX.7%.H8*`v%/$' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
