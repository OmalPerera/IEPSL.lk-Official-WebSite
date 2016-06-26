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
define('DB_NAME', 'ipesl');

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
define('AUTH_KEY',         '9c1LeK+H-ArlL>gu8PK_%-ZkNLWMphCCN&1 3Z S#>SYFwN=#;;~KjH0:/#u9yIp');
define('SECURE_AUTH_KEY',  'eh!.75JIin|CG(A^5;:nnix[)+OZi-Ns1xZ1-#H[0Z@ZtecWIwa@7V#ZwYi<{2lL');
define('LOGGED_IN_KEY',    'msAv*5~6_9%q3t[uI]xm?mVjjHI^**`0<Xz4Wac96 ^mV65Am1I<Y28wW>{J8Vht');
define('NONCE_KEY',        'P@5OsmG<w(fidGo&<Z=Hzy0~<N?zgL{0Q{;QeMoTO1$9iLLd0H=aesDCB8#%4_.m');
define('AUTH_SALT',        '-o]S2H5?1%DyTTr853#1MUU3?(A-}77KF{l50uQp#7ho+xzNq)[U;5kA,(nC9Ke_');
define('SECURE_AUTH_SALT', '84gCXsON(v[aCDoV3T6^3xXz=lZ5ea|#f`z{dL~fq7;P@0<=Rl^DCEWxC9EQDw~}');
define('LOGGED_IN_SALT',   'ibP.Bn=w$~:On,Ah-cJ6q:pW1e1pm@RjkN<w|5A%V##Kc(xtMe|~ZfH6BgtHK2Xv');
define('NONCE_SALT',       'n|S!WPF~ -#zi-  !X|btNN MqAa-GgknpBxZlj(LbQfSnSs)aEAI{t)pEA4p2RH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ipesl_';

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
