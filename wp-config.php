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
define('DB_NAME', 'clientdb_rolandadelerme');

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
define('AUTH_KEY',         '>Nxe?j_on*1M&{%-+>O-p/H`38(e]zmBL4usZy3K/v&w4sg>k[)&Zf93/N{E@4Qf');
define('SECURE_AUTH_KEY',  'KRX2F%LdI}|QU.8=~Th]xx0ow;EB|:iKIrt=j^[;`~l?=EMBIf@d,6a|:_/.Ti=F');
define('LOGGED_IN_KEY',    'd,tQ R!NajioEIORDw:&#a=xoEVs?&>kMqV0c_pUQ@AyB[J:t9!GD!jcUM;IsHJh');
define('NONCE_KEY',        'R9X/kBfkl`l.?J91 >Jb}(vTrl23gjoYdt!W#=Og2lyDl[5m#StuqieeSv,y68D#');
define('AUTH_SALT',        'DP~#oQ36h5 S`sj<EI-eBz;4N1:9v|&<vx`1XvNQ2W/F<i75QLjT-CV5;lk U,$l');
define('SECURE_AUTH_SALT', 'sS_R{.kAtxX#6Rx t~@b|+I+T5K]d>>`rAU|0V<g;[|->eE>d>;Z}%QM<zto6s S');
define('LOGGED_IN_SALT',   '[<0b!4]ckYuu2[Pj3mR#^_w_BeN_JR*_43p$3H{Juf<YJ^osMZ!X&q<tGn6g<(kN');
define('NONCE_SALT',       'NbRk!/L%.Xp*DE^972:nii,2$V78I !x@T.4}Li6Ab2@y~}Te_:87+1_cEp0x<Yu');

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
