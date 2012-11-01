<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('MYSQL_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** --- PHP Fog --- Set WordPress to cache requests (for Varnish) */
define('WP_CACHE', true);

/** --- PHP Fog --- Patch a few issues with file saves, plugins, etc. */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$vY$qIY%)|ZFlE+1dbCTPNWh54F[[sD2^wYa=Iw-M+JYvFf`v<| BN,!Tu;nGMjs');
define('SECURE_AUTH_KEY',  'lsp&Up4!f8.Ot:(/N _|$F3.<7&Uu<fT|b^&-AYrA.Sy)[%vH,hIu/Nt|y]t|}rP');
define('LOGGED_IN_KEY',    '^,Se-xY_<zrk1thX()daMp{x~5amzRh6B!S<+l8P[Yv2+stdg)zJ.6ofsva1yqAb');
define('NONCE_KEY',        '~5oEyaC#TX0-kx3bhfN*UvH(H]`hV+.M;K!rb >&c7%G?BFHO)<-m>wU)KP:Ds|Z');
define('AUTH_SALT',        'p=Jn*n3CN/Rdn@<r09-%#=;Vr*#uf`My|hvj,?!V~F%TRu(n&<|=5c+^t)`a+9gC');
define('SECURE_AUTH_SALT', 'vsnh!|<sbG3n7HKu&sx;i(y3SI[a 2Lg/o[VUDKT?1D5 %,){{vXPh;)zA5Bf$]u');
define('LOGGED_IN_SALT',   'ndn(w?EJcR%KFKVA|M,s~-+M5-u~| <Xe!)h<~R!7az 9F@TG7I 6XDL=&AGQ34z');
define('NONCE_SALT',       'O@6CK6gQ_C3e{M?{v;],W5<(|Cb:Rx&e+A]`of.nUcRUr74tW|$EMAA-evO>;^}Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
