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
define( 'DB_NAME', 'thm' );

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
define( 'AUTH_KEY',         '8qsIY`x.d!]f>n@iZzplGS}F14A(IFGV|P?(*i~C&Cjm=`n1RM6+UW=7=;vB38&~' );
define( 'SECURE_AUTH_KEY',  '!S/Zb A|zYD3*CByB,:Y=F ,z,$9hbZG[v})5S?hx#L!8tD|mX2de/TEpNn&V4w~' );
define( 'LOGGED_IN_KEY',    '!~nubcbc*:VG@~8LYI#Jx}icwE]eh1H/#gU 64aRlz?IyN0$k3|8y(%zQ@8e?b~W' );
define( 'NONCE_KEY',        'F$G9a)c:{[9x%9o6peHJAY)Tb{3qQW`qk/ Rk}g_aE2ZT2od!aR?tq*$nuZ,J@5?' );
define( 'AUTH_SALT',        '&/R >n]Qs=B-{|7rwL/M<?,w}*O{2|Do(qD/6]-h!2Pe7p%t H#P_wRALO>g[{d%' );
define( 'SECURE_AUTH_SALT', 'vsU@6y8kVE%$YD0@5qEcrlu@O#[e-Jz@,&SK9^qD.(hhP=Na|/:Z;H+*|7(I1&C]' );
define( 'LOGGED_IN_SALT',   '>m>gX^akr|#&ybqUv/yiC&&WBHi-mTT#S}__S1}B`lN.@Ei}@A[12H-V3=;`u8[M' );
define( 'NONCE_SALT',       'FV0c4U?(_rkGCZ|DP902H9#2xogT!=SKRLRV>:F*]0&p{PcM}?]`:%QpB2n7msZ(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'thml_';

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
