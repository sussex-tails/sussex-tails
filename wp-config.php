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
define('DB_NAME', 'sussex_tails');

/** MySQL database username */
define('DB_USER', 'sussex_tails');

/** MySQL database password */
define('DB_PASSWORD', 'sNwznbkFfSw32ErT');

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
define('AUTH_KEY',         'uIz8sgWj)rg^[m@3``p+Av}rn*<*?!$5r6<8zp-*wZr^%E 83r}SAz6Pv=@m8, /');
define('SECURE_AUTH_KEY',  'xWJ_YGe({`We:|y*16kz(5eo`0m#^4 /9KZn{*ijnv_oj[%cj(Rd9_h8UA<L8?)+');
define('LOGGED_IN_KEY',    '&<:mS~Zl|U#g,zdb&sZ/jEh$KRH1v0&FGU2jedkuz|Paa.iS_/t=rw:,y%;3Bk@<');
define('NONCE_KEY',        'FQm%cJA[jfT;k1ADkxvJRu7r#.Ov<vM036i_;]vtj+ Sc0[{lY6f_SLB@|.yj*qj');
define('AUTH_SALT',        'eCXS}EZ;n}S!wGBkc$I+pgZv>1ys~O]Q[S~7IV64Mzy9q;Rj{xp-)TGy}H+f%ui[');
define('SECURE_AUTH_SALT', 'xw=J)yv#t)Qa%xRT^[{hj-QdOJrFEugiOhlCsF5g5B6oyT[T_DsBY=U%:Js`ZT3h');
define('LOGGED_IN_SALT',   '$kaepkF{bG+2C9.dg8VD8eG_^{8^B1K1SRqC;<9i_Op5aYmiz@KF$^0c?;L*+ 1~');
define('NONCE_SALT',       'lHIUTRASsxHJ_R*?SOT(,)c_Qvc@LWztg90Cz<ZGwE<l8;])P<SUB[Rt=ig~r(|>');

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
