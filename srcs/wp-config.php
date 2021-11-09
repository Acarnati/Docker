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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'J`TySKeQX.uysT@bnP!LGj[Lx$*fbNOO+a!Ktj&I1H[~ePdETsCKpbnR)X$&6$LG' );
define( 'SECURE_AUTH_KEY',  'EP(,.nGFJ?H7J+*q<.*uH8Z4Arx/z(qjZshvjqh!=ri.>iEIBte8Mn jc8Cwn.#E' );
define( 'LOGGED_IN_KEY',    ' ],CK_?LKwxUa~ahczl(T}x<<+v/NH)v[4b}W9P~$E-iQIxJN?+-sa)!([UX}>Zc' );
define( 'NONCE_KEY',        'r)^*ER;3lL-*%dz3YK9:g~ Ms-+4ii{<dR1p`J+ZU/@uPKa|B*Q2F<O<## =[!CX' );
define( 'AUTH_SALT',        '_ HdHLi[v!B|F/cq7dJDS]Ol*_Cg2!w?Auhze+)S|B,+`+gL/a)UNRY/][AD5xdg' );
define( 'SECURE_AUTH_SALT', '<MD}s!yo-MjDjSnU5UJTwdJPmC7/@+<p_ULB~]|:1:FPT8Q((foq.v_Dz-/,Km5/' );
define( 'LOGGED_IN_SALT',   'KexZzW~7!r.S0kjy!{m(4x!E|t&dcz*)xJ 5GrBE{M,@`q+N])_7V:AWsc;Ak*Zx' );
define( 'NONCE_SALT',       '4i]9W,M,*d## 55fq*Peos_`eTtQpO*^.-LjxP-L#{vTx&2yQo.FG<,}*se#y/^6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
