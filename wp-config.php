<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.1349768211630057');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.1349768211630057');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','^t3d>?*7xlQ/RpY!<zkThht3R6mo@48G&=bda2CU');
define( 'SECURE_AUTH_KEY','VMn4dJ#5LZw/[(Y*Q5@er5Ac.wgn#8f3.tOXHoU0');
define( 'LOGGED_IN_KEY','#VQ$A/[nT@mMuH%&Mof,X)w%Yo3?N%9cb=5fXZx8');
define( 'NONCE_KEY','U@4Pa<ULffa2=l/4/4t&H&FwrnTHQjS#n]nt-tJ<');
define( 'AUTH_SALT','>6I+=fuFeY0!A_%LUvSh.&v)Fv,hlE*M_tg-@hoc');
define( 'SECURE_AUTH_SALT','d/V2z!q*iK!%h]K6U99Wj#n#NSbwzPotKgWpJ])Y');
define( 'LOGGED_IN_SALT','VR@kBYxLaaA$.gYKZ2f^i/Zq*lLAk!91&P>LKbmk');
define( 'NONCE_SALT','@6>Izl+62Z3@6#K965E+_cdm$n*R)qc+CgB?*@)h');

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
