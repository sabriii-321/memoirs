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
define( 'DB_NAME', 'memoirs_db' );

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
define( 'AUTH_KEY',         '$]Qc@gRjd8/uS_lGBm[+js#XFDXr*BXs|;_KOug0}En*I-2m9FtHyL)R9pN}F/$r' );
define( 'SECURE_AUTH_KEY',  '1U%:F]N34aFfR-38l lQ2gyrOsr^L0U=pKk@`,:A4?s|W>x+?y3kp.MJZ2BF2[=e' );
define( 'LOGGED_IN_KEY',    'ei}b&h`Wi@pNZ{} 5G 08>^(4pU=]=p4D FQU,G25Mmk_Li*H3w+ukPOjZHJ8a4d' );
define( 'NONCE_KEY',        'IV1mH6~L#2]gQ*Q,4OJ^x!r8jd:`.)|g-dV:D-o[IR*+.)UtRx|GpM:=Aj]lL3c&' );
define( 'AUTH_SALT',        '4PG(IS85M&J)KI5eNwu5~qyj=OU=sqEa%O`CI,?#$xQ@T+o0M.JKvQiO8GnWFo1i' );
define( 'SECURE_AUTH_SALT', '(SrzhcOz=PKhTbZM%MsjE2kp[O>(>w2)q8K8,PMen<U~#6V<Co8p`)1=R84uL]Cp' );
define( 'LOGGED_IN_SALT',   '.d|:uBxA^8Z+VF#puNm[_Ar,:VQD0E(~[6b9IcaO5&E3(kG_?+Y^#h<Vtjhc7zt$' );
define( 'NONCE_SALT',       'Y8<*UyzS4W:PRz|5?5m05t9AvfhJ~xQh=Bz1Fz`8,uIa4n4Y|t]IQS7DGw108)Dv' );

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
