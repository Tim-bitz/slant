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
define( 'DB_NAME', 'slant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u89idBF1v+#2G6!bR^dhXqBZ}<Rm*CEe{0LMn]6xp<ghyje =g+Oy.q?{*w?DORZ' );
define( 'SECURE_AUTH_KEY',  's=?QRLbBO~T$J&~?&ef2B<&yH1/R6{<z1>0NAi*A*O2~h?q~gZ^^D=mR^*|j&;de' );
define( 'LOGGED_IN_KEY',    'c&Jtr20+9kwZ#9(6TCpCAOU{<U@`[.I_YE{5HNC#57zKChV6NjjrUyouCOgHZdGG' );
define( 'NONCE_KEY',        '-q?<*R1D^.0-;JZ8#L&{0JL7xdTHiNE*4]fX?nf.-lnkiscL.5c~LN:weC:fsHP&' );
define( 'AUTH_SALT',        'As,*W$A)k?]uUo W~HU%7hd(V# Ye,)W+2v[R8Cu4aH%Ik*PBdw|/net]^f?j>Um' );
define( 'SECURE_AUTH_SALT', 'EYLkiYp,CcFvD4cu7k+O.U6@9-X_[($!u) H;QR<Q(GYS^&^|+;./W}d&EeUG8c}' );
define( 'LOGGED_IN_SALT',   'W4@KfN#G2,bI_-Hkrqdpru04:i%|w<8e2]u9[<c=o5C{L45A%smAa={Ve$KfFieh' );
define( 'NONCE_SALT',       '4+3O1/sc,:K_#RedpU/~1chr/P$BSa0*bVxc0*VS=a}DQMluT>@R7#lwI Z@:o!/' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
