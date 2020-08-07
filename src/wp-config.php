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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eats' );

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
define( 'AUTH_KEY',         'e}z:DAE3Z4],5N&Yw7h~H45VQCvI/lDT(km%#3IX?PXM4FYvwvvG}7WhSD(jU5xZ' );
define( 'SECURE_AUTH_KEY',  '?Lj/21)[H[wWF%0d>jR`PS9/H`ZMxNoKLFya;^/+l)MZ]J *mP{tO~-04HjM2jpo' );
define( 'LOGGED_IN_KEY',    'vD^lIP~^!3WM%SG5@ASyoSY(=4acUbyRdDUsxa_~-F$$k2=^bs$JA0>&J1dbjE0y' );
define( 'NONCE_KEY',        'of.JZ8FAKe|Eoa;+T8$>QvO?F/8UOEfSfHp?)2&w}G8!{~5zs!k2OKt.ILV93aN*' );
define( 'AUTH_SALT',        '8GCc5K>:E+rb1 }qNn3c|ZFK>F)|`nmJ.Tv[>bS$m0 J%OZKDxbO!ChTv8MvcC}Q' );
define( 'SECURE_AUTH_SALT', 'YWE1L|RTl7G#X0$]X@imYn!CkP23cIYig<=oI#0lQ*<+p9W<5P#OEr]?mpkbdD=<' );
define( 'LOGGED_IN_SALT',   'fv,PyU7,sPOo63Iwwq,vt?(>#mIGVY2_]C%MD6NYJT6C@pi-]?1vnBkc6CU.W]~J' );
define( 'NONCE_SALT',       ')u$s8gD}BFACM/=~H#huZB-8Xo|qd&O.>ey.?Tbe8<(R6= @b*Cak!_.xMj#uyd ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
