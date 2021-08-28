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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kcommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'e%W0Gvm,qrCyZcGU(_bdN635OO2.7Zo?Yh!yU5zfYyShZ+_|:eDZ^(r,Jy+>2n,Z' );
define( 'SECURE_AUTH_KEY',  '(h2AB03ED2zzL:hjBd;{(>pm`d[}[-!+u24j1vQR%wt%YhFn~L`Ol`~Wr@>7NbA1' );
define( 'LOGGED_IN_KEY',    'fVc2G~Rm7pH3X (^18p%8P/X)@OO5K!F6J~kwm9]&I0Y!HS[e,;.;6)(Cq+0huG`' );
define( 'NONCE_KEY',        'n[Xp6zdG1mFmt>L;kZkb^WWMeQ jvMptgY:|&UQ|vwn*{-<CdUW>eM] l%`xfI* ' );
define( 'AUTH_SALT',        'VLZ|hZ@=}Rw;lUL0!L2Kpz&vIW8#725Ma#/4u})/T-qxli7tl^Hc1atwF05&m7=a' );
define( 'SECURE_AUTH_SALT', '{-|C6gp`EOF?2z@jpNOS0`BM[U*m<nq+mEf5dHr`$>4|s&>p=U,H6qO7QmVqBKad' );
define( 'LOGGED_IN_SALT',   'V_QFz_NcP/ALVdU$;/SGvS%M8g7+[17~lqc,lH9B):^)7Tx]u4|AvV:G:0!94_k ' );
define( 'NONCE_SALT',       ']A3 gIv3i@9<cxZ>B+&+?])&qmWkfnIEBT{XItF_Ka:SQmY/A2nK[Ab&3zv<bTG2' );

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
