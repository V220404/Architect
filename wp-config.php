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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hello' );

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
define( 'AUTH_KEY',         'PFEyq/*iW`Yo*>bI.1U<Rk6Lr4{4^#ebZ@;NAACo~t3J>4W>cCy_D2HNxmd@=<WK' );
define( 'SECURE_AUTH_KEY',  'O^g/d[&_S=(!S{1>DFaC_g</GgYF2:3CdWm=V,=R8[Id;pX|hSso.$wUq*9^9+9s' );
define( 'LOGGED_IN_KEY',    ':f:::%SO)z8DtB;/YMaCpX^5@bc5xkB!sqKmjB=!Ebq8Oe_}bm+%pfN3Z}&Nn!]j' );
define( 'NONCE_KEY',        'sy7*LfYa?QZ4nF3~cf)YM`W@NMQ/bg4LrAoJx^y*(rQ/R6mo<==R;)?9W8^`UW 5' );
define( 'AUTH_SALT',        '/. q_K$6kBUh f)mytab]i=P8uS?NDA>}r#BMiK)!;@2dZ&dt3U]T5S#[8:j7J*h' );
define( 'SECURE_AUTH_SALT', 'V~%;y,MuWneKvyE$KMlBJOZC 9ey~,{3-yrQNZ7JcWP;h1i8{82}sbm_eAAARL%<' );
define( 'LOGGED_IN_SALT',   '9@z`Eb;zSQJ%dW;@:4y4+]!oeESV4cbyr%Gea3HmceQ[,g[e^D~2,fl/Y1tN25QO' );
define( 'NONCE_SALT',       'P9^JR& |nXIj5p?!IwB7LLJZBNA0{b%g9Py*@`;.])x!fp,DD(Aym2Q! B[Ki@,_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
define('FS_METHOD','direct');
