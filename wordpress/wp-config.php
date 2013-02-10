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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '|yP/^J}~,Cw=R,GPS9=1+ NB6{f04akxX)4OI{|?V(xdNNnmuLMU!9r0kv<]p4_3');
define('SECURE_AUTH_KEY',  ').|tIYL4F<+W8I-~TL_2pYK[|c*]`bjO1/0mnYk3PMCTrncQ16R2mbM<|4n}_q>J');
define('LOGGED_IN_KEY',    'yFk//]Ct%(%5+1O75XMO}lG%p1,](?Hf<z.4Vjk!;!.lq`m4//iH$ahJ&qRS4~IG');
define('NONCE_KEY',        'U14aS#(szwOQ)5$U@8.xWjNjo</7>OshLuW<2AJYHON]B;t8ko>2=f, ay$@O.pn');
define('AUTH_SALT',        'E;`QM:h-aX@-h:6Rne1qAEi}{+fYGqyr]V`p^ZfSjJB2y_:P7|zU/%b^8^nbsrw-');
define('SECURE_AUTH_SALT', 'JE-lB@n+OMAdTp;z5@1 (tSKTN/7T8~;lZ}4#DnX=C,_gV;aaIQd$2nF,GlT~.T5');
define('LOGGED_IN_SALT',   'EXZ3G^B#2wWI78J/ol6JmaanF^O<z+:{8v/SvJ3E<zfh9!EeMsphxy<WR;pLE]My');
define('NONCE_SALT',       '|X.pykmmyh-o5XF{+#1&|yVV+??.%&8]0HlP+K^-=NIR./5y|%e,55tD;=)C>FHj');

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

