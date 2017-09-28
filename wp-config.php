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
define('DB_NAME', 'awsomethemedb');

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
define('AUTH_KEY',         '&0zq)$MT#F,&oA24z5|~coCo odHo#`ry]qY[:h=l7T1Yc3F<AFN|oZd.cZpy_gd');
define('SECURE_AUTH_KEY',  ':Kaz~lj^bgroA^<pA!qW@Oqs?ICDy/gc.B^25#O,qR< &RNRE$vzzMadD@()gbts');
define('LOGGED_IN_KEY',    'q&&W%bvrKDSoqAStn)RQ/m,!{uo_)&=_=&}6,>]-%5 UDys$+6.@r6uts(|j{=K3');
define('NONCE_KEY',        '}nc,:rIjf(JS(62jC4$RIu:,*ZI+B{Y?>w2:|iC+8%D}6R5Pi8fR$fJu1/k-}]Ln');
define('AUTH_SALT',        'BRB%s^._WVu$r<HP`:J$tkY6M-`(g,Y9xF8arN&J.j@QOIGS<6#x-HqBHWqg%5k%');
define('SECURE_AUTH_SALT', 'oEF]IQ;{4>`?ds34~)3`td l]O-YdFO3V9LD5B^m$cn=SKQI^pJV^tgSF>+t?yo.');
define('LOGGED_IN_SALT',   'GDGlhoy32hYKh26N/kiE=2%T }[KLO$s736l2Sz(i7{J/]1O)zNUzUb^m]ArKU[/');
define('NONCE_SALT',       'MB;,oSLv6a|.wZ)=X2{[z#q^pFD- ;/&`9$F>mk=/+~>NgTw~r!p.?dxvtU.O@$;');

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
