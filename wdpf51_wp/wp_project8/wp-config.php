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
define( 'DB_NAME', 'wdpf51_wp_project8' );

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
define( 'AUTH_KEY',         'o]?XamBSPZ*BSqow6GvLObdl(PQg-@.G.:Hwi;2A|Gef0Z{c/0]v)*93v^/kl@W;' );
define( 'SECURE_AUTH_KEY',  'cEw>.4|6lFtcacjaCilAxExwvjOv$Nf-aT%4spm9/Ju<a:`06gy@_K:9+_TWGX:O' );
define( 'LOGGED_IN_KEY',    'N|$GGL5Cy<RZ.l;EZ,P<Ra{/,R]mr&s$*MB5A#6@6-CEtnIS 6G~a-x&9PBtBkZo' );
define( 'NONCE_KEY',        '~|_2>2[WczO=ucUC<K6 [5TZKD{IyCkhfo5hlt}H15AS=lM0z:XACca&piKC-8(;' );
define( 'AUTH_SALT',        'e|f$2W1Xu8i^/bW%|A`i;wM-$>4=lxJN {@f?E[4_AE1C>@FY9i`V!=QIlpB8r0r' );
define( 'SECURE_AUTH_SALT', 'I!Orz.b!].b)&d}E%;Yd.a^ $8|.;rtniF8@#s_|g~+<k~$c5!voND{fZ]y@?>tU' );
define( 'LOGGED_IN_SALT',   'yON$E)u.aE-DpFrHs$hc|!8]H <])%rsx%M^c^amc|KR$c/|j@mH?5KZUC*m)o9 ' );
define( 'NONCE_SALT',       'M/A.%;uf!}m2ph/Tc*.TJd+lY|ANP?n{_het^UQ-u)AP@G|3Mhdu.A Y*gde| /{' );

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
