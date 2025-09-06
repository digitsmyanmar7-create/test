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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'Ea*4lm,/<^T5M/0Y>H>F5#zm|%J**1]RbV__,72/@&nrAzOcP*i|siG<*l2v>X1Q' );
define( 'SECURE_AUTH_KEY',  'fq_UX|JsV~n8ts,i1|A2i8:RF/:n_Z&dT:?b;~)-o,=7OR0dkLWI>M<7,.`:PHW-' );
define( 'LOGGED_IN_KEY',    'ULt!5|QpoAgD}b+ReRpKRBfq)^+I.:vL[1`8:d$[kLlm1Z?-hb331KR_u<1CkOcG' );
define( 'NONCE_KEY',        'h9bL$?7Aobdt03~SKwH^w6!3rFK,CK`UxKA)m#(~t<K}tAPqZYGJHn%;T|E=}u^P' );
define( 'AUTH_SALT',        ':F)dhXd,,VQ=(4; 7P`x/I.3`AAIQUIAFfg`(O]uny<PKM[6z1{>?-[}h c1Z`?$' );
define( 'SECURE_AUTH_SALT', '^$<LGj~Z#My^7zC&Q%y/[!h:9=t!NuuYW?f0~f+Ad`vEKvBzv5ZnB=DhCf%h2<1v' );
define( 'LOGGED_IN_SALT',   '~U:q)J/4p%8kx.b=m0yCL)K=N2c02.L)AfIX?;;S(jT6-Em/UP%80CAT2}^ke_0k' );
define( 'NONCE_SALT',       'plH0*@Kw`J[T$Sr+5#L;Q-[H><jRfKs]Zn-l08A1wbp{YlWOW1 vCn!pka1D?5J>' );

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
