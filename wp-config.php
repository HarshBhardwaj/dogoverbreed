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
define('DB_NAME', 'dob_site');

/** MySQL database username */
define('DB_USER', 'dob_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Omizzy636*');

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
define('AUTH_KEY',         '6UPKvBlmyj`g(`;g;xy_onxG4&A1kB|!lh=<7QoJ)(Yn5K#6,^ %g^9?Pt?A3`C>');
define('SECURE_AUTH_KEY',  'tfD-#|hv/610=iIG**yD;baH]MevNV.w.;eS s1AHJXQ- c,#Sz||8l`IN;YLIOL');
define('LOGGED_IN_KEY',    '#~Fq)@48Lrmdu:+ZD>Rf=A@MHJlemToOzuL~cy5D-uV>DiR4 w[IZPs`(3ULC_lx');
define('NONCE_KEY',        '#:$2n!2lP K)ykGl:_tWkS%Fsm{,Dq~FrWH96@Z]i&6kO(rbu>#8CRyGDK5n!oH#');
define('AUTH_SALT',        'VSm<O,mWZ(HLM6g]CR~CsIR`$r[+q+<@%:Xn4ZV`-4|A~Dgth18Gg@/3S}4mJCC+');
define('SECURE_AUTH_SALT', '&7zSCQ!U$;;=m;Rs 84s%6v< /4CW|CAjhZ5(FJYhW;b#uK;.[_B3eH]D*KtT@8n');
define('LOGGED_IN_SALT',   '$&(%M=E,GHi@zSX?-JSI1TdE) ?Q[e7iSqky~|H,:j`:gi)/=,Y%[7iynnmP-JvR');
define('NONCE_SALT',       'JEmVxKK.<+VA1trE~FL)9A^/4}y$+H6mw]u9vqxPi!es$d:Y$iHUugmT=fr+R>J%');

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
