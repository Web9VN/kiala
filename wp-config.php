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
define('DB_NAME', 'zharbetagarwin');

/** MySQL database username */
define('DB_USER', 'zharbetagarwin');

/** MySQL database password */
define('DB_PASSWORD', 'Km1jzajw');

/** MySQL hostname */
define('DB_HOST', 'mysql51-96.perso');

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
define('AUTH_KEY',         '/,Hss`O9-UPa:6P}_Y)=|Px+jm~[)wt!?<@X,cRYH4~!DuE;Gqs_ gu%kb!1[T:^');
define('SECURE_AUTH_KEY',  'DAczyZ&`o;7W>/g5LrRXi<j)!;Xc@+Y%ZTvK]~U.6gj7j{~8RTNwj~^~JMb|W,2]');
define('LOGGED_IN_KEY',    ' [hK{<y6]T |s}/BL27+lCyM8`$LL`-E`)4fW-&Dye.@hOf*1mrX4@jAD+P-G5z^');
define('NONCE_KEY',        '<U!(zFjU^Q#I{&Tx9;qspH<>J@B1AvW!?@`X+Rh$ (,S#0WW~|bZ<eK+D+to_MLc');
define('AUTH_SALT',        'ks-}uUN!6JF3I|r*+*kL+ydz0$nHU7GO7+~&Xjy1#AqdZ|$q.]rch`!N4k+6LC3M');
define('SECURE_AUTH_SALT', ':[-?zqQcUDrDX^<X.5Pl+h|sp%x&~-[ZH|RK7xdg4vcar3:?m#8|])Xl :g-?a<c');
define('LOGGED_IN_SALT',   '-yY>QIQ{F:hzJj,;QjE @o^]^&n%$Hx]*,sMn<0hCPuSZr[,dpu4_>ie].!}KRc9');
define('NONCE_SALT',       'i4p^TW&u5|<k<v3YT!j6%T;I>y0JNy?2D7)XpYDWym{[OQ,-R9wJv)q:wE@ReI[u');

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
