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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fondovi');

/** MySQL database username */
define('DB_USER', 'fondovi');

/** MySQL database password */
define('DB_PASSWORD', '19032012T');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yY9?d]&>X`{@lic!<BQ5%&<^,!x]=WDJx)V;N{L$ e)SlxM8&3Mw;hVf5Dm6/#|e');
define('SECURE_AUTH_KEY',  'r.C]fohFkLTSzEaq&UUQKF7IOdgbt^?,yv}eG@`:N.k`w?$u%wFq~Gu>`^0Y|C8$');
define('LOGGED_IN_KEY',    'ueGP#Sh34.4T:Rq c}~=[.Vz;ROEy7.JIs&K_yyc>Ds8zzjU!W^JL@Hoev^3F[in');
define('NONCE_KEY',        '7O?SPoFVrn#I-6A*5co7/GnLd{77$Z^eSm#waky5^0WV.Rd~g?`$-l/wW]4i> 5<');
define('AUTH_SALT',        '%w,D61`[W{S/$rE8K@hQxsM}HFSH<lWQs}FmCTswXY+|@`=0VDNw=}B},WP. @>|');
define('SECURE_AUTH_SALT', '##-~CtIb[}ir@Bqh>r@]k9-WRHk|Vj,,J~!A5z*|H:gl)`(PVb <]&^As(`O#0c/');
define('LOGGED_IN_SALT',   'O09;g@`nr-e(w:77iA18z2($8Z~~`R_c~&BJ?.@2`%W*chOH1yoZ!s(H8xtz*~#@');
define('NONCE_SALT',       '[JenMw>oM,1[d}O_KLyc{CZ@>:r&e!pAElKx[{Jz/<W?[_Rq@nqGSIF~Q_[5+CC.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
