<?php

$local_config_file_name = 'wp-config-'.gethostname().'.php';
$local_config_file_name = 'wp-config-local.php';
$local_config_file_path = dirname(__FILE__) . '/'.$local_config_file_name;
//print($local_config_file_path);
if (file_exists($local_config_file_path)):
	require_once($local_config_file_path);
	return;
endif;

/** CONFIG MIEI */
define('WPCF7_AUTOP', false );
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
define( 'DB_NAME', 'db_tedxcremona');

/** MySQL database username */
define( 'DB_USER', 'usrdb_tedxcremona');

/** MySQL database password */
define( 'DB_PASSWORD', 'aP6XdC3X');

/** MySQL hostname */
define( 'DB_HOST', 'tedxcremona_db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a76364153ab59154c69b87ed12d45270def1781c');
define( 'SECURE_AUTH_KEY',  'd5e64f4eedd09f73f233f43964805f5648fa7cb5');
define( 'LOGGED_IN_KEY',    '9c81b7f749f365ef1d687b6f4902d6bfd861fc1d');
define( 'NONCE_KEY',        'af84b8e0b81b1c6addd5a38301fd7c4ae024d92e');
define( 'AUTH_SALT',        'fabca6e4657ceb43939ea1b861b8a245d332e4af');
define( 'SECURE_AUTH_SALT', '1c2684056d7c217a5d160287f8bb5ffe3145d351');
define( 'LOGGED_IN_SALT',   '161f6c00a04a859a441a581d2615d8d73aca0a60');
define( 'NONCE_SALT',       '650c564eba09a3eb29a50afaf5b9911aeea2dfb6');

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
define('FS_METHOD', 'direct');
// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
