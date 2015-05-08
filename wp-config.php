<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         ',f>`Y1$B;8}=UFM:PEd%CvjpjDF<jE;ovRry.(_/,& ?Qa4DUt{-r|n^irB]k_vb');
define('SECURE_AUTH_KEY',  '`Jc)[YhQ`PE$A)mZ!&GNIm2y!:6s|} (K 60R)y-p)x-] NXoFB0Z5n{&# M]+.A');
define('LOGGED_IN_KEY',    'fI37e`15Eu2,G_)KkqXTmx;<e1l+%==sxF$o;4$;z$9/tG^,/-:(}eoymndI^e&T');
define('NONCE_KEY',        '!qiL_wSeKO/O12sq-am1mb2Lzk23NQHK3e~&R}ZD$>$tYYw*Y^)>(E5XE0A@$)YO');
define('AUTH_SALT',        '$]Ih$nF?W%%S)KuoKuZSd7U|<f#^N]][?Uc}s(0n*U0>E(>-l6%>1~`O+!HF=E^?');
define('SECURE_AUTH_SALT', 'DM_=do+!tO+qrCxjgwx%s}lye`w_{p|.}8u.9 L{c`V1_hm>S|GRY%mP<2BT>+UF');
define('LOGGED_IN_SALT',   'l(6+XUAkHXyrhpM[C%|OCinVoqGA$|u__%&5~+M-sy- Jg!Yz;T%}TmK4&-|/AL|');
define('NONCE_SALT',       ')s^IWSXXi!>cG<6^J_+jewC/bn*Yif:_c;V;Z+*fbnxF-ImqZIUUl6=+Zy!z9+!-');

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
