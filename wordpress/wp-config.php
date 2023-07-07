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
define( 'DB_NAME', 'woocommernce' );

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
define( 'AUTH_KEY',         'ggciU~cnuZAa<,rWm-:qZSZ1-`|hm|S:|hbpUX)4ncUvTT(^GnFIqOcRACqmiS3>' );
define( 'SECURE_AUTH_KEY',  'jb.K uNa-(2p rF_qCDA86L_8ZAZB{;gqLpF!S*]e1Y6W,>ZGxc]QbG[)k7M{|e2' );
define( 'LOGGED_IN_KEY',    '?C42qDL@pXj;Fpcf|h}AI#$:W%.0Rh`T1>4dR2`u.0v/fN~5&ia.<<%3ha~*few^' );
define( 'NONCE_KEY',        'uP5w;#V+A@%!*;sNWb(P0Ud7-*^`3_nQsL#C5~0+][At7R^tLmV!h#w>O=&]YUwP' );
define( 'AUTH_SALT',        'uuX Hr*3VP9qVm6&aR!-(0seZ/>O0A9)OAm10xo[he^hcm6Q-<JNaA5pF]L!tbs!' );
define( 'SECURE_AUTH_SALT', 'Fbz[Fqiq5G>pQh3}^!KM{]C5>H@:zvxQZ4[dPh#E9[T_PyxkISHA+2v1^B>4;$C-' );
define( 'LOGGED_IN_SALT',   'r`b R&@ib3-@(1Ff60fwRTC&*F-3D7.MydLgZoE55lx_7~l7>#g(y}DrWWdr7M#?' );
define( 'NONCE_SALT',       'Ih0Qs:-*lpu6%0D$Wwho!aB6_Wdg{ hd|4XsN> }]>4{d5`|lccQ.FH%ldXg8ZF+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecomm';

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
