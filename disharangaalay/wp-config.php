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
define( 'DB_NAME', 'disharangaalay_db' );

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
define( 'AUTH_KEY',         'Wa};}TT>M)Q>-J zMgc_^<suu~Z0g<VsX;{u4^exA-u:0pS@<5/vFp)c[S*l[2?w' );
define( 'SECURE_AUTH_KEY',  'dLTS%Jh;#Fx<q#IIfMDGqnEc7@}%ig99D~4@blGKen%Y`XRo7N[9F~Ho#Gssyo,5' );
define( 'LOGGED_IN_KEY',    'euFL_o[VuCK=( xA,id%LN$2s8`6~i0y#|N+wKz$pghF+.s4q) ,fH)%<<]@P,tT' );
define( 'NONCE_KEY',        'A$f|w?%?H+L1wOaN^sjSB^3G4Q8xRppW$C%*;hC9wM}Hvebv0:K~^@1@$-/XPJ#t' );
define( 'AUTH_SALT',        'z_[zwe|BtMyh_QT{agI+bt94:4UG%*5;/EaxCTO>T9mw_Y:3NS`^|?tC];wYmCDP' );
define( 'SECURE_AUTH_SALT', 'X5N=6z/EwH_2VSut[Tf9#/u4Z*E^|;gtG#V`;i>Q&4xToh|CCc7]c<U3<>R?`9c#' );
define( 'LOGGED_IN_SALT',   '{C*y,H%nrT$8<4^{r%1y70gQ02@l]Pb5t<6(/`V${Vuwdq@(ldHfPD3`!&=wrpsQ' );
define( 'NONCE_SALT',       'O2wg!.`UTcLaE*@t5eW%Ea=u6Rtzc{r]2L[wAE0[G<^RF}R}S-}aIJC0;+jOY*43' );

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
