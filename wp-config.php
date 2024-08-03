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
define( 'DB_NAME', 'projectspark' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Soldaten634' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '>x.Sj:*#;:C]={kuUDh1k[2{%(Zr`5IFoCQX$8z{.!(ea.3Q-`KO$_l6 (v3Z>nx' );
define( 'SECURE_AUTH_KEY',  'Ja<yh{F$zuZ+GRe=VQA&^N6=Ke,!z;Q2O0?;QvRGmv,?p,gMX_-{~Ut}ei]kl3.s' );
define( 'LOGGED_IN_KEY',    'p>J/&IpIJ{V}WRCZhHwlAL27;&&Cw2c+#7fj1xy3]AT3k- ;&Vm_P(Sc?1o)7I:M' );
define( 'NONCE_KEY',        'LA#KafN[+zuy_jnf.~-).a;T51MWDo|~-KUn=Dg0c{54aN@z8kgE)Pj^<.~]X<cN' );
define( 'AUTH_SALT',        'gkw>r&Jgj06x[a7-^afxs O4>T(X)W&dnV6_.$TG_.*tXH^6VRM$Q XS.{XxGdb?' );
define( 'SECURE_AUTH_SALT', '1C(d[YiB$,lyz<Y)p:%qv)gBN7>|`5vKzb=#6Q_7;b.VvJFBbq&Q64.n5,W9!N6)' );
define( 'LOGGED_IN_SALT',   'Uv)?AE/&TM~0A-9#1z9~wyYgO$<5+t;RJ:C|KaD5lP71?It^xN*E-@J+R},Rq*op' );
define( 'NONCE_SALT',       ',-j#s(@4bHRt.wD|>h}{+EuX;@!C%@SUsx}81$XF^Q7A}`}}#H=W.,:>JED@iPK|' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
