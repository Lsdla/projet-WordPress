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
define( 'DB_NAME', 'wordPressExoSolo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'YU/EY+Fzu1])@O4~u%Ny&`Qy^:e59.,8 xwc=rQN hw3[=Q*tWl*wea9%t`&sz B' );
define( 'SECURE_AUTH_KEY',  '61[f2cWxA(nDgYe=}`D[B$e#THsRc]uhN{Ivi6|`#zu5nHY~Sk_[[0sA=Bmy#<-)' );
define( 'LOGGED_IN_KEY',    ']E!ol&{~,8AI?3*mIUCknR<:lQD5(@,@mI>T|2tN:Z{9h-gv{>^NeeCS`b% B//P' );
define( 'NONCE_KEY',        '~E!:UR7i*ulAvET3JSba|=&@^o* nv-5aTSTzP0LG2O&s}PMOW5ImGVT59#D2)QJ' );
define( 'AUTH_SALT',        '#!dA.H%H0,(<pq5.zW+iAoDH``KA2GZUlz!I&?9DL}p H*r):$%wa5/i?sRB!FM&' );
define( 'SECURE_AUTH_SALT', 'b%V$Y[#,!H&GI)-T0v{jOe]_f4E$Zn^V4Bxt-KtuzEw+[:OIPF[?kK1zF9+Z^;#x' );
define( 'LOGGED_IN_SALT',   '!*@%8wbva[)Yk$IZh{A6Y^-5L)9OM4@9&J+s]G~PzNs[)[1U1V 2dQ,}tZZ/{dyq' );
define( 'NONCE_SALT',       'zB71czupIGm*AAbPZgnkR}1Mg9Ak7Z-unvj[#|TY] y)wwel{[7wno;@URn|<#AP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'al_';

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
