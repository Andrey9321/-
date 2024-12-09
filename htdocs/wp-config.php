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
define( 'AUTH_KEY',         'Y:=+~~GHQzP{A;93L`*k.^|(*cC(z0q[]HD])YeB4F!Jy)2/6k%eMzR/>;Hi9eF^' );
define( 'SECURE_AUTH_KEY',  'JnCAFUxG @/o7_v9XMgST2q*xo}q!C8fRo0c,^f8,+U iEDacqcv{6=c9wST}iYx' );
define( 'LOGGED_IN_KEY',    'hr~Uxx0rn05`CP_^:0#12Lg_p-.o!T;.@6+N_/]xER!~HepzzDVxpA3va?<tx66L' );
define( 'NONCE_KEY',        'Cg+u~q*jq=4aL9@DLEpi~uq+4F?A zS?hD3. ,;VGIR1/}Bc]H;qu)<TnRC?6OP>' );
define( 'AUTH_SALT',        'jai4DP6w:y<6yX_>)vm3QR~-hu1w2UdbU`t8{sST%.6OH(]w_$iy;9+F8&2-P0@ ' );
define( 'SECURE_AUTH_SALT', 'sn1b-*0DPIJY]FwmdM`=ANSw >WmO06vdnga@:E]C`_4h#fT,o;3WP|wV1yI$q:E' );
define( 'LOGGED_IN_SALT',   'M/yjDW:6Cti~0[y G%B=eb50.?]BO$vDz!hRj>>=cx{S??l0JyWeOB5?<>{Za~3%' );
define( 'NONCE_SALT',       'tL=eTa)iQo$-jI%Mc->KR6-9rgZkv|eV#k,+z|(kn#/j6BC+7%VqR{nYj4WSs8Jz' );

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
