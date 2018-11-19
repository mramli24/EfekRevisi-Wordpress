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
define('DB_NAME', 'efekrevisi_db');

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
define('AUTH_KEY',         '[XX/H#11XFUXC-KKO2[n,] tH|kYn30_jiXX_q.QD[_Q-r~n(-h(,`vXKmOP6xp%');
define('SECURE_AUTH_KEY',  'X4{e:TQq1dGg{_O4ZE7`;zELpJmA+%b^p&2AsL95:pQXoa^;(6#Fk nHT<eigQ,m');
define('LOGGED_IN_KEY',    'H74ze`6$PbB<mV-={7fo~6f(0aqtDvN/lAs*q*K,+8CD4{PIC.55P{TSn4_M<p6c');
define('NONCE_KEY',        'P9EuNeF%1uwfR<>qKPuwF|EbzL<ll*1pi:!QD^_ty-K@qhYW_(^c+gE6O/ Nli0K');
define('AUTH_SALT',        'Vg 4GTHQBF)k9q>~eS_bf]^J@O5EGPil1)caS6Eq+85=8ie[SG(IO?DKlKZK3u7p');
define('SECURE_AUTH_SALT', 'Yf|6,|}$xA6@.|j4B82cktVY63Osj4FyK=Xc#K6m}VB[66/-+ePI;X9ISH?V[R5/');
define('LOGGED_IN_SALT',   'nH<-:^go/fCU={CPyj*&oZ*IW%}u<[-XDghr6i3a;QWl:y+]I4,dvT{9u]alnC[4');
define('NONCE_SALT',       'NmhL_-KS)|S/vVg}!-J&T1=T%m$Jsaf()w,Ms4],u`RBvs:<tush]H8mAj,q,=sl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_efekrevisi';

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
