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
define('DB_NAME', 'guard_test_server');

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
define('AUTH_KEY',         'l>#B`VcO|&z2n{-O!AJ@Wn)TsTE.)z3F%sa,OxG6[DwJM}Fy/G?Z0(`+*_>pyU,!');
define('SECURE_AUTH_KEY',  'Cn|K_v^a`FlJwH03B4M-LT)n|8wW6/rDIXj><slKjM`M[9R:gzDWT(oX:}Hccg<x');
define('LOGGED_IN_KEY',    '^x{/h`2 LhLqBv]`R79x}F3,1pfUMBr|_]KB^-?F*a}#yFZZ%ZlQSs6C(%|OBoV^');
define('NONCE_KEY',        'UM9f?]0eukLMGI=3<f`t](s;n>PX*ic2O@iJ]N(q-vcWoHfCG@XvK%k|^pf%&C5@');
define('AUTH_SALT',        'w8jG%cuwM9V!F7|qT#QVB5,z4:>ypcC2,TZ(Ev(GUb3p#xlD%N0G~HQvC`*B!|$d');
define('SECURE_AUTH_SALT', 'dMpw`q+h_Z;5a_)Q)gG8zi~OAtX!|TsD%VDpvl~MEusOCBCr  JYXboKR1&&6R>U');
define('LOGGED_IN_SALT',   ',6BoDpuRMpgh`#i||Ui|](-pJ@eiRtCQ+)bGh=D)--E`hJykj%(#vfZ4}q-glj-<');
define('NONCE_SALT',       'NF.ONCmHk+0w@DPd[4ytKKv`ae-QMn?*x]x8F-*/CKPRJ(SW~|muMmr?Uu:_oJ55');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'guard_test_server_';

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
