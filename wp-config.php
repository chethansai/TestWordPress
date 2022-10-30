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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '.{($n&3osu1J3OPW_HNa}i6smq!!;>M8ecV^6tWQFzpT;zOwmw]oCK<DFNp#MPAT' );
define( 'SECURE_AUTH_KEY',  '<UZW#BHT_inl.1CN*gf>f73I|<.m0=IsV4Vpu>/z_yfbaY~9)C-C+16x3o114m{5' );
define( 'LOGGED_IN_KEY',    '@y6VKt2Ly:~ev0&6ARoIHLity%kUi$N.^Rz[=<X[tHC.0o|Mhg$R1jbt)&QY81R(' );
define( 'NONCE_KEY',        '&(v*b3rREBwx`P]b;q}U7GA9!h*pRLbbUL/z<r[B{)O@mD%nIC|-hrIa^V!G#8WM' );
define( 'AUTH_SALT',        'qKR3a7s](*;Oi+>y[I|n]>7EF[Tpe}LF|.EYa-/WYl?NUU#xihR.?R@tAnMwoimi' );
define( 'SECURE_AUTH_SALT', '0gc hvu7}@cL/i#+-?K$<qmVOJ$FfJ:0z9~:W#_PUeR+%7A5dejf3c`9!)gUnKCD' );
define( 'LOGGED_IN_SALT',   'ok6Ia:d[odFef$`O0.E~z~#BnIqU$#69coq5u*LY3!:{^vds$LK=gJ?2KV0O}!eU' );
define( 'NONCE_SALT',       ')#aT19g:VdbK &iAp|F5;AHrM$mApivq@gxGi$h8^:9^h:R59^APH^,&G-17&ucS' );

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
