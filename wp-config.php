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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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

define( 'FS_METHOD', 'direct');


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
define( 'AUTH_KEY',         'Gosp](>&~L0FHy#3~q@6[LPO9KAMwIYy3gP4+IcZ010YGjPY!=+DTHlkq|Wa+${#' );
define( 'SECURE_AUTH_KEY',  '(yK-+d=oT38!O 1$A6H$Nm{J.<g pjUZ!Sf#E9={.Fp5vSV.`N<NPRX@:k#We<mC' );
define( 'LOGGED_IN_KEY',    'LN`^njFr=<@%*`PEHG/g^2)(-Ytb<Kog1kwjI,-*L^*n`FdEfp);3}nxfC2,%1XF' );
define( 'NONCE_KEY',        'ftS#B4}HeD*bARJz< *%WX^@;1tg;lC/x+.*0R#9$n{F_2o5nKZ%JhdD0:uaI2A{' );
define( 'AUTH_SALT',        'Y<+YMef~7$$f+zVDLT2Dp;d}-M!//-q8Wi,wFjd+Q&[9]~V3Z$m 6Nu%I8Sx31CO' );
define( 'SECURE_AUTH_SALT', 'R<TjSHV{K9clS RbzzcVa7OeBC-ra]Y-[=qyg)8iP.%OpBx!.%Ksawc,zaOr%z&B' );
define( 'LOGGED_IN_SALT',   'WIG)P]>BuI~&.6o6%X)~&3S$jI`u&( TLW;jrrW9n^pW[+>F@Wb!j,x73i!P|ooW' );
define( 'NONCE_SALT',       'MlWx;Zs9c4gw8fZ&`+= v:TnO.($ATZD}mo1)Rx47;](PCp%;gnpJxt#k}GrOE!j' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
