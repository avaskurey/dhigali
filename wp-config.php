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
define('DB_NAME', 'noticeb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%$64/K#/b>z1Q2xf[k9t]><%i4]`?r-m<[tnArf&?Jd1Wbxlfl^TL3Tp{&pc+-9d');
define('SECURE_AUTH_KEY',  'una9bH*C`o|}z3^vPL+1j4xbP5!q7<O`4I,#CZPJ?+Z{LAbhhRh1NMiB+cjTCsML');
define('LOGGED_IN_KEY',    'fc,hn@2JXp$Otmf~XXGUm7;9fcd{@;K%)& j|[T]CiiA?J 9m7KnFd[EUU~*,=)H');
define('NONCE_KEY',        '60G/tkY8{fmj$1x~}&M5-w><=|moV>4f*.]<MOodo-wVOrWVp?;0gMOhu0Z]4e_M');
define('AUTH_SALT',        '6sGU$v>cJ$rY0bMASq^@C5I/gLcnOm41(iHtJ:L3>_uGxv52nO(Y[^$Cno4rvCL1');
define('SECURE_AUTH_SALT', '._><PqwrB@ )r4&R[_xsU2=JmFTkH0)Ym<ir94,-(Kz.C`6qwzAfcam3]!S*DorX');
define('LOGGED_IN_SALT',   '{x6]h|NSt}ftIhA^%W_P7!O@Xu:,!jF rNONwe?FQ1DLBB}y%!)oxWJV@m3bS2fv');
define('NONCE_SALT',       '/7MHXGxp2$u]0C:Qqrr<jQ<UP+7K2ThRDVC0_Pfy`zlJ4 [5zQZ5qKU7NWmnSh,.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
