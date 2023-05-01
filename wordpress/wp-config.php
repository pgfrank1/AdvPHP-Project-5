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
define( 'DB_NAME', 'MATC_WordPress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         ',_jV_^.DVZ8n} ILyWiI%%AzC3^2-^mTrdB~ZXuSm.~Vddv)wnE%,zU 4hw,pjqw' );
define( 'SECURE_AUTH_KEY',  ':U`k#<JV-]L0gg.5}+3qpmG#:D_siLv5J-3>Jfl9cNnHmxFdv@7$CWqpg*h!oI)~' );
define( 'LOGGED_IN_KEY',    '?MB+.G`G$Y:!jkR-/ePCLO[KY]nMLcCpQV|QrFd:72LVIU2XOM`@_,tY6JI6UA>=' );
define( 'NONCE_KEY',        '@$4RCr;`BSfCuDEWpe#zt%  $n1ZEs7l5^5n&`8.8nb/fK+nI(Nx)Vb]aW>87Pyy' );
define( 'AUTH_SALT',        'udcx)UNEHJl^g.f*Pq9[?RL:=IC3eqN<-yjZ^54[/fKwoF~CE]Px7}Nj^t`Z`pQe' );
define( 'SECURE_AUTH_SALT', 'n)FmOr/wT2KG-y2>ZIKsm&yOW}}RMn]Q@,8nMPRQaCw6n)l@<CuS9xY%,9]7Ox>?' );
define( 'LOGGED_IN_SALT',   'BdxgE|p%OsnF{$$xm?O}l>a5SA+_h<e4b-NI.Fp`O2kRE4{YO,BJ8Q%F.+$~$yTS' );
define( 'NONCE_SALT',       '.$:Zv8`f#f-{F4_X:g~IZuK^,w5[%JP`~AceA_%&-cEzKc=EDORnux%5_Bvn#(  ' );

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
