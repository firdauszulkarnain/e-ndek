<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('DB_NAME', 'e-ndek');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'z<zx5V+<F 1bu}W{se6}C@IEHP%tTvT5/iHv_saSJW/l&xBz_V1$<E`Nxrc/4QX0');
define('SECURE_AUTH_KEY',  'Fk;o?XChA/QK6CDog/vp6vGmvg}Bdl!OFArt|K03]k5L.TwZE,qFA8,w]Zq.}|xV');
define('LOGGED_IN_KEY',    'TUYtrD(^fAh7i*$nE1tSj0Mu|/e)8vh:PaJ6u,hxL<m%a-,cKc24!I[Ai)?j (df');
define('NONCE_KEY',        'by}w(AK^hnNJvQ:K]~Y$`AcJvYW1A#,]C(>0DVff-iFUeK>!n(=37bq]JxSwXkS0');
define('AUTH_SALT',        'XT`jA.Kz4m`D8.)acR6uAu]v7Pv.nUbRD+G$wGg;,>WM4`xG<BU:V;IVo%b>6B?;');
define('SECURE_AUTH_SALT', '._fF~^S$_NxG!,GO,e-QrU(:SBqc+^^lR.IFG ySM!3+<+BzY*~D9v602=1h|ztx');
define('LOGGED_IN_SALT',   '-FO{4Iv3>7q`J tasS Hr.}L<0K}-JGvt7jK4nb1V@;y/3<7]!bo{nmKFjyX{Q4~');
define('NONCE_SALT',       ']S~vPz<s4,HD1MvPLJ^_LEUPo^3[e+1/Z%;4DZlN=)3O891BA{^JMNoL<c|8_ M^');

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
