<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gastronomy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XW)+IpEQaj]J%EM!c/b%k:nytkp1/n-0AU!1`Lf}V@q}bbRw!9K~w-I+rQk/j=D8' );
define( 'SECURE_AUTH_KEY',  'OZ{NO7>$#v$KK(t[1UWm:qPG?b*Nz(z>RlNh0CVhU3= u|T++1kVH J]$)_JyO>&' );
define( 'LOGGED_IN_KEY',    '](1K/pW+yHJv0EOE {{g=?h{ lr`YVR0WcGn!4LN*4(l#7L#|xhZ@cU{>WsW_(s|' );
define( 'NONCE_KEY',        '5d11l7uOzR5P@)^r4Ig<8=>p#t{kI8KM }tk8DxpQu`H]{g,0s92im2,j(sVZ{<a' );
define( 'AUTH_SALT',        '[o}eB26<w?qW<b[J#Cy|G5se#)U2CP-u^N8Clp`RG`%s@_A=v~)JM,R8}RKQ$v;3' );
define( 'SECURE_AUTH_SALT', 'T;ob+#Q&Gd@:r:J)->6k(a$wpNE5({FurkYBD>K5G=B&UMFav.}W#Kq#edz4YKH.' );
define( 'LOGGED_IN_SALT',   'w7|yRu9aWL_sSk6#KmIqs^oy`TgwdFpB`mc#fX,KsZ/7MFh<gd j{lc!M-&!LDl$' );
define( 'NONCE_SALT',       'lX$|_ddgdC_up+Y6j4&h:v{daI|2vq^6PEFGez]_4EOy+[<J/pf2Z&$n}Gih7su|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
