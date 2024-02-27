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
define( 'DB_NAME', 'auto-express' );

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
define( 'AUTH_KEY',         'Kq*!vwHF[LLQ%:#[DF0QYraT~]N4x~vVtp GCa<.>1gsI&L@<*?Vex]rN5JueadU' );
define( 'SECURE_AUTH_KEY',  '5#;a544Ix~ax?7wWygY=2*bj*LWt}+(23{3P}EG%8nu^DNeNW<qGQJA`Z-dEbei:' );
define( 'LOGGED_IN_KEY',    '}oh1zYWO::V/N=cL1c)-oW<>7nH/M]M~fd*X#RT8RcP^*j U?1=L)SHH^p{McNQ6' );
define( 'NONCE_KEY',        'Kj cLG}L+n.z*1]z]}F@}o>K&[S8;cZYZ6=X1bW]Pj,UrrrJ2?,zq_7.,eWZBw>a' );
define( 'AUTH_SALT',        '+*e]z7mHN;C**t/=zVO}Vc) r^Df:Gw]k-mSw@j?@1}sfs]V;9r@${uwqBl}`.(s' );
define( 'SECURE_AUTH_SALT', 'mqY1ISheOMeDZWq~~jM8g#sx.M8-y+y>^XVO%9LC`(ntm8GLn`E,;0b)~j`Ckz@*' );
define( 'LOGGED_IN_SALT',   'eF*>d-+45?F[,Dg%amn<`>Is*Ap/$ w=&YBaufVu1m04{jJ!>7wz=;J`5[%1y%5+' );
define( 'NONCE_SALT',       'A@Ja7`#nZhzI);U+QO,~}^<iJ>sA[<&}k(,h)0W?E_%H,/Sjb[&x,k:*MqL7c>q#' );

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
