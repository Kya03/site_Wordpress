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
define( 'AUTH_KEY',          'I^*FWWfeqJL@4@Xuq( Nuasl;P|%B@]L-Hzcbnh[@St*ZE%T-AzcG,4XTs[DX)n5' );
define( 'SECURE_AUTH_KEY',   '7]wHIW%@Sj<.[.L!tjX6Shb<0 1H{]OB/<dlJ3PDj>#q+_q9 6Bz3VI`X(Uo4azI' );
define( 'LOGGED_IN_KEY',     'T|cD](0j(Fb+YS(@=Yf[0@7>P3nExGHzXeRi:P_5Vx:lRJ6=S3#S`mU^!GE(;_Jy' );
define( 'NONCE_KEY',         '}T3Gu`&s[Qg!}.$R6>^7to+~*H7St1w$RI/hOyl;#|9~N0eq<%4GOQfh:/*:q}xN' );
define( 'AUTH_SALT',         ',9SOWocKLnE3*qX7h=P!=TLM:|SpyL@e,Yga2cchugiQ{@{%am[Yz8v}]7xLJcs0' );
define( 'SECURE_AUTH_SALT',  'F*v^^(sE2Y.kMNPnsMM.^rpUt-BI^KW XB`g+?8{;#T)hGmMG(CVK4>%m<@u{F1u' );
define( 'LOGGED_IN_SALT',    '%/~P+X/!D]2@y|C.LlJfv_UFB`CV0[Sx`!hP|fK|vS<2<j:uQt-X7<El2m%bL1t.' );
define( 'NONCE_SALT',        'DvL<_G2AVu,tOpO{(%1i]kmStx/6>5p@01Ie=jY1(M{Tp h-qUJ*W-JNo|h{S|^d' );
define( 'WP_CACHE_KEY_SALT', '>aP4rEeB q +|iE?5gwTlfc|#S[v!Hnx` =z%p>U)[$k>0lkXY3-4M`]&MWN[ob-' );


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
