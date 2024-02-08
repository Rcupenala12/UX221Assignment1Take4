<?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.1889340525656187');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.1889340525656187');
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
define( 'AUTH_KEY','Fq3(>pldP7[LBv#5y+nrZa)Sl)97CY9v.X1$mE4J');
define( 'SECURE_AUTH_KEY','cBcrycxB6-1g=c,#YTgcu.<R5.x=#=vsWAc]f8vE');
define( 'LOGGED_IN_KEY','n)39cYhQq5$QK%kPx0%@157HV-$as921@I-qX?(0');
define( 'NONCE_KEY','8xeMjt0H2WkmWk^L_JqghGljFFLF7mf!6mYPx7hL');
define( 'AUTH_SALT','^>-3=iHocXB%C*7_fj#YFczrVIe(N=aQz+Njtgu_');
define( 'SECURE_AUTH_SALT','6ONTG[6xY+Xxr?WKQJ%FvWZG0^]kE6p5>lN,uUB)');
define( 'LOGGED_IN_SALT','mp7t_VxBNXF8gSCFoj1h3hg$/J4L$<wbKD#2o_KH');
define( 'NONCE_SALT','4EmV+$yhgo@7@oTO3(aG]AHK/u/6O[WXd5)^-.#X');

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
