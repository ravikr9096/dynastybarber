<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dynastybarber');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#{aaJoB0)K+Z<+0k&)1&ou U;7KoGJC}lN6g5>>vUgMG{oG|q|V nl.Ccxd:6]bR');
define('SECURE_AUTH_KEY',  'w]s6WN%~%[NNTv|B?%o3,LPzeWzou6Hjz,wR`I=:yS0gotS#Ho[CB>CBhkfQ(%i0');
define('LOGGED_IN_KEY',    ' IZc(q_og.MV*#!ym|hQ]5TkTM]U{xHMDNx^V&h3|+k+BCD/,]:%qsyXe0Ps|J(#');
define('NONCE_KEY',        '3S>Lw#I4zWs$x(X;d2]zV9*ZEQ!U_UNEgG1l8}OfKKy0J<:xy^Vsg>dQ+[upz]bd');
define('AUTH_SALT',        'pWZB@Sq;lq7os{#6rpTyT+FiW9F_[rDGt^O*<uE)SWXPnw:-p/eTt*jMTRRe0Z<Y');
define('SECURE_AUTH_SALT', 'udvU#H>*W3(/`{m^eX][H7M$ZH83/pNolzQ3fy]PvN]939O``wc2(x-=@+5,km{U');
define('LOGGED_IN_SALT',   '`wQ|DebL!&)]U/q9CO:) ?49b; Wsw?&veRAk{zBU&W[u$!{a?Tz6ea0Cn&,a>E0');
define('NONCE_SALT',       '6uS)d=Y/UQAK#T6bDNwf|842J/,DSni[Xe0CHhiE5J!^;b#wpEEjfPEQs#.T%6TO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
