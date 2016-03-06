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
define('DB_NAME', 'petewordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '_=c:.gRG@#FmS9-Ot_{-r?ouj/i&?&%VF+fx,%+-$&0Ox{~$,MbPkp@zw]XJZW>i');
define('SECURE_AUTH_KEY',  'x~miJ2rNgD|yrU#B} q$qxzW;,A+u%;JKU9,un/-|tM1JP_Z+-62$Ti*Fo6?6J|N');
define('LOGGED_IN_KEY',    's+,FF<e!gG^/EW}qdb_kc+iG^sihu%I*S^.P3pvi QKIOl)yTw},O!@-,MROP%ih');
define('NONCE_KEY',        '+`_0]eiHVc4L}5~_wA_&/mGo90tz3G2sHwU75?S|A^?B}`tWYon&s3_-9nC0v]0#');
define('AUTH_SALT',        '8X*y^f%q4KAywS.~E5sOB+!v@B^eMCT6LI,:fy2dR$w|JEI=0Z:lepB|WQdtB/y~');
define('SECURE_AUTH_SALT', '_t{w*nq^3X|@g`}/8f}|Ft,lv00K0?1>3Kr!rK]+}3-P][`f;STTMv#+$`@Opq!E');
define('LOGGED_IN_SALT',   'J>xq--3b8pDAlSj|M,.;bSsIv<.Bs}6CCv|0epx-?I[ih^l~;cZeh|T#Z*|w6Dd>');
define('NONCE_SALT',       'q{~4=.VogdJHQwoWgBO1F$Pte:Y6l[?KG4]%Cc43D(j(}UOsClM|] RD.lF2XP;S');

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
