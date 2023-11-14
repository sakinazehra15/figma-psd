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
define( 'DB_NAME', 'sakinazehra' );

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
define( 'AUTH_KEY',         '<1R+6a)nloj/3 ?xTw^3{Cu%,)[w@@?]=vgV 7](#nJD) ^eHI*TGUJ0e~@TPpBl' );
define( 'SECURE_AUTH_KEY',  '@FxK(ji?~:Qw@lM990 gwC#?L&[X4*@M?JX eBQTNw^}<Xk2WabnK@GCs|[)x[4]' );
define( 'LOGGED_IN_KEY',    ']1#B0P01Z80o@D|t]yy~=q#}D0K[?K/o91 ,7!h*Y}j}PoK<uD-}Dl${$(laD,Wg' );
define( 'NONCE_KEY',        'U@gM0b@d`X_m_,,tD[QmxHu;AZ@%)Zq??|gIvQM3=bB-ezqV@7u$`1i|7.u(W7FF' );
define( 'AUTH_SALT',        'j>,GG^_go(g~Cw;@`#FEj=CWX7Q%uW-q)SMQGVT^G`YLe;zIsrQk%}2RtePUABP|' );
define( 'SECURE_AUTH_SALT', '~(qD!K8`U!3lc9St0mN(9{nTtV}m.*)=jrVeC^_:,4^<X![-AAHwFIjJ9AQPTztk' );
define( 'LOGGED_IN_SALT',   '~d!a@`^tZjO#_}p;6yYT>/^#hcEO49KX </-Yp@^wO*;u(mFR i?D`FhtqE-D+*x' );
define( 'NONCE_SALT',       'gcaC1S*J#%?QvER+7*vkcfwYU;FRA?e:or7XKY9<em}_<kW%V{&)K2,tfv @cT{~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sz_';

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
