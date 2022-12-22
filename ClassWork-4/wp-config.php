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
define( 'DB_NAME', 'db_padmabridgesite' );

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
define( 'AUTH_KEY',         'NTMBUFrGz0NyEZU@HH>@tKx}-;{kl7)!7/Ij7$x{E+9l$5+R77Tg(W51`jDB1*+0' );
define( 'SECURE_AUTH_KEY',  'Ex66m&u/}mo{PB[T~w>#hd1Ie~;4YU,B]/,b0r4Lw}to#.j(_Ciko`V#Ao`HbFW&' );
define( 'LOGGED_IN_KEY',    '*zI=qMrtK21_FK0/Vs`,.P}?V(mJ~3Gw}K-C?la8b=8bt!2JaAgGl7p&,5m3(Sm/' );
define( 'NONCE_KEY',        'h^[c^K,(wY mo#ignxZYiZ`3X2qm<MF`k/*dYd-4^YKrvUSN(ijD}r}e45)(`zRm' );
define( 'AUTH_SALT',        ';1Tg1$B5eTL=sH7ag3tjK[WL+Qx+6CENp~^Dp*-8)l?Yd7BQ[-E*;/j&t,zx}[f<' );
define( 'SECURE_AUTH_SALT', '.,6rOXI2LEa7`X<fe)t_q(b812+D=OVtcXsH;gu,evT7giALl)qN~dj6$c5TAr,;' );
define( 'LOGGED_IN_SALT',   'U2bw$@N>QJ LB<=z6H/AMXd=[w:.^*V<aHczr$~L fzC)cF!qswT1{Cs.ao8ap~j' );
define( 'NONCE_SALT',       'i=k2/;ak<JPM.!BzhAM]y7d][W@GE*r+W.C4xz>PoC^tq{,v|K*4GyEeG[+O)WGk' );

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
