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
define( 'DB_NAME', 'bconfecti' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U}Z,yAR,RJ1j#HLAnvVorguV#oaK{N674Q.%[y(7,J}PWJm:#Fjb3)1Wv_[XBoDe' );
define( 'SECURE_AUTH_KEY',  'De_ztX#y63 ~IB:-WOY>ulk]ZS7?g:r(JSuN~I_T`40H;3;Frh$HoHoTWItRb!1R' );
define( 'LOGGED_IN_KEY',    'FkKnR!J#LDELK%h%<NPt]63LKS@/3+w<*o&Oz`-zP: y/ucZSZ/}0Y3UcIU~DTG(' );
define( 'NONCE_KEY',        '=4pWy/cDvevGcbm;8_9c@ *%F(dV K b.#P`EH1aY>eEL-2r=E)nE Z0P_,&])a8' );
define( 'AUTH_SALT',        '*u5:Tz+{8R~jzODhkwb1H7[Y{.I<;IQ;&T+(_%BN7,zA8^f(Oq1o1MWuI,R10b!l' );
define( 'SECURE_AUTH_SALT', 't3{B)LV4O-OONUJKe[SO&1k=-)J6[zgE}LW]9iUwc#8J{3GwJ{, 7D+>$ 3i?IK1' );
define( 'LOGGED_IN_SALT',   'mBa6qQ|9G4fg+Z2+E.Orft5p6>@H,Y#lJFA&=_+5Da!wipN*/N*IJv}G{( &BpYz' );
define( 'NONCE_SALT',       'byS_GaV*s(;NwxuFO3,uE:<`u38c)9>P=o%{`-lBzG+.Q7.GOGnEIi&BnDEs9_F!' );

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
