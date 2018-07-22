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
define('DB_NAME', 'seoffein');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '>054)+DSiWd1O`G+T};B)Zy@mqpJj`kg{(a&TSH!AB0P@Z|%74;wY}xmATnSQ(:6');
define('SECURE_AUTH_KEY',  '!xNhgkk-JHS8H*4la)4rNc9!hpCoKeyecY8wpA`h]pO$}K-_J1tB|/uI[:UaecId');
define('LOGGED_IN_KEY',    '8Hi QAs)7Ko5t*}J;|C4nOqseks?s+LoMyq{ZX{UdWmMv?}Fwqj7]l.vV-vG4Gsz');
define('NONCE_KEY',        'qVe)<&rXr/zelkFI./tjI~y<MnOTKrRk+rZ>eg}EG[;ZV9(0!L2<rjNfo!t!?_0w');
define('AUTH_SALT',        'PM:b Oc*%?]<0&Wa|%N>@{<,l{z[YR~6u5b{6i*&e$79)sW%!|ukNv-4MBim}dxO');
define('SECURE_AUTH_SALT', ':+r sQg/($>~UHoRlpMh~R:_5(u(w}1XLw8b}9Iz6-x5ag15Z0p*5j<uD]x=;n?@');
define('LOGGED_IN_SALT',   'X-0iG+$Nf(:i[>AOviqpQ9Rt>%H!HLEU=BW5^M}R/}4?<`(o?aXR]-<p<4yJjgV!');
define('NONCE_SALT',       '_GI@4@JF>jkvFj2$k8Aa-Ym5;z+VjUy7,/>v6&~KV&PV;oF8X6]QSe)d`%.LK|^~');

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
