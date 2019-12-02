<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bodegalatieta_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-p/RD^` CsP;ZF<V~?=v$_2]%+IXE<,_b~xpH+PS*~Nx<3;jn*t3!F!@stFr Gom' );
define( 'SECURE_AUTH_KEY',  ' h*X+i=#]^E VWGl2a%8w~+uA,ApG-0_yT_.:J:xBtt)GPHum5~0S0pDYL4M?})}' );
define( 'LOGGED_IN_KEY',    'ZKpydcuZ:HSn<4w<1G?lY)zi,Z@WA0XcVcHg[IQ&rrkTJSuk|iWw82xFKBnsMpQI' );
define( 'NONCE_KEY',        '6&-^%mMO4)iynvpi-=+hIoa,U&|vj&g}0K`sW4bIp~k;%Malo>_WM3$jxYmY0!U4' );
define( 'AUTH_SALT',        'G]DxS:U1E0fL;({dv}oxpWLQTU *||%},)2Jo<K~fo}tK9215qHZ|A7{xjtuK0{<' );
define( 'SECURE_AUTH_SALT', 'U-wUvN,33;!@04v1P!P*?Zp)q&%=j-/>XsZr6~VsIi3D& 3x.dv2,)`%P;=`G6n|' );
define( 'LOGGED_IN_SALT',   ':(Hl0psJiGsweaU5nf~6Vl>RX9mzc}B,4}E31 n-AM7MxMhxV=^Q0gSMT!M=t{2y' );
define( 'NONCE_SALT',       'u+6?A~Lr4Av7E2}-EI57`~; $Io6XC{VQzNaecv~E%)i[w]{6L/9D:Z}T19EeP%t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
