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
define('DB_NAME', 'trangkat-wp');

/** MySQL database username */
define('DB_USER', 'trangkat-wp');

/** MySQL database password */
define('DB_PASSWORD', 'projecT5522');

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
define('AUTH_KEY',         'J*A+ ?SjM3-fs??3z,L~!kiEq.j9S&eqveMN2$}6@J#AnYu%4h>H*HKo`nm$0_`$');
define('SECURE_AUTH_KEY',  '&CRH9U{-$5GrPCGwhgb8uu{5+L@>=dh=d%|=/&(*`tdZPbOtk]pswJf=VXeA_G[c');
define('LOGGED_IN_KEY',    '$Y-J4j+e5SVL/kIx=~peJ@CFT$}UIB[a%`}XQb.9dc]SM.PVB/o/LrrP(L>w|p?r');
define('NONCE_KEY',        'tB[}@z{a/k|CuKWw1^?LCsS4k63%~:1rOtuMd~GM`0LH5-zc.$QgLHs.bB}E-}(&');
define('AUTH_SALT',        'SCt#0j!q6[_sGk@^3HsleK@w?w-;9t@iR:0sATOh;F6~|SD^a%iKW0.<hgExtF*V');
define('SECURE_AUTH_SALT', '<pY*?>O4*a@ #KTq;O8s/)gA2oP^ybg~|e4Y$x&^i*h<D&Z2{?~5twJyKfDxfw#2');
define('LOGGED_IN_SALT',   '72OhDU6LQuNiu)Gwd_u+x8IF~7P#3%P@|~Q(PD8@vy<0Ob0^(T$uF-Et1~[FQYvg');
define('NONCE_SALT',       '+HUnIvHQP]P1gP[aPS-,3+Tib7k9:_H5;5E6uTVz>Duk[_P32rmxxZL/xV9%t)j0');

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
