<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'wordpress' );
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
define( 'AUTH_KEY',         ']&k(Cs~Px9M!T4M_&*RW.FA(d7?/zRvXXTC*N#vi+lvXQ3N]Kdte6K&+^kiq7kXe' );
define( 'SECURE_AUTH_KEY',  '5>QQ[P%(y2M8?]{Sd2Fs;E%F0.`NXO?6YKC/lKzGL=Yy|Bty8%o#4ivH2J$&w*2,' );
define( 'LOGGED_IN_KEY',    '+W0xJP*efDhR5JZk$A6s_1eF2(&f,SWY,x8vG|G,*w=m[KEItUv7p@=2I((=MI%b' );
define( 'NONCE_KEY',        'q084.|l^0F&kAve.?B+4rj >vQ<D}#W&eoboQGLDs9mjE[IO$U<um!9Q`T.WS]n,' );
define( 'AUTH_SALT',        'F~TQ=}[.Qal1]|CL)dv!WU~8.C.#eZ`$`QmkNkZ-[4^tr?`^cL3786YA`Kujl30{' );
define( 'SECURE_AUTH_SALT', 'mb)pb=DPRy1HW%M#cyda6k4Nrx5;nI7e7gj}N+&@KjZ )y?w&Z6Rt3!v3%5],Q%I' );
define( 'LOGGED_IN_SALT',   'z]43 ]]k6MiPL1DX&c-8pGKyb)Rt%i0Np_(eUO#)^QU&KDlhwZ`j3bh-FFR@xv|9' );
define( 'NONCE_SALT',       'GwT}#^QBxq_;c6 2d!P{Nkh&CntR8B&G`buynKM#W$jm|k{W.sjQUV=n $YVl8Un' );
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