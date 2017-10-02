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
define('DB_NAME', 'anvat_db');

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
define('AUTH_KEY',         'zjVAL;]RGhKF4L2Y>%_8nhhFICG~b@;d}M0{.><52g1ZE H$Zi$8!EAp3CCgFD!K');
define('SECURE_AUTH_KEY',  ',X%HPw[;%flhfs2;7nGlrMItE<:$u46seYuSmRl[mZ!W9GQ=P?a(wV@gH,RhVS)p');
define('LOGGED_IN_KEY',    ',P;Us.}m#)U4cGsbwHPqA[yG9BfKV|YI0R4puEl}i(=#1}?=8s59t&EKXhXhtOWF');
define('NONCE_KEY',        '3Wk^dF{-LOr>+}/V4x:C6JyhFn|XWw(0=_ktwa~D3T[T#i=};r|4F)ch:<IAV5m&');
define('AUTH_SALT',        'EBln.5cOufn7=ks1nJ,%FU;K kH-h;CJuk%S~2;:e]*eWO2J qf)z/f1]Fer bn3');
define('SECURE_AUTH_SALT', 'X}?9db%tzdwp]D&pe^,#9`67b$kSE?f`;VOm[Nf;&tmh$OL?@D7bPu$`jt9|H[Zl');
define('LOGGED_IN_SALT',   '`q/t5ZK[7>me0Yo5x_J6sPxSxuHK=UU%_1kphrrldEfE)c[$Oe@u4P:sUL4HyxY(');
define('NONCE_SALT',       '2){,<>drc_Incr?F<I:x-tl?]iKtu.^gs.gr0]%$>oA)g:r_[]X F^>7#q;fRzt|');

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
