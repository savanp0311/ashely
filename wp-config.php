<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ashley' );

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
define( 'AUTH_KEY',         ' bwh/=F#3Em@K,t9IoE0/b4YJU;1$jp2T5.sixl;Gv!<>;h?e3zOR>PG];!79n{d' );
define( 'SECURE_AUTH_KEY',  'wR}410ICc)MJ<KSqcAR>`w,l6SQbT.7_HT [~?R)a<u27i;92/&9W_+}y}VD#Vk>' );
define( 'LOGGED_IN_KEY',    'W6Ji>v ))@d8<`j<A_+t;V(D!S[k-+EEGoQyNp;HO0z{PR`jx!DHdGRgPfig,A|:' );
define( 'NONCE_KEY',        '?Z3Tzo:uAm0&YBI(F[s~Khf{8GV/X%*J,wX&JJk8?E7F=fm!n%.LDwWVss?J8Lty' );
define( 'AUTH_SALT',        'EN?kI_UqmOzSMF~SBh=oVx1K{)8H:*1;O]?mjRw,C{o~nJ!su(A8Y6%J;)*#xs&$' );
define( 'SECURE_AUTH_SALT', '*o,GDur{K[ Rj{S?l26,/4,,t)b9/?yHD@-;%#F~`EQ:ssOZ;OFpn@t<<XN,IR{V' );
define( 'LOGGED_IN_SALT',   '#MP@?I/Z3 d@fG_o7#=k3T0sf!*tL_+ZHy[fF?hL.%[}Nm{I(>eB3XCPNDso+-Ef' );
define( 'NONCE_SALT',       'qQ0uK*c,t&6Kx-9lZKC6o:}[<Q=NG(Y-c#IN?61)DxG8RY@ua~lW_N,q5B-%fT:R' );

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
