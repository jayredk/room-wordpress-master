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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>EWVReT&Ky9&Y;;!;N3xdiX#={Z0 {BWN_^)I1apl5Zw(+Vn^/<rZ[Nv#rZ5b6qq' );
define( 'SECURE_AUTH_KEY',  'c]F{{}HK@j$bPlfOy{~cl3tw5qwZ6(p(<)+!4SfN!Q|wQvDq!Y?exT4Hb:a$xI+*' );
define( 'LOGGED_IN_KEY',    'kd=6*?8C@_?%](Ff?GV6`ZB+E2yH{ZF*~!U(qDcR/}:)8QW(&=Vdx`x/vVu?c]nO' );
define( 'NONCE_KEY',        'YbgVEH_h`w?34NbE)$+,v:zf>g4@N(|O1+oHWK22eFS-_KSz0g!4Te4@:.Sbk8;[' );
define( 'AUTH_SALT',        '((Hpz-IgW/8BLIZ)x<Q={_un06uD|M+{}A}L`6H7@aB<?1#766qK4:_joMI4deOZ' );
define( 'SECURE_AUTH_SALT', '3nd0rAeL{6^aE@bfR6EJ?Yw~XtkR84PW=jRS 6[q[4qpO_}&-a0$f@GvN$S0;dak' );
define( 'LOGGED_IN_SALT',   'k~e]Jc;I.6wKqmqP8j=y3wclJ@D44^=nyFV(vo5v@0YSCa6WyWj(ULn_D.D[apRJ' );
define( 'NONCE_SALT',       '%3^+<zrri%WB>P+^o,|4+LW6a1.=Dwh]PKw9kd`o!t$47]ImlilGGk>mGZ*2=#nO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
