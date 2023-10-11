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
define( 'DB_NAME', 'windows_db' );

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
define( 'AUTH_KEY',         '.#PGWgVjc}:<hb=8iOwzZy`2=Pj+Ee^v.v(:m`j,Bv)>T[LW8$J`e}K[MELH><B(' );
define( 'SECURE_AUTH_KEY',  'reT+QB4hJ +wvB<x3A-7Rj7?gInB1]!1}<1Y-=c`)m)$u,A7t`<$?lLh81uk},xG' );
define( 'LOGGED_IN_KEY',    'zHK:R;;EwjR1Kjl>/cs<-~dtoxpgMp[KBdfT|RLvqmPD&O!;Ad5K6c/TS}W}#vo(' );
define( 'NONCE_KEY',        'ATwkW5}|kPU(aXyxWWGEwc_M(RKD?@QsCr-!mBkp//QW6&)sN=!fR21IRMN%0wK^' );
define( 'AUTH_SALT',        'Kq>$Q]CQ|CqEe{0198.As!LkA(en#f~$<y^DK damrGS mE<->zE3h>n:lr;&xQ_' );
define( 'SECURE_AUTH_SALT', '%6K$CJ]/;<QBf6$u1M2M4]z En/21AhK9[Om~wP^Ah|,+uJnFaopJ}+qs>C7`x9p' );
define( 'LOGGED_IN_SALT',   'tFZ,BlyzD[!S~L<l(Hg+[Cbon`AKKZn*V2<bC#XMJTX|d-{w@Y9&>Hl.uYlf};L,' );
define( 'NONCE_SALT',       't:7!nwGJU;5L0gT4wuRb.d4AT02l.H.zYjC:XW]qZ{D_`la,;<6qCl]Y&w7aF9#0' );

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
