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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'centroBBDD' );

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
define( 'AUTH_KEY',         'J!PZ$=;9-3LUW/}uY6<9[nY~W~v}/0O.UD7 5bMGx?l8@~Y4i?r%~UX;YV57t F1' );
define( 'SECURE_AUTH_KEY',  'MaK@]mEi&mk!s %sA0@gX-o$@%jfGm<VA2>q[(e{o6lcu#ir,F_57R%wyY~?HB6]' );
define( 'LOGGED_IN_KEY',    '=*Zk9U_8/. +kj:VY#3wF7Xj*|QlPfMqGA+?1@=AQf IoLB|/ f$[$Pe$y %}*Qf' );
define( 'NONCE_KEY',        'MU3#g$spIuuV=}@pq3.Vd/zu?|}kA4-3 Hv&ABd#sjI=vFL( i|n$u`B1SsZ0f.o' );
define( 'AUTH_SALT',        'Cc#cOMrtVcP@Cw!DbP8`R-4f?k,KJicmq{v$B}Dp0Trg*E>{t;x$i_%_`N>7a be' );
define( 'SECURE_AUTH_SALT', 'x<zQ7i)`6&H9)c/g_z0~EyNDAW]`vDy9MZY8R]&gX{R*{s8p d+ Qr9V(jVwkNvn' );
define( 'LOGGED_IN_SALT',   'T9s;j!|)Ls`^z6gTx Us1jD$$F@6@5XA|w9n_%4.j2+DE0]X5Nktn>?u4Z(0Mny>' );
define( 'NONCE_SALT',       'GVti^<>.AcmJ9v<L7Sov[_?Z}{Lp~W!#c$N&atPn?aT+9<%2]?2qVnv]?!CfjK<B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'centro_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
