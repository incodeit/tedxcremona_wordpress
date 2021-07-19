<?php

define( 'WP_HOME', 'http://localhost/projects/tedxcremona_wordpress/' );
define( 'WP_SITEURL', 'http://localhost/projects/tedxcremona_wordpress/' );

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
define( 'DB_NAME', 'tedxcremona_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'C0zk]<G2hAmy*H[bJyg3Izwj/{&~%;o[G(Sdky!=.$TLuq0W+^1=cNf|ltm4.A4Y' );
define( 'SECURE_AUTH_KEY',   '1g+NH0`O!/n#e^5(aZ<{;ki;I}{b=&-Y{B{5@>>8?:4-,f|8Qwj>0)#EH^8~:ELw' );
define( 'LOGGED_IN_KEY',     ')ub|3#x*.c* RkOq^0db8/6Blca?4`Yq>=>A;>Yv(~M<R!{5Xj#}Npr_ys59eBd)' );
define( 'NONCE_KEY',         'f y0Qo5C 3QRpZE= aTx!991:KU-MI)FK@2dl[a`[;-u%{{p}w/lV.~w_JzK#7B5' );
define( 'AUTH_SALT',         '<<JE<fzp7vsW[du*ha4M-[,3eiYOYj]kMwFUq202- m@miNqSg%TS+M29>a8*wD3' );
define( 'SECURE_AUTH_SALT',  ')x28 8X2;,E(ig~4uV6?7tS{m~[BeRawy]~a,id5 +1` lmfNJe?[IA5c({XR5xK' );
define( 'LOGGED_IN_SALT',    '$V-I&)Dr3i$(_gZ}/~0)_V:-6ByY.4FxB-2:/M^Rrg;!(_M95C<_d*+HwRseDC3.' );
define( 'NONCE_SALT',        '43sj< s[[c%96Thd>Ig2C6^+)!E~)acL`WnIYNTa7*-$?}x,COsYm>[68;c?-L%d' );
define( 'WP_CACHE_KEY_SALT', '!#MT)bB.2+F{06bbS6po<{30S]+HF]^2Cwmy^;Rrbm)>.P^h0^ti[U8nXS $[FHa' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hHHEZHR2_';


define('WP_HOME','http://localhost/tedxcremona_wordpress');
define('WP_SITEURL','http://localhost/tedxcremona_wordpress');
define('FS_METHOD','direct');
define('WP_MEMORY_LIMIT', '256M');
define('WPCF7_AUTOP', false);
define('WP_DEBUG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
