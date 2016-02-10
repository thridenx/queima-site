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
define('DB_NAME', 'db_wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_+-%gQz3|!<s+ol?:9*PZ,}N ,|gqBdP<mApcpH}cs@VE+s:$$__yZEkGgR++>KM');
define('SECURE_AUTH_KEY',  'rW$AV+m9Wa#[+<3tdWir[-xR!ufi7c6BWYzDY|Qhwfo&Gf3_Svl[9x.Q4F|m=g!`');
define('LOGGED_IN_KEY',    's8t$;t0)L,MuZa#g<Q<|!X4&k=`dZ>*I^tb-{JxXeY+/}atU}WWpCo{3p@h3A:$W');
define('NONCE_KEY',        '*|]zfbiJ:lHN<JK|Bgn??*!}(T4=)!Yy(j0[EsWWc*RTGL(4FY>e-ju?/OrSI:X2');
define('AUTH_SALT',        ';IE)7rv@LPENO|q+pzLu3>3GHjV-g6>Z.nCl_@h<8h[2s(M;hk/n-r]1e:%br0}?');
define('SECURE_AUTH_SALT', '8z+YKi^#O~<jF~{|++QS|HQ4)84<R9?g9g[JlE+wJwc9QcCHMes/mvVr0*Dc+9OQ');
define('LOGGED_IN_SALT',   'p85d%pL7es|ghj~G+SAZqQ$4|pS4D{)=YC?,HG8&qRD*_roe4TjdaUFT#l[Lq4eo');
define('NONCE_SALT',       'P+%WX`z7# W7j8#gFYuKfLv(&!y^P7=Mi@+r^Gkm<iVJ5,BzN`g k6KW)V;-^8UX');

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
