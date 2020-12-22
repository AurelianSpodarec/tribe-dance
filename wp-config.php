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
define( 'DB_NAME', 'tribe-dance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|m%c6A]e%-Y&hXwSKmK6OV/.v@C1jjjh+r]R}?CrPzXW:e.I^pF dcl=bkqlulEU' );
define( 'SECURE_AUTH_KEY',  '%LMxDfc}H6q#LST05a(y_otDdi$}|H1_N5M}Be:w@T%W|jcW?x33XJpPN_$DOLEe' );
define( 'LOGGED_IN_KEY',    'CBD+5#KIGyF)mfs^V_mD?z*+F?w+{7{w`uz=B7Z&6Z{*qDn#v8$3FY.3i0~U6]f@' );
define( 'NONCE_KEY',        'Y{)9MSPJC!xz+uh==@qTdE^:mT&;Xi!6~3[?1Pc->x9g7YUj(]FPoa*$aFme.Cq;' );
define( 'AUTH_SALT',        '@,L3X*lQR*azon4FXN6DuHia[Pl7}.9A&c~$ ti|Bg4Zd_ V)4oJcQU3]rVbw/3*' );
define( 'SECURE_AUTH_SALT', '8!B;QMc:B]HD~z2vvV_VO4R?,4WW10{X*vb]K0Wci[eQ yglvgl%B,a19dfV[Ek6' );
define( 'LOGGED_IN_SALT',   'N?0& dE|XK7N|*0)!xd`QSa(L?D&O$sSba]lKo{SPo#H5.WMJ$3tNO{hyLB$]uYJ' );
define( 'NONCE_SALT',       ']|<I8-jPJyKw4y1]9x-US=wnn{*23Efj;71WO{B+VW#Ie*Afi;^#?Bo}z5e&>,l+' );

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
