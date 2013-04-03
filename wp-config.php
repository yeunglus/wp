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
define('DB_NAME', 'sample');

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
define('AUTH_KEY',         '`-v=4.l<@s_F8N*ycRvoQwKNep,m,5~:,NNof@g6Hs%tTNAjjvkiJ[v7T,:,<A(^');
define('SECURE_AUTH_KEY',  'bVn24{3YmUO9z#!%o)c6(u12TkVGo.(E%Iv8A.GFv6;3V})elGtj!ib59x:|$AqH');
define('LOGGED_IN_KEY',    '2.oLB9c[@w_w$i/(R2cY3H8o +T8M0w+AFh&zQ=eQ>.)9b_>fs$BUnRI):$UR~pM');
define('NONCE_KEY',        'S^mm#c4l*hZhf8Owy|-JYr]O6i7wX-Cds)&~3`-NvkbR2JF!Tj|_!<HIT~N7(K_1');
define('AUTH_SALT',        'n=!:K%K08>&6ln1<zJ(n!RA%I>/Von4e?LT0Rq:^*A.[D/k=&[$mYYB5J~tzYX<%');
define('SECURE_AUTH_SALT', ';?X(2}kzVf{J/j>G^62~4To*8{FNSV}:nA/1Co=!o6e}-)R]H#i$,,he+f4W7RYo');
define('LOGGED_IN_SALT',   '{9P_rZcf%|Ac: CF&;B `va(L}RGF&;;x+iQ0NIMxYypF6}:d*tj5.-~iYTrgl&l');
define('NONCE_SALT',       'i35]rLRS@IMs$Er(}f}L%|Q7BRu}+?j7G:$Z%M$3LFV-nNi&z:)eVJ]3`;AcUwOT');

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
