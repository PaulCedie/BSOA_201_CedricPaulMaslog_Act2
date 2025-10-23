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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'Cedie' );

/** Database password */
define( 'DB_PASSWORD', 'charliling2' );

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
define( 'AUTH_KEY',         '_aLQ@.5$H#HYSm6_DYh0:omqCb<rm[rzK*7lxYx7Ej{;|Rj[{],m9(0.#=Hcn]#u' );
define( 'SECURE_AUTH_KEY',  '^yiNw [?S[OL8V|oomExZ$i{(QqJGLg#NrQ:.D_:y C0 BI)-L)GpUs:vHNpbS%n' );
define( 'LOGGED_IN_KEY',    'jw9FL`N>94$`QP2O}F8}QO@ZZ[5|k{-Y3PM2UG#sb8$CMM$$&i .1IzexQ!#ou:8' );
define( 'NONCE_KEY',        '7KLl&E!k MkUarG>%)28TuIBOnU3HUuvz[C<o!;6:GGfiN=pz^/q*c.fwIV869oI' );
define( 'AUTH_SALT',        'U[`xFd:zLz3o@7]Ch]jCCww! LQK#$C|)hE,ta5NB%mYgc*0vyQ+W1td@NK=-QY|' );
define( 'SECURE_AUTH_SALT', '~w<DNVC]ZNAAA3H([X6$fhiK>eKyVXWIv-]s(W~%x F?gZHx,.TP1YMlE0kbkoCn' );
define( 'LOGGED_IN_SALT',   'Z8MLU.sA ;(K&Z@4-*4ofj# W)1{`{Fof&h?v@;8Ns_u<E4F5:>e.hR@:u>,bGcH' );
define( 'NONCE_SALT',       'uu@sdn0Mnn!uQv>Y{oduG+2jVE#e_Yb-DN_z@7z/EfSON}C|WZf1B:I0raIzQp-C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
