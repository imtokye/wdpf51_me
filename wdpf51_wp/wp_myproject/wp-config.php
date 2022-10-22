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
define( 'DB_NAME', 'wdpf51_wp_myproject' );

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
define( 'AUTH_KEY',         'F:5}S$jBxXD6&aE4repPkckv5Zcm?),Et/!b#&8RDbPs0I_GpTn(j4x*GAO7wqY0' );
define( 'SECURE_AUTH_KEY',  'FlYyZu[>0f5!4S$pdKB=$LP;~36S84}m~#MB14%5[`%  !5 e7p5nwO{9Kx@m6R+' );
define( 'LOGGED_IN_KEY',    '06c-NoIp)Ur<Lo*|cHO>#Qn:vA&,v:4~]j.!~c;QrDhzW+^GxWu,qnWY_ 68zp_O' );
define( 'NONCE_KEY',        'EwJ57g-+(4P$=~h_[jcp%hD~v*W25&?nR 4C^o=~2``VPvUWCA`60>39B$x;-0M(' );
define( 'AUTH_SALT',        ';[Af/=3a[?~f<Lr8tz!#=NzFF$GC;x%>-EV3+:*(,Y,NQ^$7v`S)s,]Q%R7^tT5S' );
define( 'SECURE_AUTH_SALT', 'V, .eh?kup/PAh[V}u{ylo(ZPx1Q$yLd2U*PsaJr)6[cwcg/-,FWg8:,~(LaApeC' );
define( 'LOGGED_IN_SALT',   'G!UgA6+(PX_lNps(iQ_RWJ/^$.];P=tlJPF`(L$?.+T%o&>CNw$ZkMpcGjB|F<Ma' );
define( 'NONCE_SALT',       '8m Q3yFC%Gz2Q[rar|S^ul}8/_~9>s0^-Z*,gObgXYY)|N[4T~no2n5U K^E,2.l' );

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
