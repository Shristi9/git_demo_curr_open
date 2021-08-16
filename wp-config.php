<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'jobopening' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mw-0N<yI]5t{c,7Y@@cM5ESX:%] Oa00~$ &~i8wZH&-;7DllE?*yS2Raw9)aZj-' );
define( 'SECURE_AUTH_KEY',  'Y 3AEj:$t)9?5eaDN@XD,pl/2-Y@O31M;;Zc+LI&TsM$+:VTtyC+WbZt$wwQCqlp' );
define( 'LOGGED_IN_KEY',    '_#/DE 6&!bhvqtol%eH6A~/GJz2Td_<IR)A7Q IP)qo6aC9$y86F|T}g`p&V*8IN' );
define( 'NONCE_KEY',        'rf;Q6UJh|.|2BS&?,[[.SM:pIWrq,2cGFD*!Eakd7b9TkBbD6,4vHynxc%x60Ci%' );
define( 'AUTH_SALT',        '!=:<w:W)/.W|AzXKD3nt9aFD`q#-=-#J*QP@O6WhncfN{A,ZD_5s.bsMK}G{t!#Y' );
define( 'SECURE_AUTH_SALT', 'Vd7Hl3EF{IrKVN]9H.adcf9TzL&y@]Yc~O+aYd]$B+1?FSD8y+C#zr|1-na47nS&' );
define( 'LOGGED_IN_SALT',   '~mmhuKH[a.j~jaN(I]V&iRi.EIarjmQ v[#BW!O^.E[-y9A%?4h9*|TPd,-ZGVMX' );
define( 'NONCE_SALT',       '4E8Wlmz ,an0_;S`t}-5]H>~Q0<>*s(HfH]fUI:+$Xc@.HsVNWy#G:DyUF.$=T*:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
