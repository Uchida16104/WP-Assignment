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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xb513874_18ofe' );

/** Database username */
define( 'DB_USER', 'xb513874_hrvpc' );

/** Database password */
define( 'DB_PASSWORD', '16qjw5yzkf' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'jOViGG?*[7J~B0:=1E1!( ICT`&;2b(Ir`.2wZ3j1zh7YdO-n;YldT^*Fgjn[ysF' );
define( 'SECURE_AUTH_KEY',  'dKe]$P&iu <edf/,5b+Raj=7m^Ja]^s$KPF9cC+~WM{LEQ0cV;o9,dM9J>L,i2;+' );
define( 'LOGGED_IN_KEY',    '#^_YX^j8[ox!TsR]1.[!x*^k%?tx^pk86>cp!]9K_7G4vv.x7`z+CiE24bwrs7(J' );
define( 'NONCE_KEY',        '0Ea>-NP#*g;r4!O%7smhv1#w+_It-Z3q95rV9ng!H-}xN}];7e^)(zqW8.2Jw&7%' );
define( 'AUTH_SALT',        '#vt qtEz2MD{~H+|:~2^nS`4Tm}kE!}E3/aizA:}s&xOrX5Ebyw-!f1`U5j6q>he' );
define( 'SECURE_AUTH_SALT', '=VmG?;S<g:[flKrNU*Pl|K>4d3alS0<O50Gw$c!U4S.xr9W]jpbPUnHIW]V?*kD#' );
define( 'LOGGED_IN_SALT',   ',lPEF`|B4=p^LM[$~Q]pcOO!*V#p:Y;$>h)!%u=P4Hd%/3?*=+uah4p)v!II]E)D' );
define( 'NONCE_SALT',       'E1bEKn)R>6:gQ>&n^x7#QcA+l;i)A0(!81QaL1CL0G.hwTs$k} Yi61eDxT*V^HR' );

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
