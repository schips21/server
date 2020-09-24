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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'T@z=^XHEv>CUR,vwp.zwZv3J2u|/4t7;}Y2&W&*o4NNr?n#X}?051 Z<.sy~rT!.');
define('SECURE_AUTH_KEY',  'UnD[4ifO|w!`bB$S-O[a-!&ZG&#mA*;uptk_e>ta-:v{H$=d#A|x>&Nsk/+-1,RZ');
define('LOGGED_IN_KEY',    'voy%.EGoQM<SP6s]7}.M9F(eDV%BV3Qj@.+i+$}|9+.2)H-F4,8PMlD:7CGCY)tD');
define('NONCE_KEY',        ')xW-g2-&`aQk6DQqwCG1^jZdJvz*8Vo+f-+>/zm,&)~|k{56Rp8z-j$]YNqP2bd2');
define('AUTH_SALT',        ';IRLpcgmfKwwF/~RL&_0aqG?7Yd475fu3.[dhz|k^M3@#0?L-%3_|_7bDQ%|{lhx');
define('SECURE_AUTH_SALT', 'mU1.+5$|x_3!5*0sr(]{W+rvJd5!n#+TI+bl?+^/qy8Z;w+8r(&+!Xx$3d<4 F=R');
define('LOGGED_IN_SALT',   'Ut-BSR)wF}bEvAVXixwT*U8[mH-9XFV!K2f2hsLN3hj9hrVd]D`15@+rg{^Iy|HJ');
define('NONCE_SALT',       'Q:yM)v-:^<1(~{SAd1l50$U(9<B;Qnq&*q v6:wn2}(xC&deW/_,BU}p+]dDhIU]');

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
