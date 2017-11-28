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
define('DB_NAME', 'kembeachresort');

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
define('AUTH_KEY',         ';`UVl&w^00% K7C/X(W^iJ(yPG)[?9z1z)6W%ao>3[coEXi6*({Nr,O%p>Mf1GDx');
define('SECURE_AUTH_KEY',  '#ZW)ADNwK#!e72%Y03)cSSZh+BLqn&<Je2cfQjBBDB?:[Cg>A3^XLs,N`N9GPI^Z');
define('LOGGED_IN_KEY',    'sPg{{7ooLr1HSi:oea0}Pe_RNpMvyZ8K;m(YR: {U-$Rw&.hO#H?v/<I144A!j!x');
define('NONCE_KEY',        'FmKUY/m<6!=:1*iq4?F#PI(J6X*u<2r5Bt(2-9Q#]F$0N3cf3,xL&0J8B7zCPaXX');
define('AUTH_SALT',        'I x5{N5UL#_Py!HjAP([}<BDr[5q%#yw:0B%4Y[|K3<N?;>.`}&E-,B~RKyi[MiE');
define('SECURE_AUTH_SALT', 'W;c*/x6H0#9TFF1Sr)#Qm$#sXJ.hWAZh62iF431!+swJV2EHa]MIw 5s;J]*<sM>');
define('LOGGED_IN_SALT',   '`x4[`DD6SflLI#l[8,yYx/,hC&d`>ZH5.7A1;|V@AZj]G45biMao.e>6$joo-9[D');
define('NONCE_SALT',       'I9eL2Kk^cZ5]pq?`g(4T9a@kiSmLcI>U7P9 D7$~RTm?,}8y$$c163X-X2@t!.T<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kb';

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
