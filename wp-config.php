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
define('DB_NAME', 'student_profile');

/** MySQL database username */
define('DB_USER', 'ecbohler');

/** MySQL database password */
define('DB_PASSWORD', 'p@$$w0rd');

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
define('AUTH_KEY',         'pLX(rJpXJ)^5Az-n#{b)o+q7&X,@nNd~pNmS;Qe3++73.SlPijcbG+;W+eKO|)SE');
define('SECURE_AUTH_KEY',  'BB[+)(,MZ+SMv3LUM-(|66rO<VLg[be@WNhFyQ0IY;V^^&.pJ?%:2-#`y>d=4<K.');
define('LOGGED_IN_KEY',    'L&i.>}IBj<Ry-s4[3(H/B~fCFMfaQ(iB:3Eggt4+X@_^9|)^!#w_Te>V|JP#y;Z.');
define('NONCE_KEY',        '>0VPKI#1#j2,Q+?YY1QN:i)mM@~h=v!Q*oV#QphCiA3XZlh5JLrcS-L|G5TC@4!J');
define('AUTH_SALT',        'kWeQ5PtQ_Sa0b5tx<Oc*|`c!-LNBr,cBzvjz?A6{A<Z_/)8X1%=ZzCy*c/^n#vh,');
define('SECURE_AUTH_SALT', 'YO-V%~SOSo!C)|X|zh_:r]cxDXm[Jet+yRd.j7Kbac#c.4H3^-ZpH!0md<SJoO1w');
define('LOGGED_IN_SALT',   'FR@J_7A.Fn@.*5?S>.%|+OR?|%+d8l&n+~qMfvXqq{Sm/Q4H,;t4p|*2}RsO<5pD');
define('NONCE_SALT',       '<_vDhS?6zm6Ic|I..(f+f@X]X53V}_C/!`n=+sBp2Snz>BDkhq=+*|5KP| !@g 5');

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
