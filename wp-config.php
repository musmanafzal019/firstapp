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
define( 'DB_NAME', 'myapp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Techverx@123!!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

define('JWT_AUTH_SECRET_KEY', 'YKPfsoK8X9MMduGrS2biVgv2');
define('JWT_AUTH_CORS_ENABLE', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0Z: T/^wU|zI6[oA?6aNpxXiOmhU+K;+ks@LZ/juZg1z,F5fUQgSy fG!{HyGED&' );
define( 'SECURE_AUTH_KEY',  'g)d[,{$5 ^XH3]JV(B&e[>alP@4r]oN10uXl)drIe+/:/;8RwCLBUfvX`zS)?s77' );
define( 'LOGGED_IN_KEY',    'k-^([m6#0_,a*dQU;329H2}D8I[4z8Sm}iD,kC.<^h=X@YfpiscM&mdPaY%dzN]>' );
define( 'NONCE_KEY',        '.bB+r>nA-C1 DjH{{}BDEL:PJ1Pl_H?LIGq,!!j9mf s#|f]Fxm XD.:xi8=:BHx' );
define( 'AUTH_SALT',        'Q!N!(Z-kooQy7z;9>=/Gn-cjn%LKl2`&,CrxeQ`<k1w9)v]Zt4y=xKoYu([S-.p}' );
define( 'SECURE_AUTH_SALT', 'VGw`s+suS/H1.&(I{1@.@dQ+;xPD==ul>5o[&0wMPcN|,0jOwqFZ|rqN<_n-Boqo' );
define( 'LOGGED_IN_SALT',   '3kuq5~cYW6vfb7C@*&amLsrj?ThnElQ`sne?zq+)%p>u<D,$_FFN5@{h)P]AslBJ' );
define( 'NONCE_SALT',       ')^1=~@mY3$oR!MrId*F]A9-VuWHfF,KZ+)+SIOMq;dZ#meWXNFZL@qs;p2bl%^D)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mawp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
