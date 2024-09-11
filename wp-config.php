<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'spa' );

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
define( 'AUTH_KEY',         'NoT~E^uN=crA$?b[}+i#r*TaXYj)qgFY4DrJ!{G*7 v_UNC  P]9zJ^+TndpGzY8' );
define( 'SECURE_AUTH_KEY',  '.xzsn>Fq_56^G{g==)<3ni)#u;+ra6mJ}yeb^<?(pC}yZaOWyTipoiP xrv;,u6Z' );
define( 'LOGGED_IN_KEY',    '<esK{s4U(9XjZcQp3%V/bA3^ [%Gq*F#|#v4&MXY>r^]].SQx<mXN9KLJJrZ1q+y' );
define( 'NONCE_KEY',        '<ksdXjZ}!Oqf4m^!}_Z.|c*A.!NO`Kad0@gv%N6]epEIQPDjbO$yq7r/Z/qui[P7' );
define( 'AUTH_SALT',        '?*J.F57,L7aH4n^;[wa).$v#8pU]|:x|DDI{jZn&^`{f`TC@{9s2mI^^cyEl9)lp' );
define( 'SECURE_AUTH_SALT', '-LhI<l1I2T`?_[ttSh3+|RjMl],(g|lM40%^&#Y[KFnk{Z^%>(%i:/s9CkIBKk+a' );
define( 'LOGGED_IN_SALT',   'w#fM=bz?fGys!uG+>aVxDnG?j b~TVhlG|=(59Qh<yCs|}`9YRqlmrME$zc^/1+<' );
define( 'NONCE_SALT',       '4Ezof}F42pWL]~Zr2=3`W0C(,|0*;p>ZO#%?4Y6{eY5U.86](%r_UC]1(Q4DN<8V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sparel_';

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
