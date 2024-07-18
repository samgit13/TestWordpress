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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '&WH0INUwd^{X-|``e:qA[N]%HY(ZXR(hc0D. ~^;EA[P ZkYTFADYScNTiZq`!d5' );
define( 'SECURE_AUTH_KEY',  'N4Dp7l1H+:h1RE[];.J}]98*`%7CaQ~nnN8TB5[qiF1AW9(,<TCyzF&m5|6 &j$F' );
define( 'LOGGED_IN_KEY',    'mtC}Zg7[.o6yi~iQyG Z?7]G~B1oM*SoJ}7RBTH/~?O:nvElJM)%*VObF#<-Jjes' );
define( 'NONCE_KEY',        'z~EI`Q^[C#X3]4qq27jqT%VGXYEc~h3BP;_|t:PV_]~fr#l?PBYG;(Nh_G}l|i@<' );
define( 'AUTH_SALT',        '1ph!l]8JHjcNkD+k05%(U&;+v^BkEk;!b&K=Cm[-nt9tpWNtgO{}FZJ(96 :,yC;' );
define( 'SECURE_AUTH_SALT', 'eKkrW(|)ANXxLRWP`:W]ad~&.4`44!dXf_]I#X624;5shlB}.<,]iy]z&8.#t$)E' );
define( 'LOGGED_IN_SALT',   'IzM`.Su<<&?7]zd~+wkj@B=8`T_}ygcOBH/1A#mVks,(SSS(`K?36vt]LGM?.4<E' );
define( 'NONCE_SALT',       '.{LZOD 9v,@&=FSk?ExmDi,!BlAZWlX_#5}E8TE&{vIHj}j:<a$z8;eR=tJeZR^k' );

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
