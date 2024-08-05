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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'LViUAd`kWRER(FVy+QI~2e,z+UN>>3-o$WKb@jr[do%nh}XmX4Cy!xg,=b%f|j$I' );
define( 'SECURE_AUTH_KEY',   'gQ#6*rWFA[P84wOBe%/y)DPXXi9Jt[_^I*;q9]-bJ]^h.x7r;Zx~m[HQ`CO@zoV/' );
define( 'LOGGED_IN_KEY',     'SL2H6=[N}L*LUc{{FXIo(>`uL%zRDYR{m1t9eRC)a]g#6FT4%4 r%@bQLe%>t25j' );
define( 'NONCE_KEY',         'YTqv}TG$S{Pwx5#~N=H<6#23LtXWApJX0 KY?]dHgLyOrpt>j.ca!N`scmQl[/Ej' );
define( 'AUTH_SALT',         '&83:|MsMRu?YTc%=((-nHc;|odRo6d$)&oamxT~W,L1:qOFvMtvvXyrgs^bdnkdE' );
define( 'SECURE_AUTH_SALT',  'z[ENZGweiOFzY39! F/a(4g&wUl(!`Oo.JMU;+/]WZFzJl_]EEtuLmVmQ[YLD1pF' );
define( 'LOGGED_IN_SALT',    'B~PfFk|seGv/;A 6|8;5,cHT?{5z9I%HvL;YNkSXic|Bv{xu+FZpUS~4t5W{B1zC' );
define( 'NONCE_SALT',        'K])KNuTod.g)e9Yj~oZ}>gdoHpWr_IV/[n4shnZorw?L:FC8{eK_Dq!&|8Sw(&zx' );
define( 'WP_CACHE_KEY_SALT', ')^4&rvI--z.QSKPF9CDa6nEj!-P6])wg44OLS/0;9%jMEh4E NG/: m|cgYEV5lj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
