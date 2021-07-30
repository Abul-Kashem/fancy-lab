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

define('ALLOW_UNFILTERED_UPLOADS', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_fency_lab' );

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
define( 'AUTH_KEY',         'B18gYzp+fu3Y<Bw6+}OG<PxB-^9vthLPGHq;64m/^pN0-1}q8/kG:jWy3yj[tbH5' );
define( 'SECURE_AUTH_KEY',  '_@(g==;Y$(X<7?]jc:26j:b/h4vBqcQ.R5eP2q/W2B2Xt*M:jFwow$45s+|wDt=*' );
define( 'LOGGED_IN_KEY',    '%+9m$)CA,~kW 7sgSTLq!~O:wz6zpIpROyx`k.w@-WN1^bJdr}afWFTon1I7-Te&' );
define( 'NONCE_KEY',        ' h|K::LNeG9.OQ{eC`c%@ifsR4<g9vb47>Mx1b08i1{qhy,&(hbSk~uUoG%<-UwG' );
define( 'AUTH_SALT',        '[a&tln<n7GQ<t?~%~hZ~pV`-38B#C(9LMY7ZctH4ohq>>8%GHSA5k8/=o5Ym{BtO' );
define( 'SECURE_AUTH_SALT', 'O7GnS[|uqn6/r2FqYSksz~$/uN46j6J*+v;`JB&Q[k08!8!HA(3u[V%7:wOa{4Az' );
define( 'LOGGED_IN_SALT',   '3e_STm5!VYCE:4yl73,j6q#4:JAZXG`t9A??)hKoZ7pRDNt+ga~a6mKtB`.?r5`[' );
define( 'NONCE_SALT',       'p4/$:)!&/R`mP[2AJoK ^99%2S&exe:A(G-7H27ax`?#] c-7KfF@d<qfi:?wi,D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FL_';

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
