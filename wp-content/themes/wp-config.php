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
define('DB_NAME', '2017_rolandadelerme');

/** MySQL database username */
define('DB_USER', 'ny_jgmaniego');

/** MySQL database password */
define('DB_PASSWORD', 'D+}j4X@c');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'p2jR2vstSWYK5o2yZacfVGhGzQjZu4pZMmXEZZ0vGizfvRY87G0gPoKZR8MB7sbi');
define('SECURE_AUTH_KEY',  'TXWwyytwExeRhNmKnMrBXFGZrPWDtJBlLyWLsOQ4SdbHoy5vJxpZmP5NFp5odZx3');
define('LOGGED_IN_KEY',    'KOd2TQDgcsaYh4gFxCnK2fJCZc6588huOXEb61gqaotyvB3pYOjlf988tYGk3dKa');
define('NONCE_KEY',        'mC6x77OjOlcS3At8jDBhIVnfIlDqQP5fggWABes109GAPCpepeVnMIJivEqZ1C3q');
define('AUTH_SALT',        'ShTO7AkCQk8wCe6bC0Ji6Rgfcuyw9eEiFh4nJIqw4gD0jUaR3N51LCHPunovdOyN');
define('SECURE_AUTH_SALT', '2bH7do6zzYHDsX9mGOqGbS0t28TaxDrTtp11AB7F51tzKjqTdqbbVnjsoKGcGJef');
define('LOGGED_IN_SALT',   'jRUQU4tPLvpDzBAJKo3yxI3UoKril4XGukPa8s4EwdCxkIEWEYvGq8B1c2DdEDJM');
define('NONCE_SALT',       'aZ41NDSrn9sOmsMtWlxwrGGLfqkfZT3PZELVDPbe1RVAQbrXiydooUHXQtreVwO4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2017_';

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
