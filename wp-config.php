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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seerafa_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Amit@123' );

/** MySQL hostname */     
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
define( 'AUTH_KEY',         'jlts{!YKF<>gf$nsV>1YAvg0nE2kynTQ_I?A+h9nzygOo++*oTNs}u-kC[n,;Idw' );
define( 'SECURE_AUTH_KEY',  'c2P:Q4yO|FHs=?@&cgxZahbvA_;!|RYG7|%uA}6TyuXh^ T(P2bi98LWrkXmWsMG' );
define( 'LOGGED_IN_KEY',    '3eM#|K7qnGMA~;xb |TS*[RC@~Tj%{DcEp&]K}+/Ky(kn5)=qMS8lW y_6b<Vd&F' );
define( 'NONCE_KEY',        '$Bg$0B}HnK8B)Tc2lITtOy1<sAliC5b#&`CH>i^3g|{cs6V6-2H>Zd6TkfqKl7qz' );
define( 'AUTH_SALT',        '16B4lpF>JLpsBJxRKP}Fnc/O--6ivxL%AF>cO 0FnFw4`Si<Njd$hq0eeJ+>hDZz' );
define( 'SECURE_AUTH_SALT', 'X~9eN7Rkuk%W|iVKndT>;esF)g[bMbm!lM:#d4j&>imai6BDQ6xG-fq[1~$y&eQw' );
define( 'LOGGED_IN_SALT',   'Nshe!wPs>jr4A2=Dg7|us*61:/V*fW)G1}Bh!|/MNZ>zRqF=2X<$g.mzpNS0=!{B' );
define( 'NONCE_SALT',       'A3|!q+y1m1YL=;C{>ik|N>&]U]uCUIl7>+,-p>LZzQYsIil3IXIUt*As=|h+<NHB' );

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
