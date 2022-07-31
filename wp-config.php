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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '3-FKiJ9msR>rOW6 YC-CvZ*JWt{qINc5:cOHh=6.&@N(xeB,m$n lcx@#N>|aOG_' );
define( 'SECURE_AUTH_KEY',  'nn6RUd8)x&cAMfRc-)m4$#%A(Sxs.d_ [jThycfoIqQzb7Vps3*5T%3sC_7tb+C]' );
define( 'LOGGED_IN_KEY',    '#,d^>3JGDOng>ODO)SG-86g#DtTgG0v>bR ,Uv92,L@Gf%q1mAFtAIzEQMf 3bZf' );
define( 'NONCE_KEY',        '^9BnAcy{_jVowm@MJ]9:#l}b][!V,4hD4^Cbq1|*c?[v,u6~>aIY;`biMT@(5r7%' );
define( 'AUTH_SALT',        '4y!j^^I5i4aO_}KU7lx4h~3KQDC}7m,n2RHfy~tGZ.D>,@7}pU(:/=IOx`_2__x-' );
define( 'SECURE_AUTH_SALT', 'P2y>u?;NQA%y}#9N?#@}3H-5S1l0:?X)$fL+Y Vwg)YWne;#>_t?3JxA`d4#r49g' );
define( 'LOGGED_IN_SALT',   'lFUc`n3VMF{(6pRDlFJb@Jv]#.ZwxgpF:$Q{qCBHlQKhQ57VY+64X GS^(;t8CzD' );
define( 'NONCE_SALT',       'gSq0-N>GCI6B^JrWb@M;|^?m| |%`aiu)8TBP>aUBt[`8s,AXv,<-7igIkYUtT>Z' );

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
