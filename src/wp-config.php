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
define( 'AUTH_KEY',         '.C/AO@YlG$?vZOp9?hArj3W7dh#skm1[y)T3GPw.$YmnCWdpXpH8ZK]|Xkf^zG$G' );
define( 'SECURE_AUTH_KEY',  'Z/&tzfPNc$*TR/g%G~h`<Ur]F?2f`NRw;iBGGHR4C}gfo.)qjb/GOPa$/)0E)&I2' );
define( 'LOGGED_IN_KEY',    'xWVl0k4;,cD;;-wg3:.|6Yg;jo{m.da;!|D57!>tMYczqB`5@#A}JzCx$<e$2kJ~' );
define( 'NONCE_KEY',        'zJp*lSvHJXIl7F4cNJPAu1Lz`iH5l.noVmj}A9Rv_Er  IJ1Pw!dxo&[Bl=}R4I%' );
define( 'AUTH_SALT',        '_ [^Ep!U&?Uka d6#cc(4Wim/n0_J#DjmmwI8E50&gS=L9hkua54T4}6LkRuDJ0Y' );
define( 'SECURE_AUTH_SALT', 'LqWBTWYi{cIHO~_k/brH3+V0KQ|Mp{3&A{6o1u=}{m<0?U|zQ^tI^8B>qOanIeN!' );
define( 'LOGGED_IN_SALT',   '!a33-|UGF.V{p 8Rtc3u9k34p?|<cr7WzF7(@_ym&`{0683T|40tmcX:Iy-0@Tc7' );
define( 'NONCE_SALT',       'FgQaOXp-eG^(^]<0ARNR3ttM?eKJ=@H9yl=;x9>a%E}~G:D/Wl%U+jOC[<SJx lH' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
