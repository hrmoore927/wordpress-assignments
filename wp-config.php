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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'hrmoore927');

/** MySQL database password */
define('DB_PASSWORD', 'seaver08');

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
define('AUTH_KEY',         '7klO~];yQr)|n{eU(i2SPbZDGcC_@/i@0`x}!08J+)f;>%j^C[ktNV01@%RdwK&0');
define('SECURE_AUTH_KEY',  'pEdP-=;dC:FnO|1YB^w2sfHh0g wFUSa3EZ*m(cR5 {mD4)lpWpXU9g,[ZfeV_<#');
define('LOGGED_IN_KEY',    'Wi;vemTz>EsC2,w_n8tfM~?X/-]]l16AYXmxqbhDQVR^<9UeFzsGGwDE_/x_LWFL');
define('NONCE_KEY',        'Noa,{N#Ch>j/Il4qVJpjJVt>6?w~#gnC9w>=Lok)e(4n]%Y?{8+_meeHI7/Z{v%@');
define('AUTH_SALT',        'Kx#|qqrtObbmgvO^IitPdo(=4jqXoN/7Y $At@_o4dG1H,&;@)M.=ta$b_Ej/rEk');
define('SECURE_AUTH_SALT', 'Au>o>QIBlLzjwjtEjP>5`QkQ;>yos7|rWT.;(U2uhdqi5<C}}3(LB:p7H,V,y GJ');
define('LOGGED_IN_SALT',   '~(wOU1Xt{kJP~Vx6;/(a[(1QTW<?<!VR]7|>IFYM@4[7B_f]HSFsPs[TU:}h@nIK');
define('NONCE_SALT',       'jD*u7$-nS3A/Cb^LQhIvTKF|[3`I=:;V@k+jGfgah:z _oMVxy5t:nz!A+MMzob-');

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
