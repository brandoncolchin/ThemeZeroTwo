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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'L6I2d82h3Vjqlz2z');

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
 define('AUTH_KEY',         'QQN_^brpgeo_W13^T;$m]+`{qH[S~VNvqDag$]ua?MoAGUy5t(ytyE6BnRULXPE]');
 define('SECURE_AUTH_KEY',  'd!etNQq_4aoDx.1F6*|Kg%8-L@]#S?<#ng+N(Hj+<In0O]1$H8|]5[|m<TS/b@ZU');
 define('LOGGED_IN_KEY',    '3gRr0xGbUI;al)a-KP,^$F^o_=!d0%.d-q><HS]J@z5QTA+6h>lIFS27p]$)?$^*');
 define('NONCE_KEY',        'vr-#|pX(dk3f/!|1b-Bz*rVJLP8xDK/cpF-*H<sr53wenJ[)k(b@OH`.Ab^f9L|T');
 define('AUTH_SALT',        'YW)E%-*NMB@,PlJ8<5i/(hoDb6`jdND|^VFNvP-L$q91J(gau1.:+5Y{6:ed[ZV(');
 define('SECURE_AUTH_SALT', 'KED 0]:o_2ek` 9ziE$Fa|1^I=~)C*8.o}cmHQjWgGE[o{`6#+`E;a?e%Lur[!N]');
 define('LOGGED_IN_SALT',   '@o+4++ L}dY[o2y>Eet:<P32m]*fm-|S.Ve@z7jABjQUL[mDf?G&pAEH(A|wdQh-');
 define('NONCE_SALT',       '3~F(5&ow-E^y$__S5!_R.-I-@dKz6On;U7}tXz&^We{+gu+&b%W>A4hqR9L n${!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'deet_';

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
