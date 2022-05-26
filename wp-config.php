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
define( 'DB_NAME', 'ECommerce' );

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
define( 'AUTH_KEY',         '~+-SJaL,k7_mzi{q)cT8`/Q!zy^Al8|LC`1EmQen.d@RNfMdr?vE2[h7v8HX4n$G' );
define( 'SECURE_AUTH_KEY',  'h[-XAg_v?[<S<#-!JLvUF%&J4.G=$TJFMQ4;ihUaiYww_b#IXRKr_Ve}Q+(F`<T,' );
define( 'LOGGED_IN_KEY',    '[eaeeeP2ILiP*<R$,DI8wz1N;,~M<ty~={SeK(Q}>Rf=2!%u#)RRU*}?8Ya<v>zu' );
define( 'NONCE_KEY',        'Z#=v(F--Yl)BhMbJKtL)_ni$Q1NG7wu+2Ss9 YP5wNo;/(;%Lf-r5!}wp5HGnrsl' );
define( 'AUTH_SALT',        '63]et[%sl2@[iAST>HQ vjN7<xC9:VY`uciLpW|hPNvI4qi{f+D)jC1C=5O!qv!6' );
define( 'SECURE_AUTH_SALT', 'bVUMOzf#fIds+*M`.99oU{8lnGxmm;} 2z$c)L R`pLpS$~(@jnE%rg5lhXS94EL' );
define( 'LOGGED_IN_SALT',   '|2m~*NR:g&/Z-$W!CICNrvwq9jen7<2fRws1GOa=,>P3%Ge}dln@$d+p;CN2}/d^' );
define( 'NONCE_SALT',       'iaC<ya0;D-g1`3o3TkaY=cYqPY|U2NS^@U=f$0s,5kdzrR>p}wyF=Mzr }bgkkDF' );

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
