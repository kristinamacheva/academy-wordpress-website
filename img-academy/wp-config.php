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
define( 'DB_NAME', 'img-academy' );

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
define( 'AUTH_KEY',         '0{s[ :.uA~L&cRGd897X!PY@+lC!=]f4O%xDOTMiFZrqWx?FWI`xbu+xOwb!z(Oa' );
define( 'SECURE_AUTH_KEY',  'Nktt<d,%X])8EM3<s_%AqDtw*Pauf)zDd0&[-=O&u=9=^~1x+ kZg}Z9d>wcGJsm' );
define( 'LOGGED_IN_KEY',    ',;&BwadqBB@;#~zvmOOzTsiwlYC`?@/&`XF_8.Y^3RCZ,ND +.m-<j[nwAyQ]`X.' );
define( 'NONCE_KEY',        '>/Y T;ty(e(VFW>y0Y!NDZ{=I04XSGv-[:PJcKe@JkYTJRfC}Pzb=R`G|L[@:$}d' );
define( 'AUTH_SALT',        '&p&ynqX1}Sx)M)97?c$Df62?xLhDfX$.x@0/%cGJ:h6uAxZCuWIy7C<jtP#$*8wk' );
define( 'SECURE_AUTH_SALT', '`DtZx=WWiT^kk7&v ZhZ*kQ*Pq&:(7bCBE4#:o1o[f6H=aKP6^ amiaVI^Zg5P-8' );
define( 'LOGGED_IN_SALT',   '{kYYt0i2UeVb` e#Y/Cm|xQoZ|U^ETc` waCr(F-xfr!L?/p6`&HPG+1/b^oW8Xv' );
define( 'NONCE_SALT',       'l,0h=<c7-=bxm]@%e;6Xzn>D9o|TI{>HQ3m<Wn#S3Iv8$IN/.UF~L8K{1&G;:Vj[' );

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
