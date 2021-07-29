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
define( 'DB_NAME', 'shellbeachsurfshop_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&|y-b[6KMF$~H;VK7i>HFzOD0&G9_Wt>Cf&CWh6%4Pfw:A^9iKb`Qx YU$NUS/PP' );
define( 'SECURE_AUTH_KEY',  'NeQT!OaH va{nOr})]#x))g|4$~FizhNdZUwN%edC/hQ]-;tK0uylb$r#3,Cg 2i' );
define( 'LOGGED_IN_KEY',    'a#CqR$v)Ii.)KHO zbfS#FAU<k&vn-2{W@EI#r,];8^FjjI3k+cBJStv@M>}MY(/' );
define( 'NONCE_KEY',        '0NV{Akh@hiB7c,P.L+7]~;e{mZ(NC@YGv.d7M#y,.q_vuspd:H*n) <M=9hC,]U7' );
define( 'AUTH_SALT',        ')QJnLaTn7IiPB10X?^O7:~Lv~<;K4BA1mmaB41c)<U!q)fkX7.[6A~gMUYcdg~rv' );
define( 'SECURE_AUTH_SALT', ')O#*Y.HDbn(<]UbK5AG&vsqM!iTd%4?AhYS|Kt/}q [{D9<:`|AO6GU(y<Lrg>[:' );
define( 'LOGGED_IN_SALT',   '))W3`YQ3l:a8{,(Qw~`EG[mFtH&MvKrU#BV?=F]&4(*8L&t8{mrHb/pw~,8#V&ZT' );
define( 'NONCE_SALT',       'dLA4gY{B1E|;uA8I[w@w@}VO N.?27Q,aawICTh!O^>@b]C=GUN*!~DqP~Jp$+H/' );

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
