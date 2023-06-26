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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news_portal' );

/** Database username */
define( 'DB_USER', 'abu' );

/** Database password */
define( 'DB_PASSWORD', 'rd3FLiXzh*kM0k2i' );

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
define( 'AUTH_KEY',         '~h 8y$/d%b9`TW53U9le3c6QBJ3E:pMQ#e-p#>S!-9m]..VXsDah>ON7 L]7F?,m' );
define( 'SECURE_AUTH_KEY',  'P%s%*Qht]RQ`$RFe>81OB;B|2G^@EJM|kn]<g^fr_kCzrM7TwGS V>UX5uB}^Id<' );
define( 'LOGGED_IN_KEY',    'uFHH);v!~[^ti~,K:+/NyTT;wq:$x[]<Jy]q}bV)! nlS8g@{(]`QjuWF H@@7BM' );
define( 'NONCE_KEY',        'AzozGG8klNCaBlf=gHjXOUz0Ty8t>.<6aMpT|}hkUG gG1gzRG)nb V7Z.nJq$TQ' );
define( 'AUTH_SALT',        '=n:.`F,XL[gf7|/gn+P,?d?>9jc[12CK[,muw.rRg9GoJ;i.B%Eo?.m&<kyN^.Q:' );
define( 'SECURE_AUTH_SALT', 'Hutu|TxD<I==0=wk<2QZ3 #jID):&7{pqqKVIb1bca_gJH9u-]t$MGj0slz28Rn;' );
define( 'LOGGED_IN_SALT',   'sq5_NXK`p _kEaE4W_V%-?;zuPfuBQsdNd8uF&4/c(a1uDEA5=H=Y|M.Oit*3nHe' );
define( 'NONCE_SALT',       'N$si|vENi{X# )fmy84;^<fQD(<u6/Qp$)3l2,ol^_A/vd(_CE$R:k[zdAVJ-L-o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_np';

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
