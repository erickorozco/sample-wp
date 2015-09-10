<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'vanhorn1');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'erick123!');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w>Z{9E0ZX$=Q&5+c/2HjRUe+*79!dAUnx<6XSyejIew}<Z:6aMdlJHBGm%g0]cin');
define('SECURE_AUTH_KEY',  'u65eg.Rq>sbu`>[FPTiQ}+4K1SMf_.()I$Lu4bvGLSf?A}tM>+uN(G^KV.AcYH(B');
define('LOGGED_IN_KEY',    'B(8/Y>u]&Qx_D+N%qk <1*-MI|Sv=y:XyO| X(}pUZ3|5Vp3jye~p3VMux!|1AX7');
define('NONCE_KEY',        'P!k{D}i9`0`<x@b7tJBi|tcw*sVdo:0aP[6 TrXQ`-~#n{B6#Sb4N!(0I-]Ht%7E');
define('AUTH_SALT',        'rwX2$iI5y*^xvMp8:RhODw->t7pT:59-C+Te. OtL/tw4.EhA2.-+?:0MQSkqi/D');
define('SECURE_AUTH_SALT', '*|Mo+?qsw,a6.+d5Znp=jV|gUN+ 51XP;d9eSmR_rztLqUR].fRe%xv3~DU{`m[i');
define('LOGGED_IN_SALT',   'D0^|W:knd1Di+x;b8xq~U_Lrd5i$D[iL5l>wg)Q-GPT[zu[ss74BtR[Vspo(-}F~');
define('NONCE_SALT',       'z?dx~!,.7G]qLt]XV friC@BF1O,-mv|<V{$||Eq7]zB:-%I>hJuo:-]O[|SGk]/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vanhorn';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
