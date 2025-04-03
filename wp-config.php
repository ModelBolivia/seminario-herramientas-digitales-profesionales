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
define( 'DB_NAME', 'plataforma_herramientas_profesionales_cutechnology' );

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
define( 'AUTH_KEY',         'F3?]OF3NKMM#O$wh|?pyBG+!j]k{nck$<{{Kl~j^3@[LBKku)q9YprqGOb-&9b*Y' );
define( 'SECURE_AUTH_KEY',  'Oq+by!|pd[d{iV%,CCb?=vLmHI0}+L++<+x7j9rv3@:t&MW5|(oN`$Or:?s!%eG{' );
define( 'LOGGED_IN_KEY',    'N](33np}X4r$-S?_P`;AB RH0V3)v8@U9`6ai>zpN+QG1.cmL{8+wVbYRSE_~<CV' );
define( 'NONCE_KEY',        'n`(&]0.*t%-WtU1Wl-;XJXhB9:m0;>H@~SsRIjLxkNrf~;N1, t#!LVd9siBeiOD' );
define( 'AUTH_SALT',        'Ymc2|s]1e9?=hb[Ae.5I|Y]Q!S9wNlCM{>RFP[s]M{TY`@q1B7E{LP&LW%L4rJ91' );
define( 'SECURE_AUTH_SALT', '?k*Qv)sLA]7wJ@sX#i=Pd>^$44qx_S4o,pO:u}MNI~rQTu<I4R:q7Po8:x51e9N(' );
define( 'LOGGED_IN_SALT',   'yu58LHjY:i#]6X5u]7>ehM~ecJ)y*[el4QV<XW&eJEk_X.y:7I-PfRyC@=6crX7=' );
define( 'NONCE_SALT',       'a=[:]@)euuKu=4JUx@C:4kz-N~>GEq+UK}Qz&&U*.=xkv}};~Z]6X]P{;f{$OT+G' );

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
