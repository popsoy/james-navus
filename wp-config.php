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
define( 'DB_NAME', 'james-navus' );

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
define( 'AUTH_KEY',         'W%<^8>BEG/[2Ob.X3CWmh]s>iYmqdmI`(|I^f.7&f!riBGCUIL70giy2tR9K62?|' );
define( 'SECURE_AUTH_KEY',  '{|11F6{dv7dwX:EDm~q$bi@8-~>bV$^Et9bBoQbKnApS3u`A%yS&~Whm5AA-~6r%' );
define( 'LOGGED_IN_KEY',    '$9aZm<)MG6G9A=3{H2%ny9c~?G }!{7&IKLUl+-[YJ#_8{=O3t-C Z91p(&<q:m4' );
define( 'NONCE_KEY',        'VXb!:)ZR`JWW?c6oipZ8=e#cVyB:U*Zej47t4sv5T^5a,vH7e?xt_Q0.(4*x?Fms' );
define( 'AUTH_SALT',        'aV(f.DA4@umh!y6MJ7$l5b%{~LE*wTv[7T:-y.P16zn5wv/PoY)LP:*sSoIc>[Wp' );
define( 'SECURE_AUTH_SALT', 'TE8H>hcrHahA1s`Fn= >C*|@Ll!Q;44VPv^6nA<%I!(]]m1EGT~o%O777(F#9sm<' );
define( 'LOGGED_IN_SALT',   '6FS57)vw2R~_J1Ai;&#,BN{zV&YlGe72.&LqM~ggnkUg:>k*S4+y@@Wjp*ox}qo^' );
define( 'NONCE_SALT',       '*B>*4j2IOA<s6HFBV5!;uR,|E<*dP+vnQouSy^K+`!BeX1j5kj%&_>MA*3igh,)_' );

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
