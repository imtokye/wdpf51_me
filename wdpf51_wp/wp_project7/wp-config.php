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
define( 'DB_NAME', 'wdpf51_wp_project7' );

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
define( 'AUTH_KEY',         'KjY4#ps&8kO!/]%2,27?G=,)SE8doAj{$;.0Zv,q4T&L>|[u,lz?qMi7.I5--OKd' );
define( 'SECURE_AUTH_KEY',  '*k63!u[@_$L[PVr1tAM[G!IPty*%;rL89j5;`Y{g,vBVu}sypos/][YR9>+Ql,Ko' );
define( 'LOGGED_IN_KEY',    '-.{6a?-/8N=UEDzFi7yEXM^a MBg^@M#3)|laS7W)is;VJ66G$}Y==tPC6lYB,Rn' );
define( 'NONCE_KEY',        '$wM> ]ooq0WSx;+CPsd%Nxj0J6uto4LyM/IpyH<^mxDlIkR|[$;B4N{`r?q[3~}|' );
define( 'AUTH_SALT',        '`Lh|;9=RH(GY82dPV~YpIeo8XBfQN`K}68R.j OkLwtL./eLIt;^te.gVN>lM.hu' );
define( 'SECURE_AUTH_SALT', 'AUg#(}1GfKbo.m@p^]GJM%rNu&xIV caX,TJ([kWBx>$R`S^#qKT!=<>tUXsXk=B' );
define( 'LOGGED_IN_SALT',   'LM8:4+M,`Si-Feyx&r$HUrnkjG6/`4EL_cE7j^N/F/|.dA}h^?Vm^B6ssUBE.PD5' );
define( 'NONCE_SALT',       'frn+jBSAg i9:>I~9`6;Wavt]E~ro5Yr%s!D*#euZ@AKApsNt>8cX!_[=z;.S1,F' );

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
