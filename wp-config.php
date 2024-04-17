<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[Y-^cDl)tWF*MLazJE1,M):=w#B)(dPdb,f.;|=jydx$Y;3[y4R={]16d)!R2Xm}' );
define( 'SECURE_AUTH_KEY',  'W;~Q2}g*4Ivo-KiWmC0AhqSS!B{M_O~[Uoe3lO M?.+E@_7q2W]u-qz<T{li5C3%' );
define( 'LOGGED_IN_KEY',    '@D]Oav2;|)6`DI1nTK!XtV)B3w7fJNg?xuMj5%d)%e76%08K((HJ{OfHD>Z--FI.' );
define( 'NONCE_KEY',        'S?@K^G5=TugvwP4ocPR}]PGClVaVmU_a4l(%s&;Q7*xF#?oJ:(P,:=5g/@@PO%wM' );
define( 'AUTH_SALT',        '|~:r&Ib0B)j$s|ia/OT[=SU+vXV_mJBRcdQVzIZVnJ]Y.d^6zMdy9`HHM,136lVQ' );
define( 'SECURE_AUTH_SALT', 'MRQgvN,x/](t#bojX>%8Ecnf:CwrItNy$oSm&l$r9/-GP6L<BNty/Io|dut[>+nu' );
define( 'LOGGED_IN_SALT',   'Pc/]wAEDX$KmU}):6-*u58w/* Z!22<t!h+U> agI;{}xiC)=*~I7_G~Nj#uSb(T' );
define( 'NONCE_SALT',       '!K/?}~x#xY.eBeP{Fe|e%_4EDUAN]khz )Lr5%{i_U4foH86aoKiK]`)AC*{K`/~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'teSTwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
