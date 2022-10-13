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
define( 'DB_NAME', 'wdpf51_wp_project6' );

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
define( 'AUTH_KEY',         'qb0!A3)M&Vl<x-IsZDI1c){U{{G(%?Fk,Gut;Q,]iWl!#hQ~v0!4gd:1,3}`@%Q(' );
define( 'SECURE_AUTH_KEY',  '4Z):b|XJ&Z7m*Qf4I?ojlrN;Z3>g63em#WykqaLjLE?k#h77d,&kA%p;>hxoY73k' );
define( 'LOGGED_IN_KEY',    'o&ueJGF`{/8mdr4^ yB,=ZJ#-u= >wyS0oF/f@wyqBN4xDfY_`09Y/~k,/@Z>(tc' );
define( 'NONCE_KEY',        'RnX,`:t!AEVSkCle]i6W,Hv<I~&7e0Fem7VPW<JlsF?0X,#E_r<_G.43_dO(hLeU' );
define( 'AUTH_SALT',        'UthDeceTZwEDi#V{Fwn<*a7L>GC[>k5/OvxZ-#NDRF)]_F[7-s_3EG0P+W))M[Wq' );
define( 'SECURE_AUTH_SALT', '%LLy(!SJOJ^KijAI8cs{4jl~mrv<ko@R-;#*1AB]Hgve~%%CVwkitKK_&#Hy*.9{' );
define( 'LOGGED_IN_SALT',   '.U,K^`>cQnu>-UP[C;Rw`~C[z+R.%:Rr$A<ATD4eA,!vkVna[ti#911}N0]ijI_e' );
define( 'NONCE_SALT',       'TM#^QFXaJ!-x!c:SUe|OO/ir(B;ZtA.z,v62jnmKI^<*(6-ExYd?M=vG+@VGLlCD' );

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
