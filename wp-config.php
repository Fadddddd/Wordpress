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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O*.NqE4;QpY0w`Ll5h/2]S;rl}Ny(iL^4 707s=`|X!t]A4.k?IMMsX+BiQ:[Hl9' );
define( 'SECURE_AUTH_KEY',  '`Ux0g*i@4ARkWRwR8rV[Cp}d/1aLVv,k?DE;FjYB,B5zaDD5CIpdnw5k2rCbYTjL' );
define( 'LOGGED_IN_KEY',    'o=eb80Pk9qofK0a{/)C@_MhuFMZm>r4sx/>yc9xTwY#^NPNe)o%_vQDhYeH#W|0!' );
define( 'NONCE_KEY',        '81Si0P^B^ug]?]C>4u^9F)NA=o8<rGA`*.NPpSaz@7ur`wF&[}3?$uvK=lU#$s$p' );
define( 'AUTH_SALT',        ']Aqtc{/U[SBfo=Vi1V?h8}EeVecd;G9I$sz)o>a(VGAUqlcnJ*B4 */fShlbj`xq' );
define( 'SECURE_AUTH_SALT', 'jfnBz<J#[}Zxpi}L74.mu<<R0U$!Qy[zN]WQO3V?kYj K(s)9xec2 d&f+4O%6,v' );
define( 'LOGGED_IN_SALT',   'B4 pF$E4AVN~g &R$3_VQf&FlO2|$>]<j*~.aw-*~0Gn}k}m_2kt.Si?sENR/:!7' );
define( 'NONCE_SALT',       'phx]#R_~wFVS6Amo)M5^pjs(v8DIWNuoZW52gsEd!$Q;.YGC=(5=gb~}]UT@DUur' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
