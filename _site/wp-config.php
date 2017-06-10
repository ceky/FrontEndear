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
define('DB_NAME', 'zilelenordului_ws');

/** MySQL database username */
define('DB_USER', 'zilelenordului_ws');

/** MySQL database password */
define('DB_PASSWORD', '63wXa^FC)TNt');

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
define('AUTH_KEY',         'z:PS|GR+&@gCc8.h1rHRm,SV5Y8bi8kROLW_RbT:`&W4ktsXsk/f42=G!<Xw1dx3');
define('SECURE_AUTH_KEY',  '7Gam=&0,~w3vO`tLa.L-<3S*3A- C*&q|YYt1T12@~3r,tJ5|gpUdRCMGad1AosE');
define('LOGGED_IN_KEY',    'C|w%lxRF?3&>17Q?.-<RxL-(63p&m.2w>={[Va%>3F0D4IYWNoxAXl>X=p2qvg}N');
define('NONCE_KEY',        'DyKqcl5Ita 8}T#:(Mwr9eNkQ(lMRN/?vIL%wp,%#mMGkd^`d4&/LH50f*_qCpx@');
define('AUTH_SALT',        '51Qw&5P0e7]E@cFV0D7&/ 56Z=MRAAIioFLdnVG%vy UB]U(){:I#v;!B`S[(4{|');
define('SECURE_AUTH_SALT', 'i])TS`lUBb]R8q%E6TN[QEP|*-Q4kz0Sk fkxW=Nnv43~YAn9R++G^k9Fk,s2y=J');
define('LOGGED_IN_SALT',   'R|W<TX[]XnZ#e9[6}v-A]F8XMrbtEm+5E}to2^A0T%_uo+Q9^1e5-PIJE&Lwk |n');
define('NONCE_SALT',       'Ym&5-i$xY995(`?.BDIPvlPq@m%^l1N(9H.pFt7,CS6^tSKnvwjG>2|$mnE^|igp');

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
