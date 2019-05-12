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
define('DB_NAME', 'wordpress49');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't{-W4>V@+#7)O~wBgItW{QL-U1ODmg R4< ,3;|tUK@_HYtBf0y0S8`G]%Vi5jIB');
define('SECURE_AUTH_KEY',  '< _>8#tjPmO%m=s(};=bt}Q`wwqnU}=1qF7}d=lZ%C]_#YU[EvFrvj:(A- uOE2w');
define('LOGGED_IN_KEY',    '4L@(`F+S}ekE#0/Tl#y+Do;~RE4hOyUldK@bKE6[/boO}JFF}aff,v2?+lq}q$3Q');
define('NONCE_KEY',        'nA~nglFO&?q_]pd7u{%hJ<2uq0J<,H1w<@4Ahi+,>^EI)5)C^b],f8f#_zbOS5-8');
define('AUTH_SALT',        'WTg]y$yKKhJ8_@7DnRBPVT~{O&7x8{Wdmw<ibEP5A(hh:(xz u 9aU*oi-Qc@BPF');
define('SECURE_AUTH_SALT', 'e!aYBA{z{<xpz:V!YO/u1[9bOh@|DUj3|ff;lHn zT;qiS,Pj&V2W+ /^r].{fA$');
define('LOGGED_IN_SALT',   'A78E.hz<.8g 8N9*3lQ?F<)0/B86Qtm@lPTHi(n)mgcJ`yW]Ih1UC._&80[%7W@e');
define('NONCE_SALT',       '=cY(-mN?]pJb7G^VtSK.o=UT:T;xk;(1it:f[Z(Q30043[v+L,i>|qC3 gTS<rdW');

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
