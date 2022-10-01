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
define( 'DB_NAME', "duplicator" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '&n:Sz7*X=Am=#(<x9OE/ZFm:/z{zC,NAi3xQ=mV;1yY6EB4|*w_3#?tsM?XprDBD' );
define( 'SECURE_AUTH_KEY',  '9l@e7O]#PDe1)5<B4ETcI54[e}i^axH;K:)XGJ9w:5;1E/zx+}UZ6>J/Ilh|!mwj' );
define( 'LOGGED_IN_KEY',    'bVH)M~jrLLC]qN},gWmVVI<g?fm]Q!7IN+-x5,1*78snAzKIn]}<>5tpzm*Vi?gj' );
define( 'NONCE_KEY',        'UPz~F{&:AV/@:X}7l[k=P(gh[II:S#qoch:h[~_f|#f)@N36J$Ce5T!h)=VH^pu9' );
define( 'AUTH_SALT',        'z3kxNG#/D?x[iIkL/VP]xd?^CzF65YL*dhdyVTr4al{=|*JiQp;J)yOue;`)~`2E' );
define( 'SECURE_AUTH_SALT', ']N-DM5^n0Fsa;$nxfhYF|@c4pJyti[t9;r RF$Ev@8.DjK.I;<MCpF4Pbhu^g/:9' );
define( 'LOGGED_IN_SALT',   'W@4!7:G}>tixtU|fiwri$H0L;]xSz;43-!iUHkmPV@qo[?<kJygkLS7b@MhX6;Xv' );
define( 'NONCE_SALT',       'vC2oi?}PbcGa[PhjNLja5jVG1?KOe4I`,s3>m/dR0+m&>e+VhAhUT4p=duT]HZm/' );

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



define( 'WP_SITEURL', 'http://localhost/wdpf_51_1269797/wdpf51_wp/aminul/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
