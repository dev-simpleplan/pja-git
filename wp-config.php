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
define( 'DB_NAME', 'pja_git' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J%ud&jIVErn>3S+vy 6tq?c=^u&za:`y9QIDn&E$b Pp(m=)`e/D[Bm/JR+)S#:#' );
define( 'SECURE_AUTH_KEY',  '/iHlvSNX)+-ur36p#S|{,`@I4.VZ39n@ex*~Bl(@T`EszG: qe-||mU.*gd[Uu,}' );
define( 'LOGGED_IN_KEY',    'v{,WUtMB:.I>CZ@s]6n%h@;iTFyAs<^EqAOlR6%zyeTMYid$Wrwd#2=0kx(MmZcM' );
define( 'NONCE_KEY',        'o#w015f&;lYZ5@^4-#iA%(=GBrVp<Q3]rn|!,EtNcPiDj4{JI@aE?-9%ec#[ f~~' );
define( 'AUTH_SALT',        'L0I&lve.+-L/hm>7)QN{/x3cl7_<I?p:R~.I ]xxBD[m_|-Sw;<poP{#]2]FN=J9' );
define( 'SECURE_AUTH_SALT', '{g-h`wbg^m`} )YNK+kc`HV/_JbsKl4YIkLA.W$+Tl%`,+DuJqq2z{a.So*fNnvs' );
define( 'LOGGED_IN_SALT',   '6/5f}8ZTvG3=Rx(yHdC!l*)[!X]KD#9o8$P5?y*bgCruD,:MydedHK!X*4@#/L6-' );
define( 'NONCE_SALT',       'cE-Z0NsrBdH+d<&&1}MYBYg!,AUcA[f$:}#_Da9ep_n<u*>xMefcx7k_jk*)<4,~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pj_';

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
