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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o{8vP?1PZa)V<FL[6tz.>K:n 4pU9ZtC !0>94oopqajqLcD^3yCa %|DG=pg_W0' );
define( 'SECURE_AUTH_KEY',  'Eyr_lQk_5gO0lJp{.)NC[8mLRf8Bts0@aF17]gK|^g#5N&BxSI0+a?yHZ$cqavUg' );
define( 'LOGGED_IN_KEY',    'cl$j4S,(qCmx&:%|poQ|&,c`H75+^xldR/xT*qwT6uXKc >,,?KjBL(zMC4>f0G$' );
define( 'NONCE_KEY',        'cg;;N,hp;EG-bhlNU=}d.|y2QPF7lS6h!( {) Q-sgzAj1R0.,Wj%2u20:a{RHN`' );
define( 'AUTH_SALT',        '#E5-V6N;-=)5,f>}vj0r?x V7lD.sog?NEWP.*(.RN<{f(b7P~u0_LH%=o&J*1AB' );
define( 'SECURE_AUTH_SALT', 'f%B.]WhH bB0]Uz3c!JR_]a5q4iy;xWu*5%BPprUD*d*] I)UF+Gg-[+8{KlwWk?' );
define( 'LOGGED_IN_SALT',   '!1}1BeU+e9J@&,!?T}WM9)S* {unnNltCC&,2ShX9<}Venw>jC*M?t)ogO2JPNN<' );
define( 'NONCE_SALT',       ' sLPEG@Iu::yJ<^QS530~v*APOui}A-Qi>?;?MYU[|:c=PUx4:AJN23o=^jiQvxO' );

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
