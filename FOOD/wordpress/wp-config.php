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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '90lvLn9N-g+4Fh|OwCvQ3d.}Wqujv{^sKpO7--dvF{.#aU7<RA++?*vHr9A9=vSC' );
define( 'SECURE_AUTH_KEY',  'I(<_lc.-[}R)BD/[)|?0e:+V-zWQuGN78aot Qu<QfNdB=WD8yU2DH+^4B(D7n&/' );
define( 'LOGGED_IN_KEY',    'c_l@)b_gV~CpEo4CQY_@A&g7[GIlT%zUtJ |jail{S9&^H1MghuLYd4Lpu()Z[Fy' );
define( 'NONCE_KEY',        '*s?SGbBe9a~]`cefxgv)1ZH(@%h(SqsdIjD6[SK{U94[mMN,{#fc|( 4`9cO@#u/' );
define( 'AUTH_SALT',        'cN^5NoVmN)h4O ]<ZQt`PYN?  Wk#2BlxAg74b=g+F*4?rq*n^445qN{1QX.KiLU' );
define( 'SECURE_AUTH_SALT', '0C`e4kbaE6nu3;mk8Ck_1uJo#9pAsRuQ8 &YM^nLYGi)^;]lE:TE`JmW4uI29L>Q' );
define( 'LOGGED_IN_SALT',   'NL]}^2=d-8#RMMqKiv28XemR<X]uYVU[h{q}=MH3q3Mh5PFcrRknvJr^kA@I!;!1' );
define( 'NONCE_SALT',       '7v_O@FD2R<vjy8OG$7$xk]@O KH,w&r^R^gKGq<K&{F.,x6u]XAjtN,6[@|H!B6?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
