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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('CONCATENATE_SCRIPTS', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(;](P.iH(7Z>LdSjlOkP.+%Ai(rM)Sl%Y>K1d.3m0p!kU{eFn:51Tp38tdvan(;8' );
define( 'SECURE_AUTH_KEY',  '<jr@^N$8=bNrQpzhI0;NiUBm~L@rCJQG)UVN5TE>=t4@Wy>__YJBS=0W[{TX$nS(' );
define( 'LOGGED_IN_KEY',    '^g(js]Nhpp2!fF^8]:0L+wiy=@18U`4#L~3Ro#e|a]J~<Ml;m^yL;Wq0C[y}IxfB' );
define( 'NONCE_KEY',        'B9+VKyh71QVfG`c3nP26/)-ykhAe?~B[-O0I>]*9nA7lu|:(8VwXTnR@BL?otQFt' );
define( 'AUTH_SALT',        '0lYBmLL:-GPd3B+SSVE%muT5*.OgBS4}.^O$m.Rk.[!C9rCP)Mt#ktYb<hP|+^Pg' );
define( 'SECURE_AUTH_SALT', '=oWjRxb99m@Vr(bs;#Kd%Zp^:N5XChgG Ysf!}L>beS`ln:PAT-$i&geu>Mfa5_&' );
define( 'LOGGED_IN_SALT',   'n,ZsZ(@hI*l4Sq^#$)`c{&wv.MVl)u~Lu>`r]1FKd{Q3^GL}5.#27re[,A!.5k2q' );
define( 'NONCE_SALT',       'H06d?+D6u$uer(rzc{Y7G,9J2PL5,nkI)W2abppg~@5|4)m~A1/yx!>~%(h&s~nI' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
