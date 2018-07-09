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
define('DB_NAME', 'admorus_adwp34');

/** MySQL database username */
define('DB_USER', 'admorus_adwp34');

/** MySQL database password */
define('DB_PASSWORD', 'S.p6[4T8Yb');

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
define('AUTH_KEY',         'jrpx5ldqxtw0uinkudhsiztf9beccjtlacocm3rnpjylxta4sbd2mg2bpufs47cy');
define('SECURE_AUTH_KEY',  'wz2xma4j7xjmjvjpgp23k3ljkhqwwiwivqcxc4oxteiyqoskcsfp7ptpgmaa9afq');
define('LOGGED_IN_KEY',    'uzifjnphpawel7yx0linyt5otxmwx1awhjcni6xcsavttyfenn6ois1pifltkisq');
define('NONCE_KEY',        'b6ostv9y9rfrdgjvff9l5pbjmyrxp0bh7ixara0vvko5qaptwnhibd96wpzmjgkp');
define('AUTH_SALT',        'rkzzk4fgpql3iiy2jj4kmxv85du9h3zd75ddydnxjqkjnyq8bzjn6dkalooxqfxs');
define('SECURE_AUTH_SALT', 'fxvxxiaha06xk5cbe5wivsn4gls0lngvt8sa6mrekolfuqn7dsqzcucfxwpjz7za');
define('LOGGED_IN_SALT',   'sc7ftmc8dtrvmq2m4mkwbh2re66wfok4j8qdxdn4igfskrwwhbsdwbsfjldxnlqi');
define('NONCE_SALT',       'uc89mz4hnv0wsklkahewvnjhiramtffivmw8mtavfegrpat7upb1sb2zb9rij2cj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp2_';

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
define('WP_HOME','https://www.portalbmf.com.br/wp_v2018');
define('WP_SITEURL','https://www.portalbmf.com.br');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
