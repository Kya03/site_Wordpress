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
define( 'AUTH_KEY',          'jg#NC9Ww@1mh?HiuWv5>O(TT>q<LslCWT{T%<}620AT)BwKN5i#`X6N {v?S66uJ' );
define( 'SECURE_AUTH_KEY',   'T<V*XI<8y4mT, fziXV]3IMly>(c5tfy%bw#b]><>]p<CA9og)cCauKXAc)(/S2p' );
define( 'LOGGED_IN_KEY',     'p(r?8r^10k;.mCJot&Eu^D<W&:K=92y$a%(>_W@^of($0qSPH&tZ[r)MCM:y ~B+' );
define( 'NONCE_KEY',         'O}uqn3?Ln~2d0{<M2T`ti43Tu t`qEA3#@d{6!,+xne)RG]EB53Tf4MAH*#I[%N`' );
define( 'AUTH_SALT',         'W g^?iB)Y&)WGWEx3j]$u#CO&dd/BQ&d BvnC?{-{F$Ro?bD/3+5DuR9-DcWx. h' );
define( 'SECURE_AUTH_SALT',  '9FOu)NC*|o+1kH97IYH@2dJ5#R%j=gdRyb%E|-9A^5,g{)V}~!3q0sIDrY 3Jtmj' );
define( 'LOGGED_IN_SALT',    'c}MEB$i8[GKPt[2<P-#4JDP~4m#G,>rK.i+r6?z$Q4P@lW(|<$[{Op13LF[{Hd9Y' );
define( 'NONCE_SALT',        'XN%,u.|/8owbz]wR9C0MaQ(9S01_f8P>X_D?*a_Epzr+ilg3V]Girtx[}dWnr45w' );
define( 'WP_CACHE_KEY_SALT', 'v1rKUQp&OP3{LKI?QpuV,*~1R>jg3]Nw{m _e1x;[R~Y>#ET[PM3|4+{<;qo}~M$' );


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
