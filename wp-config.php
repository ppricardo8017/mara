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
define( 'DB_NAME', 'mara' );

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
define( 'AUTH_KEY',         'xZLtwG?R>E:zHl}tB^(Pgfd@W-Bjr<T38sj>i?%/Qlq6p^2RUq{r^55@C?l;xQ+l' );
define( 'SECURE_AUTH_KEY',  'q~Y];p(/,%dwNICFQ-7Cy&]A:1D(MhGBe#d1Qtm{{5[2q7fcatI)f}) Q&h|I3[5' );
define( 'LOGGED_IN_KEY',    '3{uca1#pd<^uSY)u8,>}SV[cM(YTV%+yFH*wRTQi&5%jX=i[XlZjA (C|(A$ddYk' );
define( 'NONCE_KEY',        '1r%yH)tZL`i[O&l4`DUtC+8};tE%7?717_]Wc+K[vZXCW=JNY)eqO+NXbDY>m3[o' );
define( 'AUTH_SALT',        '%CIMDtwnKd~YqUc*?:3[I-yI!r]6jK;l]p!swq-@!#K{XCbpVuXP/p;DWD2*&ISQ' );
define( 'SECURE_AUTH_SALT', '(Siq:;4(ayL`W<v6G5&Mx{FAFilJMMYifE*Kmc9i>5,ivs?0x9qB~;08Cpx^?zXY' );
define( 'LOGGED_IN_SALT',   '@Ta^Y _TwcPkbk3YPvbIMAz7V~3w#GnjV`e_|y3^%u,Lj {bg9bb>&ziI3-K0q;^' );
define( 'NONCE_SALT',       '4>!xa<;P`C5QnS^ZeqDl~lW>b__H2~[<31OUoQyt}y>;;)~bSB|%FLed+Ab1*clf' );

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
