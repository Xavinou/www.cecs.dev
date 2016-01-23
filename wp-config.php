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
define('DB_NAME', 'cecsDBwoil1');

/** MySQL database username */
define('DB_USER', 'cecsDBwoil1');

/** MySQL database password */
define('DB_PASSWORD', 'S8J5Jmpx');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2eA6M<iEyT3m73nIyrI^yJBzQ>zR>,Y>|c0}c0}kRN!ZV!ZV:kV:ld5ld5sl5plDp');
define('SECURE_AUTH_KEY',  'xA+TP*TP<eqI$yP^XQ<YQ<fX>fc>Y0nj7ok7vr8vrFwsG@v[hZ1oZ1lh8ph9wp9t');
define('LOGGED_IN_KEY',    'Jc8:kC4sC4sKCsGC-KDwSKxOK~W]#hDtS]l*X;]i2qiA2j62qA3qEArIByMBvMF$N');
define('NONCE_KEY',        '2A*b6qP{mE^A6jB7vMFvN,@Ykg8ro8soFwNG@VG~VO|WO|~Z#dZ:ea;lh;pi9t.a2');
define('AUTH_SALT',        ';a;lD9L.*T]*T{<e<f2XT{fb{jB3jc3rI4njBvkBzrJ0}kB4kC4sC4oJCoGC~Z|');
define('SECURE_AUTH_SALT', 'U,Y0okBokCvs8woJwsK@-G~-S|-S#_ZK_-S_+S]#W;#iDtL#m6xP]fX<iqIErIBy');
define('LOGGED_IN_SALT',   'KwL_aS.a2]i2]iA6iA6qA6qIEQ<,X^Y>fQ>fYcU0jg}kg4kg8so4soGzo4sKV:');
define('NONCE_SALT',       'u6$TP^X<j>fB3jB3rB4rJBrJBzN}g8gCzsJZR[hZ[hd1hd1pl1pl9xmDxtLxtL*');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
