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
define( 'DB_NAME', 'pabau' );

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
define( 'AUTH_KEY',         'pq05lx09 u>k~<.&h7)OG$PkZdvXcTQ-<*sS;=OtUzQZd$C>fLyd,}9Hb~-,C>E ' );
define( 'SECURE_AUTH_KEY',  'uL- v*uMK+Vhj`BM<E]GN/0c1eqfpG5,frUnnw3!D=@Jmp:MMo,oK>#R[E_NyRi-' );
define( 'LOGGED_IN_KEY',    'sxC;8.9x:!p>r)Ro/2kE_**,8F@yvpZ1WQ_=$=e4;U6y8=^e/gKP^gDL;]f!hN:M' );
define( 'NONCE_KEY',        'N%+;JpT7|<:uO{[tM#54G_to|/Mh %J]m :qjn@^dzC.J}Mmj4/8XY//(gJugsJw' );
define( 'AUTH_SALT',        '-;@:;$[rZ,}DfSxy8{=v6Fuy+oC@lH3Cx|{Sc###Rqd>(F@Pb{;u&S2 }=C&))0h' );
define( 'SECURE_AUTH_SALT', 'jM[ffWGoJ<S)jb9.i/t(~Yj$}7)t4>?$l~hhZTzT:F-okJ`I)<|%TDdABUNyWJQ:' );
define( 'LOGGED_IN_SALT',   'v$a9qWj0CZXBvdORz^5{(I{=o={*cTt!x]0)7C(r8r+-(}HzWjv6Nm3c|Nae*{{ ' );
define( 'NONCE_SALT',       'L=%iGcSqLnX=TKkDh}}KrvHXswkN(ls[c,9t^?cP(RZU:Nz})mOG<$Qhjtbrc7P)' );

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
