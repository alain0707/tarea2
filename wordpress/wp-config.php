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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'q8(KW~_G+Fa-^2g6<$lgg#6*TKOA&|G=!DG4e-q;Ll/fh2Z[` lXeDP5g^14MS c' );
define( 'SECURE_AUTH_KEY',  '[<*Sm:uWulD)pDz2iT{S)c0KBZ9t}n-D ;^vQH11ldZx9tnHpE)4;kh*a?&KvC*L' );
define( 'LOGGED_IN_KEY',    '.E9)~jME8G/)lMg 36|X *_aCc:HChQh[Cb3(9r@kWE7#7-EI;eA~HS/O>XKf2h7' );
define( 'NONCE_KEY',        'sQJ!NL^&H]X+*Mqt6X/sko:35.^{U9z)Ynk@q|(EIWZ<45]+`ITqfN[:o<+t-I`F' );
define( 'AUTH_SALT',        'ct/ jJ!!du2P ^jyr*eXEEuzuGr!#7VbdHTRAC>N%[SRa|Bd1|&H6L:<V?PFjtMw' );
define( 'SECURE_AUTH_SALT', 'J1a+~w;^BCw{BxUFG{W8=2VdJP:U .v5 $YsC#Rm;`H_Ay)34Tt*b%&X5;;T&]-n' );
define( 'LOGGED_IN_SALT',   '{b~=lxKgMbd]`}sgJn**`^GtDQeC-+$`uZ+A0/@#b5:yHf<5QAd3qA>-#&q1t$!v' );
define( 'NONCE_SALT',       'WWkwHwy8.vBU:v8-&*%qdcp~-WY_<WA0OxO=C;gsGt*!Ec&8BXbA(d<$^jnWM2tB' );

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
