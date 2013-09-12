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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rockin_paws');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+E=1Pq]ouC2x7=>96?A6 (GcY9&0{|Af]B2bVM*/|R(DE-Up(&2ut-m>iNO;DP]4');
define('SECURE_AUTH_KEY',  ']UsZB4&dFz?`yM_gpsCl2,Qr_XqHbtLa%j4Zf/@~sZ-Mf5JXMFD:aihs)~bT|80T');
define('LOGGED_IN_KEY',    'T1K 0RU|/SY>7;jo_(|l2Ja8en)8qzkvvAb/h;J-+L<75r<J& ZQW681wi AwZ$q');
define('NONCE_KEY',        '!ba_Gvmu%J3]c<#1cHo*aE(q0hSshQGWK%t:1+[=ShijnRMO z/bQ?Zz#`7jAM;&');
define('AUTH_SALT',        '16VDv-FJH~7[|FiM( Vvk@|OdL wtf~&S6J]]qhb)oj+h}! -tNiXN@Wnp@l2hNu');
define('SECURE_AUTH_SALT', 'F0K#9I]`y,W-RP9uK{B_g*O,h(-b5Tc-u]hf,9)r#>D#:Yrr-+-z=-m#}:]EiD#g');
define('LOGGED_IN_SALT',   'W|/_+8,=S,h)[C(;H}+o3Iw|+]!fr8h gA|`HgxZ!Qk-8{oEs;WI?ZX_nu:q 5j6');
define('NONCE_SALT',       '.tr*Ek3MjRq%]Q.?!Q4s4`l`4*LfDI^s{8Oyvmrw!tl~)e|w66:voHB<Xs;=&i.R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
