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
define('DB_NAME', 'wp3_photography');

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
define('AUTH_KEY',         'NdxoNBO`e0!p7Vr[ga=Wb=j#9YvzlVZv#4(@qhI;+[]:qoG6*kkKq,<)v#gCZaeS');
define('SECURE_AUTH_KEY',  'W~EVSE5O> [L XG~KDvZ{#r$}?@R[>PqY{`ZK{<D3k_/etA/zb*08b^J2L:?icI(');
define('LOGGED_IN_KEY',    'wN`K&*<=c!LOxR+h7S>VW, {vl~PI ]^q5%`UmZ:Fc2D,cip6AK:gqL Q<xRT]gg');
define('NONCE_KEY',        '6x+a((,]U!09/kLZTMW-rOI=YBHG7lvO<e^BV28,P{ij8Y0vv6q L~iw[[Wxy6a.');
define('AUTH_SALT',        'Fkc.@g7Q $yUwpD>mPT!pM9EX+ierrU=~3xdyM(8/Fo].V)e/38S$Z,gXh>Z5IP6');
define('SECURE_AUTH_SALT', 'G)8H,_aW3Y%m$BL/QCu6pal7fL(n(yH+>gQoE(35L.wT9RFI(wGn]<Xvn!;ekEj^');
define('LOGGED_IN_SALT',   '[XixPRwKC.g[F16>~1^K5l@)l~pSez;bn-!G_IFm;(r{I`&`qhu~A_O:-$NDd(wz');
define('NONCE_SALT',       'I25TnEg3 `?m85eqpl5iSg&FGX<3)&f}%a^2%9WeB,(SybmyX5c^T(2U+,9=@ Bj');

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
