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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', 'doadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fs7ly9z2iqzcnbrj' );

/** MySQL hostname */
define( 'DB_HOST', 'db-mysql-nyc1-14123-do-user-3963485-0.db.ondigitalocean.com:25060' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[P`&#5.4,wam~o9irOPn9v/#vwVM?6R` 5EGigRFJhTbQN7$:E^=JY]2,X>f?|%j' );
define( 'SECURE_AUTH_KEY',  'Pb<-;2gzn=d-/$r4N4U8&?AMTZ] 494n`LLI|Zy3?CAZA}o2[L>FUHeT(zKA=fv(' );
define( 'LOGGED_IN_KEY',    '61BH>G!}EPa>*#.qoBg2v1Rf(W>}A;#qFO?63O-D((aSE,|o!J5IZM}T/bH$;d^G' );
define( 'NONCE_KEY',        '3>&0/B?!p>>kwe)  6I*<P[XR:1Frtoz(XZ7OfBgM/0F8Q>j?vKQsk ([)}V<M(]' );
define( 'AUTH_SALT',        ';.4eH*uacq|[$lI) 8.a#pHllCnS|v&}2s4vOpY>[Hn #1kdVafFg!8x[AV2nIPs' );
define( 'SECURE_AUTH_SALT', 'W{H/84ry<E@ ,Xg a3P_6Rf<Q< Bs]%=knSm4MtPE])66bwegC-]hNWo IZ%4OMt' );
define( 'LOGGED_IN_SALT',   '+T%`;7))AL6Q9`;f`RaXEgjx`@!X]+:$j=eWe>yI@iTad_|K[~+<`AtM,#R[]81 ' );
define( 'NONCE_SALT',       '^kEL NKyv:$$uF<;>WTpIRTEx^|RqjT:B.SBBb0N,?Mtv(;YXZNu@c(;O/@!A6s`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
