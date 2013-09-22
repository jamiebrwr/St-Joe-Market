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
define('DB_NAME', 'swapandshop');

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
define('AUTH_KEY',         '>D`!@Trn~TrK.A2Q~W00H}i;N|by(:6e}FMF0XUa6M;`dYxrmTY/}%0i0,Go~:+y');
define('SECURE_AUTH_KEY',  '~^|K6pi8Ft:*|eQh!MhbO(Z$u?u0ek<FXo|K+S*<{/UTil$<y_at-!T(b`WKHN%z');
define('LOGGED_IN_KEY',    'QA`I$&FoWo[]YB,MID{|NrC-itrD0?pL=d(]A.R;jPt?*4ODL5>Ul<N|0Fu_x_gB');
define('NONCE_KEY',        'n,Hu^9tp:hnKlx{[~m%QMsF]CWn-g^ii#Fc6m>$e&.?/S$8R+.9x8`U-Irl;ZQ)f');
define('AUTH_SALT',        'i3i rEk*U`U-+kOCxKM,_X!OQfYTc-FEzL?>x.~A>(kfXpAOex<T`4ad*EO:3|{5');
define('SECURE_AUTH_SALT', 'RjuS(G${Qio;X/8d)L|%!]g^Xf-HEZ,hs=pqZ*FbyR8`oI2C+5I#Z-ie$/r$pf%v');
define('LOGGED_IN_SALT',   'o*G+=ci]tpk1HG}MBDY-0Z-?wsjz{kDP$j3Ay7^)C~pMF-+BkbSFd%+M|H)m+>0)');
define('NONCE_SALT',       '-qm&Uq}7`dCg)m?586X>H~E[{%,Kk7_iWw)XL=J`[GU/63J?1jx^,,7@{t-[co~[');

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
