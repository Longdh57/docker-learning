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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'c-mysql' );

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
define( 'AUTH_KEY',         'ccm(jrA3qFEN32>MbsWq&fj.ZmgRQg{jz/Qc?,s`m 68 X f5!|{QT@G.1B{wiSZ' );
define( 'SECURE_AUTH_KEY',  '`F,9xD)T66G(O$;LiXr8h=%22dRX.0Lu+iMW}d<%>P98VyEAv+g9k@Je_XwIYE&S' );
define( 'LOGGED_IN_KEY',    'K!1,W%p?:<qZ-[HqyIByXd{,SZd9v=x;Ug;85)AF9c`>_t}>(W(q(f>|~KJtqw:c' );
define( 'NONCE_KEY',        'uz&=t#^l -X/h?!B0K*tvbG!tKQB|!:6K]8FpVn~_`S.}3lfWg4+XJ,G`{A}:tcp' );
define( 'AUTH_SALT',        '{7k}I8N>8Dktf3W>tIzeVPFT|jY2s1_qVZ1U>BY+mVEIAg<i3(WVGn;El94uQ3z{' );
define( 'SECURE_AUTH_SALT', 'Md>#-Nh_dRQt5utn5=Q:l#mHU0dlvgs;u*Pc{rw(MT-DTx@sEo4g<JkA10 8Dc9c' );
define( 'LOGGED_IN_SALT',   'Gq3p%r]]K:Hf7rRz<JR0byMQrI(9rSdt*wj]-W!h KQ%7pHR{y5)S.8C=gK0j5KQ' );
define( 'NONCE_SALT',       '%?([Ht*7O-lt|$N1M!Ofn(|;p$N-;^@#&vfA]3xND1*7_U*U?Y6 M>$1iuUwQs(+' );

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
