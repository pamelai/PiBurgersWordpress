<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'di' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',         '$Pd:|Q:M(A?T}=3=sFg~v?S^R>eze>Ug?[Vs9ZKmv&KL#<c[W,^*$b)zyE8vrZBA' );
define( 'SECURE_AUTH_KEY',  '~0UTd`!<g?eA9Uua[yDcBI]PXW8{ZxV5S+uTL gx=:Pl8cw31=@w991Q+Hdbw[]R' );
define( 'LOGGED_IN_KEY',    'zkbKVOZJiN`,m5_;*oRc[h$XK>Rg9wE,I@sOX?J:d@NpAFulc5#2OU*_/} $S#&;' );
define( 'NONCE_KEY',        '{rc0_Lm6M~(C^X!o)7O^|8U^vjAqH^ldM_DFzx[`3sR^#5J~KAFaGRL,Zgy3xo9>' );
define( 'AUTH_SALT',        'Cr<u-ckX`>g4]4TTK L aA4ZmZb,4o]fy[[5O%y}fx/X^p0zMQ@M$;PTNXOyJ8<.' );
define( 'SECURE_AUTH_SALT', 'X:&=Wi[Ig+*co>KI)uj&u7Y1f|}xiS:{3y?ZH[D#R7LvQY|K5GFeAVS4M%;%|`2^' );
define( 'LOGGED_IN_SALT',   'D%Fwut~Lqr5uMLvwGY#M~kaVb~sf#^Z9t,jT84no4R+S]kw;f:df{C4B}WzJ+h|~' );
define( 'NONCE_SALT',       '5_x^`:RRNKwld745p9@uVuUM+D .y0iY/HjHecr?w?/!29A:b%T}^=l*DfMI^P24' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'di_';
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