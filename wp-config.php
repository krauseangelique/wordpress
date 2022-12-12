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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms-01' );

/** Database username */
define( 'DB_USER', 'Ange' );

/** Database password */
define( 'DB_PASSWORD', '1hnfplp@' );

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
define( 'AUTH_KEY',         '?!d8U]zaQyZ}s!NzV$vqle<K-24?c*Dv}~)8cu]5ta@OewTN.DqX8LfAvg8BAnw{' );
define( 'SECURE_AUTH_KEY',  ' |:]RZw@o:QqbPpty~<ey,4Z:@qoVU77OyWyRyDg4eOrS8>X@/5mRw]GxF/ikwLn' );
define( 'LOGGED_IN_KEY',    'd$WY|h:}Fkz)<CV:vb#Az0V~vzB@:W,a@Q<J>gkH4m 1MOCX<FF,h5j#}(~NHYiQ' );
define( 'NONCE_KEY',        '_7RVx1cVjN{Bm3(kucHq`lckuig?6ZL#j;@?mXnwMk|0r&s?2$Jb>NfM%*iiYG$[' );
define( 'AUTH_SALT',        '1]kLWBs7M1Bqb=UMhF`sb~M1J+Gk;W0W-u25_0`f|zZ8L9jf)_2m04(?}Dudg)[{' );
define( 'SECURE_AUTH_SALT', 'ATgM,#J$BqW53].B&~bdG&SUc;Y6HTQE+E[a3BvKR591h4WlLq@a+{)Y}k[zdZ6F' );
define( 'LOGGED_IN_SALT',   'SFV%/4%lv2C<Z9~LcQXj?ahHw)i*;7T:>13pO 7Q7`bUwd0Y};t<zb6<[*#|-]fB' );
define( 'NONCE_SALT',       '&uOe#n45RZ3J_r4n2:keb#Q1zwBOLTPEmE00t>j}nZ-Na-u8Z=dYpifsin)$Jxt8' );

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
