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
define( 'DB_NAME', 'Ikaautoecolesiteweb' );

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
define( 'AUTH_KEY',         ',yo[A!PUfRja 5JsL.QR*Hd:.s*P$][MZl8oX5*CnuO>WDN,U(E<BA@wYQ3N@L*s' );
define( 'SECURE_AUTH_KEY',  '/jv(,Lk+NL+z]XY80zH/NT~!w:)&h&EiJkPWLRfd# @- lTFIY>?2.(^|H.-sAX=' );
define( 'LOGGED_IN_KEY',    '$1B[g#@SE;>k5pGLlZP-U}RQk4%POGvC.}unD2~p$8Bhn{1HH?P;;B6eeHW.-:<:' );
define( 'NONCE_KEY',        'Z5%xx!,?mc=hO5;+I]Jl< KCLOM{&~i~ieP&s6`&ZvP<-LLFXCqQ0xUhb([Oqq/k' );
define( 'AUTH_SALT',        'Z4_QTmQ}!T [s{[nA0<j)]7HQ<5uA_0+[7.oIn}:Z/a(cW|qEczebpa3%sYOi[Yd' );
define( 'SECURE_AUTH_SALT', 'eCnDLN#ZK>XM,J?^:NXuym&hO21K.kvc,S><W?_>`I3KAP{O)USO!3WE8aB{kL..' );
define( 'LOGGED_IN_SALT',   ',K<{{S9b&q {+RTN $!~ yKi2b%Wkx$i#1:}{^L!/AO>Y%;X7~Nb~UFGrSB>C qp' );
define( 'NONCE_SALT',       'cza^/9;I?L_4(hSCov/!v.:sXWal{;)1v?`zR(1x7JRV9)#p2=_)3r5JSdor~dE|' );

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
