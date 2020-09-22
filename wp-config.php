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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'albertoue93' );

/** MySQL database password */
define( 'DB_PASSWORD', 'urbinaue93' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'l|,fx6oY?y?Z~7NE[r4w1.^m%+N~@D)j |7+zE709-~:<}cPJ<$(kNOe`u)?v{Y#' );
define( 'SECURE_AUTH_KEY',  '6WndI$b=UXv<xApMAyWl 7Fh!)~DR5#0i,lR^H4Vs`hyk!3u#:V-ekjv{5TE$7V]' );
define( 'LOGGED_IN_KEY',    '#YTMk&_?#e!:Z[lhcv*u!a?CdO6<`If>j(vp4Hhw2cW&=#mM. 4^CMbDyc@lP2!1' );
define( 'NONCE_KEY',        '^SXCd5GKpdV<]qx,]39/CAZXYi`qZb-/9=5FN9!Kut*BcE|^2Mv;I]_>9E=z;-Mm' );
define( 'AUTH_SALT',        'P8UH1m;I/m`L06n)U}Bjd3e)c*C5dLEgc&*9(R5v(Xm/lI+iE{4qP{8i)&>uah?#' );
define( 'SECURE_AUTH_SALT', '8An)Q635d}RQiup-/nX:hl d#ZO]S~BY-kMmRTXI)v[P#GC*BT5wbk{/_x3Sx`=9' );
define( 'LOGGED_IN_SALT',   '{$7T}:6-:@h|qPxe^I3,[IfFkL|(K8HM@l2V:@t-vSqK@ygH6K?]aWof}6zVfq]o' );
define( 'NONCE_SALT',       'fcVoCVg(lk4]mmVf3}W6NYywo2s67C[/Hz]cv8IeHkUsZ&8w*n6Im9%P@$-HQ!If' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
