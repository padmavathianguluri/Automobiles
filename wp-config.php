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
define( 'DB_NAME', 'automobiles_db' );

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
define( 'AUTH_KEY',         '<}g>M*8iClP|]%bRb3Q;`]/zQ([eK:65*1ia~_p:o>9b%z2y|$a{H+s=nx7/#C=g' );
define( 'SECURE_AUTH_KEY',  '(}gE>]Jk[f=dnkx,)v)^zKdhxp{xChnZ*.</gWkp3wFjmI.7J/u9]!H/[]>i|Jd;' );
define( 'LOGGED_IN_KEY',    'MX&mcPR4WatLI(gNlAltjq=M_2rO?zEW,]=Fx4OAS-zrVyS2=37[$}ql]Y<}B//X' );
define( 'NONCE_KEY',        'u<_=eHzzA@n2}]F;U+JX(|!>MG?*+M)4_r&S1B$(^q9w9:Q[6IwBWI8G06e46<AU' );
define( 'AUTH_SALT',        ' r.vA|60]BFITIz*k7N5N7}$ (#|uqH}0MQmhMC!n@8`^tv.v0f[1,|_~!]7&pXf' );
define( 'SECURE_AUTH_SALT', 'pbdfl(_pb8f!r0f.#|6Y_D2UVC.ODg%jr cOG}}jJJFi#`@Gdn`l18SrL.C8}l@`' );
define( 'LOGGED_IN_SALT',   'BO%=)?% e3S|0=q0qm/5G,4.ILt@95]UBL(X4B(wM[_P,?~fwU?=4qq609q%#b-c' );
define( 'NONCE_SALT',       '{Cla6o&dfmXQ9Vr@bR`L9jbl~0S9!adx@fPV0;,tF5R>#a6r,zDNO+,D$MVk_9[;' );

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
