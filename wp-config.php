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
define( 'DB_NAME', 'rahul' );

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
define( 'AUTH_KEY',         'QSS_HySSoOrypAxCc+mOU#(aw#Gl-txM,-7SVT<H,,3a?7,y5;WME{qS:xMynB|K' );
define( 'SECURE_AUTH_KEY',  'j:F,{lOO4l[eX,~Euv@,HWe%qa|sv,z66}ANW91!a9oG xWZmwir!C7E;lF@{V&c' );
define( 'LOGGED_IN_KEY',    'j7PW]!3/h&Qr&b{c6;NAyMP}F!ttJjs1Uvtm&^ :I|=3LH6Dq$0O5Dnjd>}8x7&~' );
define( 'NONCE_KEY',        '&qV%x6I.Mknb*Wdq^d@`tZA; Y9Dbdb}h&=vb9tPeW|fztxU<<tF4PUQzd3W)J%t' );
define( 'AUTH_SALT',        '0:f=t6s 9=^=[UvhHBo5*uXlQ9PLPFDWzXO.3BDdNu1$.RR`.e;d+ r5NfdPw091' );
define( 'SECURE_AUTH_SALT', 'ZRk2!`Shg^M2*;%tI}KB#^0$17%ZVaKs.q3_8)~X0p3@JSIKgoMGFrm+90V;M9QR' );
define( 'LOGGED_IN_SALT',   '?+?x)4d-dB2Dd8G1@XWAC|3X=>5s+)`_p4|TZf5niVPis,v &c,Z>c+B)VUP*BW<' );
define( 'NONCE_SALT',       'DtOc+1^/&L<!{9aml{&/4BQ|C2(=c$q9FlsjJJ@NvFq K6/+;eZ@j0JPcxWrh&|O' );

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
set_time_limit(1200);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
