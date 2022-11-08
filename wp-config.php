<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache





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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "tm_site_db" );
/** Database username */
define( 'DB_USER', "root" );
/** Database password */
define( 'DB_PASSWORD', "" );
/** Database hostname */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         ',G_n`/KW+u`A,a?tVVgn[HfJ~sxm:a4h=W7a@~$9;w> 7.?y9Ej%Z%8]Wh-qr@;W' );
define( 'SECURE_AUTH_KEY',  'O~PUF,[;Q|&/7B Nfw2vJs<}x}e.$2`?)<t`zmO56KQqEv{P9Q+*ojJS((*fp4(#' );
define( 'LOGGED_IN_KEY',    'uK+g:K2=J885FWFn)/.=M!oik(ekk7$&Wpg ,*ug/P7W<,Z%V}iqe(Zwz!4*K5?[' );
define( 'NONCE_KEY',        '(XsY.Am4&KEuhH;4j6IuTu5zuz3YgVGp0P##yD(4AlbSsdM%#-UF6sw889pSm&$9' );
define( 'AUTH_SALT',        '9DkC640qfm%Z={x5Kzp9$FiNGb<`#gVG9Xk;e.Sj#dsaS~C3;5 ]c6/|?&xtn!&a' );
define( 'SECURE_AUTH_SALT', 'Zk)WHmm+cv+3y>+GS4{J8&$8X*)37E3KuA$]tX&i.Xlw(R1ipR|hDmnwF`/2EJ`6' );
define( 'LOGGED_IN_SALT',   'Hz%!x&oGaT@xr9bLq&!{T^<&I{3?@,]ZR01<ifUt{-P[Ec(a oGF!a6n0M4$.LA_' );
define( 'NONCE_SALT',       'H<{j~ERbczg|#7,JUEpt?kyUC_D(MNcv=S_g~nvk|jJX:u!#Gdjs}4QSHp]49IEN' );
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