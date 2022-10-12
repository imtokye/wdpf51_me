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
define( 'DB_NAME', 'wdpf51_wp_project5' );

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
define( 'AUTH_KEY',         'RBkf$Sha:nn19lv+od=/r53@rdeT=U].PxiC)ycmJ!J?T&>_j/_s+Jbnwr~N.R?o' );
define( 'SECURE_AUTH_KEY',  'ax,z^qdm;ZBYQfQfL,qJUdX6/F(K`~[I,4v/d!1P4gW?;y ZfN?AvwtXj;ckRlE-' );
define( 'LOGGED_IN_KEY',    '5u1}GtNoB<moH%-xpLpt{D#K!;|Ifmq.=EE2zF:8d;1pH[&yF-XR>JBAyW<:(46|' );
define( 'NONCE_KEY',        'w-@{T%qRbHmb3QoCBBjt;%5qol*[?~B5?&<S$GVG[w+>{]lV16%DXRzN[r,;AA.D' );
define( 'AUTH_SALT',        ',,s&8KnX<$eU?R[X]i3|A^3ie2B6{t&-v;IK,z5})6J;Uzo0@inH?7Z}b4Y]N9EE' );
define( 'SECURE_AUTH_SALT', '4[hyh{O8.>vp*,6i}Cxjz>VJCy7c4`Cn`XPgthNxv18b:M8l%r=J/i>wP|CBb+tW' );
define( 'LOGGED_IN_SALT',   'DjEinbN#&J+n_y&OcR0f4bFo%HQxoBk-XR_GSysHA#-$/wLy(D?{ih9x:$0R:sEm' );
define( 'NONCE_SALT',       '3&!(CRP~q69mqP,t=nOI!)*Hn8r/*rRBcH-%fkfpQKWq;b~PCQ:`iB_sYY^+B%|c' );

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
define('WP_CONTENT_DIR',
$_SERVER['DOCUMENT_ROOT'].'\WDPF_51_1269797\wdpf51_wp\wp-content');

define('WP_CONTENT_URL',
'http://localhost/wdpf_51_1269797/wdpf51_wp/wp_project5/wp-content');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';




