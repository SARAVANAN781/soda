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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']-7+ aZryLxIr?m8O8|C?jq4DYyW:RO|qITD@/Ir;_;7PfX*nys|?dG1S9e8iwzz' );
define( 'SECURE_AUTH_KEY',   'o5?0jwqeJAnQk0E2i 8{=_W[wTxww{FohHdyOlu^Kp-t(*]SgI!j`GySIbk-+/OO' );
define( 'LOGGED_IN_KEY',     'a]9T<qXP9N[i744: ffJS8E<97O_SO!bU0&x!I39]G^P$(vU`gL7CfcnzuL,Hy1U' );
define( 'NONCE_KEY',         '*Cr7E`4Fv$kJjTv7,oVt*<V).I,e`+um0< ,q&EUHtlHU$UjO24^V&8WHTsz%2h%' );
define( 'AUTH_SALT',         '^ITBm2OR)~0sGbDv3@fk91<3Gx9RSQ1tEyVBeP;Y=9TiOKX#]0@7fyx:HhG0naj&' );
define( 'SECURE_AUTH_SALT',  '5I1lo)-KeKa!|c+%K@w@(K*c]DPl_}KUj.bNv hMOPIz=f!Lt?x0+Vx74w&D:j6c' );
define( 'LOGGED_IN_SALT',    '7L.-6}*vSo0IxHV7Lr<#Kp_&t}x5q:}a-#FuQSh>%^PpDrJ$52<n1O;[:[9/r<eh' );
define( 'NONCE_SALT',        '5xQ/U/heyO*+L#jg qd%=k+<Vf6.t;}GUW~5.vr]L[Sk#OC7o1VOC,/5cQf=zDW!' );
define( 'WP_CACHE_KEY_SALT', '~>)4.EGIrreQABsHW<AlzC{vA*~}]#`G z Ji-EJ04,$HuiOwLX)ukYa6n2]TzlC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
