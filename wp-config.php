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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'h}E9!bG5C6eY&3JmZG Z^B6%%ssV#76_k5>Gp}EN5q:h5Cp0o0_f+fDF$[Bas&@!' );
define( 'SECURE_AUTH_KEY',   'Dqpm/9Boj-9pjfV3W:xr|6Q0dzYK=$3n?K,qP?du@Z4<dXPgKf7]+M,k]RdMFD>@' );
define( 'LOGGED_IN_KEY',     '1IL,/jDFj$bK/@np=</SI0d_dT*JRXPR+Q;uRCpzsIv!GQ5I2Y|P_~4hz^e2Ia9X' );
define( 'NONCE_KEY',         'vh[i_kJu}NMdSVP4+VG^x13r$/*)Rr@R3#+7x)2j%%QVJ#Ik&740SHol3Nmt0Qw!' );
define( 'AUTH_SALT',         'm_KhasS{.j`;T+OS}(u<|k72&}612N<uemcO/Pnq{b*S|_HQApp{wJ3#si,5vHb4' );
define( 'SECURE_AUTH_SALT',  'yYpNcg/l31,=`S*_1?3*l4:$n.AS?SLYzcWaH>o.sk/-B~A%:R?gm?DUJo:5[GJJ' );
define( 'LOGGED_IN_SALT',    'mV1EGMfzt[|bs^9+<p4g-W}MJ70/0`/xztAtBM!76{W2P^|d*>EhN@vP5zsN~*@{' );
define( 'NONCE_SALT',        'IhivvU3U1deyFk<%<0J?3kISBdmSb593~Omm]&U15<?QyB5t1>?3Bya.O@h[,Kvv' );
define( 'WP_CACHE_KEY_SALT', 'HDe{26/A_iJ]r7YB&]q-st%Vih`-^TY(Hnc.w@Hnpl75$L[ff}ST+SWG%1Fhaa8K' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
