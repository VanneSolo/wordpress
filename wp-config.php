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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F7)Da=7JZrYA#;^PfSiZ^lERKjU6aa3dZ`ngSe][*6o5)[{@>Hc]D]BeOdP)KM/j' );
define( 'SECURE_AUTH_KEY',  '<9y_arCP2S4;)pb-ae<S$;3U[jPZb^~8$I;rA6q?g@!AqK^xP#M4#EQB{Tfq.O6j' );
define( 'LOGGED_IN_KEY',    'L?^4Q6WT,+vlPW5;RgWnIR`@=Sb9JZUVpL=wrj!y`phVY};Vd6xpsTak,U^j~`&<' );
define( 'NONCE_KEY',        '*.$/BZ|^atVdF<Zg9Vo9zi<xY$}sCxZi/.DprsPj%dG>,%SNBV-!<pT#4Ujh[1k.' );
define( 'AUTH_SALT',        'IjGcHnihzb9@}*x~WD8|o}quL!XTlWP-${@7-u)][JV+tBRdT|7juLg{:i3d}s_t' );
define( 'SECURE_AUTH_SALT', '7$o/ymTTw2GDktOTs!q{Sy8[xI5qjUhlXW@<eBd#0v<_$.)o3t.HDy:tTw*hOW4N' );
define( 'LOGGED_IN_SALT',   '0(2aLN|zgQ6E+`eIo- gp(UB|[Eb[_R@TmPhL2lY@g@)i2Lil%9~u_ik[-cjbvQs' );
define( 'NONCE_SALT',       '{TSIahj-Tjye{+=L+6T%F)G)j[}ZJbOte9b=/u>~30p+N{/dB25^Lgy,xan& Ht%' );

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
