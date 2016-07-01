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
define('DB_NAME', 'nikwebsite_2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0+=#UvxR3~n`z9#mqIV,OT/jmUiQQ?`=>)C|TYWU!pUO}^oZ5.4}m%}w[oLycv;$');
define('SECURE_AUTH_KEY',  'iD]y,?~ihEWR@QS*nmrvG*ckOuj&T`n`j60lVmlH}j|E03xJ]m(IxXHR_C_y{(( ');
define('LOGGED_IN_KEY',    '6VKaB3>B:KT3t&M<89ioDKTH$vGeT_(0g<Jr35sxq>h0O+qED$CiACzsmB 3{G3j');
define('NONCE_KEY',        '0f^H1twI4v?9-I:bBW?OzLfxhoL)3cZc{it6;^xv O}xruGSN@/*vQy-LB[&+kj-');
define('AUTH_SALT',        '0]UlAox98DS,},eSw:_sS9e*9}29S<d}/ToF0m[P[]tb@SJ@!Sjs`11Fb+IGb7MF');
define('SECURE_AUTH_SALT', 'i6L6kqAOc0~5tj;[fy>#zO%3(_gL5$cH{#&iL]!bNDM`3eYOU]^&1=*}+V2_jrk)');
define('LOGGED_IN_SALT',   'v#&I42701LS//@|rq6>1jL~gmtGi#9OvUr_M:zm+c1H!Cl?Ps^~kaOqOl[m5JhJ(');
define('NONCE_SALT',       'PYR){tPqtP~ QRHwfpR8Wtyg:DosdLI)3p~z|GZ}$&S^]A;3%TJ16uMX?gjV$<!J');

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
