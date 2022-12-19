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
define( 'DB_NAME', 'db_businesswebsite' );

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
define( 'AUTH_KEY',         '&kK)U]cMvjT{qGn~,BHW?Kdl&2$uS/jF%K$fxxVJw=nc-us>UcWsV,h PhA=R*{{' );
define( 'SECURE_AUTH_KEY',  'Y+Z]zN_OyO<:FdD}}0,Au},JGzM>x9I|U{ts~.1Z%ovyTX mLRTHxyYESt{z08{2' );
define( 'LOGGED_IN_KEY',    'F8A+V1MV YLKwz3/CC[~JZ=%tr<(8[>7N4Uma&Q>D(>Y|5kOnwD[ZAg^Zl;~^#Yg' );
define( 'NONCE_KEY',        '~to&b`ZEvNy-wX$ T5`/jL<u(]=E&UnTiHU5HC4P6`0CH@j!D5hK(1_f;VqBs9~5' );
define( 'AUTH_SALT',        'Xj@PhT~%v$6pdW2poh[_R$K;F<!Bu$~M^cu=khG^BV?J|/X0p ?DNBWgv6x#/.~[' );
define( 'SECURE_AUTH_SALT', '1{$(:dgOo,<fSx&NJ.l/{p1Br-O~SmXB;,v{Gps,s!&3||BkMS-A.!N<;B2k0cd^' );
define( 'LOGGED_IN_SALT',   '-$/II7_IH/dM;62y;dnv |<iA7-xZf!u_YW_Vf;1f{@mNZ?A_~kKvNS6#j=HJ9hK' );
define( 'NONCE_SALT',       'U)?j.EM1VOu)7AB{X~xPZHIj^=@Xj^&J(2aW%-{n7CE59guxbdPzq02;h.[v3>[V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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



# defining wp-content/uploads to avoid the error while uploading files
define( 'UPLOADS', 'wp-content/uploads' );


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
