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
define( 'DB_NAME', 'wdpf51_wp_project4' );

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
define( 'AUTH_KEY',         'N;`jRvp;4({(>CK*^ {-6Cxq_,l$_@ReB*$_UDCE?(^!7-[dmUcXv&i&*o%1RS~4' );
define( 'SECURE_AUTH_KEY',  '.I!B+M8K;C_Cc<muznz2]r8jqufB}#nB|^YLy$^D1r.P-Ii^IUtIL7N:FpU@hV+P' );
define( 'LOGGED_IN_KEY',    ')Eqo>t}Fq98q4X>qeyoi6*bi~A5>l=2+02:CynW5pt9,$IJjak,%6Ij,Hr`b_z<U' );
define( 'NONCE_KEY',        '%U.tdk-W%` ^hZyhgH]^=!ej~FmzUp5BMw^pIG=!*G`$2UnFTn^ZyQ#`.ez7;zmx' );
define( 'AUTH_SALT',        '6[I~2ZysGYEF)WxRW9aGK|`|TpsVB5=Mp`E<3vFF(eT~VOl/&vM;e5[l,9bftv,6' );
define( 'SECURE_AUTH_SALT', 'u;vfeci2A*1EA0m18P#$QVpP9zJS||ciTmelDr)]TkM;b=X8e}kirQ=!9WE#Q[17' );
define( 'LOGGED_IN_SALT',   'k~yjFWIz[Z/Mb<R<Kv>kMVCYZNnou;W6PbEuRs!,T~PEYTYJCW>$y >UysmMT53_' );
define( 'NONCE_SALT',       'TUw8%DO]4h*-z;M@@&E#|zp9*`BnLE!d:2gp*V04)bb<#x1<PD$x@mHv37SWf/LZ' );

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

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf_51_1269797/wdpf51_wp/wp_project4/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
