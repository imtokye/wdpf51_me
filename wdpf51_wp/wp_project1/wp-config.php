<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wdpf51_wp_project1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7/bzHps)]idR`I|B>igl/.ak`;u]5ZE8b;M6-F(wBQsJxTWnDe9%wzCo;7sv|qDP');
define('SECURE_AUTH_KEY',  '!cl!$|&P2`uvkb}){_2w{lTH,2+@JSu4>A7*cwy )7WVZz@FbnPd%BVX,Q37[5^1');
define('LOGGED_IN_KEY',    'JUyfQ>K/4[VHbK+w-{M&XtY;2H4]65c&&u^jGK7cOx,X|2on<r.S(a,@nlpvIDzL');
define('NONCE_KEY',        'F5maGmRnqf(gGV<0j`|m?n?;e9p-*NsAkv2~Gm6xM@SF6B0R/mp;u3wPz ITEbYI');
define('AUTH_SALT',        'el<A$[Zsos$aW}zO6&`SFOj)SMQss7=nJ<S+wg)!4*zb>(.s/amxjOG+ucE%T);F');
define('SECURE_AUTH_SALT', '7u1Y6r ?7a5v#J19X^3nTVNlcT^ja7ezk*-U|jJ)tEI.P*=#!8!WkCOd;+/>Q3[B');
define('LOGGED_IN_SALT',   'z;YS_|Mbc`CK<FI.-<<b;f,+NB^YhmDV|}M1P1n$NKd/}lBW=S D6zeFsSEIPmz%');
define('NONCE_SALT',       'FcHxpTTK+1k-}g;Gz9[uVGjhuk:hyiDA0v%HI_zo-5Dxh1Rfj>BX`YWDvEnnIU=a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdpf51_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
