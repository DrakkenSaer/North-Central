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
define('DB_NAME', 'cen');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

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
define('AUTH_KEY',         'Gw?*~{|CNo~OmP`Gz7XW&[z_3=Qc.w;|l2H(_!axb &rz i$Q(tb3i4?mYuUB,/N');
define('SECURE_AUTH_KEY',  '#dAdUaC*)aW$u..ibUL8PW}B95{GO&.hgxHS&?p!Mi{tG47c;O@1UAk&rkEW2fm<');
define('LOGGED_IN_KEY',    'L0wi3^K=E*E4v%(jkFmS>c=y/.dD8uI`#IE!WDM(is&?aB-VW@E>tVGJX~9Hhhn4');
define('NONCE_KEY',        '%;?gX< Yr8hT;6|;4%G.=)t?E8IlTqHidL2vv[a;Sw+7~ZFyngtR`l:XHRMh1.Lo');
define('AUTH_SALT',        'F%zq}>N1GvLVtm!p;_&)@$yj?z7g]Y%Kd,f^oMrnTFyHD3?tB_FC$*>m}1ftGxaT');
define('SECURE_AUTH_SALT', '1bdj{*O7Mc8[O*o(nV=O<y6C]liHaQ97P>(Iu(tInqpm @EtAiik02iD<S]uQ]uQ');
define('LOGGED_IN_SALT',   'CaND;tVE+V>WMwPZ^YFD{fAwD#rP/I=pyT8-jP-ymv%?ClRj:sak-I:Yl,A L+FT');
define('NONCE_SALT',       'N>2PSg0MgAcso|K68u~ID-S%ZU1|`[KrP]{|rzo?ErQx.>zDAQ-x4U5!@A`RvwI4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cen_';

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
define('WP_DEBUG', true);
error_reporting(E_ALL); ini_set('display_errors', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
