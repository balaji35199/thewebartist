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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thewebartist_db' );

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
define( 'AUTH_KEY',         '/i=;eb$PZ%N4K9ANPEX%*%s$l|*z]dRJGVschwluZZK:M^IrABx>NJ`wjp[=<;D/' );
define( 'SECURE_AUTH_KEY',  '+aPCzY,6P6)QSqz,jc4a?{eSDS$qjO$5^Zs6yNcubMV8/.wN7KbM.*cQYNLly^XV' );
define( 'LOGGED_IN_KEY',    'LC8?-j:5n[q~P6[hh~WW&i}=6&T+Ur~48jd,peQRu(xf$G2c[+GDjHCrqjrJi ?A' );
define( 'NONCE_KEY',        'hFVtd;_jA%MNuhINFQ;o<7CYVDhnUP_G<9@84:u,+i s3[KYn<#_A_Dk?/<0<txG' );
define( 'AUTH_SALT',        'NliW;j|;<T?#^%|6wAP.T;o;l@oL(?)|*[XAf%N n(Z:-vn++a/qsD30mYv7LwTt' );
define( 'SECURE_AUTH_SALT', 'WMJl/O8.H>w4>k%#Z)+ |&_55^ a?obCF(:,CMWP)!$^87L*DmAv1fz9?i}me|Zs' );
define( 'LOGGED_IN_SALT',   '3Q70;<N?2U!/.DG,9^{B1CoHZkjf{G--pbI$^hG@(W1ZNO%.r$Us7;?L6d(i,N-J' );
define( 'NONCE_SALT',       'I}#{_JthD5~6s,ItBMV7aB{9C2rNwF}i1]&*-?1JL=Uyce4We/LVYmI>mWF|Z>R4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
