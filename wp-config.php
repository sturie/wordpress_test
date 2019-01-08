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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f:!p|_p>coS-X|<5w#df}S0sN9+z6.stC@7L-8P|Y|+g#5hd67%F(^5~e]n(u|8V' );
define( 'SECURE_AUTH_KEY',  '?!)A$$gvTo4.ReAGvV_9}GeOK=%&FcA.0bm&q<eo:I1wa)~M%bS=Ra6b2j?pRjfH' );
define( 'LOGGED_IN_KEY',    'si]z.iaI&l}c=u:3e<}KTP5+fP7]b|QHtD$yN<SL3[DvqYpnldwsRXLd{mL.K038' );
define( 'NONCE_KEY',        'tvKibV86(|C<Au7g:`BX6|q*A%h8/CAh^xqoX1VsOHl=;<aj`Q-5~-13HC^VmWcX' );
define( 'AUTH_SALT',        '6lV:Q>~~Nx||H.<m()Ta=4]5cM`,8+mglRey-Uv:KG I(h-?uYg)z[yY.G5+%!|b' );
define( 'SECURE_AUTH_SALT', '{b>^ sZv)g63gh%B<<s9L[~P#/If+]4 !4IKiO~F$j1i30_DyFAZ:C9Bu$tdj#*l' );
define( 'LOGGED_IN_SALT',   'QR4|)453iX.?DR+(5vS[=U;K+tPFgHD$w {d8DMR*>B)[B%?Q=,p|gj`=j)&h :!' );
define( 'NONCE_SALT',       'X$;@+9qq:dH~ (-QHvGN4ryqo{lq>(afsp.e-/#zcnvRU:20u6Gw@q ~B@zFpNo$' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
